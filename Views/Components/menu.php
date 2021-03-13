<?php 

Class menu 
{
    public function getMenu()
    {



?>


<div class="menu" id="nav">
<ul>
      <li><a href="http://127.0.0.1/Excellence/Accueil.php">Accueil </a></li>

    <li> <a href="#">Présentation de l'Eccole</a>
        <ul class="list-item">
      
        <li><a href="http://127.0.0.1/Excellence/Presentation.php">Excellence </a></li>
            <li><a href="http://127.0.0.1/Excellence/Cycle.php?cycle=1">Primaire </a></li>
            <li><a href="http://127.0.0.1/Excellence/Cycle.php?cycle=2">Moyen </a></li>
            <li><a href="http://127.0.0.1/Excellence/Cycle.php?cycle=3">Secondaire </a></li>
        </ul>
    </li>
    <li><a href="#">Espaces Ecole</a>
        <ul class="list-item">
            <li><a href="http://127.0.0.1/Excellence/Views/ProfilePage.php">Espace Eleve</a></li>
            <li><a href="http://127.0.0.1/Excellence/Views/ProfilePage.php">Esoace Parent</a></li>
            
        </ul>
    </li>
    <li><a href="http://127.0.0.1/Excellence/ContactPage.php">Contact</a>
       
    </li>
</ul>

</div>
<?php
    }
}
?>