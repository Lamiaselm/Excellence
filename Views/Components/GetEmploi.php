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
        
       echo "<tr><td>";
       
        foreach($result as $row )
        {   
             echo "<h6 style='color: #3AD8ED;'>".$row['heure_debut']."-".$row['heure_fin']."</h6>".$row['module']."<br>".$row['nom']."<hr>";

        }
        echo "</td><td>";
       
        $result=$this->emploi->getAll($id_classe,2);
        foreach($result as $row )
        {   
               echo "<h6 style='color: #3AD8ED;'>".$row['heure_debut']."-".$row['heure_fin']."</h6>".$row['module']."<br>".$row['nom']."<hr>";

        }
        echo "</td><td>";
       
        $result=$this->emploi->getAll($id_classe,3);
        foreach($result as $row )
        {   
               echo "<h6 style='color: #3AD8ED;'>".$row['heure_debut']."-".$row['heure_fin']."</h6>".$row['module']."<br>".$row['nom']."<hr>";

        }
        echo "</td><td>";
       
        $result=$this->emploi->getAll($id_classe,4);
        foreach($result as $row )
        {   
               echo "<h6 style='color: #3AD8ED;'>".$row['heure_debut']."-".$row['heure_fin']."</h6>".$row['module']."<br>".$row['nom']."<hr>";

        }
        echo "</td><td>";
       
        $result=$this->emploi->getAll($id_classe,5);
        foreach($result as $row )
        {   
               echo "<h6 style='color: #3AD8ED;'>".$row['heure_debut']."-".$row['heure_fin']."</h6>".$row['module']."<br>".$row['nom']."<hr>";

        }
        echo "</td></tr>";
       
        ?>
        </tbody>
      </table>
    </div>
  <?php
      }
    
      public function getEmploiEns($id_ens){
       

        ?>
        
        <div class="container" style="margin-top:70px;">
        <h3 style='text-align:center;'>Votre Emploi du temps :  </h3>
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
                $result=$this->emploi->getAllEns($id_ens,1);
                
               echo "<tr><td>";
               
                foreach($result as $row )
                {   
                     echo "<h6 style='color: #3AD8ED;'>".$row['heure_debut']."-".$row['heure_fin']."</h6>".$row['classe']."<br>".$row['module']."<hr>";
        
                }
                echo "</td><td>";
               
                $result=$this->emploi->getAllEns($id_ens,2);
                foreach($result as $row )
                {   
                      echo "<h6 style='color: #3AD8ED;'>".$row['heure_debut']."-".$row['heure_fin']."</h6>".$row['classe']."<br>".$row['module']."<hr>";
        
                }
                echo "</td><td>";
               
                $result=$this->emploi->getAllEns($id_ens,3);
                foreach($result as $row )
                {   
                      echo "<h6 style='color: #3AD8ED;'>".$row['heure_debut']."-".$row['heure_fin']."</h6>".$row['classe']."<br>".$row['module']."<hr>";
        
                }
                echo "</td><td>";
               
                $result=$this->emploi->getAllEns($id_ens,4);
                foreach($result as $row )
                {   
                      echo "<h6 style='color: #3AD8ED;'>".$row['heure_debut']."-".$row['heure_fin']."</h6>".$row['classe']."<br>".$row['module']."<hr>";
        
                }
                echo "</td><td>";
               
                $result=$this->emploi->getAllEns($id_ens,5);
                foreach($result as $row )
                {   
                      echo "<h6 style='color: #3AD8ED;'>".$row['heure_debut']."-".$row['heure_fin']."</h6>".$row['classe']."<br>".$row['module']."<hr>";
        
                }
                echo "</td></tr>";
               
                ?>
                </tbody>
              </table>
            </div>
          <?php
              }

    }
    
  ?>
                   
                   
