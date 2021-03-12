<?php
require_once __DIR__."/../Models/Enseignant.php";
class EnseignantController
{
    private $ens;
    public function __construct(){
        $this->ens=new Enseignant();

    }
    
    public function getInfo($id)
    {
        return $this->ens->getInfo($id);
    }
    public function getHeure($id)
    {
        return $this->ens->getHeure($id);
    }
    public function getClasseList($id)
    {
        return $this->ens->getClasseList($id);
    }
    public function getModuleList($id)
    {
        return $this->ens->getModuleList($id);
    }
    public function selectCycle()
    {
        return $this->ens->selectCycle();
    }

}

?>