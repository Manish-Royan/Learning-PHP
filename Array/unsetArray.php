<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    // We can also use unset() to remove specific elements from an array.

    $array = ["apple", "banana", "cherry"];
    unset($array[1]);
    print_r($array); //The element at index [1] ("banana") is removed from the array.

    /* OUTPUT:
        Array
        (
            [0] => apple
            [2] => cherry
        )
    */

    // Unsetting Associative Array Elements
    $person = [
        "name" => "John",
        "age" => 30,
        "city" => "New York"
    ];
    unset($person["age"]);
    print_r($person); //The key "age" is removed from the associative array.

    /*OUTPUT:
        Array
        (
            [name] => John
            [city] => New York
        )
    */
    ?>
</body>
</html>