<?php
//including the addressBook class
include "AddressBook.php";

class Main
{
    /**
     * using switch case function to select multiple options to user to add/delete/edit/print contacts
     * by calling all the functons with the help of objec of the contacts class.
     */
    function addressBookMain()
    {
        $addressBook = new Contact();
        $addressBook->welcomeMsg();
        $options = readline("Please select from the below options to continue : \n1. addContact\t2.editContact\t3.printContact\t4.deleteCotanct\t5.Exit\n");
        while ($options != 5) {
            switch ($options) {
                case 1:
                    echo "===========You have selected to addContacts============\n";
                    $addressBook->createContacts();
                    $this->addressBookMain(); //recalling the function again
                    break;
                case 2:
                    echo "===========You have selected to editContacts============\n";
                    $addressBook->editContact();
                    $this->addressBookMain();
                    break;
                case 3:
                    echo "===========You have selected to printContacts============\n";
                    $addressBook->printContact();
                    $this->addressBookMain();
                    break;
                case 4:
                    echo "===========You have selected to deleteContacts============\n";
                    $addressBook->deleteContact();
                    $this->addressBookMain();
                    break;
                case 5:
                    echo "===========You have selected to exit the program============\n";
                    echo "Thankyou for using addressBook";
                    break;
                default:
                    echo "Please enter a valid input from given options";
                    $this->addressBookMain();
            }
        }
    }
}
$main = new Main();
$main->addressBookMain();

?>