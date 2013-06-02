<?php
namespace VipCredit\AdminBundle\Model;

class Base
{
    const ALIAS = 'ALIAS';

    public function __construct(DbManager $dbManager, $host, $tableName)
    {
        $this->dbal = $dbManager->getDb($host);
        $this->tableName = $tableName;
    }

    public function createQueryBuilder()
    {
        $queryBuilder = $this->dbal->createQueryBuilder()
            ->from($this->tableName, self::ALIAS);

        return $queryBuilder;
    }

    /**
     * update 
     * 
     * @param array $data 
     * @param array $where 
     * @access public
     * 
     * @return integer The number of affected rows
     */
    public function update($data, $where)
    {
        $gmtInfo = array(
            'gmt_update' => date('Y-m-d H:i:s'),
        );

        return $this->dbal->update($this->tableName, array_merge($data, $gmtInfo), $where);
    }

    /**
     * insert 
     * 
     * @param mixed $data 
     * @access public
     * 
     * @return integer The number of affected rows
     */
    public function insert($data)
    {
        $gmtInfo = array(
            'gmt_create' => date('Y-m-d H:i:s'),
            'gmt_update' => date('Y-m-d H:i:s'),
        );

        return $this->dbal->insert($this->tableName, array_merge($data, $gmtInfo));
    }
}
