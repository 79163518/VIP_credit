<?php

namespace VipCredit\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VipCreditAdminBundle:Default:index.html.twig', array('name' => $name));
    }

    public function loginAction()
    {
        if ($this->get('request')->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $this->get('request')->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $this->get('request')->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
        }
        //$request = $this->getRequest();
        //$session = $request->getSession();

        //// get the login error if there is one
        //if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            //$error = $request->attributes->get(
                //SecurityContext::AUTHENTICATION_ERROR
            //);
        //} else {
            //var_dump($error->getMessage());exit;
            //$error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            //$session->remove(SecurityContext::AUTHENTICATION_ERROR);
        //}

        return $this->render(
            'VipCreditAdminBundle:Default:login.html.twig',
            array(
                'last_username' => $this->get('request')->getSession()->get(SecurityContext::LAST_USERNAME),
                'error'         => $error,
                'page_charset'  => 'UTF-8',
                'page_title'    => 'Vip Credit',
                'js_root'       => 'http://www.phpwind.test/res/dev',
                'js_version'    => '0.0.1',
                'js_ajax_token' => 'ddddddddd',
            )
        );
    }

    public function logoutAction()
    {
    }
}
