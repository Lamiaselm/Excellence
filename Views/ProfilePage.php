<?php

require_once __DIR__."../Components/EleveProfile.php";
require_once __DIR__."../Components/EnseignantProfile.php";
require_once __DIR__."../Components/ParentProfile.php";
if (isset($_GET['id_eleve']))
{   
    $eleve = new EleveProfile();
    $eleve->getInfo($_GET['id_eleve']);
}
session_start();
if(!isset($_SESSION['ID_user']))
{
     header('Location: Login.php');

}


    elseif ($_SESSION['type']==2)
    {
       $ens = new EnseignantProfile();
       $ens->getInfo($_SESSION['ID_user']);
    }
    elseif ($_SESSION['type']==3 )
    {
        $eleve = new EleveProfile();
        $eleve->getInfo($_SESSION['ID_user']);
    }
    elseif ($_SESSION['type']==4)
    {
        $parent = new ParentProfile();
        $parent->getInfo($_SESSION['ID_user']);
    }


?>