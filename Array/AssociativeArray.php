<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label>Enter a country: </label>
        <input type="text" name="country">
        <input type="submit" value="Find Capital">
    </form>
</body>
</html>



<?php

$capital_of_the_country = array (
    "USA" => "Washington D.C",
    "Japan" => "Tokyo",
    "South-Korea" => "SEOUL",
    "NEPAL" => "KATHMANDU"
);

$capital = $capital_of_the_country[$_POST["country"]];
echo "The capital of {$capital}";




/*WATCH the below code to remove you confusion*/
// $prining = $capital_of_the_country["USA"]; //as this variable only stores the value from key
// echo $prining;


?>