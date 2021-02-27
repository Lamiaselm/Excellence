<?php
require_once('../Models/Article.php');
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
        if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
      } 
        Article::addArticle($titre,$folder,$descrip,$concerne);
    }

}

?>