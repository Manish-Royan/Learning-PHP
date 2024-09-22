<?php

//Using $GLOBALS instead of global
//Another way to use the global variable inside the function is predefined $GLOBALS array.
$num1 = 5; //global variable
$num2 = 13; //global variable
function global_var()
{
 $sum = $GLOBALS['num1'] + $GLOBALS['num2'];
 echo "Sum of global variables is: " . $sum;
}
global_var(); //Sum of global variables is: 18

?>