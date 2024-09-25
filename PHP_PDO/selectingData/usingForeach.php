<?php

include("../creating_connection/dbconnection.php");


//Storing 'select' query in a variable
$selectquery = "select * from studentstable";

$statement = $dbconnection->prepare($selectquery);

$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $val)
{
    echo "The Student with id: ". $val['id'] ." name is ". $val['name'] ." and age is ". $val['age'] .". The student reads in class-". $val['class'] ."<br>";
}
?>