<?php
require_once __DIR__."/../Models/Presentation.php";
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
        $folder = "../Presentation/".$filename; 
        $file_path="././Presentation/".$filename; 
        if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
      } 
        Presentation::addparagraphe($paragraphe,$file_path);
    }
    public function getPresentation()
    {
        return $this->presentation->getPresentation();
    }

}

?>