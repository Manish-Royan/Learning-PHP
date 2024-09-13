<!DOCTYPE html>
<html lang="en">
<head>
   <title>Document</title>
</head>
<body>
    <?php
    //Escape Sequences: PHP supports several escape sequences, each representing a specific character.

    //i. Newline: \n, Carriage Return: \r, Tab: \t
    $string = "First line\nSecond line\rThird line\tTabbed";
    echo $string;
    /*
    Outputs:
    First line
    Second line
    Third line    Tabbed
    */

    //ii. Double-Quoted Strings: Interpret escape sequences and variable interpolation. 
    $name = "John";
    $string = "Hello, $name\nWelcome!";
    echo $string;
    // Outputs:
    // Hello, John
    // Welcome!

    
    //iii. Single-Quoted Strings: Treat most characters as literals. The only recognized escape sequences are \\ and \'.
    $name = 'John';
    $string = 'Hello, $name\nWelcome!';
    echo $string; // Outputs: Hello, $name\nWelcome!








    ?>
</body>
</html>