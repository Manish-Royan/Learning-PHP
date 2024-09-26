<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="form.php" method="post">--> <!-- if the form action is changed it will be give problem so -->
    <!-- $_SERVER['PHP_SELF'] helps to get the current file name, to aviod any cross side script we use `htmlspecialchars($SERVER['PHP_SELF'])-->
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        userName: <br/>
        <input type="text" name="userName">
        <button type="submit">Submit</button>
    </form>
</body>
</html>