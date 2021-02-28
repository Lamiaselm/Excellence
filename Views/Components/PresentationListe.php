<?php
require_once __DIR__."../../../Controllers/PresentationController.php";

class PresentationListe {

    private $presentation;
    

    public function __construct(){
        $this->presentation= new PresentationController();
       

    }
    public function getPresentationListe()
    {
        echo "
             <div class='row' style='margin-top:40px;'>
             <div class='col-md-10'style='margin:0 auto;text-align:center;'>
             <h1>Présentation d'EXCELLENCE</h1>";
        $result=$this->presentation->getPresentation();
        foreach($result as $row)
        {
          echo "
          <div class='card-article'>
                        <img src=".$row['image']." alt='icon' style='width: 50px;margin-bottom: 15px;'>
                        <p>".$row['paragraphe']."</p>
                        <a href='#'>Afficher la suite</a>
           </div>
               ";
        }
        echo "    </div>
                  </div>
                  ";
    }
}
?>

                   
                   
                   
