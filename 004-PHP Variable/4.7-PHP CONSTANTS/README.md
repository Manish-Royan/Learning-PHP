# [PHP CONSTANTS](https://www.phptutorial.net/php-tutorial/php-constants/)
A constant is simply a name that holds a single value. As its name implies, the value of a constant cannot be changed during the execution of the PHP script.

Constants are like variables, except that once they are defined they cannot be changed or undefined.

## Create a PHP Constant
#### To create a constant, use the `define()` function.
```
define(name, value, case-insensitive)  
```

* **Parameters**:
    * **name**: Specifies the name of the constant
    * **value**: Specifies the value of the constant
    * **case-insensitive**: Specifies whether a constant is case-insensitive. Default value is false. It means it is case sensitive by default.


## `define()` function
#### To define a constant, you use the  `define()` function. The  `define()` function takes the constant’s name as the first argument and the constant value as the second argument. For example:

```PHP
<?php 
define('WIDTH','1140px');
echo WIDTH; //By default, constant names are case-sensitive. It means that WIDTH and width are different constants.
?>
```

By convention, **constant names are uppercase**. Unlike a variable, **the constant name doesn’t start with the `dollar sign($)`**.

#### [NOTE: It’s possible to define case-insensitive constants. However, it’s deprecated since PHP 7.3]


* ## Constant with case-insensitive name:
```PHP
<?php    
define("MESSAGE","Hello PHP",true);//not case sensitive    
echo MESSAGE, "</br>";    
echo message;    
?>    
```
#### Output:
```
Hello PHP
Hello PHP
```

## The `const` keyword
PHP provides you with another way to define a constant via the `const` keyword. Here’s the syntax:
```
const CONSTANT_NAME = value;
```

In this syntax, we define the constant name after the `const` keyword. To assign a value to a constant, you use the assignment operator (=) and the constant value. The constant value can be scalar, e.g., *number*, *string*, or *array*.

* The following example uses the const keyword to define the *SALES_TAX* constant:
```PHP
<?php

const SALES_TAX = 0.085;

$gross_price = 100;

$net_price = $gross_price * (1 + SALES_TAX);

echo $net_price; // 108.5
?>
```

## `define` vs `const`

First, the `define()` is a function while the const is a language construct.

It means that the `define()` function defines a constant at run-time, whereas the `const` keyword defines a constant at compile time.

* In other words, you can use the `define()` function to define a constant conditionally like this:
```PHP
<?php

if(condition) 
{
    define('WIDTH', '1140px');
}
?>
```

* However, you cannot use the `const` keyword to define a constant this way. For example, the syntax of the following code is invalid:
```PHP
<?php 

if(condition) 
{
   const WIDTH = '1140px';
}

?>
```

Second, the `define()` function allows you to define a constant with the name that comes from an expression. 

* For example, the following defines three constants `OPTION_1`, `OPTION_2`, and `OPTION_3` with **the values *1*, *2*, and *3***.
```PHP
<?php

define('PREFIX', 'OPTION');

define(PREFIX . '_1', 1);
define(PREFIX . '_2', 2);
define(PREFIX . '_3', 3);

?>
```

#### [NOTE: However, you cannot use the `const` keyword to define a constant name derived from an expression. Note that we can use the `const` keyword to define constants inside classes.]


## PHP Constant Arrays
### In PHP 5, a constant can hold a simple value like a number, a string, a boolean value. From PHP 7.0, a constant can hold an array. For example:
```PHP
<?php
define( 'ORIGIN', [0, 0] );
?>
```
#### [NOTE: Like superglobal variables, you can access constants from anywhere in the script.]

* The following example uses the const keyword to define the RGB constant that holds an array:
```PHP
<?php

const RGB = ['red', 'green', 'blue'];
?>
```

## Constants are Global
#### Constants are automatically global and can be used across the entire script.
```PHP

<?php
define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETING;
}
 
myTest();
?> 
```

#### Output:
```
GREETING
```

## Constant() function
There is another way to print the value of constants using `constant()` function instead of using the `echo` statement.

* #### The syntax for the following constant function:
```
constant (name)  
```