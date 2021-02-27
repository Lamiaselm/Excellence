<?php

require_once ("Db.php");

class user{

    private static $auth;

    public function __construct(){
        $auth = false;
    }

    public function login($email,$mdp){
        $db =Db::connect();
       
        $mdp_hash=hash('md5',$mdp);
        
        $requete = "SELECT * FROM users WHERE email = '$email' AND mdp = '$mdp_hash'";
        $users= Db::execute_query($requete);
        foreach ($users as $user) {
            if(count($users)>0){
                self::$auth = true;
            }
        }
        return $users;
    }
    public function register($nom,$prenom,$user_name,$email,$mdp,$adresse,$tel1,$tel2,$tel3,$type)
    {
        $db =Db::connect();
        $query="INSERT INTO users (nom,prenom,user_name,email,mdp,adresse,tel1,tel2,tel3,type) VALUES ('$nom','$prenom','$user_name','$email','$mdp','$adresse','$tel1','$tel2','$tel3','$type')";
        $err = Db::execute_query($query);

    }
    public function getUserById($id){
        $requete = "SELECT * FROM users WHERE ID_user = '$id' LIMIT 1";
        return Db::execute_query($requete)[0];
    }

    public static function isAuth(){
        return self::$auth;
    }
}