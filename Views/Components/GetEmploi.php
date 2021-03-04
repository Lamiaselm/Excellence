<?php

require_once __DIR__."../../../Controllers/EmploiController.php";

class GetEmploi {

    private $emploi;
    

    public function __construct() {
       return $this->emploi= new EmploiController();
    } 
   public function getEmploi($id_classe,$classe){
       

?>




<div class="container" style="margin-top:70px;">
<h3 style='text-align:center;'>Emploi du temps de la classe  :  <?php echo $classe ?> </h3>
    <table class='table table-bordered'>
        <thead class='thead-dark' style='color:white;background-color:#494848;'>
        <tr>
            <th>Dimanche</th>
            <th>Lundi</th>
            <th>Mardi</th>
            <th>Mercredi</th>
            <th>jeudi</th>
        </tr>
        </thead>
         <tbody>
<?php 
        $result=$this->emploi->getAll($id_classe,1);
        
       
        foreach($result as $row )
        {   
             echo "<hr><td>".$row['heure_debut']."-".$row['heure_fin']."</td>";
           
         
        }
        
        $result2=$this->emploi->getAll($id_classe,2);
        foreach($result2 as $row2 )
        {
             echo "<td>".$row2['heure_debut']."-".$row2['heure_fin']."</td>";
           
         
        }
        $result=$this->emploi->getAll($id_classe,3);
        foreach($result as $row )
        {
             echo "<td>".$row['heure_debut']."-".$row['heure_fin']."</td>";
           
         
        }
        $result=$this->emploi->getAll($id_classe,4);
        foreach($result as $row )
        {
             echo "<td>".$row['heure_debut']."-".$row['heure_fin']."</td>";
           
         
        }
        $result=$this->emploi->getAll($id_classe,5);
        foreach($result as $row )
        {
             echo "<td>".$row['heure_debut']."-".$row['heure_fin']."</td></hr>";
           
         
        }
        

        
        
       
        ?>
          
        </tbody>
      </table>
    </div>


  <?php
      }}
    
  ?>
                   
                   
