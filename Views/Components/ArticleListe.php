<?php
require_once ('././Controllers/ArticleController.php');

class ArticleListe {

    private $article;
    

    public function __construct(){
        $this->article= new ArticleController();
       

    }
    public function getArticleListe()
    {
        echo "<div class='container'style='margin-top: 30px;'>
             <div class='row'>
             <div class='col-md-10 container-categ'>";
        $result=$this->article->getArticle();
        foreach($result as $row)
        {
          echo "
          <div class='card-article'>
                        <img src=".$row['image']." alt='icon'>
                        <h3>".$row['titre']."</h3>
                        <p>".$row['description']."</p>
                        <a href='#'>Afficher la suite</a>
           </div>
               ";
        }
        echo "    </div>
                  </div>
                  </div>";
    }
}
?>

                   
                   
                   
