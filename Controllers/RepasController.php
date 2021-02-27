<?php
require_once('../Models/Repas.php');
class RepasController
{
    private $repas;
    public function __construct(){
        $this->repas=new Repas();

    }
    public function addRepas($jour,$menu)
    {
    
        
        Repas::addRepas($jour,$menu);
    }

}

?>