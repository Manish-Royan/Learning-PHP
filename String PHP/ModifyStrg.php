<?php
//PHP has a set of built-in functions that you can use to modify strings.

    //i. Upper Case: The `strtoupper()` function returns the string in upper case:
        $x = "Hello World!";
        echo strtoupper($x); //HELLO WORLD!

    //ii. LowerCase: The `strtolower()` function returns the string in lower case:
        $x = "Hello World!";
        echo strtolower($x); //hello world!

    //iii. Replace String: The PHP str_replace() function replaces some characters with some other characters in a string
        $x = "Hello World!";
        echo str_replace("World", "Dolly", $x);

    //iv.Reverse a String: The PHP strrev() function reverses a string.
        $x = "Hello World!";
        echo strrev($x); //!dlroW olleH

    //v.Remove Whitespace: Whitespace is the space before and/or after the actual text, and very often you want to remove this space.
        //The `trim()` removes any whitespace from the beginning or the end:
        $x = " Hello World! ";
        echo trim($x);

    //vi.Convert String into Array
    /*
        - The PHP explode() function splits a string into an array.
        - The first parameter of the explode() function represents the "separator". The "separator" specifies where to split the string.
    */
        $x = "Hello World!";
        $y = explode(" ", $x);
        
        //Use the print_r() function to display the result:
        print_r($y);
        
        /*
            Result:
            Array ( [0] => Hello [1] => World! )
        */




?>