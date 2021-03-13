<title>Article</title>
<nav class="navbar navbar-light bg-light" style="padding:15px;position: sticky;z-index: 1; top:0;height: 65px;">
   <div class="row" style="width:100%;"> 
   <div class="col-md-10">
   <img src="Assets/images/logo.png" width="180px" height="23px" class="d-inline-block align-top" alt="">
   </div>
   <div class="col-md-2" style="float:right;padding-left:100px;"> 
   <a href="#"><img src="Assets/images/instagram.svg" alt="instagram" width="22px" style="margin-right:7px;"></a>
   <a href="#"><img src="Assets/images/facebook-circular-logo.svg" alt="instagram" width="22px"style="margin-right:7px;"></a>
   <a href="#"><img src="Assets/images/twitter-social-logotype.svg" alt="instagram" width="22px"></a>

   </div>
   </div>
</nav>
<?php
include ('Header.html');
require_once __DIR__."/Views/Components/menu.php";
require_once __DIR__."/Views/Components/footer.php";
require_once __DIR__."/Controllers/ArticleController.php";

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
        $menu=new menu();
        $menu->getMenu();
        echo "
             <div class='row' style='margin-top:40px;'>
             <div class='col-md-8'style='margin:0 auto;text-align:center;'>";
        $result=$this->article->getArticleByID($id_article);
        foreach($result as $row)
        {
          echo "
          <div class='card-article' style='width:650px;height:500px;    padding: 40px 43px;'>
                        <img src=".$row['image']." alt='icon' style='width: 50px;margin-bottom: 15px;'>
                        <h2>".$row['titre']."</h2>
                        <p style='font-size:17px; '>".$row['description']."</p>
                       
           </div>
               ";
        }
        echo "    </div>
                  </div>
                  ";
                  $footer=new footer();
                  $footer->getFooter();
    }

}
include ('Scripts.html');

?>

                   
                   
                   
