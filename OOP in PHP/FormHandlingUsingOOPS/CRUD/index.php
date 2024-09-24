<?php
include("config.php");

class Student {
    private $dbConnect;

    function __construct($connection)
    {
        $this->dbConnect = $connection;
    }
    
    //READ OPERATION
    function getData()
    {
        $getStudents = $this->dbConnect->prepare("SELECT * FROM students");
        $getStudents->execute();

        $result = $getStudents->fetchAll(PDO::FETCH_ASSOC);
        
        echo "<pre>";
        print_r($result);
        echo "</pre>";
    }

    //INSERT OPERATION
    function insertData()
    {
        $sqlQuery = "insert into students (`id`, `name`, `course`, `batch`, `city`, `year`) values (null, 'bruce', 'BIT', 'morning', 'BSDK', '2076')";

        $student= $this->dbConnect->prepare($sqlQuery);
        $result = $student->execute();
        if($result) {
            echo "data inserted";
        } else {
            echo "operation failed";
        }
    }

    //UPDATE OPERATION
    function updateData()
    {
        $sqlQuery = "update students set
        name = 'tony',
        course = 'B.TECH',
        batch = 'Morning',
        year = '2079',
        city = 'LA'

        where id = 7
        ";

        $student= $this->dbConnect->prepare($sqlQuery);
        $result = $student->execute();
        if($result) {
            echo "data upadated";
        } else {
            echo "operation failed";
        }
    }


    function deleteData()
    {
        $sqlQuery = "delete from students where id = 7";

        $student= $this->dbConnect->prepare($sqlQuery);
        $result = $student->execute();
        if($result) {
            echo "data deleted";
        } else {
            echo "operation failed";
        }
    }
}

$student = new Student($connection);
// $student->getData(); //for reading operation
// $student->insertData(); //for inserting operation
// $student->updateData(); //for updating operation
$student->deleteData();

?>