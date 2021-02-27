<?php

    class Db{
        
        private static $conn;
        private static $isConnected = false;


        public static function connect(){
            require_once ('Dbconfig.php') ;
            if(!Db::$isConnected){
                try {
                    self::$conn = new PDO($dsn, $userName, $passWord); 
                    self::$isConnected = true;
                } 
                    
                catch (PDOException $e){
                    printf("la connexion a echoué: %s \n",$e->getMessage());
                    exit();
                }
            }
        }
    
        public static function execute_query($requete){
            if(!Db::$isConnected)
            {
                Db::connect();
            }
            $statement = self::$conn->prepare($requete);
            $statement->execute(array());
            return self::fetchAll($statement);
        }
    

        private static function fetchAll($resultatRequete){
            if($resultatRequete){
                return $resultatRequete->fetchAll();
            }else{
                return false;
            }
        }

        public function close(){
            $isConnected = false;
            $this->conn->close();
        }
    }

?>