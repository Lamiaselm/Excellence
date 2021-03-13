<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liste Ens</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link   href="../../Assets/Excellence-style.css" rel="stylesheet" type="text/css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <body>
    <nav class="navbar navbar-light bg-light" style="padding:15px;position: sticky;z-index: 1; top:0;margin-bottom:90px;height: 65px;">
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

require_once __DIR__."../../../Controllers/EnseignantController.php";
require_once __DIR__."/menu.php";
require_once __DIR__."/footer.php";

$table=new ListeEns();
$table->getListEnsBycycle($_GET['id_cycle']);
class ListeEns {

    private $ens;
    

    public function __construct() {
       return $this->ens= new EnseignantController();
    } 
    
   public function getListEnsBycycle($id_cycle){
    
    $menu=new menu();
    $menu->getMenu();
?>


<body>

<div class="container" style="margin-top:70px;">
<table class='table table-bordered'>
        <thead class='thead-dark' style='color:white;background-color:#494848;'>
          <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Heure de récéption</th>
          </tr>
        </thead>
        <tbody>
<?php 

        $result=$this->ens->getEnsByCycle($id_cycle);
        foreach($result as $row )
        {
            echo "
    
      
         <tr>
            <td>".$row['nom']."</td>
            <td>".$row['prenom']."</td>
            <td>".$row['email']."</td>
            <td>".$row['heure_reception']."</td>
          </tr>";
        }
       
        ?>
          
        </tbody>
      </table>
    </div>
</body>

  <?php
  
}
    
    }
    
  ?>
                   
                   
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
</html>