<?php
/*
A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.

*/

//PHP has the following functions to check if a numeric value is finite or infinite:
    //i. is_finite() Function: Synatxa → is_finite(value);
    echo is_finite(2) . "<br>"; //1
    echo is_finite(log(0)) . "<br>";
    echo is_finite(2000); //1
    /*Definition and Usage
        The is_finite() function checks whether a value is finite or not.

        This function returns true (1) if the specified value is a finite number, otherwise it returns false/nothing.

        The value is finite if it is within the allowed range for a PHP float on this platform.
    */


    //ii. is_infinite() Function: Syntax → is_infinite(value);
    echo is_infinite(2) . "<br>";
    echo is_infinite(log(0)) . "<br>"; //1
    echo is_infinite(2000);

    /*Definition and Usage
        The is_infinite() function checks whether a value is infinite or not.

        This function returns true (1) if the specified value is an infinite number, otherwise it returns false/nothing.

        The value is infinite if it is outside the allowed range for a PHP float on this platform.
    */
    
?>