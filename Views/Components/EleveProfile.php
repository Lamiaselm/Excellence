<?php

require_once __DIR__."../../../Controllers/EleveController.php";

class EleveProfile {

    private $eleve;
    

    public function __construct(){
        $this->eleve= new EleveController();
    }
    public function getInfo()
    {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>Profile page</title>
</head>
<style>
body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
</style>
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
       $result= $this->eleve->getInfo($_SESSION['ID_user']);
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
                <?php 
                $result0= $this->eleve->getClasse($_SESSION['ID_user']);
               
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
              </li>"; }
                ?>
                  <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                    <h6 class='mb-0'>Lien emploi du temps</h6>
                    <span class='text-secondary'>bootdey</span>
                  </li>
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
              $result2= $this->eleve->getNote($_SESSION['ID_user']);
              foreach($result2 as $row)
              {
                echo " <div class='row'>
                      <div class='col-sm-4'>
                        <h7 class='mb-0'>" .$row['module']."</h7>
                      </div>
                      <div class='col-sm-2 text-secondary'>"
                        .$row['note']."
                      </div>
                      <div class='col-sm-6 text-secondary'>"
                        .$row['observation']."
                      </div>
                    </div>
                    <hr>
                    "; }?>
                    </div>
                  </div>
                </div>
                
                <div class='col-sm-6 mb-3'>
                  <div class='card h-100'>
                    <div class='card-body'>
                      <h6 class='d-flex align-items-center mb-3'><i class='material-icons text-info mr-2'>Mes activités</i></h6>
                      <?php 
              $result3= $this->eleve->getActivite($_SESSION['ID_user']);
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
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>";
  
</body>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
</html>
  <?php
      }
    }
  ?>
                   
                   
