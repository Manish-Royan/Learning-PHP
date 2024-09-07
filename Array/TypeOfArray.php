<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        //1. Indexed Arrays: These are arrays with numeric indexes.
        $fruits = array("apple", "banana", "cherry");
        // or using the short syntax
        $fruits = ["apple", "banana", "cherry"];
        echo $fruits[0]; // Outputs: apple


        //2. Associative Arrays: These are arrays with named keys.
        $person = array("name" => "Alice", "age" => 25, "city" => "New York");
        // or using the short syntax
        $person = ["name" => "Alice", "age" => 25, "city" => "New York"];
        echo $person["name"]; // Outputs: Alice

        //3. Multidimensional Arrays: These are arrays containing one or more arrays.
        $people = [
            ["name" => "Alice", "age" => 25],
            ["name" => "Bob", "age" => 30],
            ["name" => "Charlie", "age" => 35]
        ];
        echo $people[1]["name"]; // Outputs: Bob
        

        //4. Constant Array
        define("car_brand", ["BMW", "HYNDAI", "TOYOTA"]); // To declare array we first  initialised with "define("arrayName", ["item-1", "item-2"])"
        echo car_brand[1]; // it will print "car_brand" index [1]
        // echo car_brand; // If we tired to print it like this - it will give an array so why we  use "var_dump()" to print array



    ?>
</body>
</html>