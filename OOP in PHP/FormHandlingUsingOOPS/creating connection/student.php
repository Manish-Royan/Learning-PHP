<?php
include("config.php");

class Student {
    private $dbConnect;

    function __construct($connection)
    {
        $this->dbConnect = $connection;
    }
    
    function getData()
    {
        $getStudents = $this->dbConnect->prepare("SELECT * FROM students");
        $getStudents->execute();

        $result = $getStudents->fetchAll(PDO::FETCH_ASSOC);
        
        echo "<pre>";
        print_r($result);
        echo "</pre>";
    }
}

$student = new Student($connection);
$student->getData();
?>