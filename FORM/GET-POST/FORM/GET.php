<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="GET.php" method="get"> <!-- When using 'get' method of a form any data sent ovet to a PHP form appended to the URL, so there is no security because we're appending some sensitive data information such as 'passsword' -->
        <label>UserName: </label>
        <input type="text" name="userName"><br><br>
        
        <label>Password: </label>
        <input type="password" name="password"><br><br>

        <input type="submit" value="Log-in">
    </form>
</body>
</html>

<?php
    echo $_GET["userName"] ."<br/>";

    //or we can aslo use curly braces - for lineBreak <br/> without concating
    echo "{$_GET["password"]} <br/>";
?>