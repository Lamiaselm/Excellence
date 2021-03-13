<?php
session_start();
if((!isset( $_SESSION['auth']))|| (empty($_SESSION['auth']))) {
     
    
     header("Location:../Views/Login.php");
     }
     else{
          require_once __DIR__."./Components/menu.php";
          require_once __DIR__."./Components/footer.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link   href="../Assets/Excellence-style.css" rel="stylesheet" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Admin page</title>
</head>
    <body>
    <nav class="navbar navbar-light bg-light" style="padding:15px;position: sticky;z-index: 1; top:0;height: 65px;">
   <div class="row" style="width:100%;"> 
   <div class="col-md-10">
   <img src="../Assets/images/logo.png" width="180px" height="23px" class="d-inline-block align-top" alt="">
   </div>
   <div class="col-md-2" style="float:right;padding-left:100px;"> 
   <a href="#"><img src="../Assets/images/instagram.svg" alt="instagram" width="22px" style="margin-right:7px;"></a>
   <a href="#"><img src="../Assets/images/facebook-circular-logo.svg" alt="instagram" width="22px"style="margin-right:7px;"></a>
   <a href="#"><img src="../Assets/images/twitter-social-logotype.svg" alt="instagram" width="22px"></a>

   </div>
   </div>
</nav>
    <?php 
    include ("./Components/Header.php");
    $menu=new menu();
    $menu->getMenu();
    ?>
    <div class="container"style="margin-top: 90px;">
         <div class="row">
              <div class="col-md-10 container-categ">
                   <a href="ArticlePage.php">
                   <div class="card-admin">
                        <img src="../Assets/images/application.png" alt="icon">
                        <h2>Gestion des articles</h2>
                        
                   </div>
                   </a>
                   <a href="PresentationPage.php">
                   <div class="card-admin">
                        <img src="../Assets/images/class.png" alt="icon">
                        <h2>Gestion de la présentation de l’école. </h2>
                   </div>
                   </a>
                   <a href="EmploiPage.php">
                   <div class="card-admin">
                        <img src="../Assets/images/schedule.svg" alt="icon">
                        <h2>Gestion des emplois du temps</h2>
                   </div>
                   </a>
                   <a href="">
                   <div class="card-admin">
                        <img src="../Assets/images/education.svg" alt="icon">
                        <h2>Gestion des enseignants</h2>
                   </div>
                   </a>
    </div>
    </div>
    <div class="row">
              <div class="col-md-10 container-categ">
              <a href="RegisterPage.php">
                   <div class="card-admin">
                        <img src="../Assets/images/user.png" alt="icon">
                        <h2>Gestion des utilisateurs</h2>
                   </div>
                   </a>
                   <a href="RepasPage.php">
                   <div class="card-admin">
                        <img src="../Assets/images/application.png" alt="icon">
                        <h2>Gestion de la restauration</h2>
                   </div>
                   </a>
                   <a href="AddContact.php">
                   <div class="card-admin">
                        <img src="../Assets/images/contact.png" alt="icon">
                        <h2>Gestion de la page contact</h2>
                   </div>
                   </a>
                   <a href="DiaporamaImagePage.php">
                   <div class="card-admin">
                        <img src="../Assets/images/settings.png" alt="icon">
                        <h2>Catégorie paramètres</h2>
                   </div>
                    </a>
              </div>
         </div>
    </div> 
    <?php 
   
   $footer=new footer();
   $footer->getFooter();
    ?>
    </body>
<!-- SCRIPTS-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>

</script>
</body>
</html>

<?php 
    

     }
    
?>




