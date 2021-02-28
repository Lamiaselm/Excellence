<?php 

require_once ("Db.php");
class Presentation {

public static function addParagraphe($paragraphe,$image)
{   
    $db =Db::connect();
    $query="INSERT INTO presentation (paragraphe,image) VALUES ('$paragraphe','$image')";
    $err = Db::execute_query($query);
}
public static function getPresentation()
{       $db =Db::connect();
        $query = "SELECT * FROM presentation";
        return Db::execute_query($query);
}
public static function addImage($id,$image)
{
    $db =Db::connect();
    $query="UPDATE presentation SET image ='$image' WHERE ID_parag='$id'";
    $err = Db::execute_query($query);
}

public static function deletePresentation($id)
{      
         $db =Db::connect();
        echo $id;
        $query="DELETE FROM presentation WHERE ID_parag='$id'";
        $err = Db::execute_query($query);
       
}

public static function updatePresentation($id,$paragraphe)
{       $db =Db::connect();
        $query =  $query="UPDATE presentation SET  paragraphe ='$paragraphe',                  
         WHERE ID_parag='$id'";
        $err = Db::execute_query($query);
}
}



?>