<?php
require_once __DIR__."/../Models/Parent.php";
class Parentontroller
{
    private $parent;
    public function __construct(){
        $this->parent=new Parents();

    }
    
    public function getInfo()
    {
        return $this->parent->getInfo($id);
    }

}

?>