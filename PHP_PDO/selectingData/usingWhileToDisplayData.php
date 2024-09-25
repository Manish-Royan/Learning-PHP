<?php

include("../creating_connection/dbconnection.php");


//Storing 'select' query in a variable
$selectquery = "select * from studentstable";

$statement = $dbconnection->prepare($selectquery);

$statement->execute();

    while($result = $statement->fetch(PDO::FETCH_OBJ)) {
    echo "The Student with id: ". $result->id ." name is ". $result->name ." and age is ". $result->age .". The student reads in class-". $result->class ."<br>";
    }
?>