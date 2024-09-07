<?php
/*
$marks = array (
    "Lulu" => array("Computer Science" => 45, "Math" => 40, "Java" => 50),
    "Lala" => array("Computer Science" => 50, "Math" => 45, "Java" => 40),
    "COCO" => array("Computer Science" => 44, "Math" => 50, "Java" => 50),
    "Dung-Tung" => array("Computer Science" => 35, "Math" => 30, "Java" => 40)
);
*/


//Same but diiferent way

$marks = [
    "Lulu" => 
    [
        "Computer Science" => 45, 
        "Math" => 40, 
        "Java" => 50
    ],

    "Lala" => 
    [
        "Computer Science" => 50, 
        "Math" => 45, 
        "Java" => 40
    ],

    "COCO" => 
    [
        "Computer Science" => 44, 
        "Math" => 50, 
        "Java" => 50
    ],

    "Dung-Tung"=> 
    [
        "Computer Science" => 35, 
        "Math" => 30, 
        "Java" => 40
    ]
];


/*testing:

echo"<pre>";
print_r($marks); //it use for testing
echo"</pre>";

*/
echo "<center>";
echo "<table border = '1px' cellpadding ='5px' cellspacing = '0' style = 'width: 75vw;'>
        <tr style = 'background-color: blue;'>
            <th>Student Name</th>
            <th>Comouter Science</th>
            <th>Math</th>
            <th>Java</th>
        </tr>";
foreach($marks as $key => $row)
{
    echo "<tr>";
    echo "<td>". $key ."</td>";
    foreach ($row as $data)
    {
        echo "<td>" .$data. "</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "</center>";

?>