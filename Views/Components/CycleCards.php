<?php 
require_once __DIR__."../../../Controllers/EnseignantController.php";

Class CycleCards
{
    private $select;
    public function __construct(){
        $this->select= new EnseignantController();
    }
    public function getCards($id_cycle)
    {
        



?>

<div class='row' style='margin-top:40px;'>
             <div class='col-md-10'style='margin:0 auto;text-align:center;'>";
          <div class='card-article'>
                        <img src="././Assets/images/schedule.svg" alt='icon' style='width: 50px;margin-bottom: 15px;'>
                        <h3>Les emplois du temps</h3>
                        <p>Excellece comporte plusirurs classe à chaque cycle d'enseignemant voici les classes et les liens vers leurs emploi du temps</p>
                        <?php
                        $result=$this->select->getClassByCycle($id_cycle);
                        foreach($result as $row)
                        {
                            echo"
                            <a target='_blank' href='./Views/Components/TableEmploi.php?id_classe=".$row['ID_classe']."&classe=".$row['classe']."'>".$row['classe']."</a><br>
                            ";
                        }
                        ?>
                        
           </div>
           <div class='card-article'>
                        <img src="././Assets/images/education.svg" alt='icon' style='width: 50px;margin-bottom: 15px;'>
                        <h3>Liste des enseignants</h3>
                        <p>Excellence regroupe des enseignats compétents avec un haut niveau d'ensegnemant depuis sa création.</p>
                       <?php  echo "<a href='./Views/Components/ListeEns.php?id_cycle=".$id_cycle."'>Lien vers la liste</a>"; ?>
           </div>
           <div class='card-article'>
                        <img src="../../Assets/images/" alt='icon' style='width: 50px;margin-bottom: 15px;'>
                        <h3></h3>
                        <p></p>
                        <a href='#'>Afficher la suite</a>
           </div>
           <div class='card-article'>
                        <img src="../../Assets/images/" alt='icon' style='width: 50px;margin-bottom: 15px;'>
                        <h3></h3>
                        <p></p>
                        <a href='#'>Afficher la suite</a>
           </div>
                 </div>
                  </div>

<?php
    }
}
?>