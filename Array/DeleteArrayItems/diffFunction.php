<!DOCTYPE html>
<html>
<body>
<pre>

<?php  

/*
Using the `array_diff` Function: You can also use the array_diff() function to remove items from an associative array.

This function returns a new array, without the specified items.

[NOTE:The `array_diff()` function takes values as parameters, and not keys.]
*/
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$newarray = array_diff($cars, ["Mustang", 1964]);
var_dump($newarray);

/*Output
array(1) {
  ["brand"]=>
  string(4) "Ford"
}
*/
?>  

</pre>
</body>
</html>
