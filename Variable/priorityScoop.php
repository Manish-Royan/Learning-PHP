<?php

//If two variables, local and global, have the same name, then the local variable has higher priority than the global variable inside the function.
$x = 5;
function mytest()
{
 $x = 7;
 echo "value of x: " . $x;
}
mytest(); //output: Value of x: 7

?>