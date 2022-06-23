<?php
include 'Person.php';
class Contact
{

    public $contactArray = [];
    public $person;

    function welcomeMsg()
    {
        echo "Welcome to addressbook program \n";
    }

    //UC1_create contacts by taking input from user
    function createContacts()
    {
        $this->firstName = readline("Please enter the firstName : ");
        $this->lastName = readline("Please enter the lastName : ");
        $this->address = readline("Please enter the address : ");
        $this->city = readline("Please enter the city : ");
        $this->state = readline("Please enter the state : ");
        $this->zip = readline("Please enter the zip code : ");
        $this->phoneNumber = readline("Please enter the phoneNumber : ");
        $this->email = readline("Please enter the email : ");
    //store the values in the array
        $this->person = new ContactDetails($this->firstName, $this->lastName, $this->address, $this->city, $this->state, $this->zip, $this->phoneNumber, $this->email);
        array_push($this->contactArray, $this->person);
    }

} 
//calling functions
$contact = new Contact($firstName, $lastName, $address, $city, $state, $zip, $phoneNumber, $email);
$contact->welcomeMsg();
$contact->createContacts();
?>