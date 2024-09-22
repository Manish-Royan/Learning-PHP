<?php
//i. A global variable can be accessed anywhere but when we directly try to access 'global' vairable in a fucntion it will be undefine 

$String = "I'm Global variable";

function msg()
{
    global $String;
    echo" {$String} accessed inside a function. <br/>";
}
echo $String . ".<br/>"; //output: I'm Global
//calling local variable of funcion 'msg()
msg();


//ii. Global variable changing inside function

$VARIABLE = "PEACE AND HORMONY";
function something()
{
    global $VARIABLE;
    $VARIABLE = "WAR AND NUKES";
    echo" {$VARIABLE}<br/>";
}


something();
echo $VARIABLE . ".<br/>"; //output: I'm Global
//calling local variable of funcion 'msg()


//Global variable passing in function parameter
$msg = null;

function disp($msg)
{
    echo $msg;
}

echo $msg . "<br/>"; //output: I'm Global
disp("WELL DONE!!!"); //assiging
?>