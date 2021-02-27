<?php 

require_once ("Db.php");
class Presentation {

public static function addParagraphe($paragraphe,$image)
{
    $db =Db::connect();
    $query="INSERT INTO presentation (paragraphe,image) VALUES ('$paragraphe','$image')";
    $err = Db::execute_query($query);
}

}



?>