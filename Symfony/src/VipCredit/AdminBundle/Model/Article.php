<?php
namespace VipCredit\AdminBundle\Model;

class Article extends Base
{
    public function getAllArticles()
    {
        $sql = $this->createQueryBuilder()
            ->select('*')
            ->getSql();

        $articles = $this->dbal->fetchAll($sql);

        return $articles;
    }
}
