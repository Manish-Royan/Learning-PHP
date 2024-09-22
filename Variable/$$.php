<?php  

/* EXAMPLE -1
The $var (single dollar) is a normal variable with the name var that stores any value like string, integer, float, etc.

The $$var (double dollar) is a reference variable that stores the value of the $variable inside it.
*/
$x = "abc";  
$$x = 200;  
echo $x."<br/>";  
echo $$x."<br/>";  
echo $abc;  

/* output:
In the above example, we have assigned a value to the variable x as abc. Value of reference variable $$x is assigned as 200.
Now we have printed the values $x, $$x and $abc.
*/



/* EXAMPLE -2
we have assigned a value to the variable x as U.P. Value of reference variable $$x is assigned as Lucknow.
Now we have printed the values $x, $$x and a string.
*/

$x="U.P";  
$$x="Lucknow";  
echo $x. "<br>";  
echo $$x. "<br>";  
echo "Capital of $x is " . $$x; //output: Capital of U.P is Lucknow



/* EXAMPLE -3*/
$name="Cat";  
${$name}="Dog";  
${${$name}}="Monkey";  
echo $name. "<br>";  
echo ${$name}. "<br>";  
echo $Cat. "<br>";  
echo ${${$name}}. "<br>";  
echo $Dog. "<br>";  

/*
OUTPUT:
Cat
Dog
Monkey
Monkey
*/
?>  