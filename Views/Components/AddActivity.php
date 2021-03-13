<?php 

session_start();
if (isset($_GET['id_eleve']))
{  
    
    header('Location: EleveProfile.php');
} else {
  
  require_once __DIR__."../../../Controllers/EleveController.php";
  require_once __DIR__."./Select.php";
  $classe_select=new Select();
  $eleveCTRL = new EleveController();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link   href="../../Assets/Excellence-style.css" rel="stylesheet" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Ajouter activité</title>
</head>
    <body style="background-color: #494848;">
    
     <div class="article-container">
     <h2>Ajouter une activité</h2>
     <form method="POST" enctype="multipart/form-data">
     <div class="form-group">
    <label for="exampleFormControlSelect1">Selectionner activité</label>
    <select class="form-control" name="choix[]" id="select" multiple="multiple">
      <option value="">Choisir</option>
      <option value="0">Nouvelle activité</option>
      <?php 
 
     $classe_select->selectActivities();
      ?>
    </select>
  </div>
  <div class="form-group" style="display:none;" id="titre">
    <label for="exampleFormControlInput1">Titre de l'activité</label>
    <input type="text" class="form-control" name="titre" placeholder="titre">
  </div>
  <div class="form-group"style="display:none;" id="descrip">
    <label for="exampleFormControlTextarea1">Description de l'activité</label>
    <textarea class="form-control" name="descrip" rows="3"></textarea>
  </div>

  <div class="form-group" style="display:none;" id="submit_new" >
    <label for="exampleFormControlInput1">Ajouter</label>
    <input type="submit" class="form-control" name="submit_new"value="ajouter">
  </div>
  <div class="form-group" style="display:none;" id="submit_modif" >
    <label for="exampleFormControlInput1">Ajouter</label>
    <input type="submit" class="form-control" name="submit_modif"value="ajouter">
  </div>
  

</form>
<?php 
  
    
    
    if(isset($_POST["submit_new"])){
      
     
        $eleveCTRL->addActivity($_POST['titre'],$_POST['descrip'],$_SESSION['ID_user']);
    }
    if(isset($_POST["submit_modif"])){
      
     
      $eleveCTRL->modifActivity($_SESSION['ID_user']);
  }
   
   
   ?>
     </div>

    </body>

<script>
  
$(document).ready(function()
{
 $("#select").change(function()
 {
  if($(this).val() == "0")
  { 
     $("#titre").show();
     $("#descrip").show();
     $("#submit_new").show();
     $("#submit_modif").hide();

  }
  else{
    $("#submit_new").hide();
     $("#submit_modif").show();
    $("#titre").hide();
     $("#descrip").hide();
  }
  
});

});

</script>
</body>
</html>
<?php
}
?>