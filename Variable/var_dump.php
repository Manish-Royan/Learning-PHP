<!DOCTYPE html>
<html>
<body>

<?php
//To get the data type of a variable, use the var_dump() function.


$x = 5;
$b = var_dump($x); 
echo $b; //Output: int(5)
?>


<pre>

<?php
var_dump(5); //int(5)
var_dump("John"); //string(4) "John"
var_dump(3.14); //float(3.14)
var_dump(true); //bool(true)
var_dump([2, 3, 56]); 
/*
array(3) {
  [0]=>
  int(2)
  [1]=>
  int(3)
  [2]=>
  int(56)
}
*/
var_dump(NULL); //NULL

?>
</pre>

</body>
</html>
