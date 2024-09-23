<?php
include("dbconnection.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <center><h2>FakeBook</h2></center>
        <label>User: </label>
        <input type="text" name="userName" placeholder="Enter your name"/><br/><br/>
        <label>Password: </label>
        <input type="password" name="user_password"/><br/>
        <input type="submit" name="login" value="log-in">
    </form>
</body>
</html>

<?php

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $username = filter_input(INPUT_POST, "userName", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "user_password", FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($username)){
            echo "Please ENTER user name";
        } elseif (empty($password)) {
            echo "Please Enter a password";
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (user_name, password)
                    VALUES ('$username', '$password')";
            try {
                mysqli_query($connection, $sql);
                echo "You are now register";
            } catch (mysqli_sql_exception)
            {
                echo "User name is taken or something went wrong"; //username must be unique other wise it will throw expection
            }
        }
    }

mysqli_close($connection);
?>