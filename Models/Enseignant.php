<?php
require_once ("Db.php");
class Enseignant
{
    public static function getInfo($id)
    {
        $db =Db::connect();
        $query = "SELECT * FROM enseignant WHERE ID_eleve='$id'";
        return Db::execute_query($query);

    }
}
?>