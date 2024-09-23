<?php
include("../READandDisplayTableData/config.php");

//Prepares and executes a SQL query to select all names from the students table.
$getStudents_row = $connection->prepare("SELECT id,name FROM students");
$getStudents_row->execute();

//Fetches all the results into the $student_data array.
$student_data = $getStudents_row->fetchAll();


echo "<select>";
echo "<option>Select name </option>";
foreach($student_data as $row) {
    
echo "<option value= ".$row['id'].">" .$row['name']. "</option>";
}
echo "</select>";

?>