<?php
require_once __DIR__."../../../Controllers/PresentationController.php";

class PresentationListe {

    private $presentation;
    

    public function __construct(){
        $this->presentation= new PresentationController();
       

    }
    public function getPresentationListe()
    {
        echo "
        <h1 style='text-align:center;margin-top: 30px;font-family: LitSans Medium;'>Présentation d'EXCELLENCE</h1>
        <form method='POST'action='./Views/PresentationPage.php' style='display:flex;justify-content: center;'> <input type='submit' value='Ajouter un paragraphe' name='paragraphe'style='width:335px;'></form>

             <div class='row' style='margin: 40px auto 0;width: 70%;'>";

             
             
        $result=$this->presentation->getPresentation();
        foreach($result as $row)
        {
            if($row['image']==null)
            {
                echo "
                <div class='col-md-4'style='margin:0 auto;'>
                              <p>".$row['paragraphe']."</p>
                              <form method='POST' enctype='multipart/form-data'> <input type='file' name='image'> <input type='submit' value='Ajouter une image' name='submit_image'></form>
                             

                 </div>
                     ";
                     if(isset($_POST["submit_image"]))
                     {echo'hey';
                        $this->presentation->addImage($row['ID_parag']);
                     }
                    

            }else {
          echo "
          <div class='col-md-4'style='margin:0 auto;'>
                        <p>".$row['paragraphe']."</p>
                        <img src=".$row['image']." alt='icon' style='width: 100%;margin-bottom: 15px;'>
           </div>
               ";
        }}
        echo "    </div>
                 
                  ";
    }
}
?>

                   
                   
                   
