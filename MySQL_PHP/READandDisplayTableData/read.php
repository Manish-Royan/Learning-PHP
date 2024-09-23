<?php
include("config.php");

$getStudents_row = $connection->prepare("SELECT * FROM students");
$getStudents_row->execute();//An array of values with as many elements as there are bound parameters in the SQL statement being executed.


$student_info = $getStudents_row->fetchAll(); //'fetchAll()' ->Controls how the next row will be returned to the caller.

echo "<table border ='1'>";
foreach($student_info as $row) { 
    echo "<tr>
    <td>" . $row['name'] . "</td>
    <td>" . $row['course'] . "</td>
    <td>" . $row['batch'] . "</td>
    <td>" . $row['city'] . "</td>
    <td>" . $row['year'] . "</td>
    </tr>";}

echo "</table>";
?>