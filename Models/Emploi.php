<?php 

require_once ("Db.php");
class Emploi{

public static function addEmploi($classe,$jour,$heure_debut,$heure_fin,$module,$ens)
{
    $db =Db::connect();
    $query="INSERT INTO emploi (ID_module,ID_ens,ID_classe,jour,heure_debut,heure_fin) VALUES ('$module','$ens','$classe','$jour','$heure_debut','$heure_fin')";
    $err = Db::execute_query($query);
}
public static function getEmploi()
{       $db =Db::connect();
        $query = "SELECT * FROM imagediaporama";
        return Db::execute_query($query);
}

}



?>