<?php


namespace App;


use Core\CoreView;

class AdminPanelView extends CoreView
{
    public function dashboard($article_count, $category_count)
    {
        echo  $this->twig->render('/admin/dashboard.twig', ['article_count'=>$article_count, 'category_count' => $category_count]);
    }
    public function articleTable($article_name, $article_full_text)
    {
        echo $this->twig->render('/admin/article_table.twig', ['article_name'=>$article_name]);
    }

}