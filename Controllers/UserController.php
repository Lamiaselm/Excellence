<?php

require_once ('../Models/user.php');

class UserController{

    private $model;

    public function __construct(){
        $this->model = new user();
    }


       public function login($email,$mdp){
          
        $users= user::login($email,$mdp);
        $auth = false;

        foreach ($users as $user) {
            
                if(count($users)>0){
                $auth = true;
            }
        }
        

        if($auth){
            echo "yes";
            $_SESSION['email']   = $email;
            
            $_SESSION['password']   = $mdp;
            $_SESSION['userId']   = $users[0]["ID_user"];
            $_SESSION['type']   = $users[0]["type"];
            if (  $_SESSION['type'] ==1)
            {
                header('Location: ../Views/AdminPage.php');
            }
            $_SESSION['auth'] = true;
        }else {echo "no";
            $_SESSION['auth'] = false;
           
        }
        
        
        return $auth;
    }
    
}