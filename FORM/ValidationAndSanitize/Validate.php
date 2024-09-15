<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>Welcome to Validation</h1></center>
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
        $userAge = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

        if (empty($userAge))
        {
            echo "That number wasn't valid";
        } else {
            echo "Your {$userAge} <br/>";
        }

        $userEmail = filter_input(INPUT_POST, "user_email", FILTER_VALIDATE_EMAIL);
        if (empty($userAge))
        {
            echo "That email wasn't valid";
        } else {
            echo "Your {$userEmail} <br/>";
        }
        
    }
?>