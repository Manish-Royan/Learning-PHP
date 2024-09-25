<?php

include("../creating_connection/dbconnection.php");

//Storing 'select' query in a variable
$selectquery = "select * from studentstable";

$statement = $dbconnection->query($selectquery);

$result = $statement->fetchAll(PDO::FETCH_ASSOC); //'PDO::FETCH_ASSOC' removes the index from associative array, show data in 'key-value' pairs only

echo "Printing the whole data at once";
echo "<pre>";
print_r($result);
echo "</pre>";


echo "Printing first name only: " . $result[0]['name'];

// Reset the statement to fetch again
$statement->execute();

$result_obj = $statement->fetchAll(PDO::FETCH_OBJ);
echo "<br/>Printing first name only using object: " . $result_obj[0]->name;



?>