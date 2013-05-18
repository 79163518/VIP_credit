<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('vip_credit_admin_homepage', new Route('/hello/{name}', array(
    '_controller' => 'VipCreditAdminBundle:Default:index',
)));

return $collection;
