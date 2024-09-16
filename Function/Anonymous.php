<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    // Anonymous Functions (Closures): PHP supports anonymous functions, which are functions without a name. They can be assigned to variables or passed as arguments.
    
    $square = function($n) {
        return $n * $n;
    };

    echo $square(4); // Outputs: 16
    ?>
</body>
</html>