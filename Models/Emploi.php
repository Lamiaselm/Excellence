<?php 

require_once ("Db.php");
class Emploi{

public static function addImage($image)
{
    $db =Db::connect();
    $query="INSERT INTO imagediaporama (image) VALUES ('$image')";
    $err = Db::execute_query($query);
}
public static function getImage()
{       $db =Db::connect();
        $query = "SELECT * FROM imagediaporama";
        return Db::execute_query($query);
}

}



?>