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
    public function addImage($id)
    {
        $filename = $_FILES["image"]["name"]; 
        $tempname = $_FILES["image"]["tmp_name"];     
        $folder = __DIR__."/../Presentation/".$filename; 
        $file_path="././Presentation/".$filename; 
        if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
      }
        Presentation::addImage($id,$file_path);
    }
    public function deleteParagraphe($id)
    {
        Presentation::deletePresentation($id);
    }
    public function modifierParagraphe($id,$paragraphe)
    {
        Presentation::updatePresentation($id,$paragraphe);
    }

}

?>