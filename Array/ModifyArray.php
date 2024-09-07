<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    // Creating Array
        // Indexed array
        $fruits = ["Apple", "Banana", "Cherry"];
        echo $fruits[1]; // Outputs: Banana
        
        // Associative array
        $person = [
            "name" => "John",
            "age" => 30
        ];

    // Accessing Array Elements
        // You can access elements using their keys (numeric or string).

        echo $fruits[0]; // Outputs: Apple
        echo $person["age"]; // Outputs: 30

    // Modifying Arrays

        // Adding Elements
        $fruits[] = "Orange"; // Adds Orange to the end
        $person["email"] = "john@example.com"; // Adds email key

        //Adding Multiplie Elements
        array_push($fruits, "Kiwi", "Lemon");

        //array_push()function to add a new item, what will be the index number of the new item?
        array_push($fruits, "BlueBerry");

        // Updating Elements
        $fruits[1] = "Blueberry"; // Updates Banana to Blueberry

        // Deleting Elements
        // The `unset()` function in PHP is used to destroy a specified variable.
        unset($fruits[2]); // Removes Cherry


    ?>
</body>
</html>