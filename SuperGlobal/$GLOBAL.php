<?php
// $GLOBALS is an array that contains all global variables.

/*
Global Variables: Global variables are variables that can be accessed from any scope.

- Variables of the outermost scope are automatically global variables and can be used by any scope, e.g. inside a function.

- To use a global variable inside a function you have to either define them as global with the `global` keyword, or refer to them by using the `$GLOBALS` syntax.

- $GLOBAL doesan't shoow any constant variable
*/


// i. Refer to the global variable $x inside a function:
$x = 75;
function myfunction() {
    echo $GLOBALS['x']; // Outputs: 75
}
myfunction();
echo "<br/>";


// ii. You can also refer to global variables inside functions by defining them as global with the `global` keyword.
$y = 75;
function myfun() {
    global $y; // Import the global variable $y into the local scope
    echo $y;   // Outputs: 75
}
myfun();
echo "<br/>";


//iii.Create Global Variables: Variables created in the outer most scope are global variables either if they are created using the `$GLOBALS` syntax or not:
$cat1 = "Lulu";
$cat2 = "Lala";
function foo(){
    // echo $cat2;//we need to import global variable with 'global' keyword
    global $cat2;
    echo  $GLOBALS['cat1'] ."<br/>" .$cat2;
}
foo();
echo"<br/>";


//iv. creating global variables inside a function by using the `$GLOBALS` syntax:
function name(){
    $GLOBALS['$name']= "lulu";
    echo $GLOBALS['name'];
}
name();
echo"<br/>";

//v.Create a global variable from inside a function, and use it outside of the function:
function msg(){
    $GLOBALS ['name'] = 'Dung-Tung';
}

   msg();
   echo $GLOBALS['name'];
   echo $name;//this won't work

//vi.  $GLOBAL doesan't shoow any constant variable
const constantNUMBER = 10; //Beside evey GOLBAL variable will be visible beside this won't be printed as it is constant
echo "<pre>";
print_r($GLOBALS);
echo "<pre/>";
?>
