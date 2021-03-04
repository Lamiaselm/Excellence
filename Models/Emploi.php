<?php 

require_once ("Db.php");
class Emploi{

public static function addEmploi($classe,$jour,$heure_debut,$heure_fin,$module,$ens)
{
    $db =Db::connect();
    $query="INSERT INTO emploi (ID_module,ID_ens,ID_classe,jour,heure_debut,heure_fin) VALUES ('$module','$ens','$classe','$jour','$heure_debut','$heure_fin')";
    $err = Db::execute_query($query);
}
public static function getAll($id_classe,$id_day)
{       $db =Db::connect();
        $query = "SELECT * FROM emploi WHERE ID_classe='$id_classe' AND jour='$id_day'";
        return Db::execute_query($query);
}
public static function getEns($id_ens)
{       $db =Db::connect();
        $query = "SELECT nom FROM users WHERE ID_user='$id_ens'";
        return Db::execute_query($query);
}
public static function getModule($id_module)
{       $db =Db::connect();
        $query = "SELECT module FROM modules WHERE ID_module='$id_module'";
        return Db::execute_query($query);
}

}



?>