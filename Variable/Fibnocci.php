<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    function fibonacci($n) {
        static $fibCache = array(); // Cache for computed values
    
        if ($n <= 1) {
            return $n;
        }
    
        if (isset($fibCache[$n])) //`isset` function in PHP is used to determine if a variable is set and is not null.
        {
            return $fibCache[$n];
        }
    
        $fibCache[$n] = fibonacci($n - 1) + fibonacci($n - 2);
        return $fibCache[$n];
    }
    
    echo fibonacci(10); // Outputs: 55
    
    ?>
</body>
</html>