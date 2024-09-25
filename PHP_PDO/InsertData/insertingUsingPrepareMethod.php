<?php

include("../creating_connection/dbconnection.php");

$insertQuery = "insert into studentstable(name, age, class, gender) values (:name, :age, :class, :gender)";

$statement = $dbconnection->prepare($insertQuery);


//bindingparam
$statement->bindParam(':name', $name);
$statement->bindParam(':age', $age);
$statement->bindParam(':class', $class);
$statement->bindParam(':gender', $gender);

//assinging variable for bindingparam
$name = "Dubaniya";
$age = 14;
$class = 10;
$gender = "female";


//executing
if($statement->execute()) {
    echo "data inserted.";
} else {
    echo "operation failed!!";
}

?>