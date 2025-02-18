README

LOOPS AND FUNCTIONS IN PHP

OVERVIEW:
This project demonstrates the use of loops and functions in PHP, covering fundamental concepts such as:
- While, Do-While, For, and Foreach Loops
- Function Declarations and Calls
- Passing Parameters by Value and Reference
- Recursive Functions
- Returning Multiple Values
- Using Anonymous (Lambda) Functions
- Handling Multiple Arguments with ...$args
- String Manipulation and Array Operations

PREREQUISITES:
To run this script, you need:
- PHP installed on your system (Version 7.0+ recommended)
- A command-line terminal or web server that supports PHP

INSTALLATION AND EXECUTION:

1. Clone or Download the Repository:
If using Git:
git clone <repository_url>
cd <repository_folder>

If downloading manually:
- Download the loops_and_functions.php file.
- Place it in your desired working directory.

2. Run the PHP Script:
To execute the script from the command line, navigate to the folder containing loops_and_functions.php and run:
php loops_and_functions.php

If using a web server (like Apache or Nginx), place the file in your htdocs or public_html folder and access it via http://localhost/loops_and_functions.php

FEATURES AND CODE BREAKDOWN:

LOOPS IN PHP:
- While Loop: Runs while a condition is true.
- Do-While Loop: Executes at least once before checking the condition.
- For Loop: Initializes, checks condition, and updates in a single line.
- Foreach Loop: Iterates over an array.

FUNCTIONS IN PHP:
- Basic Function with Parameters (greet($name))
- Function with Multiple Parameters (addNumbers($a, $b))
- Function Returning a Value (multiply($a, $b))
- Function with Default Parameters (greetUser($name = "Guest"))
- Recursive Function (factorial($n))
- Anonymous (Lambda) Function ($double = function($n) { return $n * 2; };)
- Variable-Length Argument Function (sumAll(...$numbers))

RETURNING MULTIPLE VALUES:
- Using Arrays (splitString($str))
- Using References (getStats($numbers, &$sum, &$average))
- Using Objects (getUserDetails())

PASS-BY-REFERENCE VS. PASS-BY-VALUE:
- Pass-by-Value: Function receives a copy of the variable.
- Pass-by-Reference: Function modifies the original variable using &.

STRING MANIPULATION AND ARRAY OPERATIONS:
- String Splitting (explode())
- Replacing Text (str_replace())
- Array Merging (array_merge())

EXAMPLE OUTPUT:

While loop:
1 2 3 4 5

Do-while loop:
1 2 3 4 5

For loop:
1 2 3 4 5

Foreach loop:
1 2 3 4 5

Hello, Tennie!
Addition result: 15
Multiplication result: 20
First half: Hello
Second half: World

First Name: Tennie
Last Name: White

After pass-by-reference function: 200

Factorial result: 120

Sum result: 20
Sum result: 25

Array Merge Result:
Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => a [7] => b [8] => c )

I love oranges and grapes.

My name is Tennie and I am 66 years old.

CONCLUSION:
This project provides a structured approach to learning loops, functions, recursion, parameter passing, and string manipulation in PHP. By understanding these concepts, you can write efficient, modular, and maintainable PHP scripts.

For improvements or modifications, feel free to edit the script and experiment!

 
