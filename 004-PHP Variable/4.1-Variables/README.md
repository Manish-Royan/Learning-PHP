# PHP Variables

In PHP, a variable is declared using a `$` sign followed by the *variable name*. Here, some important points to know about variables:

* As **PHP is a loosely typed language**, so we do not need to declare the data types of the variables. It automatically analyzes the values and makes conversions to its correct datatype.
* After declaring a variable, it can be reused throughout the code.
* Assignment Operator (`=`) is used to assign the value to a variable.

## Define a variable
A variable stores a value of any type, e.g., a **string**, a **number**, an **array**, or an **object**.

A variable has a name and is associated with a value. To define a variable, we use the following syntax:

```PHP
$variable_name = value;
```

### When defining a variable, we need to follow these rules:

* The variable name must start with the dollar sign (`$`).
* The first character after the dollar sign (`$`) must contain alpha-numeric character and underscore (A-z, 0-9, _).
* The remaining characters can be **underscores**, **letters**, or **numbers**.
* **PHP variables are case-sensitive**. It means that `$message` and `$Message` variables are entirely different.
* A PHP variable name cannot contain spaces.
* One thing to be kept in mind that the variable name cannot start with a number or special symbols excepts underscore (_) character.

## Creating (Declaring) PHP Variables
In PHP, a variable starts with the `$` sign, followed by the name of the variable:

```PHP
<!DOCTYPE html>
<html>
<body>

<?php
$x = 5;
$y = "John"; // When you assign a text value to a variable, put quotes around the value.

echo $x;
echo "<br>";
echo $y;
?>

</body>
</html>
```

#### Output
```
5
John
```

In the example above, the variable `$x` will hold the value *5*, and the variable `$y` will hold the value *"John"*.
 
#### [NOTE: Unlike other programming languages, PHP has no command for declaring a variable. It is created the moment we first assign a value to it.]

## Shorter way 
Another shorter way to show the value of a variable on a page is to use the following syntax:
```
<?= $variable_name ?>
```

For example, the following shows the value of the $title variable in the heading:
```PHP
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables</title>
</head>
<body>
    <?php
		$title = 'PHP is awesome!';
	?>
    
    <h1><?= $title; ?></h1>
</body>
</html>
```
Mixing *PHP* code with *HTML* will make the code unmaintainable, especially when the application grows. To avoid this, we can separate the code into separate files. For example:

* `index.php` – store the logic for defining and assigning value to variables.
    The following shows the contents of the `index.php` file:
    ```PHP
    <?php

        $title = 'PHP is awesome!';
        require 'index.view.php';
    ?>
    ```

* `index.view.php` – store the code that displays the variables.
    The following shows the contents of the `index.view.php` file:
    ```PHP
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Variables</title>
    </head>
    <body>
        <h1><?= $title ?></h1>
    </body>
    </html>
    ```
* Use the require construct to include the code from the `index.view.php` in the `index.php` file. By doing this, we separate the code responsible for logic and the code responsible for displaying the file. This is called the separation of concerns (SoC) in programming.


## PHP is a Loosely Typed Language
PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a `strict` sense, we can do things like adding a string to an integer without causing an error.

In PHP 7, type declarations were added. This gives an option to specify the data type expected when declaring a function, and by enabling the **strict** requirement, it will throw a "*Fatal Error*" on a type mismatch.