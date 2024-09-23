<?php
include("../READandDisplayTableData/config.php");
?>

<form action="" method="post">
    <input type="text" name="search" placeholder="Enter name for search">
    <button type="submit" name="search_btn">Search</button>
</form>

<?php
if(isset($_POST['search_btn']) && isset($_POST['search']))
{
    $search = trim(filter_input(INPUT_POST, 'search', FILTER_SANITIZE_STRING));
    
    if(!empty($search)) {
        $search_student = $connection->prepare("SELECT * FROM students WHERE name LIKE :search"); 
        $search_student->bindValue(':search', "%$search%", PDO::PARAM_STR);
        
        if($search_student->execute()) {
            $result = $search_student->fetchAll(PDO::FETCH_ASSOC);

            if(count($result) > 0) {
                echo "<table border='1'>";
                echo "<tr><th>Name</th><th>Course</th><th>Batch</th><th>City</th><th>Year</th></tr>";
                foreach($result as $row) { 
                    echo "<tr>
                    <td>" . htmlspecialchars($row['name']) . "</td>
                    <td>" . htmlspecialchars($row['course']) . "</td>
                    <td>" . htmlspecialchars($row['batch']) . "</td>
                    <td>" . htmlspecialchars($row['city']) . "</td>
                    <td>" . htmlspecialchars($row['year']) . "</td>
                    </tr>";
                }
                echo "</table>";
            } else {
                echo "No results found.";
            }
        } else {
            echo "An error occurred while searching.";
        }
    } else {
        echo "Please enter a search term.";
    }
}
?>