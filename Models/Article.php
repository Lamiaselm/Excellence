<?php 

require_once ("Db.php");
class Article {

public static function addArticle($titre,$image,$descrip,$concerne)
{   
    $db =Db::connect();
    $query="INSERT INTO articles (titre,image,description,concerne) VALUES ('$titre','$image','$descrip','$concerne')";
    $err = Db::execute_query($query);
    
}
public static function getArticle()
{       $db =Db::connect();
        $query = "SELECT * FROM articles";
        return Db::execute_query($query);
}
public static function deleteArticle($id)
{       $db =Db::connect();
        $query="DELETE FROM articles WHERE Id_article='$id";
        $err = Db::execute_query($query);
}
public static function updateArticle($id)
{       $db =Db::connect();
        $query =  $query="UPDATE articles SET  titre ='$titre',
                                               image='$image',
                                               description='$descrip',
                                               conserne='$concerne'
         WHERE ID_article='$id'";
        $err = Db::execute_query($query);
}

}



?>