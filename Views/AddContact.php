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
    <title>Contact page</title>
</head>
    <body style="background-color: #494848;">
    
     <div class="article-container">
     <h2>Ajouter contact pour Excellence</h2>
     <form method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlInput1">Email</label>
    <input type="text" class="form-control" name="email" placeholder="titre">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Adresse</label>
    <input type="text" class="form-control" name="adr">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Numéro de téléphone </label>
    <input type="text" class="form-control" name="tel">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Numéro de fax</label>
    <input type="text" class="form-control" name="fax">
  </div>
 
  <div class="form-group">
    <label for="exampleFormControlInput1">Ajouter</label>
    <input type="submit" class="form-control" name="ajouter"value="ajouter">
  </div>
  

</form>
<?php 
    require_once __DIR__."/../Controllers/ContactController.php";
    
    $contactCTRL = new ContactController();
    if(isset($_POST["ajouter"])){
      
     
        $contactCTRL->addcontact($_POST['email'],$_POST['adr'],$_POST['tel'],$_POST['fax']);
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