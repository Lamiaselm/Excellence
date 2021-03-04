<?php
require_once ("Db.php");
class Enseignant
{
    public static function getInfo($id)
    {
        $db =Db::connect();
        $query = "SELECT * FROM users WHERE ID_user='$id'";
        return Db::execute_query($query);

    }
    public static function getheure($id)
    {
        $db =Db::connect();
        $query = "SELECT * FROM enseignants WHERE ID_user='$id'";
        return Db::execute_query($query);

    }
    public static function getClasseList($id)
    {
        
        $db =Db::connect();
        $query = "SELECT *
                            FROM classes
                            INNER JOIN classe_ens ON classes.ID_classe=classe_ens.ID_classe WHERE classe_ens.ID_ens='$id'";
        return Db::execute_query($query);

    }
    public static function getModuleList($id)
    {
        $db =Db::connect();
        $query = "SELECT module FROM modules WHERE ID_ens='$id'";
        return Db::execute_query($query);

    }
}
?>