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
     <h2>Ajouter un article</h2>
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
    <label for="exampleFormControlSelect1">Type de l'utilisateur</label>
    <select class="form-control" name="type">
      <option value="">Choisir</option>
      <option value="2">Enseignant</option>
      <option value="3">Elève</option>
      <option value="4">Parent</option>
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


  <div class="form-group">
    <label for="exampleFormControlInput1">Ajouter</label>
    <input type="submit" class="form-control" name="ajouter"value="ajouter">
  </div>
  

</form>
<?php 
    require_once ('../Controllers/UserController.php');
    $userCTRL = new UserController();
    if(isset($_POST["ajouter"])){
      
     
        $userCTRL->register($_POST['nom'],$_POST['prenom'],$_POST['user_name'],$_POST['email'],$_POST['mdp'],$_POST['mdp_confirmer'],$_POST['type'],$_POST['adresse'],$_POST['tel1'],$_POST['tel2'],$_POST['tel3']);
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
