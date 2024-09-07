<!DOCTYPE html>
<html lang="en">
<head>
     <title>Document</title>
</head>
<body>
    <?php
    /* 
        - An array is a special variable that can hold many values under a single name, and you can access the values by referring to an index number or name.

    */

    // To create an array first we create an variable then assign 'array("item")'.
    $laptop_brand = array("HP", "dell", "ASUS", 8);

    // To print the array we need to create var_dump($array_variable);

    // lets print the array
    echo var_dump($laptop_brand); // it will return the array_Length: [index]=>dataType(the dataType's length if it is String for example String = "HP" it will tell the Length of String which is 2, if integer is '8' then it will return 8 ) and it values of that index 

    // lets print item of nth position From ARRAY
    echo var_dump($laptop_brand[1]); // lets print "dell" which is in 2th position but in index[1]

    
    // Constant Array
    define("car_brand", ["BMW", "HYNDAI", "TOYOTA"]); // To declare array we first initialised with "define("arrayName", ["item-1", "item-2"])"
    // echo car_brand; // If we tired to print it like this - it will give an array so why we use "var_dump()" to print array
    echo car_brand[1]; // it will print "car_brand" index [1]


    // Another way of creating Array
    // Associative array
    $person = [
        "name" => "John",
        "age" => 30
    ];
    echo $person["age"]; // Outputs: 30

    ?>
</body>
</html>