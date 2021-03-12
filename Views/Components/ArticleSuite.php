<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link   href="../../Assets/Excellence-style.css" rel="stylesheet" type="text/css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<?php
require_once __DIR__."../../../Controllers/ArticleController.php";
$id_article=$_GET['id_article'];
$suite= new ArticleSuite();
$suite->getArticleSuite($id_article);
class ArticleSuite{

    private $article;
    

    public function __construct(){
        $this->article= new ArticleController();
       

    }
    public function getArticleSuite($id_article)
    {
        echo "
             <div class='row' style='margin-top:40px;'>
             <div class='col-md-8'style='margin:0 auto;text-align:center;'>";
        $result=$this->article->getArticleByID($id_article);
        foreach($result as $row)
        {
          echo "
          <div class='card-article' style='width:700px;height:500px; font-size:17px;    padding: 40px 43px;'>
                        <img src=".$row['image']." alt='icon' style='width: 50px;margin-bottom: 15px;'>
                        <h3>".$row['titre']."</h3>
                        <p>".$row['description']."</p>
                       
           </div>
               ";
        }
        echo "    </div>
                  </div>
                  ";
    }

}
?>
                   
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
</html>

                   
                   
                   
