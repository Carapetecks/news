<?php


namespace App;


class SiteController
{
    public $Articles;
    public $Categoryes;
    public $View;
    public $PageView;

   public function __construct()
   {
       $this->Articles = new ArticlesModel('articles');
       $this->Categoryes =new CategoriesModel('category');
       $this->View = new SiteView();
   }
public function article()
{
    include "Template/admin/inc/article_table.twig";
}
   public function index()
   {
       $articles_list = $this->Articles->all();
       //$this->dbg($articles_list);
       $categories_list = $this->Categoryes->all();
       $this->View->showAllArticles($articles_list, $categories_list);
   }

   public function singleArticle($id)
   {
       $articles_list = $this->Articles->getSingleArticleById($id);
       $this->dbg($articles_list);
       $this->PageView-> singleArticle($articles_list);
   }

   public function dbg($text)
   {
        echo '<pre>';
        print_r($text);
        echo '</pre>';
   }
}