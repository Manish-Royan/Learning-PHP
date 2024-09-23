<?php
$host = "localhost:3307";
$db_user = "root";
$db_password = ""; //when userName is "root" we should leave password empty

try {
    //PDO - PHP Data Object
    $connection = new PDO("mysql:host=$host;dbname=college", $db_user, $db_password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connection was Successful";

    //getting the tables from database
    $result = $connection->query("SHOW TABLES");

    echo "<br/><br/><br/>";

    while($row = $result->fetch(PDO::FETCH_NUM)) {
        print_r($row);
    }

} catch(PDOException $err) {
    echo "Connection failed: " . $err->getMessage(); 
}
?>