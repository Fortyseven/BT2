<?php

    namespace SiteBundle\Controller;

    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;

    /**
     * @Route("/apps")
     */
    class AppViewController extends Controller
    {
        /**
         * @Route("/", name="apps_index")
         * @Template("SiteBundle::apps_list.html.twig")
         */
        public function defaultAction()
        {
            // dump everything
            $dm = $this->getDoctrine()->getManager();

            return [ "entries" => $dm->getRepository( 'SiteBundle:AppEntry' )
                                     ->findAll( [ "priority" => "DESC", "releaseDate" => "DESC" ] ) ];
        }


        /**
         * @Route("/games", name="apps_games")
         * @Template("SiteBundle::apps_list.html.twig")
         */
        public function gameDefaultAction()
        {
            return [ "entries" => $this->getEntriesByType( "Game" ), "app_filter" => "Games" ];
        }

        /**
         * @Route("/web", name="apps_web")
         * @Template("SiteBundle::apps_list.html.twig")
         */
        public function webDefaultAction()
        {
            // dump all the web apps
            return [ "entries" => $this->getEntriesByType( "Web" ), "app_filter" => "Web" ];
        }

        /**
         * @Route("/mobile", name="apps_mobile")
         * @Template("SiteBundle::apps_list.html.twig")
         */
        public function mobileDefaultAction()
        {
            // dump all the mobile apps
            return [ "entries" => $this->getEntriesByType( "Mobile" ), "app_filter" => "Mobile" ];
        }


        /**
         * @Route("/other", name="apps_other")
         * @Template("SiteBundle::apps_list.html.twig")
         */
        public function otherDefaultAction()
        {
            // dump everything else
            return [ "entries" => $this->getEntriesByType( "Other" ), "app_filter" => "Other" ];
        }

        /**
         * @Route("/legacy", name="apps_legacy")
         * @Template("SiteBundle::apps_list.html.twig")
         */
        public function legacyDefaultAction()
        {
            // dump the archived shit
            return [ "entries" => $this->getEntriesByType( "Legacy" ), "app_filter" => "Legacy" ];
        }

        /**
         * @Route("/view/{appid}", name="app_view")
         */
        public function viewAction( $appid )
        {
        }


        private function getEntriesByType( $entry_type_name )
        {
            $dm = $this->getDoctrine()->getManager();

            $type = $dm->getRepository( "SiteBundle:AppEntryType" )
                       ->findBy( [ "name" => $entry_type_name ] );

            $entities = $dm->getRepository( 'SiteBundle:AppEntry' )
                           ->findBy( [ "entryType" => $type[ 0 ]->getId() ],
                                     [ "priority" => "DESC", "releaseDate" => "DESC" ] );

            return $entities;
        }
    }
