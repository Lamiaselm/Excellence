<?php
session_start();
require_once __DIR__."/GetEmploi.php";
require_once __DIR__."/menu.php";
require_once __DIR__."/footer.php";
$table=new GetEmploi();

$id_ens=$_SESSION['ID_user'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Emploi du temps</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link   href="../../Assets/Excellence-style.css" rel="stylesheet" type="text/css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <body>
    <nav class="navbar navbar-light bg-light" style="padding:15px;position: sticky;z-index: 1; top:0;margin-bottom:50px;height: 65px;">
   <div class="row" style="width:100%;"> 
   <div class="col-md-10">
   <img src="../../Assets/images/logo.png" width="180px" height="23px" class="d-inline-block align-top" alt="">
   </div>
   <div class="col-md-2" style="float:right;padding-left:100px;"> 
   <a href="#"><img src="../../Assets/images/instagram.svg" alt="instagram" width="22px" style="margin-right:7px;"></a>
   <a href="#"><img src="../../Assets/images/facebook-circular-logo.svg" alt="instagram" width="22px"style="margin-right:7px;"></a>
   <a href="#"><img src="../../Assets/images/twitter-social-logotype.svg" alt="instagram" width="22px"></a>

   </div>
   </div>
</nav>

<?php
if ((isset($_GET['id_classe']))&&(isset($_GET['classe'])) )
{   $menu=new menu();
    $menu->getMenu();
    $id_classe=$_GET['id_classe'];
    $classe=$_GET['classe'];
    $table->getEmploi($id_classe,$classe);
    $footer=new footer();
    $footer->getFooter();
}

else {
    $menu=new menu();
    $menu->getMenu();
    $table->getEmploiEns($id_ens);
    $footer=new footer();
    $footer->getFooter();
}

?>
</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
</html>