<?php


namespace App;


use Core\CoreView;

class AdminPanelController
{
    public $View;
    public $Articles;
    public $Categories;

    public function __construct()
    {
        $this->Articles = new ArticlesModel('articles');
        $this->Categories = new CategoriesModel('category');
        $this->View = new AdminPanelView();
    }

    public function dashboard()
    {
        $article_count = $this->Articles->count();
        $category_count = $this->Categories->count();
        $this->View->dashboard($article_count, $category_count);
    }
    public function articleTable()
    {
        $article_name = $this->Articles->article();
        $this->View->articleTable($article_name);
    }
    public function categoryTable()
    {
        $category_name = $this->Categories->category();
        $this->View->categoryTable($category_name);
    }
    public function login()
    {
        include "Template/admin/login.twig";
    }
}