<?php
//`print`: print is also used to output a string. The PHP print Statement can be used with or without parentheses: `print or print()`. Like PHP `echo`, PHP `print` is a language construct, so you don't need to use parenthesis with the argument list. Print statement can be used with or without parentheses: print and print(). Unlike echo, it always returns 1.

//Syntax: print "Hello, World!";

    //i .Single Parameter: print can only take one argument.
    print "Hello, World!"; // Valid
    // print "Hello", " World!"; // Invalid, causes a syntax error

    //ii. Return Value: print always returns 1, which means it can be used in expressions
    $result = print "Hello, World!"; //Hello, World!
    print $result; // $result will be 1



// Display Text: The following example shows how to output text with the print command (notice that the text can contain HTML markup)
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";



//Display Variables: The following example shows how to output text and variables with the `print` statement
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
print "<h2>" . $txt1 . "</h2>";
print "<p>Study PHP at " . $txt2 . "</p>";



/* Use of:
i. print is a statement, used as an alternative to echo at many times to display the output.
ii. print can be used with or without parentheses.
iii. print always returns an integer value, which is 1.
iv. Using print, we cannot pass multiple arguments.
v. print is slower than the echo statement.

*/

?>