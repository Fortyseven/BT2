<?php

    namespace SiteBundle\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\Routing\Annotation\Route;

    class SecurityControllerController extends Controller
    {
        /**
         * @Route("/login", name="login_route")
         */
        public function loginAction( Request $request )
        {
            $authenticationUtils = $this->get( 'security.authentication_utils' );

            $error        = $authenticationUtils->getLastAuthenticationError();
            $lastUsername = $authenticationUtils->getLastUsername();

            return $this->render(
                    "SiteBundle:Security:login.html.twig",
                    [
                            'last_username' => $lastUsername,
                            'error'         => $error
                    ]
            );
        }

        /**
         * @Route("/login_check", name="login_check")
         */

        public function loginCheckAction()
        {
        }

        /**
         * @Route("/logout", name="logout");
         */

        public function logoutAction()
        {
        }
    }
