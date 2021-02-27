<?php 

require_once ("Db.php");
class DiapoImage{

public static function addImage($image)
{
    $db =Db::connect();
    $query="INSERT INTO imagediaporama (image) VALUES ('$image')";
    $err = Db::execute_query($query);
}

}



?>