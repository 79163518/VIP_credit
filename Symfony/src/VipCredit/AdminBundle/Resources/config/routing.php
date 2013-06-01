<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('vip_credit_admin_homepage', new Route('/hello/{name}', array(
    '_controller' => 'VipCreditAdminBundle:Default:index',
    'name' => 'tom',
)));

$collection->add('vip_credit_admin_login', new Route('/login', array(
    '_controller' => 'VipCreditAdminBundle:Default:login',
)));

$collection->add('vip_credit_admin_login_check', new Route('/loginCheck'));

$collection->add('vip_credit_admin_logout', new Route('/logout', array(
    '_controller' => 'VipCreditAdminBundle:Default:logout',
)));

return $collection;
