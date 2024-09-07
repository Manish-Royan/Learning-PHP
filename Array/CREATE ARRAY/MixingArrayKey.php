<!DOCTYPE html>
<html>
<body>
<pre>

<?php  

//Mixing Array Keys: We can have arrays with both indexed and named keys:
$myArr = [];
$myArr[0] = "apples";
$myArr[1] = "bananas";
$myArr["fruit"] = "cherries";

var_dump($myArr);

/*Output:
array(3) {
  [0]=>
  string(6) "apples"
  [1]=>
  string(7) "bananas"
  ["fruit"]=>
  string(8) "cherries"
}
*/
?>  

</pre>
</body>
</html>
