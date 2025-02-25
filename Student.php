<?php
// Include the Person class
require_once 'Person.php';

// Define the Student class that inherits from Person
class Student extends Person {
    // Additional attributes for the Student class
    public $studentID;
    public $major;

    // Constructor to initialize inherited and new attributes
    public function __construct($firstName, $lastName, $age, $studentID, $major) {
        // Call the parent constructor to initialize inherited attributes
        parent::__construct($firstName, $lastName, $age);
        $this->studentID = $studentID;
        $this->major = $major;
    }

    // New method for the Student class
    public function displayStudentInfo() {
        // Call the parent's method
        $this->displayPersonInfo();
        echo "Student ID: " . $this->studentID . "<br>";
        echo "Major: " . $this->major . "<br>";
    }
}
?>








 