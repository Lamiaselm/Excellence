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
        $query = "SELECT modules.module
        FROM modules
        INNER JOIN enseigner ON modules.ID_module=enseigner.ID_module WHERE enseigner.ID_ens='$id'";
        return Db::execute_query($query);

    }
    public static function selectCycle()
    {
    $db =Db::connect();
    $requete = "SELECT * FROM cycles";
    return Db::execute_query($requete);
    }
    public static function getClassByCycle($id_cycle)
    {
    $db =Db::connect();
    $requete = "SELECT * FROM classes WHERE ID_cycle='$id_cycle'";
    return Db::execute_query($requete);
    }
    public static function getEnsByCycle($id_cycle)
    {
    $db =Db::connect();
    $query = "SELECT users.nom,users.prenom,users.email
    FROM users
    INNER JOIN enseignants ON enseignants.ID_user=users.ID_user WHERE enseignants.ID_cycle='$id_cycle' AND users.type=2";
    return Db::execute_query($query);
    }
}
?>