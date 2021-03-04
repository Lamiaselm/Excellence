<?php 
require_once __DIR__."./Components/Select.php";
session_start();
$classe_select=new Select();
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
    
     <div class="article-container">
     <h2>Ajouter une séance </h2>
     <form method="POST" enctype="multipart/form-data">
  <div class="form-group" id="classe" >
    <label for="exampleFormControlSelect1">Classes</label>
    <select class="form-control" name="classe">
    <option value=" " >Choisir classe</option>
   <?php 
 
   $classe_select->selectClasse();
  ?>
   </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Jour</label>
    <input type="text" class="form-control" name="jour" placeholder="Jour de la semaine">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Heure début </label>
    <input type="time" class="form-control" name="heure_debut" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Heure fin</label>
    <input type="time" class="form-control" name="heure_fin" >
  </div>
  <div class='form-group' id='module' >
    <label for='exampleFormControlSelect1'>Modules</label>
    <select class='form-control' name='module'>
    <option value=' ' >Choisir module</option>
    
   <?php
   $classe_select->selectModule();
  ?>
    </select>
  </div>
  <div class='form-group' id='module' >
    <label for='exampleFormControlSelect1'>Enseignant</label>
    <select class='form-control' name='ens'>
    <option value=' ' >Choisir enseignant</option>
    
   <?php
   $classe_select->selectEns();
  ?>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Ajouter</label>
    <input type="submit" class="form-control" name="ajouter"value="ajouter">
  </div>
  

</form>
<?php 
    require_once __DIR__."/../Controllers/EmploiController.php";
   
    $emploiCTRL = new EmploiController();
    if(isset($_POST["ajouter"])){
      
        
        $emploiCTRL->addEmploi($_POST['classe'],$_POST['jour'],$_POST['heure_debut'],$_POST['heure_fin'],$_POST['module'],$_POST['ens']);
    }
   
   
   ?>
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