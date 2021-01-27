<?php


namespace Core;


class CoreController
{
 public function index()
 {
     include "Template/eheTeNandayo.twig";
     echo 'index';
 }
 public function page()
 {
     echo '<h1> page </h1>';
 }
 public function view($id)
 {
     echo "<h1> page № $id </h1>";
 }
}