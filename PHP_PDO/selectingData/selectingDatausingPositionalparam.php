<?php

include("../creating_connection/dbconnection.php");

//Creating variable for positional param
$idnum = 3;
$name = "Lalu Bahiya";


//Storing 'select' query in a variable
$selectquery = "select * from studentstable where id=? AND name=?";

$statement = $dbconnection->prepare($selectquery);

$statement->execute([$idnum, $name]);

// Fetch the result as an object
$result = $statement->fetch(PDO::FETCH_OBJ);

// Check if a result was found before trying to access it
if ($result) {
    echo "The Student with id: ". $result->id ." name is ". $result->name ." and his age is ". $result->age ."<br/>He reads in class-". $result->class;
} else {
    echo "No matching record found.";
}
?>