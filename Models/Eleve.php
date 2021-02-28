<?php
require_once ("Db.php");
class Eleve
{
    public static function getInfo($id)
    {
        $db =Db::connect();
        $query = "SELECT * FROM eleves WHERE ID_eleve='$id'";
        return Db::execute_query($query);

    }
}
?>