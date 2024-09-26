<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <input type="text" name="user" placeholder="Enter your name"/><br><br/>
        <button type="submit" name="btn" value="set">Set Cookies</button><br><br/>
        <button type="submit" name="btn" value="display">Display Cookies</button><br><br/>
        <button type="submit" name="btn" value="delete">Delete Cookies</button><br><br/>
    </form>
</body>
</html>


<?php
    if(isset($_POST['btn'])) {
        if ($_POST['btn'] == 'set') {
            if (!empty($_POST['user'])) {
                $val = $_POST['user'];
                setcookie('user', $val, time() + 86400, "/");
                echo "Cookie is set <br/>";
            } else {
                echo "Please enter a username <br/>";
            }
        }
        
        if ($_POST['btn'] == 'display') {
            if(isset($_COOKIE['user'])) {
                echo "Cookie value: " . htmlspecialchars($_COOKIE['user']) . "<br/>";
            } else {
                echo "Cookie is not set.<br/>";
            } 
        }
    
        if ($_POST['btn'] == 'delete') {
            if(isset($_COOKIE['user'])) {
                setcookie("user", "", time() - 3600, "/");
                echo "Cookie deleted!<br/>" ;
            } else {
                echo "Cookie doesn't exist!<br/>";
            }
        }
    }
    ?>

<?php

/*
- PHP cookie is a small piece of information which is stored at client browser. It is used to recognize the user.

- Cookie is created at server side and saved to client browser. Each time when client sends request to the server, cookie is embedded with request. Such way, cookie can be received at the server side.

*/

?>
   