<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    
    <?php

    //1. Dynamic Typing: You can change a variable's type simply by assigning it a new value of a different type.
    $var = 10;       // $var is an integer
    $var = "hello";  // Now $var is a string
    echo "<h1>".$var."</h1>";


    //2. Constant Variable -> constant vatiable can't be changed.
    //To declare a constant we first intialised with 'define("const_variableName", "value"); value can be interger or string or any type
    define("constant_S", "Hello");
    echo "<h3>".constant_S."</h3>";
    define("const_num", 5);
    echo "<h3>".const_num."</h3>";


    //3. Type Juggling: PHP automatically converts variables between different types as needed, depending on the context in which they are used. For example, if you use a string in an arithmetic operation, PHP will convert it to a number.
    $a = "5";
    $b = 2;
    $result = $a + $b;  // $result is 7 (string "5" is converted to integer)
    echo "<h1>".$result."</h1>";

    
    //4. No Explicit Declarations: You don’t need to explicitly declare a variable's type when you create it, which can make coding faster and more flexible.
    $name = "Alice";  // No type declaration needed
    echo "<h1>".$name."</h1>";


    //5. Variable Variables: PHP allows you to use a variable's value as the name of another variable using variable variables. This is achieved by using double dollar signs ($$) followed by the name of the variable containing the target variable's name.
    $varName = "message";
    $$varName = "Hello, World!";  // Creates $message variable with value "Hello, World!"
    
    echo $message;  // Outputs: Hello, World!


    //6. Assign Multiple Values
    $x = $y = $z = "Fruit";


    ?>

</body>
</html> 