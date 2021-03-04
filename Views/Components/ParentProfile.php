<?php

require_once __DIR__."../../../Controllers/ParentController.php";

class ParentProfile {

    private $parent;
    

    public function __construct(){
        $this->parent= new ParentController();
    }
    public function getInfo()
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
       $result= $this->parent->getInfo($_SESSION['ID_user']);
       foreach($result as $row)
       {
                echo " <h4>".$row['nom']." ".$row['prenom']."</h4>";?>
      
        
                     
                      
                     
                      <button class='btn btn-primary'>Modifier</button>
                      <button class='btn btn-outline-primary'>Message</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class='card mt-3'>
                <ul class='list-group list-group-flush'>
                <h6 class='d-flex align-items-center mb-3' style='margin:10px;'><i class='material-icons text-info mr-2'>Mes enfants</i></h6>
                <?php 
                $result0= $this->parent->getChildren($_SESSION['ID_user']);
               
                foreach($result0 as $row0)
                {
                echo "
                <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
               
                <div class='row' style='width:100%;'>
                      <div class='col-sm-4'>
                        <h7 class='mb-0'>" .$row0['nom']."</h7>
                      </div>
                      <div class='col-sm-5 text-secondary'>"
                        .$row0['prenom']."
                      </div>
                      <div class='col-sm-3 text-secondary'><a target='_blank' href='./Components/listeEleve.php?".$row['nom']."'>Link</a>
                      </div>
                    </div>
              </li>
              "; }
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
             

              
           
              
                
                
              </div>
            </div>
          </div>
        </div>
    </div>";
  
</body>


  <?php
      }
    }
  ?>
                   
                   
