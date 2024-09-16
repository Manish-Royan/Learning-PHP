<?php
/*
Arrow functions, introduced in PHP 7.4, provide a more concise syntax for writing anonymous functions. They are useful for short, simple functions and offer an implicit return statement, which makes them more succinct than traditional anonymous functions. 
*/


//Syntax: $fn = fn (parameters) => expression;

//Example:
$add = fn($a, $b) => $a + $b;
echo $add(2, 3); // Outputs: 5


/* 
- Characteristics of Arrow Functions
    * Concise Syntax: Arrow functions provide a shorter syntax compared to anonymous functions.
    * Implicit return: Arrow functions implicitly return the result of the expression.
    * Single Expression: Arrow functions can only contain a single expression. They cannot contain multiple statements or blocks of code.
*/


//Comparison with Anonymous Functions
    //i.Anonymous Function:
    $add = function($a, $b) {
        return $a + $b;
    };
    echo $add(2, 3); // Outputs: 5



    //ii Arrow Function:
    $add = fn($a, $b) => $a + $b;
    echo $add(2, 3); // Outputs: 5


// Limitations
    //i.Single Expression: Arrow functions are limited to a single expression. They cannot include multiple statements or a block of code.
    // Invalid
    $fn = fn($x) => {
        $y = $x + 1;
        return $y * $x;
    };


?>