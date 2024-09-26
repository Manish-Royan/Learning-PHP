<?php

session_start(); //first we start the session_start(), then we add HTML to display
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h3>This is login-page</h3></center>
    <form action="index.php" method="post">
        <label>userName: </label>
        <input type="text" name="user_name"/> <br/><br/>
        <label>Password: </label>
        <input type="password" name="user_password"/> <br/><br/>
        <input type="submit" name="login" value="log-in">
    </form>
</body>
</html>

<?php
    //Aftewr user clicked the submit then we'll assign seesion variable
    if(isset($_POST['login']))
    {
        //before we log-in we have the check if the user had login without filling input
        if(!empty($_POST['user_name']) && !empty($_POST['user_password']))
        {
             //Creating a session variable to store $_POST[] value
            $_SESSION['sessionVariabe_Name'] = $_POST['user_name'];
            $_SESSION['sessionVariabe_Password'] = $_POST['user_password'];

            //After hitting the login we will redirect the page to home.php, for this we'll be usign 'header()' function
            header("Location: home.php");

        }
        else {
            echo "Missing username or password <br/>";
        }
    }
?>