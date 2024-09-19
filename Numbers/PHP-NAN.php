<?php
/* Definition and Usage
    - The is_nan() function checks whether a value is 'not a number'.

    - This function returns true (1) if the specified value is 'not-a-number', otherwise it returns false/nothing.

    - Syntax →  is_nan(value);

*/
echo is_nan(200) . "<br>";
echo is_nan(acos(1.01)); //1



/*
- NaN stands for Not a Number.

- NaN is used for impossible mathematical operations.

-PHP has the following functions to check if a value is not a number: is_nan()

*/
// [However, the PHP var_dump() function returns the data type and value:]
// Invalid calculation will return a NaN value
$x = acos(8);
var_dump($x);
?>