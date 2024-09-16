<?php
//Demonstration:
    function wow() // the function name must be same with variable value 
    {
        //statement
        echo "Hello <br/>"; //Hello
    }

    $func = "wow";// the variable value must be same with function name
    $func(); // now the variable $func has become function

//Another Demonstration:
    function msg($name)
    {
        echo "Hello $name<br/>"; //Hello Manish
    }

    $fun = "msg";
    $fun("Manish");

// Using Anonymous function
$sayName = function($name) {
    echo "Hello $name<br/>";
}; //← don't forget semi-colon in anonymous function after all they are a value;

$sayName("Manish"); //Hello Manish
?>