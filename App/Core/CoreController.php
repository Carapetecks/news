<?php


namespace Core;


class CoreController
{
 public function index()
 {
     include "Template/eheTeNandayo.twig";
     echo 'index';
 }
 public function viewSingleArticle()
 {
     include "Template/page.twig";
     echo 'PageView';
 }
 public function view($id)
 {
     echo "<h1> page № $id </h1>";
 }

}