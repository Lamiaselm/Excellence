<?php
require_once __DIR__."/../Models/Eleve.php";
class EleveController
{
    private $eleve;
    public function __construct(){
        $this->eleve=new Eleve();

    }
    
    public function getInfo($id)
    {
        return $this->eleve->getInfo($id);
    }

}

?>