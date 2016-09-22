<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="dashboard")
     */
    public function indexAction(Request $request)
    {

        return $this->render('dashboard/index.html.twig');


        //return new Response("<html><body>Future dashboard!</body></html>");
        // $auth_checker = $this->get('security.authorization_checker');
        // $token = $this->get('security.token_storage')->getToken();
        // $user = $token->getUser();

        // if ($auth_checker->isGranted('ROLE_USER') == false) {
        //     //return new Response("<html><body>Login Screen</body></html>");
        //     return $this->redirectToRoute('fos_user_security_login');
        // } else {
        //     return $this->redirectToRoute('dashboard');
        // }
    }
}


//return $this->redirectToRoute('homepage');
