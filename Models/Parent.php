<?php
require_once ("Db.php");
class Parents
{
    public static function getInfo($id)
    {
        $db =Db::connect();
        $query = "SELECT * FROM parents WHERE ID_eleve='$id'";
        return Db::execute_query($query);

    }
}
?>