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
    <center><h3>This is home-page</h3></center><br/>
    <a href="indexTEST.php">This goes to login page</a><br>
</body>
</html>


<?php
    echo $_SESSION['user_name'] ."<br/>";
    echo $_SESSION['password'] ."<br/>";
?>