<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//Variable scope

//i. Local Scope: Variables declared inside a function are local to that function
function myFunction()
{
 $localVar = "I'm local";
}

//ii. Global Scope: Variables declared outside of functions are global. 
$globalVar = "I'm global";
//Another example
$x = 5;
$y = 10;

function myTest() {
  global $x, $y; //Without using the global keyword, if you try to access a global variable inside the function, it will generate an error that the variable is undefined.
  $y = $x + $y;
}
myTest();
echo $y; // outputs 15

//PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.
$x = 5;
$y = 10;
function myTests() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
} 
myTests();
echo $y;


//iii. Superglobals: Predefined variables in PHP are always accessible, regardless of scope.
echo $_SERVER['HTTP_USER_AGENT'];

//iv. The static Keyword: Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job. To do this, use the static keyword when you first declare the variable
function Test() {
    static $x = 0;
    echo $x;
    $x++;
}
Test();
echo "<br>";
Test();
echo "<br>";
Test();

?>
</body>
</html>