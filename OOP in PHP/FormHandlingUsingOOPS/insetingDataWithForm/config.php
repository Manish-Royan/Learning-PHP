<?php
$host = "localhost:3307";
$db_user = "root";
$db_password = ""; //when userName is "root" we should leave password empty

try {
    //PDO - PHP Data Object
    $connection = new PDO("mysql:host=$host;dbname=college", $db_user, $db_password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
} catch(PDOException $err) {
    echo "Connection failed: " . $err->getMessage(); 
}
?>