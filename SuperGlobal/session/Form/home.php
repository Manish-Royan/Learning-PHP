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
    <form action="home.php" method="post">
        <input type="submit" name="logout" value="Log-out">
    </form>
</body>
</html>


<?php 
    echo "UserName: {$_SESSION['user_name']} <br/>";
    echo "UserPassword: {$_SESSION['password']} <br/>";


    if(isset($_POST['logout']))
    {
        //if this fucntion is set then we will end our session
        session_destroy();
        header("Location: index.php");
    }
?>