<?php 

require_once ("Db.php");
class Repas {

public static function addRepas($jour,$menu)
{
    $db =Db::connect();
    $query="INSERT INTO restauration (jour,menu) VALUES ('$jour','$menu')";
    $err = Db::execute_query($query);
}
public static function getRepas()
{       $db =Db::connect();
        $query = "SELECT * FROM restauration";
        return Db::execute_query($query);
}
}
?>