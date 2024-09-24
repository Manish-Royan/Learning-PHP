<?php
/*

- In PHP, magic methods are special methods that are automatically called in certain situations. These methods start with a double underscore (__). They allow you to define behaviors for when certain actions are performed on an object, like accessing a property, calling a method that doesn’t exist, or serializing an object.


- We can't forcefull call magic method, it is called on an event.

*/


//i.  __construct() - The Constructor: 
/*
Purpose: This method is automatically called when a new instance of a class is created.
Usage: Typically used to initialize properties or perform setup tasks.
*/

class User {
    public function __construct() {
        echo "User object created!";
    }
    
}

$user = new User(); // Outputs: User object created!

?>