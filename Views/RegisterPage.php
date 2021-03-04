<?php 

session_start();

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
    <title>Register page</title>
</head>

    <body style="background-color: #494848;">

    
     <div class="article-container" style="height:100%;">
     <h2>Ajouter un utilisateur</h2>
     <form method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlInput1">Nom de l'utilisateur</label>
    <input type="text" class="form-control" name="nom" placeholder="Nom">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Prénom de l'utilisateure</label>
    <input type="text" class="form-control" name="prenom" placeholder="Prenom">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Username</label>
    <input type="text" class="form-control" name="user_name" placeholder="Username">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Mot de passe</label>
    <input type="password" class="form-control" name="mdp" placeholder="Mot de passe">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Confirmer Mot de passe</label>
    <input type="password" class="form-control" name="mdp_confirmer" placeholder="Confirmer Mot de passe">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">date de naissance</label>
    <input type="text" class="form-control" name="date" placeholder="Date daissance">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Type de l'utilisateur</label>
    <select class="form-control" name="type" id="select">
      <option value="">Choisir</option>
      <option value="2" >Enseignant</option>
      <option value="3" >Elève</option>
      <option value="4" >Parent</option>
    </select>
  </div>
  <div class="form-group" id="classe" style="display:none;">
    <label for="exampleFormControlSelect1">Classes</label>
    <select class="form-control" name="classe">
      <option value="">Choisir</option>
      <option value="2" >2CSSIL1</option>
      <option value="3" >2CSSIL2</option>
      <option value="4" >2CSSIQ1</option>
    </select>
  </div>
  <div class="form-group" id="module" style="display:none;">
    <label for="exampleFormControlSelect1">modules</label>
    <select class="form-control" name="type">
      <option value="">Choisir</option>
      <option value="2" >Outils</option>
      <option value="3" >Web</option>
      <option value="4" >Analyse</option>
    </select>
  </div>
  <div class="form-group" id="parent" style="display:none;">
    <label for="exampleFormControlSelect1">Parents</label>
    <select class="form-control" name="type">
      <option value="">Choisir</option>
      <option value="2" >Outils</option>
      <option value="3" >Web</option>
      <option value="4" >Analyse</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Adresse</label>
    <input type="text" class="form-control" name="adresse" placeholder="Adresse">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Numéro de téléphone 1</label>
    <input type="text" class="form-control" name="tel1" placeholder="Numéro de téléphone 1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Numéro de téléphone 2</label>
    <input type="text" class="form-control" name="tel2" placeholder="Numéro de téléphone 2">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Numéro de téléphone 3</label>
    <input type="text" class="form-control" name="tel3" placeholder="Numéro de téléphone 3">
  </div>


  <div class="form-group" style="display:none;"id="submit_eleve">
    <label for="exampleFormControlInput1">Ajouter Eleve</label>
    <input type="submit" class="form-control" name="ajouter_eleve" value="ajouter eleve" >
  </div>
  <div class="form-group"style="display:none;"id="submit_ens">
    <label for="exampleFormControlInput1">Ajouter Enseignant</label>
    <input type="submit" class="form-control" name="ajouter_ens" value="ajouter enseignant">
  </div>
  <div class="form-group"style="display:none;" id="submit_parent">
    <label for="exampleFormControlInput1">Ajouter Parent</label>
    <input type="submit" class="form-control" name="ajouter_parent" value="ajouter parent">
  </div>
  

</form>
<?php 
    require_once __DIR__."/../Controllers/UserController.php";
    $userCTRL = new UserController();
    if(isset($_POST["ajouter_parent"])){
      
     
        $userCTRL->register($_POST['nom'],$_POST['prenom'],$_POST['user_name'],$_POST['email'],$_POST['mdp'],$_POST['mdp_confirmer'],$_POST['date'],$_POST['type'],$_POST['adresse'],$_POST['tel1'],$_POST['tel2'],$_POST['tel3']);
    }
    elseif(isset($_POST["ajouter_eleve"])){
      
     
      $userCTRL->register($_POST['nom'],$_POST['prenom'],$_POST['user_name'],$_POST['email'],$_POST['mdp'],$_POST['mdp_confirmer'],$_POST['date'],$_POST['type'],$_POST['adresse'],$_POST['tel1'],$_POST['tel2'],$_POST['tel3']);
  }   elseif(isset($_POST["ajouter_ens"])){
      
     
    $userCTRL->register($_POST['nom'],$_POST['prenom'],$_POST['user_name'],$_POST['email'],$_POST['mdp'],$_POST['mdp_confirmer'],$_POST['date'],$_POST['type'],$_POST['adresse'],$_POST['tel1'],$_POST['tel2'],$_POST['tel3']);
}
  
   
   
   ?>
     </div>
   
   
    

    </body>
<!-- SCRIPTS-->

<script>
  
    
  
$(document).ready(function()
{
 $("#select").change(function()
 {
  if($(this).val() == "2")
  { $("#classe").hide();
    $("#parent").hide();
    $("#parent").hide();
    $("#submit_eleve").hide();
    $("#submit_parent").hide();
    $("#module").show();
    $("#submit_ens").show();

  }
  else
 if($(this).val() == "3") {
   $("#module").hide();
   $("#submit_ens").hide();
    $("#submit_parent").hide();
   $("#classe").show();
   $("#parent").show();
   $("#submit_eleve").show();
  }
  else
 if($(this).val() == "4") {
  $("#module").hide();
  $("#classe").hide();
  $("#parent").hide();
  $("#submit_eleve").hide();
  $("#submit_ens").hide();
  $("#submit_parent").show();
  }
 });

});
</script>

</body>
</html>
