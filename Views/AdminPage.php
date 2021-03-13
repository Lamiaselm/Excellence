<?php
session_start();
if(!isset( $_SESSION['auth'])) {
     
    
     header("Location:../Views/Login.php");
     }
     else{

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
    <body style="background-color: #494848;">
    <?php 
    include ("./Components/Header.php");
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
                        <img src="../Assets/images/application.png" alt="icon">
                        <h2>Gestion de la présentation de l’école. </h2>
                   </div>
                   </a>
                   <a href="">
                   <div class="card-admin">
                        <img src="../Assets/images/application.png" alt="icon">
                        <h2>Gestion des emplois du temps</h2>
                   </div>
                   </a>
                   <a href="">
                   <div class="card-admin">
                        <img src="../Assets/images/application.png" alt="icon">
                        <h2>Gestion des enseignants</h2>
                   </div>
                   </a>
    </div>
    </div>
    <div class="row">
              <div class="col-md-10 container-categ">
              <a href="RegisterPage.php">
                   <div class="card-admin">
                        <img src="../Assets/images/application.png" alt="icon">
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
                        <img src="../Assets/images/application.png" alt="icon">
                        <h2>Gestion de la page contact</h2>
                   </div>
                   </a>
                   <a href="DiaporamaImagePage.php">
                   <div class="card-admin">
                        <img src="../Assets/images/application.png" alt="icon">
                        <h2>Catégorie paramètres</h2>
                   </div>
                    </a>
              </div>
         </div>
    </div> 

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




