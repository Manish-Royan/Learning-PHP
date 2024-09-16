<?php

//Default Parameter Values: You can define default values for parameters. If no argument is passed, the default value is used.

    function greet($name = "Guest") {
        echo "Hello, $name!";
    }
    
    greet(); // Outputs: Hello, Guest!
    greet("John"); // Outputs: Hello, John!
    
?>