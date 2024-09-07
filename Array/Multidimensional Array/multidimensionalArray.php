<!DOCTYPE html>
<html>
<body>

<?php
/*
- A multidimensional array is an array containing one or more arrays.

- PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people.

-It allows you to store tabular data in an array. PHP multidimensional array can be represented in the form of matrix which is represented by row * column. 
*/

//i. Two-dimensional Arrays: A two-dimensional array is an array of arrays 

$cars = array //Now the two-dimensional `$cars` array contains four arrays, and it has two indices: {row and column}.
(
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
  
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";


/*Output
Volvo: In stock: 22, sold: 18.
BMW: In stock: 15, sold: 13.
Saab: In stock: 5, sold: 2.
Land Rover: In stock: 17, sold: 15.

*/
?>

</body>
</html>
