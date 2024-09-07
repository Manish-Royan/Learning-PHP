<?php
$matrix = array(
    array(2, 5, 7, 8),
    array(1, 2, 3, 1),
    array(4, 5, 0, 9)
);

for($i = 0; $i<count($matrix); $i++)
{
    for($j =0; $j<count($matrix[$i]); $j++)
    {
        echo $matrix[$i][$j];
        echo " ";
    }

    echo "<br/>";
}

?>