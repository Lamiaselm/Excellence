<?php 

require_once ("Db.php");
class Contact {

public static function addcontact($email,$adr,$tel,$fax)
{
    $db =Db::connect();
    $query="INSERT INTO contacts (email,adresse,tel,fax) VALUES ('$email','$adr','$tel','$fax')";
    $err = Db::execute_query($query);
}
public static function getcontact()
{       $db =Db::connect();
        $query = "SELECT * FROM contacts";
        return Db::execute_query($query);
}
}
?>