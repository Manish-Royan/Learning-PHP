<!DOCTYPE html>
<html>
<body>

<?php
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

    
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}

/*OUTPUT:
Row number 0

* Volvo
* 22
* 18

Row number 1

* BMW
* 15
* 13

Row number 2

* Saab
* 5
* 2
Row number 3

* Land Rover
* 17
* 15

*/


// Same with short method
$cat = [
    ["Name: Lulu", "Age: 2", "Breed: Munchkin"],
    ["Name: Lala", "Age: 2.5", "Breed: Persian Munchkin"],
    ["Name: Dhun-Tung", "Age: 3", "Breed: Forest Highlander"]
];

for ($row = 0; $row < 3; $row++) {
    echo "<p><b>Cat number $row:</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>" . $cat[$row][$col] . "</li>";
    }
    echo "</ul>";
}


// Same with short method
$Dog = [
    ["Name: ", "Age: ", "Breed: "],
    ["Name: ", "Age: ", "Breed: "],
    ["Name: ", "Age: ", "Breed: "]
];

for ($i = 0; $i < count($Dog); $i++) {
    echo "<p><b>Dog number $i:</b></p>";
    echo "<ul>";
    for ($j = 0; $j < count($Dog[$i]); $j++) {
        echo "<li>" . $cat[$i][$j] . "</li>";
    }
    echo "</ul>";
}


?>

</body>
</html>
