<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        //Using Functions as Callbacks: Functions can be used as callbacks, often in array functions or event handling. 
        $array = [1, 2, 3, 4];
        $result = array_map(function($n) // Functions used as arguments.
        {
            return $n * 2;
        }, $array);

        print_r($result); // Outputs: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 )


        //Multiple Array
        $array1 = [1, 2, 3];
        $array2 = [4, 5, 6];

        $sum = array_map(function($a, $b) {
            return $a + $b;
        }, $array1, $array2);

        print_r($sum);
        // Outputs: Array ( [0] => 5 [1] => 7 [2] => 9 )


    ?>
</body>
</html>