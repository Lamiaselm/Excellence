<?php
require_once __DIR__."../../../Controllers/ArticleController.php";

class ArticleListe {

    private $article;
    

    public function __construct(){
        $this->article= new ArticleController();
       

    }
    public function getArticleListe()
    {
        echo "
             <div class='row' style='margin-top:40px;'>
             <div class='col-md-10'style='margin:0 auto;text-align:center;'>";
        $result=$this->article->getArticle();
        foreach($result as $row)
        {
          echo "
          <div class='card-article'>
                        <img src=".$row['image']." alt='icon' style='width: 50px;margin-bottom: 15px;'>
                        <h3>".$row['titre']."</h3>
                        <p>".$row['description']."</p>
                        <a target='_blank' href='./ArticleSuite.php?id_article=".$row['ID_article']." '>Afficher la suite</a>           </div>
               ";
        }
        echo "    </div>
                  </div>
                  ";
    }
    public function getArticleListeByCycle($id_cycle)
    {
        echo "
             <div class='row' style='margin-top:40px;'>
             <div class='col-md-10'style='margin:0 auto;text-align:center;'>";
        $result2=$this->article->getArticleByCycle($id_cycle);
        foreach($result2 as $row2)
        {
          echo "
          <div class='card-article'>
                        <img src=".$row2['image']." alt='icon' style='width: 50px;margin-bottom: 15px;'>
                        <h3>".$row2['titre']."</h3>
                        <p>".$row2['description']."</p>
                        <a target='_blank' href='./ArticleSuite.php?id_article=".$row['ID_article']." '>Afficher la suite</a>
           </div>
               ";
        }
        echo "    </div>
                  </div>
                  ";
    }
}
?>

                   
                   
                   
