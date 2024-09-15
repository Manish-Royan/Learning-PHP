<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>SANITIZE</h1></center>
    <form action="" method="post">
        <label>UserName</label>
        <input type="text" name="user_name" placeholder="Enter your name">
        <input type="text" name="age" placeholder="Enter your age">
        <input type="email" name="user_email" placeholder="example@gmail.com">
        <input type="submit" name="login" value="Log-in">
    </form>
</body>
</html>

<?php
    if(isset($_POST['login']))
    {
        $userName = filter_input(INPUT_POST, "user_name", FILTER_SANITIZE_SPECIAL_CHARS);
        echo "Your {$userName} <br/>";
        $userAge = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        echo "Your {$userAge} <br/>";
        $userEmail = filter_input(INPUT_POST, "user_email", FILTER_SANITIZE_EMAIL);
        echo "Your {$userEmail} <br/>";
    }
?>