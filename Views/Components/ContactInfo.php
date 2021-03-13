<?php
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
        <h1 style='text-align:center;margin-bottom:40px;color:#175fe4;'>Contactez-nous!</h1>
        <table class='table'>
       
        <tbody>
      <?php 
        $result=$this->info->getcontact();
        foreach($result as $row )
        {
            echo "
    
      
         
           <tr> <td> Email : ".$row['email']."</td></tr>
           <tr> <td> Adresse : ".$row['adresse']."</td></tr>
           <tr> <td> Numéro de téléphone : ".$row['tel']."</td></tr>
           <tr> <td> Numéro de fax : ".$row['fax']."</td></tr>";
        
          
        }
       
        ?>
          
        </tbody>
      </table>
        </div>
        </div>
        
                  
      <?php            
    }
    
   
}
?>

                   
                   
                   
