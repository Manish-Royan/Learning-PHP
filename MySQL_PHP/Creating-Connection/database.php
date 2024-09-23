<?php

//Anything related to connecting to the darabase we will handle to this 'datavase.php' file

    $db_server = "localhost: 3307"; //this hold the name of the server
    $db_user = "root";
    $db_password = ""; //when userName is "root" we should leave password empty
    $db_name = "businessdb";
    $connection_hero = ""; //this is connection variable and this variable is a object  

    try {
    //Now establishing the connection to mySQL dataase
    $connection_hero = mysqli_connect( $db_server, $db_user,  $db_password, $db_name); //this represent our current connection

    } catch(mysqli_sql_exception)
    {
        echo "couldn't connect!! <br/>";
    }

    if($connection_hero) //if our connection exist
    {
        echo "You are connected <br/>";
    } else {
        echo "You are not connected <br/>";
    }
?>