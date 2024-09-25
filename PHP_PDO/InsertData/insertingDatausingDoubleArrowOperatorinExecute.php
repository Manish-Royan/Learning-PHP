<?php

include("../creating_connection/dbconnection.php");

$insertQuery = "insert into studentstable(name, age, class, gender) values (:name, :age, :class, :gender)";

$statement = $dbconnection->prepare($insertQuery);


//assinging variable for bindingparam
$name = "Lalu Bahiya";
$age = 15;
$class = 12;
$gender = "Male";


//executing
if($statement->execute([':name'=>$name,':age'=> $age,':class'=> $class,':gender'=> $gender])) {
    echo "data inserted.";
} else {
    echo "operation failed!!";
}

?>