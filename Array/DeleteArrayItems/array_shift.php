<!DOCTYPE html>
<html>
<body>
<pre>

<?php  
//The array_shift() function removes the first item of an array.

$cars = array("Volvo", "BMW", "Toyota");
array_shift($cars);
var_dump($cars);

/*Output
array(2) {
  [0]=>
  string(3) "BMW"
  [1]=>
  string(6) "Toyota"
}
*/
?>  

</pre>
</body>
</html>
