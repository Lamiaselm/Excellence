<?php
require_once __DIR__."/../Models/Contact.php";
class ContactController
{
    private $contact;
    public function __construct(){
        $this->contact=new ContactController();

    }
    public function addcontact($titre,$descrip,$concerne)
    {
       /* $concerne="";
        if (!empty($_POST['choix']))
        {
            foreach ($_POST['choix'] as $value)
            {
                $concerne=$concerne.$value;
            }
        }*/
        $filename = $_FILES["image"]["name"]; 
        $tempname = $_FILES["image"]["tmp_name"];     
        $folder = "../contacts/".$filename; 
        $file_path="././contacts/".$filename; 
        if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
      } 
     
        contact::addcontact($titre,$file_path,$descrip,$concerne);
    }
    public function getcontact()
    {
        return $this->contact->getcontact();
    }
    public function getcontactByCycle($id_cycle)
    {
        return $this->contact->getcontactByCycle($id_cycle);
    }

}

?>