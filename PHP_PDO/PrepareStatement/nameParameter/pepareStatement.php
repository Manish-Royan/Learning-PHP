<?php

include "../dbconnection.php";


//Crestign a name placeholder for 'id'
$idnum = 1; 

$selectquery = "select * from studentstable where id=:idnum";

//Prepare statement
$statement = $dbconnection->prepare($selectquery);

//binding into variable
$statement->bindParam(':idnum', $idnum);

$statement->execute();

$result = $statement->fetch(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($result);
echo "</pre>";
?>