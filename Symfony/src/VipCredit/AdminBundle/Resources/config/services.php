<?php

use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\Parameter;
use Symfony\Component\DependencyInjection\ContainerInterface;

$container->setDefinition(
    'admin_helper_pager',
    new Definition(
        'VipCredit\AdminBundle\Helper\Pager',
        array(
        )
    )
)->addMethodCall('setRequest', array(
    new Reference('request', ContainerInterface::NULL_ON_INVALID_REFERENCE, false)
));

$container->setDefinition(
    'db_mananger',
    new Definition(
        'VipCredit\AdminBundle\Model\DbManager',
        array(
            new Reference('service_container')
        )
    )
);

$container->setDefinition(
    'model_vi_article',
    new Definition(
        'VipCredit\AdminBundle\Model\Article',
        array(
            new Reference('db_mananger'),
            'vipcredit',
            'vi_article'
        )
    )
);
