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
        $query = "SELECT users.nom,
        modules.module,
        emploi.heure_debut,
        emploi.heure_fin
        FROM emploi
        INNER JOIN users ON users.ID_user = emploi.ID_ens
        INNER JOIN modules ON modules.ID_module = emploi.ID_module
        WHERE emploi.ID_classe='$id_classe' AND emploi.jour='$id_day' ORDER BY emploi.heure_debut";
        return Db::execute_query($query);
        
        
}
public static function getAllEns($id_ens,$id_day)
{       $db =Db::connect();
        $query = "SELECT classes.classe,
        modules.module,
        emploi.heure_debut,
        emploi.heure_fin
        FROM emploi
        INNER JOIN classes ON classes.ID_classe = emploi.ID_classe
        INNER JOIN modules ON modules.ID_module = emploi.ID_module
        WHERE emploi.ID_ens='$id_ens' AND emploi.jour='$id_day' ORDER BY emploi.heure_debut";
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