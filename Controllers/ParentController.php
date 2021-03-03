<?php
require_once __DIR__."/../Models/Parent.php";
class ParentController
{
    private $parent;
    public function __construct(){
        $this->parent=new Parents();

    }
    
    public function getInfo($id)
    {
        return $this->parent->getInfo($id);
    }
    public function getChildren($id)
    {
        return $this->parent->getChildren($id);
    }

}

?>