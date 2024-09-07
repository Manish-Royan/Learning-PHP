<?php

echo "<h1 style='text-align: center;'>Creams Hero Employs Table</h1>";

$employ =[
    [1, "MOMO", "Chair Person", "7500$"],
    [2, "Lulu", "Assistance Head", "1000$"],
    [3, "Lala", "Secretory", "2500$"],
    [4, "COCO", "CEO", "8000$"],

];
echo "<center>";
echo "<table border='1px' cellpadding='5px' cellspacing = '0' style='width: 75vw;'>
	  <tr>
      	<th>ID</th>
      	<th>Employ Names</th>
      	<th>Post</th>
      	<th>Salary</th>
      </tr>

";

foreach ($employ as $D1) //row
{
    echo "<tr>";
    foreach ($D1 as $D2) //col
    {
        echo "<td>". $D2 ."</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "</center>";

?>