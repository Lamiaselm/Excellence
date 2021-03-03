<?php
require_once ("Db.php");
class Eleve
{
    public static function getInfo($id)
    {
        $db =Db::connect();
        $query = "SELECT * FROM users WHERE ID_user='$id'";
        return Db::execute_query($query);

    }
    public static function getNote($id)
    {
        $db =Db::connect();
        $query =  "SELECT modules.module, notes.note, notes.observation
                   FROM modules
                   INNER JOIN notes ON modules.ID_module=notes.ID_note WHERE notes.ID_user='$id'";
        return Db::execute_query($query);

    }
    public static function getActivite($id)
    {
        $db =Db::connect();
        $query = $query =  "SELECT activites.titre, activites.description
                            FROM activites
                            INNER JOIN eleves ON activites.ID_activite=eleves.ID_activite WHERE eleves.ID_user='$id'";
        return Db::execute_query($query);

    }
    public static function getClasse($id)
    {
        $db =Db::connect();
        $query =  "SELECT *
                   FROM classes
                   INNER JOIN eleves ON classes.ID_classe=eleves.ID_classe WHERE eleves.ID_user='$id' LIMIT 1";
        
        return Db::execute_query($query);

    }
  
}
?>