<?php
require_once __DIR__."/../Models/Enseignant.php";
class EnseignantController
{
    private $ens;
    public function __construct(){
        $this->ens=new Enseignant();

    }
    
    public function getInfo()
    {
        return $this->ens->getInfo($id);
    }

}

?>