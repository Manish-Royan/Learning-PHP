# PHP Comments

A comment in PHP code is a line that is not executed as a part of the program. Its only purpose is to be read by someone who is looking at the code.

### Comments can be used to:

* Let others understand your code
* Remind yourself of what you did - Most programmers have experienced coming back to their own work a year or two later and having to re-figure out what they did. Comments can remind you of what you were thinking when you wrote the code
* Leave out some parts of your code

##
```PHP
<!DOCTYPE html>
<html>
<body>
 
<?php
// This is a single-line comment

# This is also a single-line comment

/* This is a
multi-line comment */
?>
 
</body>
</html>
```
##

### Single Line Comments
Single line comments start with `//`. Any text between `//` and the end of the line will be ignored (will not be executed). We also use `#` for single line comments, but in this tutorial we will use //.

```PHP
// this is a single line comment
```

### Comments to Ignore Code
We can use comments to prevent code lines from being executed:

```PHP
// echo "Welcome Home!";
```

##

### Multi-line Comments
Multi-line comments start with `/*` and end with `*/`. Any text between `/*` and `*/` will be ignored.

```PHP
/*
This 
is 
multiple line
comment.
*/
```

### Multi-line Comments to Ignore Code
We can use multi-line comments to prevent blocks of code from being executed:

```PHP
<!DOCTYPE html>
<html>
<body>

<?php
/*
echo "Welcome to my home!";
echo "Mi casa su casa!";
*/
echo "Hello!";
?>
 
</body>
</html>
```

### Comments in the Middle of the Code
The multi-line comment syntax can also be used to prevent execution of parts inside a code-line:

```PHP
<!DOCTYPE html>
<html>
<body>

<p>Using comments to ignore parts of a code line:</p>
 
<?php
$x = 5 /* + 15 */ + 5;
echo $x;
?>
 
</body>
</html>
```

#### Output
```
Using comments to ignore parts of a code line:

10
```