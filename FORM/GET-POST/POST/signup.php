<?php

//Checking userInput in Accossiative array:
 //print_r($_POST); //output: Array ( [user_name] => userName [user_email] => something@gmail.com [user_password] => secertPassword )



if($_POST)
{
    echo "UserName is {$_POST['user_name']} <br/>";
    echo "UserEmail is {$_POST['user_email']} <br/>";
    echo "User's Password is {$_POST['user_password']} <br/>";
}
?>