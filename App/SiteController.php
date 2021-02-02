<?php


namespace App;


class SiteController
{
    public $Articles;
    public $Categoryes;
    public $View;

   public function __construct()
   {
       $this->Articles = new AtriclesModel('articles');
       $this->Categoryes =new CategoriesModel('category');
       $this->View = new SiteView();
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
       $article = $this->Articles->getSingleArticleById($id);
       $this->dbg($article);
   }

   public function dbg($text)
   {
        echo '<pre>';
        print_r($text);
        echo '</pre>';
   }
}