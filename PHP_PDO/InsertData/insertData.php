<?php

include("../creating_connection/dbconnection.php");

$insertQuery = "insert into studentstable(name, age, class, gender) values ('Chabaniya', 16, 11, 'female')";

if(!empty($insertQuery))
{
    $dbconnection->query($insertQuery);
    //we can also do 
    //$dbconnection->execute($insertQuery);
    echo "Data Inserted";
} else {
    echo "failed to insert";
}

?>