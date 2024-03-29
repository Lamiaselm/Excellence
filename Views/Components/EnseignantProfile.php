<?php

require_once __DIR__."../../../Controllers/EnseignantController.php";
require_once __DIR__."/ArticleListe.php";

class EnseignantProfile {

    private $ens;
    

    public function __construct(){
        $this->ens= new EnseignantController();
    }
    public function getInfo($id_ens)
    {

?>

<body>
<?php 
    include ("Header.php");
    ?>
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
     
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                    <?php 
       $result= $this->ens->getInfo($id_ens);
       foreach($result as $row)
       {
                echo " <h4>".$row['nom']." ".$row['prenom']."</h4>";?>
      
        
                     
                      
                     
                    
                    </div>
                  </div>
                </div>
              </div>
              <div class='card mt-3'>
                <ul class='list-group list-group-flush'>
                
                <?php 
                $result0= $this->ens->getHeure($id_ens);
               
                foreach($result0 as $row0)
                {
                echo "
                <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                <h6 class='mb-0'>Heures de récéption</h6>
                <span class='text-secondary'>".$row0['heure_reception']."</span> 
              </li>
              <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                <h6 class='mb-0'>Total des heures de travail</h6>
                <span class='text-secondary'>".$row0['heure_travail']."</span> 
              </li>
              <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                <h6 class='mb-0'>Lien Emploi du temps</h6>
                <span class='text-secondary'><a target='_blank' href='./Components/TableEmploi.php'>Lien emploi</a></span>

                 
              </li>";}
            echo"  <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
              <h6 class='mb-0'>Articles</h6>
              <form method='POST' enctype='multipart/form-data'> <input type='submit' style='outline:none;width:150px;height:30px;' value='Afficher articles' name='plus'></form>
              </li>
            ";
            
                ?>
                  
                </ul>
              </div>
            </div>
            <?php  echo "
            <div class='col-md-8'>
              <div class='card mb-3'>
                <div class='card-body'>
                  <div class='row'>
                    <div class='col-sm-3'>
                      <h6 class='mb-0'>Matricule</h6>
                    </div>
                    <div class='col-sm-9 text-secondary'>"
                     .$row['ID_user']."
                    </div>
                  </div>
                  <hr>
                  <div class='row'>
                    <div class='col-sm-3'>
                      <h6 class='mb-0'>Email</h6>
                    </div>
                    <div class='col-sm-9 text-secondary'>"
                      .$row['email']."
                    </div>
                  </div>
                  <hr>
                  <div class='row'>
                    <div class='col-sm-3'>
                      <h6 class='mb-0'>Date de naissance</h6>
                    </div>
                    <div class='col-sm-9 text-secondary'>"
                      .$row['date_naissance']."
                    </div>
                  </div>
                  <hr>
                  <div class='row'>
                    <div class='col-sm-3'>
                      <h6 class='mb-0'>Adresse</h6>
                    </div>
                    <div class='col-sm-9 text-secondary'>"
                      .$row['adresse']."
                    </div>
                  </div>
                  <hr>
                  <div class='row'>
                    <div class='col-sm-3'>
                      <h6 class='mb-0'>Téléphone 1</h6>
                    </div>
                    <div class='col-sm-9 text-secondary'>"
                      .$row['tel1']."
                    </div>
                  </div>
                  <hr>
                  <div class='row'>
                    <div class='col-sm-3'>
                      <h6 class='mb-0'>Téléphone 2</h6>
                    </div>
                    <div class='col-sm-9 text-secondary'>"
                    .$row['tel2']."
                    </div>
                  </div>
                  <hr>
                  <div class='row'>
                  <div class='col-sm-3'>
                    <h6 class='mb-0'>Téléphone 3</h6>
                  </div>
                  <div class='col-sm-9 text-secondary'>"
                    .$row['tel3']."
                  </div>
                </div>
                </div>
              </div>"; } ?>
             

              
           
              <div class='row gutters-sm'>
                <div class='col-sm-6 mb-3'>
                  <div class='card h-100'>
                    <div class='card-body'>
                      <h6 class='d-flex align-items-center mb-3'><i class='material-icons text-info mr-2'>Mes modules</i></h6>
                      <?php 
              $result2= $this->ens->getModuleList($id_ens);
              foreach($result2 as $row)
              {
                echo " <div class='row'>
                      <div class='col-sm-4'>
                        <h6 class='mb-0'>" .$row['module']."</h6>
                      </div></div>
                     
                    <hr>
                    "; }?>
                    </div>
                  </div>
                </div>
                
                <div class='col-sm-6 mb-3'>
                  <div class='card h-100'>
                    <div class='card-body'>
                      <h6 class='d-flex align-items-center mb-3'><i class='material-icons text-info mr-2'>Mes classes</i></h6>
                      <?php 
              $result3= $this->ens->getClasseList($id_ens);
              foreach($result3 as $row)
              {
                echo " <div class='row'>
                      <div class='col-sm-2'>
                        <h7 class='mb-0'>" .$row['ID_classe']."</h7>
                      </div>
                      <div class='col-sm-4 text-secondary'>"
                        .$row['classe']."
                      </div>
                      <div class='col-sm-3 text-secondary'><a target='_blank' href='./Components/TableEleve.php?id=".$row['ID_classe']."&class=".$row['classe']."'>Liste eleves</a>
                      </div>
                      <div class='col-sm-3 text-secondary'><a target='_blank' href='./Components/TableEmploi.php?id_classe=".$row['ID_classe']."&classe=".$row['classe']."'>Lien emploi</a>
                      </div>
                    </div>
                    <hr>
                    "; }?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <?php 
    if(isset($_POST['plus']))
    {
      $article=new ArticleListe();
      $article->getArticleListeByProfil(2);
    }
  
  ?>
</body>


  <?php
      
    }}
  ?>
                   
                   
