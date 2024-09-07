<?php
$car = [
    ["Volvo",22,18],
    ["BMW",15,13],
    ["Saab",5,2],
    ["Land Rover",17,15]
];

for($row = 0; $row < 4; $row++)
{
    echo "<p><b>Row number: $row</b></p>";
    echo "<ul>";
    for($col = 0; $col < 3; $col++)
    {
        echo "<li>" .$car[$row][$col]."</li>";  
    }
    echo"</ul>";
}


?>