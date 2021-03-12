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
        $query = "SELECT * FROM articles ORDER BY ID_article DESC LIMIT 8";
        return Db::execute_query($query);
}
public static function getArticleNo8()
{       $db =Db::connect();
        $query = "SELECT * FROM articles ORDER BY ID_article ASC LIMIT 5";
        return Db::execute_query($query);
}
public static function getArticleByCycle($id_cycle)
{       $db =Db::connect();
        $query = "SELECT * FROM articles WHERE concerne='$id_cycle' OR concerne=4";
        return Db::execute_query($query);
}
public static function getArticleByID($id_article)
{       $db =Db::connect();
        $query = "SELECT * FROM articles WHERE ID_article='$id_article'";
        return Db::execute_query($query);
}
public static function deleteArticle($id)
{       $db =Db::connect();
        $query="DELETE FROM articles WHERE ID_article='$id";
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