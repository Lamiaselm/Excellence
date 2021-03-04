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
    public function registerParent($nom,$prenom,$user_name,$email,$mdp,$date,$adresse,$tel1,$tel2,$tel3,$type)
    {
        $db =Db::connect();
        $query="INSERT INTO users (nom,prenom,user_name,email,mdp,date_naissance,adresse,tel1,tel2,tel3,type) VALUES ('$nom','$prenom','$user_name','$email','$mdp','$date','$adresse','$tel1','$tel2','$tel3','$type')";
        $err = Db::execute_query($query);

    }
    public function registerEleve($nom,$prenom,$user_name,$email,$mdp,$date,$adresse,$tel1,$tel2,$tel3,$type,$classe,$parent)
    {
        $db =Db::connect();
        $query1="INSERT INTO users (nom,prenom,user_name,email,mdp,date_naissance,adresse,tel1,tel2,tel3,type) VALUES ('$nom','$prenom','$user_name','$email','$mdp','$date','$adresse','$tel1','$tel2','$tel3','$type')";
        $err = Db::execute_query($query1);
     
        $query3="INSERT INTO eleves (ID_classe,ID_parent,ID_user) VALUES ('$classe','$parent',(SELECT ID_user FROM users WHERE email='$email'))";
        $err = Db::execute_query($query3);
       

    }
    public function registerEns($nom,$prenom,$user_name,$email,$mdp,$date,$adresse,$tel1,$tel2,$tel3,$type)
    {
        $db =Db::connect();
        $query="INSERT INTO users (nom,prenom,user_name,email,mdp,date_naissance,adresse,tel1,tel2,tel3,type) VALUES ('$nom','$prenom','$user_name','$email','$mdp','$date','$adresse','$tel1','$tel2','$tel3','$type')";
        $err = Db::execute_query($query);

    }
    public function getUserById($id){
        $requete = "SELECT * FROM users WHERE ID_user = '$id' LIMIT 1";
        return Db::execute_query($requete)[0];
    }
    public function selectClasse(){
        echo 'classe';
        $db =Db::connect();
        $requete = "SELECT ID_classe,classe FROM classes";
        return Db::execute_query($requete);
    }
    public function selectModule(){
        $db =Db::connect();
        echo 'module';
        $requete = "SELECT ID_module,module FROM modules";
        return Db::execute_query($requete);
        print_r($requete);
    }
    public function selectParent(){
        $db =Db::connect();
        $requete = "SELECT ID_user,nom,prenom FROM users WHERE type=4";
        return Db::execute_query($requete);
    }

    public static function isAuth(){
        return self::$auth;
    }
}