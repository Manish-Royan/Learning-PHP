<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <button type="submit" name="btn" value="msg">Click</button>
    </form>
</body>
</html>

<?php

if(isset($_REQUEST['btn'])){
    btn_click();
}
function btn_click ()
{
    echo "function called";
}

?>