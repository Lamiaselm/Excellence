<?php
require_once __DIR__."/../Models/Contact.php";
class ContactController
{
    private $contact;
    public function __construct(){
        $this->contact=new Contact();

    }
    public function addcontact($email,$adr,$tel,$fax)
    {
    
        contact::addcontact($email,$adr,$tel,$fax);
    }
    public function getcontact()
    {
        return $this->contact->getcontact();
    }
    

}

?>