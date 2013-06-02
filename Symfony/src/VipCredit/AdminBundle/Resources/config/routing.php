<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('vip_credit_admin_homepage', new Route('/home', array(
    '_controller' => 'VipCreditAdminBundle:Default:index',
)));

$collection->add('vip_credit_admin_login', new Route('/login', array(
    '_controller' => 'VipCreditAdminBundle:Default:login',
)));

$collection->add('vip_credit_admin_login_check', new Route('/loginCheck'));

$collection->add('vip_credit_admin_logout', new Route('/logout', array(
    '_controller' => 'VipCreditAdminBundle:Default:logout',
)));

$collection->add('vip_credit_admin_welcome', new Route('/welcome', array(
    '_controller' => 'VipCreditAdminBundle:Default:welcome',
)));

$collection->add('vip_credit_admin_custom', new Route('/custom', array(
    '_controller' => 'VipCreditAdminBundle:Default:custom',
)));

$collection->add('vip_credit_admin_article_category', new Route('/article/category', array(
    '_controller' => 'VipCreditAdminBundle:Article:category',
)));

$collection->add('vip_credit_admin_article_category_add', new Route('/article/category/add', array(
    '_controller' => 'VipCreditAdminBundle:Article:categoryAdd',
)));

$collection->add('vip_credit_admin_article_category_update', new Route('/article/category/update', array(
    '_controller' => 'VipCreditAdminBundle:Article:categoryUpdate',
)));

$collection->add('vip_credit_admin_article_category_delete', new Route('/article/category/delete', array(
    '_controller' => 'VipCreditAdminBundle:Article:categoryDelete',
)));

$collection->add('vip_credit_admin_article_list', new Route('/article/list', array(
    '_controller' => 'VipCreditAdminBundle:Article:list',
)));

$collection->add('vip_credit_admin_article_update', new Route('/article/update', array(
    '_controller' => 'VipCreditAdminBundle:Article:update',
)));

$collection->add('vip_credit_admin_article_add', new Route('/article/add', array(
    '_controller' => 'VipCreditAdminBundle:Article:add',
)));

$collection->add('vip_credit_admin_article_delete', new Route('/article/delete', array(
    '_controller' => 'VipCreditAdminBundle:Article:delete',
)));

$collection->add('vip_credit_admin_article_search', new Route('/article/search', array(
    '_controller' => 'VipCreditAdminBundle:Article:search',
)));

return $collection;
