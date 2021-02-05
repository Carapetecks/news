<?php


namespace App;


use Core\CoreView;

class SiteView extends CoreView
{
    public function showAllArticles($article_list, $category_list)
    {
        echo $this->twig->render ('eheTeNandayo.twig',['articles'=>$article_list]);
    }
    public function singleArticle($article_list, $category_list)
    {
        echo $this->twig->render('page.twig', ['articles'=>$article_list]);
    }
}