<?php
include("../READandDisplayTableData/config.php");

// Prepares and executes a SQL query to select all required fields from the students table.
$getStudents_row = $connection->prepare("SELECT * FROM students");
$getStudents_row->execute();

// Fetches all the results into the $student_data array.
$student_data = $getStudents_row->fetchAll();

echo "<table border='1'>";
foreach($student_data as $row) {
    echo "<tr>
    <td>" . htmlspecialchars($row['name']) . "</td>
    <td>" . htmlspecialchars($row['course']) . "</td>
    <td>" . htmlspecialchars($row['batch']) . "</td>
    <td>" . htmlspecialchars($row['city']) . "</td>
    <td>" . htmlspecialchars($row['year']) . "</td>
        <td>
        <form method='post'> 
        <button name='delete_btn' value='" . $row['id'] . "'>Delete</button>
        </form>
        </td>
    <td> <a href='poulateData.php?id=".$row['id']."'>edit</a>  </td>
    </tr>"; 
}

echo "</table>";

if(isset($_POST['delete_btn'])) {
    echo "Record: " .$id=$_POST['delete_btn'];
    $deleteStudents_row = $connection->prepare("DELETE FROM students where id='$id'");

    if($deleteStudents_row->execute()) {
        echo " deleted";
        header("Refresh:0"); //means the page should refresh immediately (0 seconds delay.After processing a form delete, to reload the page and show updated content.
    } else {
        echo "delete failed";
    }
}
?>