<?php 

Class menu 
{
    public function getMenu()
    {



?>


<div class="menu" id="nav">
<ul>
    <li><a href="Accueil.php">Accueil</a>
    </li>

    <li><a href="#">Présentation de l'école</a>
        <ul class="list-item">
            <li><a href="././Presentation.php">Excellence</a></li>
            <li><a href="././Cycle.php?cycle=1">Primaire </a></li>
            <li><a href="././Cycle.php?cycle=2">Moyen </a></li>
            <li><a href="././Cycle.php?cycle=3">Secondaire </a></li>
        </ul>
    </li>
    <li><a href="#">Espaces Ecole</a>
        <ul class="list-item">
            <li>Espace Eleve</li>
            <li>Esoace Parent</li>
            
        </ul>
    </li>
    <li><a href="#">Contact</a>
       
    </li>
</ul>

</div>
<?php
    }
}
?>