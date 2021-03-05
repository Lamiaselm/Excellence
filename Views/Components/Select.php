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
    public function selectEns()
    {
        
        $result4=$this->select->selectEns();
        foreach($result4 as $row4)
        {
            echo "<option value=".$row4['ID_user']." >".$row4['nom']."</option>";
        }

    }
    public function selectActivities()
    {
        
        $result5=$this->select->selectActivities();
        foreach($result5 as $row5)
        {
            echo "<option value=".$row5['ID_activite']." >".$row5['titre']."</option>";
        }

    }
  
}
?>

                   
                   
                   
