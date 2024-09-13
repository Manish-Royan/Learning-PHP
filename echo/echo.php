<?php
//In PHP, `echo` and `print` are both language constructs used to output text to the screen. While they are often used interchangeably, there are some differences between them. 

//echo: PHP echo is a language construct, not a function. Therefore, you don't need to use parenthesis with it. But if you want to use more than one parameter, it is required to use parenthesis.

    //syntax of PHP echo: void echo ( string $arg1 [, string $... ] )   
    echo "Hello";
    //same as:
    echo("Hello"); //output: HelloHello



/* Uses of `echo`:
    i. It is used to print message or Varaible Value
    ii. echo is a statement, which is used to display the output.
    iii. echo can be used with or without parentheses: echo(), and echo.
    iv. echo does not return any value.
    v. We can pass multiple strings separated by a comma (,) in echo.
    vi. `echo` is faster than the `print` statement.
    vii. Return Value: echo does not return any value.
    viii. Performance: echo is marginally faster than print because it doesn't return a value.
   
*/


/* Difference:
    - The differences are small: `echo` has no return value while print has a return value of (1) so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.
*/

    //i. Return Value: echo does not return a value, while print returns 1.
    //$result = echo "Hello"; // Invalid, causes a syntax error
    $result = print "Hello"; // Valid, $result will be 1

    //ii. Parameters: echo can take multiple parameters separated by commas, while print can only take one parameter.
    echo "Hello", " ", "World!"; // Valid
    // print "Hello", " World!"; // Invalid, causes a syntax error


/* Summary:
    -Choosing Between echo and print
    i. Use echo when you need to output multiple strings or when you don't need to use the return value.
    ii. Use print when you need the return value in your code logic.

*/
  
    $lang = "PHP";  
    //$ret = echo $lang." is a web development language."; //invalid
    $ret = print $lang." is a web development language.";  
    echo "</br>";  
    // echo "Value return by print statement: ".$ret; //won't return any value
    print "Value return by print statement: ".$ret;    


?>