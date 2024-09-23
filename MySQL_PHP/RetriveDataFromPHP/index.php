<?php
include("../Creating-Connection/database.php"); //database Connection

$sql = "SELECT * FROM users";
$result = mysqli_query($connection_hero, $sql); //this will return an object

try{

    if(mysqli_num_rows($result) > 0) //this function will return how many rows are there in our function result, if there is altleast one condition {>0} then fetch the row
    {
        while ($row = mysqli_fetch_assoc($result)) //if we had multiple rows
        {
            echo "id: ". $row['id']. "<br/>";
            echo "user name: ". $row['user']. "<br/>";
            echo "register date: ". $row['register_date']. "<br/>";
        }

    } else {
        echo "No rows found";
    }
} catch (mysqli_sql_exception) {
    echo "Something went wrong!!";
}


mysqli_close($connection_hero);
?>