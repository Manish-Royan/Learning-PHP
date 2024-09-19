<?php
//The PHP is_numeric() function can be used to find whether a variable is numeric. The function returns true if the variable is a number or a numeric string, false otherwise.


// Check if the variable is numeric   
$x = 5985;
var_dump(is_numeric($x));//bool(true)

echo "<br>";

$x = "5985";
var_dump(is_numeric($x));//bool(true)

echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));//bool(true)

echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));//bool(false)

?>