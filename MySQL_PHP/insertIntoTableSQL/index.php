<?php
include("../Creating-Connection/database.php"); //database Connection

//Declaring Variable
$user_name = "Patrick";
$password = "rock3";
$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (user, password)
         VALUES ($user_name, $hash)"; //defining an SQL qeury

try {
mysqli_query($connection_hero, $sql); //implementing the defined SQL query
echo "User is now register";
} catch(mysqli_sql_exception)
{
    echo "Couldn't Register";
}

mysqli_close($connection_hero);

?>