<?php

include "../dbconnection.php";


//Creatign a name placeholder for 'id'
$idnum = 1; 
$name = "Chabaniya";

/*CASE-1*/
$selectquery = "select * from studentstable where id=? && name=?"; //when we do positional param we use '?'

//Prepare statement
$statement = $dbconnection->prepare($selectquery);

/*CASE-1*/
$statement->execute([$idnum, $name]); //executing using 'execute' method


//binding into variable
// $statement->bindParam($idnum, $name); //remove parameter
$result = $statement->fetch(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($result);
echo "</pre>";
?>