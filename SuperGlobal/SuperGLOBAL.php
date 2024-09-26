<?php

/*
- Superglobals are built-in variables in PHP that are always accessible, regardless of scope. They are predefined and can be used anywhere in your script without needing to be declared. Understanding superglobals is essential for handling data in PHP, especially in web development.

*/

    //1. $GLOBALS
    //* Description: An associative array containing references to all variables currently defined in the global scope.
    //* Usage: Access global variables from anywhere in the script.
    $a = 10;
    $b = 20;
    
    function sum() {
        $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
    }
    
    sum();
    echo $c; // Outputs: 30


?>