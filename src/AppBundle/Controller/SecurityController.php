<?php

namespace AppBundle\Controller;

use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


/**
 * Computer controller.
 *
 */
class SecurityController extends Controller
{
    /**
     * @Route("/login", name="security_login")
     * @Template()
     */
    public function loginAction()
    {
        if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('computer');
        }

        $authenticationUtils = $this->get('security.authentication_utils');

        return $this->render('AppBundle:Security:login.html.twig', array(
            'last_username' => $authenticationUtils->getLastUsername(),
            'error'         => $authenticationUtils->getLastAuthenticationError(),
        ));
    }

    /**
     * @Route("/login/check", name="security_login_check")
     * @throws \RuntimeException
     */
    public function checkAction()
    {
        Throw new \RuntimeException('Failed to log - Code Exception ');

    }

    /**
     * @Route("/logout", name="security_logout")
     */
    public function logoutAction()
    {

    }


}