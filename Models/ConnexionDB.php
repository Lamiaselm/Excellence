<?php
class ConnexionDB{

  private $servername = "localhost";
  private $username = "root";
  private $password = "";
  private $dbname = "excellence_db";
  private $conn = null;


// Create connection
function connect(){
    $this->conn = new mysqli($this->servername, $this->username, $this->password,$this->dbname);

    // Check connection
    if ($this->conn->connect_error) {
        die("Connection failed: ". $this->conn->connect_error);
    }
    }

    function disconnect(){
        $this->conn->close();
    }
    function conn(){
        return $this->conn;
    }
}

?>