<?php
require_once __DIR__."../../../Controllers/UserController.php";

class Select {

    private $select;
    

    public function __construct(){
        $this->select= new UserController();
       

    }
    public function selectClasse()
    {
        
        $result1=$this->select->selectClasse();
        foreach($result1 as $row1)
        {
            echo "<option value=".$row1['ID_classe']." >".$row1['classe']."</option>";
        }

    }
    public function selectModule()
    {
        
        $result2=$this->select->selectModule();
        foreach($result2 as $row2)
        {
            echo "<option value=".$row2['ID_module']." >".$row2['module']."</option>";
        }

    }
    public function selectParent()
    {
        
        $result3=$this->select->selectParent();
        foreach($result3 as $row3)
        {
            echo "<option value=".$row3['ID_user']." >".$row3['nom']."</option>";
        }

    }
}
?>

                   
                   
                   