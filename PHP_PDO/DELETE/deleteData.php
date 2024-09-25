<?php
include("../creating_connection/dbconnection.php");

$id = 3;

$deleteQuery = "DELETE FROM studentstable WHERE id=?";
$statement = $dbconnection->prepare($deleteQuery);
$result = $statement->execute([$id]); 

if ($result) {
    echo "Data Deleted";
} else {
    echo "Operation failed!!";
    // You might want to add error information here
    print_r($statement->errorInfo());
}
?>