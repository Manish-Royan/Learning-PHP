<?php
/*
- A float is a number with a decimal point or a number in exponential form.

(2.0, 256.4, 10.358, 7.64E+5, 5.56E-5) are all floats.

- The float data type can commonly store a value up to 1.7976931348623E+308 (platform dependent), and have a maximum precision of 14 digits.

- PHP has the following predefined constants for floats (from PHP 7.2):

    * PHP_FLOAT_MAX - The largest representable floating point number
    * PHP_FLOAT_MIN - The smallest representable positive floating point number
    * PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss
    * PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0

*/



/*
- PHP has the following functions to check if the type of a variable is float:
    * is_float()
    * is_double() - alias of is_float()
*/
// Check if the type of a variable is float 
$x = 10.365;
var_dump(is_float($x)); //bool(true)

?>