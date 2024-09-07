<?php
/*
Excecute a Function Item: Array items can be of any data type, including function.
*/
 // * To execute such a function, use the index number followed by parentheses ():
 function myFunction() {
    echo "I come from a function!";
  }
  
  $myArr = array("Volvo", 15, myFunction);
  
  $myArr[2](); //I come from a function!
?>