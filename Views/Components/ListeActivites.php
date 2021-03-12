<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link   href="../../Assets/Excellence-style.css" rel="stylesheet" type="text/css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<?php
require_once __DIR__."../../../Controllers/EleveController.php";
$act=new ListeActivite();
$act->getActiviteListe();
class ListeActivite {

    private $activite;
    

    public function __construct(){
        $this->activite= new EleveController();
       

    }
    public function getActiviteListe()
    {
        echo "
             <div class='row' style='margin-top:40px;'>
             <div class='col-md-10'style='margin:0 auto;text-align:center;'>";
        $result=$this->activite->getAllActivities();
        foreach($result as $row)
        {
          echo "
          <div class='card-article'>
                        <h3>".$row['titre']."</h3>
                        <p>".$row['description']."</p>
                        
           </div>
               ";
        }
        echo "    </div>
                  </div>
                  ";
    }
}
?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
</html>

                   
                   
                   
