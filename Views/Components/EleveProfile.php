<?php

require_once __DIR__."../../../Controllers/EleveController.php";
require_once __DIR__."/ArticleListe.php";


class EleveProfile {

    private $eleve;
    

    public function __construct(){
        $this->eleve= new EleveController();
    }
    public function getInfo($id_eleve)
    {

?>

<body>
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
       $result= $this->eleve->getInfo($id_eleve);
       foreach($result as $row)
       {
                echo " <h4>".$row['nom']." ".$row['prenom']."</h4>";?>
      
        
                     
                      
                     
                      <button class='btn btn-primary'>Modifier</button>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class='card mt-3'>
                <ul class='list-group list-group-flush'>
                <?php 
                $result0= $this->eleve->getClasse($id_eleve);
               
                foreach($result0 as $row0)
                {
                echo "
                <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                <h6 class='mb-0'>Classe/Groupe</h6>
                <span class='text-secondary'>".$row0['classe']."</span> 
              </li>
              <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                <h6 class='mb-0'>Année</h6>
                <span class='text-secondary'>".$row0['année']."</span> 
              </li>
              <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                <h6 class='mb-0'>Niveau</h6>
                <span class='text-secondary'>".$row0['niveau']."</span> 
              </li>
                  <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                    <h6 class='mb-0'>Lien emploi du temps</h6>
                    <span class='text-secondary'><a target='_blank' href='./Components/TableEmploi.php?id_classe=".$row0['ID_classe']."&classe=".$row0['classe']."'>Link</a></span>
                  </li>";}
                 echo " <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
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
                      <h6 class='d-flex align-items-center mb-3'><i class='material-icons text-info mr-2'>Mes notes</i></h6>
                      <?php 
              $result2= $this->eleve->getNote($id_eleve);
              foreach($result2 as $row)
              {
                echo " <form method='POST' enctype='multipart/form-data'>
                     <div class='row'>
                      <div class='col-sm-4'>
                        <h7 class='mb-0'>" .$row['module']."</h7>
                      </div>
                      <div class='col-sm-2 text-secondary'><input value=".$row['note']." name='note_modif' style='border:none;outline:none;'> <input type='hidden' value=".$row['ID_note']." name='ID_note'>
                      </div>
                      <div class='col-sm-6 text-secondary'>"
                        .$row['observation']."
                      </div>
                    </div>
                    <input type='submit' name='submit_modifier' value='Modifer note'style='background-color:#3AD8ED;color:white;border:none;'";if(isset($_SESSION['auth'])){echo 'disabled';} echo">
                    <button onClick='window.location.reload();' style='border:none;background-color:#ffffff;'><img src='https://img.icons8.com/android/24/000000/refresh.png'/></button>
                    </form>
                    <hr>
                    "; 
                    if(isset($_POST['submit_modifier']))
                    {
                      $this->eleve->modifNote($_POST['ID_note'],$_POST['note_modif']);
                    }
                    
                    }?>
                    
                    </div>
                  </div>
                </div>
                
                <div class='col-sm-6 mb-3'>
                  <div class='card h-100'>
                    <div class='card-body'>
                      <h6 class='d-flex align-items-center mb-3'><i class='material-icons text-info mr-2'>Mes activités</i></h6>
                      <?php 
              $result3= $this->eleve->getActivite($id_eleve);
              foreach($result3 as $row)
              {
                echo " <div class='row'>
                      <div class='col-sm-5'>
                        <h7 class='mb-0'>" .$row['titre']."</h7>
                      </div>
                      <div class='col-sm-7 text-secondary'>"
                        .$row['description']."
                      </div>
                    </div>
                    <hr>
                    "; }?>
                   <a href="./Components/AddActivity.php" target="_blank">    <button class='btn btn-outline-primary'>Ajouter</button></a>
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
      $article->getArticleListeByCycle(3);
    }
  
  ?>
</body>


  <?php
      }
    }
  ?>
                   
                   
