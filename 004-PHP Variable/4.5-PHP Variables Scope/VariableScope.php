<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    //1. Global Scope: Variables declared outside of any function or class have a global scope and can be accessed from anywhere in the script
    $globalVar = "I am global";

    function testFunction() {
        global $globalVar;  // Declare the variable as global to access it
        echo $globalVar;  // Access global variable inside function
    }

    //2. Local Scope: Variables declared inside a function have local scope and are accessible only within that function unless explicitly declared global.
    function testLocalFunction() {
        $localVar = "I am local";
        echo $localVar;   // Access local variable inside function
    }

    //3. Static Variables: Variables declared as static retain their value between function calls.
    function myStaticFunction() {
        static $count = 0;
        $count++;
        echo $count;
    }
    myStaticFunction(); // Outputs: 1
    myStaticFunction(); // Outputs: 2
    ?>
</body>
</html>