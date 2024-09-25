<?php

include "../dbconnection.php";


//Creatign a name placeholder for 'id'
$idnum = 1; 
$name = "Chabaniya";

/*CASE-2*/
$selectquery = "select * from studentstable where id=:idnum && name=:name"; 

//Prepare statement
$statement = $dbconnection->prepare($selectquery);

/*CASE-2*/
$statement->execute(['idnum'=>$idnum, 'name'=> $name]); //using 'double arrow operator'

$result = $statement->fetch(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($result);
echo "</pre>";
?>