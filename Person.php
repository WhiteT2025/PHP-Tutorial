<?php
// Define the Person class
class Person {
    // Class attributes (instance variables)
    public $firstName;
    public $lastName;
    public $age;

    // Constructor to initialize attributes
    public function __construct($firstName, $lastName, $age) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    // Function to get full name
    public function getFullName() {
        return $this->firstName . " " . $this->lastName;
    }

    // Function to display person details
    public function displayPersonInfo() {
        echo "Name: " . $this->getFullName() . "<br>";
        echo "Age: " . $this->age . "<br>";
    }
}

// Instantiate the Person object
$person = new Person("John", "Doe", 30);
$person->displayPersonInfo();
?>
