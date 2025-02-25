<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

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

// Instantiate Person and Student objects
$person = new Person("Alice", "Brown", 45);
$student = new Student("Mark", "Taylor", 22, "S67890", "Mathematics");

// Display initial information
echo "<h3>Initial Information:</h3>";
$person->displayPersonInfo();
echo "<br>";
$student->displayStudentInfo();
echo "<br>";

// Modify instance variables
$person->firstName = "Alicia";
$student->major = "Physics";

// Display modified information
echo "<h3>After Modification:</h3>";
$person->displayPersonInfo();
echo "<br>";
$student->displayStudentInfo();
?>
