<?php
session_start();
if((!isset( $_SESSION['auth']))|| (empty($_SESSION['auth']))) {
     
    
  header("Location:../Views/Login.php");
  }
  else{
require_once __DIR__."../../../Controllers/ContactController.php";

class ContactInfo {

    private $info;
    

    public function __construct(){
        $this->info= new ContactController();
       

    }
    public function getContact()
    {?>
        
        
        <div class='row' style="margin-top:90px;">
        <div class='col-md-5' style="    margin-left: 90px;">
        <img src='Assets/images/contact.jpg' style='width:381.203px;height:344.250px;'>
        </div>
        <div class='col-md-5'>
        <h1 style='text-align:center;margin-bottom:40px;color:#258bff;'>Contactez-nous!</h1>
        <table class='table' style="font-size:15px;">
       
        <tbody>
      <?php 
        $result=$this->info->getcontact();
        foreach($result as $row )
        {
            echo "
    
      
         
           <tr> <td style='    font-size: 20px;'> <b style='    font-size: 20px;color:#258bff;'>Email : </b> ".$row['email']."</td></tr>
           <tr> <td style='    font-size: 20px;'> <b style='    font-size: 20px;color:#258bff;'> Adresse : </b> ".$row['adresse']."</td></tr>
           <tr> <td style='    font-size: 20px;'> <b style='    font-size: 20px;color:#258bff;'> Numéro de téléphone : </b> ".$row['tel']."</td></tr>
           <tr> <td style='    font-size: 20px;'> <b style='    font-size: 20px;color:#258bff;'>Numéro de Fax : </b>".$row['fax']."</td></tr>";
        
          
        }
       
        ?>
          
        </tbody>
      </table>
        </div>
        </div>
        
                  
      <?php            
    }
    
   
}}
?>

                   
                   
                   
