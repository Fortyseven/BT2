<?php

    namespace SiteBundle\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

    class AppViewController extends Controller
    {
        /**
         * @Route("/app", name="app_default")
         */
        public function defaultAction()
        {
            // dump everything

            //return new Response("App")
        }

        /**
         * @Route("/games", name="app_default")
         */
        public function gameDefaultAction()
        {
            // dump all the games
        }

        /**
         * @Route("/mobile", name="app_default")
         */
        public function mobileDefaultAction()
        {
            // dump all the games
        }


        /**
         * @Route("/other", name="app_default")
         */
        public function otherDefaultAction()
        {
            // dump everything else
        }

        /**
         * @Route("/view/{appid}", name="app_view")
         */
        public function viewAction( $appid )
        {

        }
    }
