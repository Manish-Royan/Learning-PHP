<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    
    <?php
    // VARIABLE IN PHP
    
    // we use $ to initiate a variable
    $str = "HELLO"; // String 
    echo "<h1>" . $str . "</h1>"; // we use (.) dot to concat variable 
    echo "<h2>" . $str . "</h2>"; 
    echo "<h3>" . $str . "<h3>"; // we can like this also -> "<h3>" . $str . "<h3>"; instead of "<h3>" . $str . "</h3>"; the difference is at the end we didin't gave '/' to end html <h3> <h3> taq
    
    // PHP is loosely typed language means that variables do not have a fixed data type. This allows you to assign different types of values to the same variable without explicit type declarations. 

    //PHP automatically associates a data type to the variable
    $num = 5; // integer
    $float = 5.5; // float
    echo "<h1>"  .$num. "</h1>";
    echo "<h1>"  .$float. "</h1>";

    ?>

</body>
</html>