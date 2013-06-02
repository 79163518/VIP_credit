<?php

namespace VipCredit\AdminBundle\Helper;

class Pager
{
    protected $request;
    protected $pageSize;

    public function __construct()
    {
        $this->pageSize = 10;
    }

    public function setRequest($request)
    {
        $this->request = $request;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    public function composePagerBarElement()
    {
        $currentPage = $this->request->query->get('page');
        echo 'helper here';exit;
    }

    public function getCurrentPage()
    {
    }
}
