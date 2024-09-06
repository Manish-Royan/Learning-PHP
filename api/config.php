<?php

    $db_server = "localhost: 3307";
    $db_user = "root";
    $db_password = ""; 
    $db_name = "api";
    $connection = ""; 

    try {
        $connection = mysqli_connect( $db_server, $db_user,  $db_password, $db_name); 
        $response = array(); //this will stored the respone from the server/database


    } catch(mysqli_sql_exception)
    {
        echo "couldn't connect!! <br/>";
    }

    if($connection) //if our connection exist
    {
        $sql = "SELECT * FROM users";
        $result = mysqli_query($connection, $sql);

        if($result)
        {
            $counter = 0;
            //we will fetch the data and display in 'JSON' format
            while($row = mysqli_fetch_assoc($result))
            {
                $response[$counter]['id'] = $row['id'];
                $response[$counter]['name'] = $row['name'];
                $response[$counter]['age'] = $row['age'];
                $response[$counter]['email'] = $row['email'];

                $counter++;
            }

            echo json_encode($response, JSON_PRETTY_PRINT);
        }
    } else {
        echo "Database connection failed <br/>";
    }
?>