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
        $query =  "SELECT modules.module, notes.note, notes.observation,notes.ID_note
                   FROM modules
                   INNER JOIN notes ON modules.ID_module=notes.ID_note WHERE notes.ID_user='$id'";
        return Db::execute_query($query);

    }
    public static function modifNote($id_note,$note)
    {
        $db =Db::connect();
        
        $query =  "UPDATE notes SET note ='$note' WHERE ID_note='$id_note'";
        return Db::execute_query($query);

    }
    public static function getActivite($id)
    {
        $db =Db::connect();
        $query = $query =  "SELECT activites.titre, activites.description
                            FROM activites
                            INNER JOIN participer ON activites.ID_activite=participer.ID_activite WHERE participer.ID_eleve='$id'";
        return Db::execute_query($query);

    }
    public static function getClasse($id)
    {
        $db =Db::connect();
        $query =  "SELECT *
                   FROM classes
                   INNER JOIN eleves ON classes.ID_classe=eleves.ID_classe WHERE eleves.ID_user='$id'";
        
        return Db::execute_query($query);

    }
    public static function getAll($id_class)
    {
        $db =Db::connect();
        $query =  "SELECT users.ID_user,users.nom,users.prenom
        FROM users
        INNER JOIN eleves ON users.ID_user=eleves.ID_user WHERE eleves.ID_classe='$id_class'";
        return Db::execute_query($query);

    }
    public function addActivity($titre,$descrip,$id)
    {
        $db =Db::connect();
       
        $query1="INSERT INTO activites (titre,description) VALUES ('$titre','$descrip')";
        $err = Db::execute_query($query1);

        $query3="INSERT INTO participer (ID_eleve,ID_activite) VALUES ('$id',(SELECT ID_activite FROM activites WHERE titre='$titre'))";
        $err = Db::execute_query($query3);
        

    }
    public static function modifActivity($id,$choix)
    {
        $db =Db::connect();
        $exist="SELECT * FROM participer WHERE ID_activite='$choix' AND ID_eleve='$id' ";
        $err = Db::execute_query($exist);
        if(count($err)==0)
        {
            $query3="INSERT INTO participer (ID_eleve,ID_activite) VALUES ('$id',(SELECT ID_activite FROM activites WHERE ID_activite='$choix'))";
            $err = Db::execute_query($query3);
        }
    }
    public static function getAllActivities()
    {
        $db =Db::connect();
        $query = "SELECT * FROM activites";
        return Db::execute_query($query);

    }
  
}
?>