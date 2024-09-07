<!DOCTYPE html>
<html>
<body>
<pre>

<?php  
/*
Remove Array Item: To remove an existing item from an array, you can use the `array_splice()` function.

With the array_splice() function you specify the index (where to start) and how many items you want to delete.
*/
$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1);
var_dump($cars);

/* Output:
array(2) {
  [0]=>
  string(5) "Volvo"
  [1]=>
  string(6) "Toyota"
}
*/

//After the deletion, the array gets reindexed automatically, starting at index 0.

/*Remove Multiple Array Items*/

$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 2);
/*Output:
array(1) {
  [0]=>
  string(5) "Volvo"
}
*/
?>  

</pre>
</body>
</html>
