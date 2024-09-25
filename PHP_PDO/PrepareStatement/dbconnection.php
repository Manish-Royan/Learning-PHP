<?php

$server = 'localhost: 3307';
$username = 'root';
$password = '';
$db_name = 'phppdo';

try {
    //Creating object for 'PDO' inorder to access it's method/function
    $dbconnection = new PDO("mysql:host=$server;dbname=$db_name", $username, $password);        


} catch (PDOException $e)
{
    echo "Error: " .$e->getMessage();
}

//Checking if connection is been created successfully or not
// if($dbconnection)
// {
//     echo "Connected Successfully!";
// } else {
//     echo "Connection failed!";
// }
?>