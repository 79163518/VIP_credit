<?php
namespace VipCredit\AdminBundle\Model;

class DbManager
{
    protected $container;

    public function __construct($container) 
    {
        $this->container = $container;
    }

    public function getDb($host = NULL)
    {
        if (is_null($host) || 'default' == $host) {
            $host = 'default';
            $conn = $this->container->get('doctrine.dbal.default_connection');
        } else {
            $conn = $this->container->get('doctrine.dbal.'.$host.'_connection');
        }

        return $conn;
    }
}
