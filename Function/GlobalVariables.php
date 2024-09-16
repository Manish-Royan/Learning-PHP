<?php
// Global Variables: To access global variables inside a function, use the `global` keyword.

$globalVar = "I'm global";

function test() {
    global $globalVar;
    echo $globalVar;
}

test(); // Outputs: I'm global

?>
