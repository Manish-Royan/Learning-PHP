<?php

//A variable decleared inside a function is local variable

$String = "I'm Global";

function msg()
{
    $String = "I'm Local"; //although '$String' is declared twice - one is outside the function and another is inside fucntion, having same variable name but they both are completely different as one is 'gobal' outside and another is 'local' inside the function.

    echo $String;
}


echo $String . "<br/>"; //output: I'm Global

//calling local variable of funcion 'msg()
msg();

?>