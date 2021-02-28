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
             <div class='row' style='margin-top:40px;'>
             <div class='col-md-10'style='margin:0 auto;text-align:center;'>
             <h1>Présentation d'EXCELLENCE</h1>";
        $result=$this->presentation->getPresentation();
        foreach($result as $row)
        {
            if($row['image']==null)
            {
                echo "
                <div class='col-md-6'style='margin:0 auto;'>
                              <p>".$row['paragraphe']."</p>
                              <form method='POST' enctype='multipart/form-data'> <input type='file' name='image'> <input type='submit' value='Ajouter une image' name='submit_image'></form>
                              <form method='POST' action='./Views/PresentationPage.php'> <input type='submit' value='Ajouter un paragraphe' name='submit_file'></form>

                 </div>
                     ";
                     if(isset($_POST["submit_image"]))
                     {echo'hey';
                        $this->presentation->addImage($row['ID_parag']);
                     }
                    

            }else {
          echo "
          <div class='col-md-7'style='margin:0 auto;'>
                        <p>".$row['paragraphe']."</p>
                        <img src=".$row['image']." alt='icon' style='width: 50px;margin-bottom: 15px;'>
                        <form method='POST'action='./Views/PresentationPage.php'> <input type='submit' value='Ajouter un paragraphe' name='paragraphe'></form>

           </div>
               ";
        }}
        echo "    </div>
                  </div>
                  ";
    }
}
?>

                   
                   
                   
