# [PHP $ and $$ Variables](https://www.javatpoint.com/php-dollar-doubledollar)
The `$var` (single dollar) is a normal variable with the name var that stores any value like string, integer, float, etc.

The `$$var` (double dollar) is a **reference variable** that stores the value of the $variable inside it.

To understand the difference better, let's see some examples.

```PHP
<?php  
$x = "abc";  
$$x = 200;  
echo $x."<br/>";  
echo $$x."<br/>";  
echo $abc;  
?>  
```
#### Output:
```
abc
200
200
```

```PHP
<?php  
$x="Nepal";  
$$x="Kathmandu";  
echo $x. "<br>";  
echo $$x. "<br>";  
echo "Capital of $x is " . $$x;  
?>  
```
#### Output:
```
Nepal
Kathmandu
Capital of Nepal is Kathmandu
```