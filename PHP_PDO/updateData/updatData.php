<?php
include("../creating_connection/dbconnection.php");

$id = 3;
$name = "Chagan Bitwa"; // changing the name of 'Lalu Bhaiya'

$updateQuery = "UPDATE studentstable SET name = :name WHERE id = :id";
$statement = $dbconnection->prepare($updateQuery);
$result = $statement->execute(['name' => $name, 'id' => $id]); 

if ($result) {
    echo "Data updated";
} else {
    echo "Operation failed!!";
    // You might want to add error information here
    print_r($statement->errorInfo());
}
?>