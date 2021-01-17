<?php


namespace App\Core;
use Twig;

class CoreView
{
public $loader;
public $twig;
public function __construct()
{
    $this->loader=new \Twig_Loader_Filesystem(ABSPATH.'/views');
    $this->twig= new \Twig_Environment($this->loader.['autoescape'=>false]);
}
public  function index()
    {

    }
}