<?php

    namespace SiteBundle\Controller;

    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
    use SiteBundle\Entity\AppEntry;
    use SiteBundle\Form\AppEntryType;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;

    /**
     * AppEntry controller.
     *
     * @Route("/admin/apps")
     */
    class AdminAppsController extends Controller
    {

        /**
         * Lists all AppEntry entities.
         *
         * @Route("/", name="admin_apps")
         * @Method("GET")
         * @Template()
         */
        public function indexAction()
        {
            $em = $this->getDoctrine()->getManager();

            $entities = $em->getRepository( 'SiteBundle:AppEntry' )->findAll();

            return array( 'entities' => $entities, );
        }

        /**
         * Creates a new AppEntry entity.
         *
         * @Route("/", name="appentry_create")
         * @Method("POST")
         * @Template("SiteBundle:AppEntry:new.html.twig")
         */
        public function createAction( Request $request )
        {
            $entity = new AppEntry();
            $form   = $this->createCreateForm( $entity );
            $form->handleRequest( $request );

            if ( $form->isValid() ) {
                $em = $this->getDoctrine()->getManager();
                $em->persist( $entity );
                $em->flush();

                return $this->redirect( $this->generateUrl( 'admin_apps_view', [ 'id' => $entity->getId() ] ) );
            }

            return array( 'entity' => $entity, 'form' => $form->createView(), );
        }

        /**
         * Creates a form to create a AppEntry entity.
         *
         * @param AppEntry $entity The entity
         *
         * @return \Symfony\Component\Form\Form The form
         */
        private function createCreateForm( AppEntry $entity )
        {
            $form = $this->createForm( new AppEntryType(),
                                       $entity,
                                       [ 'action' => $this->generateUrl( 'admin_apps_new' ),
                                         'method' => 'POST', ] );

            $form->add( 'submit', 'submit', [ 'label' => 'Create' ] );

            return $form;
        }

        /**
         * Displays a form to create a new AppEntry entity.
         *
         * @Route("/new", name="admin_apps_new")
         * @Method("GET")
         * @Template()
         */
        public function newAction()
        {
            $entity = new AppEntry();
            $form   = $this->createCreateForm( $entity );

            return array( 'entity' => $entity, 'form' => $form->createView(), );
        }

        /**
         * Finds and displays a AppEntry entity.
         *
         * @Route("/{id}", name="admin_apps_view")
         * @Method("GET")
         * @Template()
         */
        public function showAction( $id )
        {
            $em = $this->getDoctrine()->getManager();

            $entity = $em->getRepository( 'SiteBundle:AppEntry' )->find( $id );

            if ( !$entity ) {
                throw $this->createNotFoundException( 'Unable to find AppEntry entity.' );
            }

            $deleteForm = $this->createDeleteForm( $id );

            return array( 'entity' => $entity, 'delete_form' => $deleteForm->createView(), );
        }

        /**
         * Displays a form to edit an existing AppEntry entity.
         *
         * @Route("/{id}/edit", name="admin_apps_edit")
         * @Method("GET")
         * @Template()
         */
        public function editAction( $id )
        {
            $em = $this->getDoctrine()->getManager();

            $entity = $em->getRepository( 'SiteBundle:AppEntry' )->find( $id );

            if ( !$entity ) {
                throw $this->createNotFoundException( 'Unable to find AppEntry entity.' );
            }

            $editForm   = $this->createEditForm( $entity );
            $deleteForm = $this->createDeleteForm( $id );

            return array( 'entity'      => $entity, 'edit_form' => $editForm->createView(),
                          'delete_form' => $deleteForm->createView(), );
        }

        /**
         * Creates a form to edit a AppEntry entity.
         *
         * @param AppEntry $entity The entity
         *
         * @return \Symfony\Component\Form\Form The form
         */
        private function createEditForm( AppEntry $entity )
        {
            $form = $this->createForm( new AppEntryType(),
                                       $entity,
                                       [ 'action' => $this->generateUrl( 'admin_apps_update', [ 'id' => $entity->getId() ] ),
                                         'method' => 'PUT', ] );

            $form->add( 'submit', 'submit', array( 'label' => 'Update' ) );

            return $form;
        }

        /**
         * Edits an existing AppEntry entity.
         *
         * @Route("/{id}", name="admin_apps_update")
         * @Method("PUT")
         * @Template("SiteBundle:AppEntry:edit.html.twig")
         */
        public function updateAction( Request $request, $id )
        {
            $em = $this->getDoctrine()->getManager();

            $entity = $em->getRepository( 'SiteBundle:AppEntry' )->find( $id );

            if ( !$entity ) {
                throw $this->createNotFoundException( 'Unable to find AppEntry entity.' );
            }

            $deleteForm = $this->createDeleteForm( $id );
            $editForm   = $this->createEditForm( $entity );
            $editForm->handleRequest( $request );

            if ( $editForm->isValid() ) {
                $em->flush();

                return $this->redirect( $this->generateUrl( 'admin_apps_edit',
                                                            array( 'id' => $id ) ) );
            }

            return array( 'entity'      => $entity, 'edit_form' => $editForm->createView(),
                          'delete_form' => $deleteForm->createView(), );
        }

        /**
         * Deletes a AppEntry entity.
         *
         * @Route("/{id}", name="admin_apps_delete")
         * @Method("DELETE")
         */
        public function deleteAction( Request $request, $id )
        {
            $form = $this->createDeleteForm( $id );
            $form->handleRequest( $request );

            if ( $form->isValid() ) {
                $em     = $this->getDoctrine()->getManager();
                $entity = $em->getRepository( 'SiteBundle:AppEntry' )->find( $id );

                if ( !$entity ) {
                    throw $this->createNotFoundException( 'Unable to find AppEntry entity.' );
                }

                $em->remove( $entity );
                $em->flush();
            }

            return $this->redirect( $this->generateUrl( 'admin_apps' ) );
        }

        /**
         * Creates a form to delete a AppEntry entity by id.
         *
         * @param mixed $id The entity id
         *
         * @return \Symfony\Component\Form\Form The form
         */
        private function createDeleteForm( $id )
        {
            return $this->createFormBuilder()
                        ->setAction( $this->generateUrl( 'admin_apps_delete', [ 'id' => $id ] ) )
                        ->setMethod( 'DELETE' )
                        ->add( 'submit',
                               'submit',
                               [ 'label' => 'Delete' ] )
                        ->getForm();
        }
    }
