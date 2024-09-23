<?php

$db_server = "localhost: 3307";
$db_user = "root";
$db_password = "";
$db_name = "projectfirst";
$connection = "";

try {
    $connection = mysqli_connect($db_server, $db_user, $db_password, $db_name);
} catch (mysqli_sql_exception) {
    echo "Connection failed!!";
}

if($connection);
?>