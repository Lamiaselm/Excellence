
<?php 

require_once __DIR__."../../../Controllers/DiapoImageController.php";
class Diaporama {

    private $diapo;
    

    public function __construct(){
        $this->diapo= new DiapoImageController();
       

    }
    
    public function getDiapo()
    { 
    
     $result=$this->diapo->getImage();
      echo"<div class='slides'>
      <div class='slider'>";
     foreach($result as $row)
     {   
         

   echo "

    <div class='slider-img''>
        <img class='slide-img' src=".$row['image']."  >
    </div>";
     }
     echo "</div>
     </div>";
}
}
?>
 
