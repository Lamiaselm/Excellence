<?php
require_once ("Db.php");
class Parents
{
    public static function getInfo($id)
    {
        $db =Db::connect();
        $query = "SELECT * FROM users WHERE ID_user='$id'";
        return Db::execute_query($query);

    }
    public static function getChildren($id)
    {
        $db =Db::connect();
        $query =  "SELECT users.nom,users.prenom
                   FROM users
                   INNER JOIN eleves ON users.ID_user=eleves.ID_user WHERE eleves.ID_parent='$id' ";
        
        return Db::execute_query($query);

    }
}
?>