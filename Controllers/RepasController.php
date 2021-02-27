<?php
require_once('../Models/Repas.php');
class RepasController
{
    private $repas;
    public function __construct(){
        $this->repas=new Repas();

    }
    public function addRepas($jour,$menu)
    {
        $date2 = date('mm-dd-yyy h:i:s', strtotime($jour)); 
        $date = date('mm-dd-yyy h:i:s');
      //  echo "$date2 and $date";
       // Repas::addRepas($date,$menu);
        if($date2 < $date)
        {
         echo "error date ";
        }
        elseif ($date2 >= $date){
            echo "yes date";
            Repas::addRepas($jour,$menu);
        }
       
       
    }

}

?>