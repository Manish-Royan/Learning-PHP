
<?php
include("teacher.php");
include("student.php");


$teacher = new teacher\JoiningDetails();
$teacher->joiningDate();

echo "<br/>";

$student = new student\JoiningDetails();
$student->admisionDate();

?>