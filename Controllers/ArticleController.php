<?php
require_once __DIR__."/../Models/Article.php";
class ArticleController
{
    private $article;
    public function __construct(){
        $this->article=new Article();

    }
    public function addArticle($titre,$descrip,$concerne)
    {
       /* $concerne="";
        if (!empty($_POST['choix']))
        {
            foreach ($_POST['choix'] as $value)
            {
                $concerne=$concerne.$value;
            }
        }*/
        $filename = $_FILES["image"]["name"]; 
        $tempname = $_FILES["image"]["tmp_name"];     
        $folder = "../Articles/".$filename; 
        $file_path="Articles/".$filename; 
        if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
      } 
     
        Article::addArticle($titre,$file_path,$descrip,$concerne);
    }
    public function getArticle()
    {
        return $this->article->getArticle();
    }
    public function getArticleNo8()
    {
        return $this->article->getArticleNo8();
    }
    public function getArticleByCycle($id_cycle)
    {
        return $this->article->getArticleByCycle($id_cycle);
    } 
    public function getArticleByID($id_article)
    {
        return $this->article->getArticleByID($id_article);
    }

}

?>