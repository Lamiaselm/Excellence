<?php 

require_once ("Db.php");
class Article {

public static function addArticle($titre,$image,$descrip,$concerne)
{   echo 'article';
    $db =Db::connect();
    $query="INSERT INTO articles (titre,image,description,concerne) VALUES ('$titre','$image','$descrip','$concerne')";
    $err = Db::execute_query($query);
    print_r($err);
}
public static function getArticle()
{       $db =Db::connect();
        $query = "SELECT * FROM articles";
        return Db::execute_query($query);
}

}



?>