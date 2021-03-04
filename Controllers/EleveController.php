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
    public function getNote($id)
    {
        return $this->eleve->getNote($id);
    }
    public function getActivite($id)
    {
        return $this->eleve->getActivite($id);
    }
    public function getClasse($id)
    {
        return $this->eleve->getClasse($id);
    }
    public function getAll($id_class)
    {
        return $this->eleve->getAll($id_class);
    }

}

?>