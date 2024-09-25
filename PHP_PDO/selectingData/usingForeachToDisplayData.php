<?php
include("../creating_connection/dbconnection.php");

$selectquery = "SELECT * FROM studentstable";
$statement = $dbconnection->prepare($selectquery);
$statement->execute();

// Fetch all rows as objects
$results = $statement->fetchAll(PDO::FETCH_OBJ);

foreach ($results as $result)
{
    echo "The Student with id: " . $result->id . " name is " . $result->name . " and age is " . $result->age . ". The student reads in class-" . $result->class . "<br>";
}
?>