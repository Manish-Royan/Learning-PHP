<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // built-in function: "echo"

    // user-defined function
    function name()
    {
        for ($var = 1; $var <= 6; $var++)
        {
            echo "Number: $var <br>";
        }
    }

    //Calling Function
    name(); //calling a function 

    ?>
</body>
</html>