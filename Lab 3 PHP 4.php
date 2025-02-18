<?php
// Demonstrating different types of loops in PHP

// WHILE LOOP: Executes while the condition remains true
echo "While loop:\n";
$i = 1;
while ($i <= 5) {  // Loop runs while $i is less than or equal to 5
    echo "$i ";     // Print the value of $i
    $i++;           // Increment $i
}
echo "\n\n";  // Newline for better output formatting

// DO-WHILE LOOP: Executes at least once before checking the condition
echo "Do-while loop:\n";
$j = 1;
do {
    echo "$j ";    // Print $j
    $j++;          // Increment $j
} while ($j <= 5); // Condition checked after execution of loop body
echo "\n\n";

// FOR LOOP: Runs a specified number of times
echo "For loop:\n";
for ($k = 1; $k <= 5; $k++) { // Initialize $k, check condition, increment $k
    echo "$k ";  // Print $k
}
echo "\n\n";

// FOREACH LOOP: Iterates through an array
echo "Foreach loop:\n";
$array = [1, 2, 3, 4, 5]; // Define an array
foreach ($array as $value) { // Loop through each element in the array
    echo "$value "; // Print each element
}
echo "\n\n";

// FUNCTION TO GREET A USER
function greet($name) {
    return "Hello, $name!"; // Return a greeting message
}
echo greet("Tennie") . "\n"; // Outputs: Hello, Tennie!

// FUNCTION TO ADD TWO NUMBERS
function addNumbers($a, $b) {
    return $a + $b; // Return the sum of two numbers
}
echo "Addition result: " . addNumbers(5, 10) . "\n";

// FUNCTION TO MULTIPLY TWO NUMBERS
function multiply($a, $b) {
    return $a * $b; // Return the product of two numbers
}
echo "Multiplication result: " . multiply(4, 5) . "\n";

// FUNCTION TO SPLIT A STRING INTO TWO HALVES
function splitString($str) {
    $length = strlen($str); // Get string length
    $mid = floor($length / 2); // Find the midpoint
    return [substr($str, 0, $mid), substr($str, $mid)]; // Return both parts as an array
}

// CALLING STRING SPLIT FUNCTION
list($part1, $part2) = splitString("HelloWorld");
echo "First half: $part1\n"; // Outputs: Hello
echo "Second half: $part2\n"; // Outputs: World

// FUNCTION TO RETURN MULTIPLE VALUES USING ARRAY
function splitFullName($fullName) {
    return explode(" ", $fullName); // Split name into parts using space as delimiter
}
$nameParts = splitFullName("Tennie White"); // Call function with full name
echo "First Name: " . $nameParts[0] . "\n"; // Outputs: Tennie
echo "Last Name: " . $nameParts[1] . "\n"; // Outputs: White

// FUNCTION TO TEST PASS-BY-REFERENCE
function modifyReference(&$x) { // Parameter passed by reference using &
    $x = 200; // Modify the original variable directly
}

// TESTING PASS-BY-REFERENCE
$num2 = 10; // Initialize variable
modifyReference($num2); // Call function (pass-by-reference)
echo "After pass-by-reference function: $num2\n"; // $num2 changes to 200

// FUNCTION TO CALCULATE FACTORIAL USING RECURSION
function factorial($n) {
    if ($n <= 1) return 1; // Base case: if $n is 1 or less, return 1
    return $n * factorial($n - 1); // Recursive call multiplying $n by factorial of ($n - 1)
}
echo "Factorial result: " . factorial(5) . "\n";

// FUNCTION TO SUM MULTIPLE ARGUMENTS USING VARIABLE-LENGTH ARGUMENT LIST
function sumAll(...$numbers) {
    return array_sum($numbers); // Sum all numbers in the list
}
echo "Sum result: " . sumAll(2, 4, 6, 8) . "\n"; // Outputs: 20
echo "Sum result: " . sumAll(10, 15) . "\n"; // Outputs: 25

// FUNCTION TO MERGE MULTIPLE ARRAYS
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$array3 = ["a", "b", "c"];

$mergedArray = array_merge($array1, $array2, $array3); // Merge arrays
print_r($mergedArray); // Outputs: [1, 2, 3, 4, 5, 6, "a", "b", "c"]

// FUNCTION TO REPLACE MULTIPLE VALUES IN A STRING
$text = "I love apples and bananas.";
$search = ["apples", "bananas"]; // Define words to search
$replace = ["oranges", "grapes"]; // Define words to replace

$newText = str_replace($search, $replace, $text); // Replace words
echo $newText . "\n"; // Outputs: I love oranges and grapes.

// FUNCTION TO FORMAT STRING WITH MULTIPLE ARGUMENTS
$name = "Tennie";
$age = 66;
printf("My name is %s and I am %d years old.\n", $name, $age); 
// Outputs: My name is Tennie and I am 66 years old.

?>
