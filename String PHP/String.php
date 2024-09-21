<?php
//Strings in PHP are surrounded by either double quotation marks, or single quotation marks.

echo "Hello"; //double quotation: Double quotes process special characters.
echo 'Hello'; //single qutation: single quotes does not.

//i. Double quoted string literals perform operations for special characters:

$x = "Manish";
echo "Hello $x"; // Hello Manish

//ii. Single quoted strings does not perform such actions, it returns the string like it was written, with the variable name:
$x = "Manish";
echo 'Hello $x'; // Hello $x

?>