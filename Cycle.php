<?php 
$id_cycle=$_GET['cycle'];
include ('Header.html');
require_once __DIR__."/Views/Components/menu.php";
require_once __DIR__."/Views/Components/footer.php";
require_once __DIR__."/Views/Components/Diaporama.php";
require_once __DIR__."/Views/Components/CycleCards.php";


?>

<body>
    <!-- Image and text -->
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
    $diapo=new Diaporama();
    $diapo->getDiapo();
    $menu=new menu();
    $menu->getMenu();
    $cards= new CycleCards();
    $cards->getCards($id_cycle);
    $footer=new footer();
    $footer->getFooter();
 
 
?>
</body>


<?php 

include ('Scripts.html');
?>