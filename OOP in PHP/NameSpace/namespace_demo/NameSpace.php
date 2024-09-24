<?php

/*
- Namespaces in PHP are a way to encapsulate and organize code into distinct sections, allowing developers to avoid name collisions when using similar or identical class, function, or constant names across different libraries or components. They help in organizing code, especially in large applications or when using third-party libraries.


* Why Use Namespaces?
    1. Avoiding Name Collisions: In large projects, or when integrating multiple libraries, it’s possible to have classes, functions, or constants with the same name. Namespaces allow these to coexist without conflict.
    2. Code Organization: Namespaces help to logically group related classes, interfaces, functions, and constants, making the codebase easier to navigate and maintain.
    3. Autoloading: Namespaces are often used in conjunction with autoloading, where classes are automatically loaded when needed, usually based on their namespace and file structure.

*/


//i. Defining a Namespace: To define a namespace, use the `namespace` keyword at the top of a PHP file.

namespace MyApp\Models; //In this example, the `User` class is part of the `MyApp\Models` namespace.

class User {
    public function getName() {
        return "John Doe";
    }
}





//ii. Using a Namespace: To use a class from a namespace, you can either reference it with its fully qualified name or use the `use` keyword to import it.

require 'User.php';

$user = new \MyApp\Models\User();
echo $user->getName(); // Outputs: John Doe

?>