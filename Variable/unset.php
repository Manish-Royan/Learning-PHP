<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    // Definition: The `unset()` function in PHP is used to destroy a specified variable. When we use `unset()` on a variable, it effectively removes that variable from the current scope, making it undefined. This is useful for freeing up memory or removing elements from arrays.

    // Syntax: unset($variable);

    // Example
    $var = "Hello, World!";
    unset($var);
    echo $var; // Outputs: Notice: Undefined variable: var


    // Unsetting Multiple Variables
    $a = 10;
    $b = 20;
    $c = 30;
    unset($a, $b, $c);
    echo $a; // Outputs: Notice: Undefined variable: a
    echo $b; // Outputs: Notice: Undefined variable: b
    echo $c; // Outputs: Notice: Undefined variable: c

    // Unsetting Global Variables: If you need to `unset` a global variable within a function, you must use the `global` keyword. 

    $var = "Hello, World!";
    function unsetGlobalVar() {
        global $var;
        unset($var);
    }
    unsetGlobalVar();
    echo $var; // Outputs: Notice: Undefined variable: var



    /*
    1. Important Notes
        i.Memory Management: Unsetting variables can help manage memory usage, especially for large arrays or objects.
        ii.Re-declaration: After a variable is unset, you can redeclare it without any issues.
        iii.Unset Inside Functions: Unsetting a variable inside a function only affects the local scope unless you explicitly use the global keyword.

    2. Summary
        i.Purpose: unset() destroys a variable, making it undefined.
        ii.Arrays: You can remove specific elements from both indexed and associative arrays.
        iii.Multiple Variables: You can unset multiple variables at once.
        iv.Scope: Unsetting affects the current scope; for global variables, use the global keyword. 
    */
    ?>
</body>
</html>