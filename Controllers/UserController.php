<?php
require_once __DIR__."/../Models/user.php";

class UserController{

    private $model;

    public function __construct(){
        $this->model = new user();
    }


       public function login($email,$mdp){
          
        $users= user::login($email,$mdp);
        $auth = false;

        foreach ($users as $user) {
            
                if(count($users)==1){
                $auth = true;
            }
        }
        

        if($auth){
            echo "yes";
            $_SESSION['email']   = $email;
            $_SESSION['password']   = $mdp;
            $_SESSION['ID_user']   = $users[0]["ID_user"];
            $_SESSION['type']   = $users[0]["type"];
            $_SESSION['auth'] = true;
            if (  $_SESSION['type'] ==1)
            {
                header('Location: ../Views/AdminPage.php');
            }
            else {
                header('Location: ../Views/ProfilePage.php');
            }
            
        }else {echo "no";
            $_SESSION['auth'] = false;
           
        }
        
        
        return $auth;
    }
    public function registerParent($nom,$prenom,$user_name,$email,$mdp,$mdp_confirmer,$date,$type,$adresse,$tel1,$tel2,$tel3)
    {  if($mdp==$mdp_confirmer)
        {   $mdp_hash=hash('md5',$mdp);
            user::registerParent($nom,$prenom,$user_name,$email,$mdp_hash,$date,$adresse,$tel1,$tel2,$tel3,$type); 
           // echo "user added";
        }else {
          //  echo "user not added";
        }
    }
    public function registerEleve($nom,$prenom,$user_name,$email,$mdp,$mdp_confirmer,$date,$type,$adresse,$tel1,$tel2,$tel3,$classe,$parent)
    {  if($mdp==$mdp_confirmer)
        {   $mdp_hash=hash('md5',$mdp);
            user::registerEleve($nom,$prenom,$user_name,$email,$mdp_hash,$date,$adresse,$tel1,$tel2,$tel3,$type,$classe,$parent); 
           // echo "user added";
        }else {
          //  echo "user not added";
        }
    }
    public function registerEns($nom,$prenom,$user_name,$email,$mdp,$mdp_confirmer,$date,$type,$adresse,$tel1,$tel2,$tel3,$heure)
    {    
       
         if(($mdp==$mdp_confirmer)&&(!empty($_POST['module'])))
        {   $mdp_hash=hash('md5',$mdp);
            foreach($_POST['module'] as $value)
            {  
                $module=$value;
                user::registerEns($nom,$prenom,$user_name,$email,$mdp_hash,$date,$adresse,$tel1,$tel2,$tel3,$type,$heure,$module); 

            }

           // echo "user added";
        }else {
          //  echo "user not added";
        }
    }
    public function selectClasse()
    {
        return $this->model->selectClasse();
    }
    public function selectModule()
    {
        return $this->model->selectModule();
    }
    public function selectParent()
    {
        return $this->model->selectParent();
    }
    public function selectEns()
    {
        return $this->model->selectEns();
    }
    public function selectActivities()
    {
        return $this->model->selectActivity();
    }
    
}