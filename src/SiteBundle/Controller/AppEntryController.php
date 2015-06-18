<?php

    namespace SiteBundle\Controller;

    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
    use SiteBundle\Entity\AppEntry;
    use SiteBundle\Form\AppEntryType;

    /**
     * AppEntry controller.
     *
     * @Route("/admin/appentry")
     */
    class AppEntryController extends Controller
    {

        /**
         * Lists all AppEntry entities.
         *
         * @Route("/", name="appentry")
         * @Method("GET")
         * @Template()
         */
        public function indexAction()
        {
            $em = $this->getDoctrine()
                       ->getManager();

            $entities = $em->getRepository( 'SiteBundle:AppEntry' )
                           ->findAll();

            //SELECT app_entry.*, app_entry_type.name AS entry_type
            // FROM app_entry
            // JOIN app_entry_type ON entry_type_id = app_entry_type.id

//            $qb = $em->createQueryBuilder();
//            $qb->select('AppEntry', 'AppEntryType')
//                ->from('AppEntry', 'a')
//                ->join('a', 'entry_type_id', 'AppEntryType.id');

//            $query = $qb->getQuery();

//            $entities = $query->getResult();

            dump( $entities[ 0 ]->getLinks()
                                ->toArray() );

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
                $em = $this->getDoctrine()
                           ->getManager();
                $em->persist( $entity );
                $em->flush();

                return $this->redirect( $this->generateUrl( 'appentry_show',
                                                            array( 'id' => $entity->getId() ) ) );
            }

            return array( 'entity' => $entity,
                          'form'   => $form->createView(), );
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
                                       array( 'action' => $this->generateUrl( 'appentry_create' ),
                                              'method' => 'POST', ) );

            $form->add( 'submit', 'submit', array( 'label' => 'Create' ) );

            return $form;
        }

        /**
         * Displays a form to create a new AppEntry entity.
         *
         * @Route("/new", name="appentry_new")
         * @Method("GET")
         * @Template()
         */
        public function newAction()
        {
            $entity = new AppEntry();
            $form   = $this->createCreateForm( $entity );

            return array( 'entity' => $entity,
                          'form'   => $form->createView(), );
        }

        /**
         * Finds and displays a AppEntry entity.
         *
         * @Route("/{id}", name="appentry_show")
         * @Method("GET")
         * @Template()
         */
        public function showAction( $id )
        {
            $em = $this->getDoctrine()
                       ->getManager();

            $entity = $em->getRepository( 'SiteBundle:AppEntry' )
                         ->find( $id );

            if ( !$entity ) {
                throw $this->createNotFoundException( 'Unable to find AppEntry entity.' );
            }

            $deleteForm = $this->createDeleteForm( $id );

            return array( 'entity'      => $entity,
                          'delete_form' => $deleteForm->createView(), );
        }

        /**
         * Displays a form to edit an existing AppEntry entity.
         *
         * @Route("/{id}/edit", name="appentry_edit")
         * @Method("GET")
         * @Template()
         */
        public function editAction( $id )
        {
            $em = $this->getDoctrine()
                       ->getManager();

            $entity = $em->getRepository( 'SiteBundle:AppEntry' )
                         ->find( $id );

            if ( !$entity ) {
                throw $this->createNotFoundException( 'Unable to find AppEntry entity.' );
            }

            $editForm   = $this->createEditForm( $entity );
            $deleteForm = $this->createDeleteForm( $id );

            return array( 'entity'      => $entity,
                          'edit_form'   => $editForm->createView(),
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
                                       array( 'action' => $this->generateUrl( 'appentry_update',
                                                                              array( 'id' => $entity->getId() ) ),
                                              'method' => 'PUT', ) );

            $form->add( 'submit', 'submit', array( 'label' => 'Update' ) );

            return $form;
        }

        /**
         * Edits an existing AppEntry entity.
         *
         * @Route("/{id}", name="appentry_update")
         * @Method("PUT")
         * @Template("SiteBundle:AppEntry:edit.html.twig")
         */
        public function updateAction( Request $request, $id )
        {
            $em = $this->getDoctrine()
                       ->getManager();

            $entity = $em->getRepository( 'SiteBundle:AppEntry' )
                         ->find( $id );

            if ( !$entity ) {
                throw $this->createNotFoundException( 'Unable to find AppEntry entity.' );
            }

            $deleteForm = $this->createDeleteForm( $id );
            $editForm   = $this->createEditForm( $entity );
            $editForm->handleRequest( $request );

            if ( $editForm->isValid() ) {
                $em->flush();

                return $this->redirect( $this->generateUrl( 'appentry_edit', array( 'id' => $id ) ) );
            }

            return array( 'entity'      => $entity,
                          'edit_form'   => $editForm->createView(),
                          'delete_form' => $deleteForm->createView(), );
        }

        /**
         * Deletes a AppEntry entity.
         *
         * @Route("/{id}", name="appentry_delete")
         * @Method("DELETE")
         */
        public function deleteAction( Request $request, $id )
        {
            $form = $this->createDeleteForm( $id );
            $form->handleRequest( $request );

            if ( $form->isValid() ) {
                $em     = $this->getDoctrine()
                               ->getManager();
                $entity = $em->getRepository( 'SiteBundle:AppEntry' )
                             ->find( $id );

                if ( !$entity ) {
                    throw $this->createNotFoundException( 'Unable to find AppEntry entity.' );
                }

                $em->remove( $entity );
                $em->flush();
            }

            return $this->redirect( $this->generateUrl( 'appentry' ) );
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
                        ->setAction( $this->generateUrl( 'appentry_delete',
                                                         array( 'id' => $id ) ) )
                        ->setMethod( 'DELETE' )
                        ->add( 'submit', 'submit', array( 'label' => 'Delete' ) )
                        ->getForm();
        }
    }
