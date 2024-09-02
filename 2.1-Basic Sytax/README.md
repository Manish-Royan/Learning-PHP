# PHP Syntax

A PHP script is executed on the server, and the plain HTML result is sent back to the browser.

## Basic PHP Syntax

**A PHP script can be placed anywhere in the document**.

A PHP script starts with *`<?php`* and ends with *`?>`*

```PHP
<?php
// PHP code goes here
?>
```

**A PHP file normally contains HTML tags, and some PHP scripting code**.

Below, we have an example of a simple PHP file, with a PHP script that uses a built-in PHP function "*`echo`*" to output the text "*Hello World!*" on a web page:

```PHP
<!DOCTYPE html>
<html>
    <body>
    <h1>My first PHP page</h1>

    <?php
        echo "Hello World!"; //Note: PHP statements end with a semicolon (;).
    ?>
    </body>
</html>
```

```
OUTPUT: "Hello World!"
```