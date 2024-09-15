<?php

//Hashing = transforming senstive data (password) into letters, numbers, and/or symbols via a mathematical process. (similar to encryption). It hide the orginal data from 3rd parties.


$user_password = "Cat123";

$hash  = password_hash($user_password, PASSWORD_DEFAULT);

if (password_verify("Dog123", $hash)) //the password verify finction return true if match with plan text password
{
   echo "You are logged-in";
} else {
    echo "Incorrect Password";
}


?>