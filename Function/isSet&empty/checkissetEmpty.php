<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label>userName: </label>
        <input type="text" name="user_name"><br>
        <label>Password: </label>
        <input type="password" name="user_password"><br>
        <input type="submit" name="login" value="Log-in">
    </form>
</body>

<?php

/*
foreach ($_POST as $key => $value) {
    echo "{$key} = {$value}";
}*/ 


if (isset($_POST["login"])) //checking if the user clicked the log-in button to proceed to check isset and empty
{
   $username = $_POST['user_name'];
   $password = $_POST['user_password'];

   if(empty($username))
   {
    echo "User Name is missing??";
   } elseif(empty($password))
   {
    echo "Password is missing??";
   } else {
    echo "Hello {$username}";
   }
}


?>
</html>