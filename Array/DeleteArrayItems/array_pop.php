<!DOCTYPE html>
<html>
<body>
<pre>

<?php 
//The array_pop() function removes the last item of an array. 
$cars = array("Volvo", "BMW", "Toyota");
array_pop($cars);
var_dump($cars);

/*Output:
array(2) {
  [0]=>
  string(5) "Volvo"
  [1]=>
  string(3) "BMW"
}
*/
?>  

</pre>
</body>
</html>
