<?php

require_once __DIR__."../../../Controllers/EmploiController.php";

class GetEmploi {

    private $emploi;
    

    public function __construct() {
       return $this->emploi= new EmploiController();
    } 
   public function getEmploi(){

?>


<body>

<div class="container" style="margin-top:70px;">
<?php 
        $result=$this->emploi->getAll($id_class);
        foreach($result as $row )
        {
            echo "
     <h3 style='text-align:center;'>Liste des éléves de la classe  :  ".$class." </h3>
      <table class='table table-bordered'>
        <thead class='thead-dark' style='color:white;background-color:#494848;'>
          <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th> Lien profil</th>
          </tr>
        </thead>
        <tbody>
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
</body>

  <?php
      }}
    
  ?>
                   
                   
