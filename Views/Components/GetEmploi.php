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
<h3 style='text-align:center;'>Emploi du temps de la classe  :  <?php $classe ?> </h3>
    <table class='table table-bordered'>
        
         <tbody>
<?php 
        $result=$this->emploi->getAll($id_classe);
        foreach($result as $row )
        {
            echo "
           <tr>
            <td>".$row['nom']."</td>
            <td>".$row['prenom']."</td>
            <td><a target='_blank' href='../ProfilePage.php?id_eleve=".$row['ID_user']."'>Lien profil</a></td>
           </tr>";
        }
       
        ?>
          
        </tbody>
      </table>
    </div>


  <?php
      }}
    
  ?>
                   
                   
