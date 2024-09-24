<form action="" method="post">
<input type="text" name="get_name" placeholder="Enter name"><br><br>
<input type="text" name="get_course" placeholder="Enter course"><br><br>
<input type="text" name="get_batch" placeholder="Enter batch"><br><br>
<input type="text" name="get_city" placeholder="Enter city"><br><br>
<input type="text" name="get_year" placeholder="Enter year"><br><br>
<button type="submit" name="btn">Submit</button>
</form>

<?php
include("config.php");

class Student {
    private $dbConnect;

    function __construct($connection)
    {
        $this->dbConnect = $connection;
    }

    //INSERT OPERATION
    function insertDataWithRequest($request)
    {
        $name = $this->dbConnect->quote($request['get_name']);
        $course = $this->dbConnect->quote($request['get_course']);
        $batch = $this->dbConnect->quote($request['get_batch']);
        $city = $this->dbConnect->quote($request['get_city']);
        $year = $this->dbConnect->quote($request['get_year']);

        $sqlQuery = "INSERT INTO students (`id`, `name`, `course`, `batch`, `city`, `year`) 
                     VALUES (null, $name, $course, $batch, $city, $year)";

        $student = $this->dbConnect->prepare($sqlQuery);
        $result = $student->execute();
        if($result) {
            echo "Data inserted";
        } else {
            echo "Operation failed";
        }
    }
}

$student = new Student($connection);

if(isset($_POST['btn']))
{
    $student->insertDataWithRequest($_POST);
}

?>