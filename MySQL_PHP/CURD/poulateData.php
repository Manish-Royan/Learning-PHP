<?php
include("../READandDisplayTableData/config.php");

if(isset($_GET['id']))
{
    $id = $_GET['id']; //tell's which 'id' has been selected for update
    $getstudent = $connection->prepare("select * from students where id='$id'");
    $getstudent->execute();
    $student = $getstudent->fetchAll();

    $name = $student['0']['name'];
    $course = $student['0']['course'];
    $batch = $student['0']['batch'];
    $city = $student['0']['city'];
    $year = $student['0']['year'];

}

?>

<form action="" method="post">
    <input type="text" name="got_name" value="<?php echo $name; ?>"/><br><br>
    <input type="text" name="got_course" value="<?php echo $course; ?>"/><br><br>
    <input type="text" name="got_batch" value="<?php echo $batch; ?>"/><br><br>
    <input type="text" name="got_city" value="<?php echo $city; ?>"/><br><br>
    <input type="text" name="got_year" value="<?php echo $year; ?>"/><br><br>
    <button value="<?php echo $id;?>" name="do_update">Update data</button> <!-- if we did any changes in here then after clicking the 'Update Data' button ther eshould be change in database also in student data table -->
</form>

<?php

if($_POST['do_update']) {
    $id = $_POST['do_update'];
    $name = $_POST['got_name'];
    $course = $_POST['got_course'];
    $batch = $_POST['got_batch'];
    $city = $_POST['got_city'];
    $year = $_POST['got_year'];

    $updateStudent = $connection->prepare("update students set
    name = '$name',   
    course = '$course',   
    batch = '$batch',   
    city = '$city',   
    year = '$year'  
    where id='$id'");

    if($updateStudent->execute())
    {
        header('location:deleteDataFromTable.php');
    } else {
        echo "Update fail";
    }
}

?>