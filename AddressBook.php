<?php
include "Person.php";
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

    /**
     * fuction to edit contact with user input
     */
    public function editContact()
    {
        if (empty($this->contactArray)) {
            echo "No contacts found to edit";
        } else {
            $input = readline("Please enter the first name of the person to edit contact :");
            for ($i = 0; $i < count($this->contactArray); $i++) {
                $this->person = $this->contactArray[$i];
                if ($input == $this->person->getFirstName()) {
                    echo "contact found with $input \n";
                    $options = readline("please select from the below options to edit the details\n1. firstName 2. lastName 3. address 4. city 5. state 6. zip 7. phoneNumber");
                    switch ($options) {
                        case 1:
                            $newName = readline("please enter the new fistName ");
                            $this->person->setFirstName($newName);
                            echo "contact edited successfully\n";
                            break;
                        case 2:
                            $newName = readline("please enter the new lastName ");
                            $this->person->setLastName($newName);
                            echo "contact edited successfully\n";
                            break;
                        case 3:
                            $newName = readline("please enter the new address ");
                            $this->person->setAddress($newName);
                            echo "contact edited successfully\n";
                            break;
                        case 4:
                            $newName = readline("please enter the new City ");
                            $this->person->setCity($newName);
                            echo "contact edited successfully\n";
                            break;
                        case 5:
                            $newName = readline("please enter the new state ");
                            $this->person->setState($newName);
                            echo "contact edited successfully\n";
                            break;
                        case 6:
                            $newName = readline("please enter the new zip ");
                            $this->person->setZip($newName);
                            echo "contact edited successfully\n";
                            break;
                        case 7:
                            $number = readline("please enter the new phoneNumber ");
                            $this->person->setPhoneNumber($number);
                            echo "contact edited successfully\n";
                            break;
                        default:
                            echo "Invalid input!!!\n please select only from given inputs\n";
                    }
                    $this->printContact();
                } else {
                    echo "contact not found with the input name";
                }
            }
        }
    }

    /**
     * function to check if contact list is empty and print contact list
     */
    function printContact()
    {
        echo "===============printing contacts ==================\n";
        if (empty($this->contactArray)) {
            echo "No contacts found in record";
        } else {
            for ($i = 1; $i <= count($this->contactArray); $i++) {
                echo "\nContactDetails $i : \nName : " . $this->firstName . " " . $this->lastName . "\n"
                    . "Address : " . $this->address . "\n"
                    . "City : " . $this->city . "\n"
                    . "State : " . $this->state . "\n"
                    . "ZipCode : " . $this->zip . "\n"
                    . "Phone Number : " . $this->phoneNumber . "\n"
                    . "Email Id : " . $this->email . "\n";
            }
        }
    }

    /**
     * function to check if contact list is empty and print contact list
     */

    function deleteContact()
    {
        if (empty($this->contactArray)) {
            echo "No contacts found to edit";
        } else {
            $input = readline("Please enter the first name of the person to delete contact :");
            for ($i = 0; $i < count($this->contactArray); $i++) {
                $this->person = $this->contactArray[$i];
                if ($input == $this->person->getFirstName()) {
                    echo "contact found with $input \n";
                    unset($this->contactArray[$i]);                     //removing contact from array
                    echo "Contact deleted successfully!!\n ";
                }
                $this->printContact();
            }
        }
    }
}
//calling functions
$contact = new Contact($firstName, $lastName, $address, $city, $state, $zip, $phoneNumber, $email);
$contact->welcomeMsg();
$contact->createContacts();
$contact->printContact();
//$contact->editContact();
$contact->deleteContact();
