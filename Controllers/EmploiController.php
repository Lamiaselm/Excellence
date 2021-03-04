<?php
require_once __DIR__."/../Models/Emploi.php";
class EmploiController
{
    private $emploi;
    public function __construct(){
        $this->emploi=new Emploi();

    }
    public function addEmploi($classe,$jour,$heure_debut,$heure_fin,$module,$ens)
    {
        Emploi::addemploi($classe,$jour,$heure_debut,$heure_fin,$module,$ens);
    } 
     
        
    
    public function getAll($id_classe,$id_day)
    {
        return $this->emploi->getAll($id_classe,$id_day);
    }
    public function getEns($id_ens)
    {
        return $this->emploi->getEns($id_ens);
    }
    public function getModule($id_module)
    {
        return $this->emploi->getModule($id_module);
    }


}

?>