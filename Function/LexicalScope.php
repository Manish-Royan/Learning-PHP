<?php
/*
- Lexical Scope: Arrow functions inherit variables from the parent scope automatically, which is known as lexical scope. This means you don’t need to use the use keyword to access variables from the parent scope.

*/
$factor = 10;
$multiply = fn($n) => $n * $factor;
echo $multiply(5); // Outputs: 50



//In contrast, an anonymous function would require the `use` keyword:
$factor = 10;
$multiply = function($n) use ($factor) {
    return $n * $factor;
};
echo $multiply(5); // Outputs: 50

?>