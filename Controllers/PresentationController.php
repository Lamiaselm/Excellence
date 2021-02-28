<?php
require_once('../Models/Presentation.php');
class PresentationController
{
    private $presentation;
    public function __construct(){
        $this->presentation=new Presentation();

    }
    public function addParagraphe($paragraphe)
    {
    
        $filename = $_FILES["image"]["name"]; 
        $tempname = $_FILES["image"]["tmp_name"];     
        $folder = "././Presentation/".$filename; 
        if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
      } 
        Presentation::addparagraphe($paragraphe,$folder);
    }

}

?>