<!DOCTYPE html>
<html>
<body>
<pre>

<?php  
/*
Using the unset Function: We can also use the `unset()` function to delete existing array items.

[Note: The unset() function does not re-arrange the indexes, meaning that after deletion the array will no longer contain the missing indexes.]
*/
$cars = array("Volvo", "BMW", "Toyota");
unset($cars[1]);
var_dump($cars);

/*Output:
array(2) {
  [0]=>
  string(5) "Volvo"
  [2]=>
  string(6) "Toyota"
}
*/


/*Removing Multiple Array*/
$cars = array("Volvo", "BMW", "Toyota");
unset($cars[0], $cars[1]);

/*Output
array(1) {
  [2]=>
  string(6) "Toyota"
}
*/
?>  

</pre>
</body>
</html>
