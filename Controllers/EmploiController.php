<?php
require_once __DIR__."/../Models/Emploi.php";
class EmploiController
{
    private $emploi;
    public function __construct(){
        $this->emploi=new Emploi();

    }
    public function addemploi($titre,$descrip,$concerne)
    {
        Emploi::addemploi($titre,$file_path,$descrip,$concerne);
    } 
     
        
    
    public function getemploi()
    {
        return $this->emploi->getemploi();
    }

}

?>