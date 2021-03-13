<?php
require_once __DIR__."../../../Controllers/ArticleController.php";
$liste=new AllArticle();
$liste->getAllArticle();
class AllArticle {

    private $article;
    

    public function __construct(){
        $this->article= new ArticleController();
       

    }
  
}

    ?>