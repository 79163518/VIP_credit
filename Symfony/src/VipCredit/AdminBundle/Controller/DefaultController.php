<?php

namespace VipCredit\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $subMenu = $this->container->getParameter('admin_submenu');

        array_walk_recursive($subMenu, array($this, 'generateUrlForSubMenu'));

        return $this->render('VipCreditAdminBundle:Default:home.html.twig',
            array(
                'last_username' => $this->get('request')->getSession()->get(SecurityContext::LAST_USERNAME),
                'page_charset'  => 'UTF-8',
                'page_title'    => 'Vip Credit',
                'js_root'       => 'http://www.phpwind.test/res/dev',
                'js_version'    => '0.0.1',
                'js_ajax_token' => 'ddddddddd',
                'submenu'       => $subMenu,
            ));
    }

    public function welcomeAction()
    {
        return $this->render('VipCreditAdminBundle:Default:welcome.html.twig');
    }

    public function customAction()
    {
        return $this->render('VipCreditAdminBundle:Default:custom.html.twig');
    }

    public function loginAction()
    {
        if ($this->get('request')->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $this->get('request')->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $this->get('request')->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
        }

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

    private function generateUrlForSubMenu(&$val, $key)
    {
        if ($key == 'url') {
            $val = $this->generateUrl($val,array());
        }
    }
}
