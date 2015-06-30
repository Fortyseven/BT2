<?php

    namespace SiteBundle\Controller;

    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;

    /**
     * Class AdminController
     * @package SiteBundle\Controller
     *
     * @Route("/admin")
     */
    class AdminController extends Controller
    {
        /**
         * @Route("/")
         * @Template()
         */
        public function indexAction()
        {
            return [];
        }
    }
