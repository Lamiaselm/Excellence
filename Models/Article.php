<?php 

require_once ("Db.php");
class Article {

public static function addArticle($titre,$image,$descrip,$concerne)
{
    $db =Db::connect();
    $query="INSERT INTO articles (titre,image,description,concerne) VALUES ('$titre','$image','$descrip','$concerne')";
    $err = Db::execute_query($query);
}

}



?>