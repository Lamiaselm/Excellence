<?php
require_once('Header.html');
require_once('../Models/ConnexionDB.php');
?>
<body style="background-color: #494848;">
<div class="container-login">
<h1 class="title">Authentification</h1>

    
    <form action="">
        <div class="form-item">
        
        <input type="email" placeholder="Votre email" name="email">
        </div>
        <div class="form-item">
       
        <input type="password" placeholder="Votre Mot de passe" name="mdp">
        </div>
        <div class="form-item">
        <input type="submit" placeholder="Votre email" name="login" value="submit">
        </div>
    </form>
   

    
    


</div>
<?php 
require_once('Scripts.html')
?>






