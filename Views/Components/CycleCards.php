<?php 

  
require_once __DIR__."../../../Controllers/EnseignantController.php";
require_once __DIR__."../../../Controllers/EleveController.php";
require_once __DIR__."/ArticleListe.php";
Class CycleCards
{
    private $select,$activite;
    public function __construct(){
        $this->select= new EnseignantController();
        $this->activite= new EleveController();
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
                       <?php  echo "<a target='_blank' href='./Views/Components/ListeEns.php?id_cycle=".$id_cycle."'>Lien vers la liste</a>"; ?>
           </div>
           <div class='card-article'>
                        <img src="././Assets/images/information.png" alt='icon' style='width: 50px;margin-bottom: 15px;'>
                        <h3>Informations pratiques</h3>
                        <p>Excellence offre aux étudiants un certain nombre d'activité pratiques dans des différents domaines.</p>
                        <a target='_blank' href='./Views/Components/ListeActivites.php'>Lien vers la liste</a>
           </div>
           <div class='card-article'>
                        <img src="././Assets/images/dish.svg" alt='icon' style='width: 50px;margin-bottom: 15px;'>
                        <h3>Restauration de l'école</h3>
                        <p>La restauration de l'école s'appuie sur des plats de qualité preparé avec des chefs de haute classe.</p>
                        <a target='_blank' href='./Views/Components/ListeRepas.php'>Afficher la suite</a>
           </div>
                 </div>
                  </div>
                  <?php 
                    $article= new ArticleListe();
                    $article->getArticleListeByCycle($id_cycle);
                  ?>

<?php
    
}}
?>