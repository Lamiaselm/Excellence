<?php
require_once __DIR__."/../Models/DiapoImage.php";
class DiapoImageController
{
    private $diapo;
    public function __construct(){
        $this->diapo=new DiapoImage();

    }
    public function addImage()
    {
    
        $filename = $_FILES["image"]["name"]; 
        $tempname = $_FILES["image"]["tmp_name"];     
        $folder = "../Diaporama/".$filename; 
        $file_path="././Diaporama/".$filename; 
        if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
      } 
        DiapoImage::addImage($file_path);
    }
    public function getImage()
    { 
        return $this->diapo->getImage();
    }

}

?>