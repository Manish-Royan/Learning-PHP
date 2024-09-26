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
    <center><h3>This is login-page</h3></center><br/>
    <a href="homeTEST.php">This goes to home page</a><br>

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
    $_SESSION['user_name'] = "Lulu";
    $_SESSION['password'] = "meow@123";

    echo $_SESSION['user_name'] ."<br/>";
    echo $_SESSION['password'] ."<br/>";

    //Aftewr user clicked the submit then we'll assign seesion variable
    if(isset($_POST['login']))
    {
        //Creating a session variable
        $_SESSION['sessionVariabe_Name'] = $_POST['user_name'];
        $_SESSION['sessionVariabe_Password'] = $_POST['user_password'];

        //before we log-in we have the check if the user had 
    }
?>