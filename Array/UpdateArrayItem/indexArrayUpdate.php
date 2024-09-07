<!DOCTYPE html>
<html>
<body>
<pre>

<?php  
/*
- Update Array Items in a Foreach Loop
    * There are different techniques to use when changing item values in a foreach loop.

    One way is to insert the `&` character in the assignment to assign the item value by reference, and thereby making sure that any changes done with the array item inside the loop will be done to the original array:
*/
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
  $x = "Ford";
}
unset($x);
/*
[Note: Remember to add the `unset()` function after the loop.

Without the `unset($x)` function, the `$x` variable will remain as a reference to the last array item.
]
*/
var_dump($cars);

/*Output:
array(3) {
  [0]=>
  string(4) "Ford"
  [1]=>
  string(4) "Ford"
  [2]=>
  string(4) "Ford"
}

*/
?>  

</pre>
</body>
</html>
