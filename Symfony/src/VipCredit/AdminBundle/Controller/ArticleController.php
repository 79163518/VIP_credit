<?php

namespace VipCredit\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends Controller
{
    public function categoryAction()
    {
    }

    public function categoryAddAction()
    {
    }

    public function categoryUpdateAction()
    {
    }

    public function categoryDeleteAction()
    {
    }

    public function listAction()
    {
        $articles = $this->get('model_vi_article')->getAllArticles();

        return $this->render('VipCreditAdminBundle:Article:list.html.twig', array(
            'searchTitle' => 'searchTitle',
            'categories' => array(
                array(
                    'id' => 1,
                    'name' => '分类1',
                    'selected' => false,
                ),
                array(
                    'id' => 2,
                    'name' => '分类2',
                    'selected' => true,
                ),
            ),
            'articles' => array(
                array(
                    'id' => 1,
                    'title' => 'title1',
                ),
                array(
                    'id' => 2,
                    'title' => 'title1',
                ),
                array(
                    'id' => 3,
                    'title' => 'title1',
                ),
                array(
                    'id' => 4,
                    'title' => 'title1',
                ),
                array(
                    'id' => 5,
                    'title' => 'title1',
                ),
            )
        ));
    }

    public function updateAction()
    {
    }

    public function addAction()
    {
    }

    public function deleteAction()
    {
    }

    public function searchAction()
    {
    }
}
