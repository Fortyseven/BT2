<?php

    namespace SiteBundle\Controller;

    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Response;

    class DefaultController extends Controller
    {
        /**
         * @Route("/", name="homepage")
         * @Template()
         */
        public function indexAction()
        {
            return [];
        }

        /**
         * @Route("/about", name="about")
         * @Template()
         */
        public function aboutAction()
        {
            return [];
        }
    }
