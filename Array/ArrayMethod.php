<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    //1. Adding Elements: 

        //i. array_push(): Adds one or more elements to the end of an array.
        $fruits = ["apple", "banana"];
        array_push($fruits, "cherry", "date"); //We pass ($arrayName, "items") to which array we want to insert the "items"
        print_r($fruits); // Outputs: Array ( [0] => apple [1] => banana [2] => cherry [3] => date )

        //ii. array_unshift(): Adds one or more elements to the beginning of an array.
        $fruits = ["banana", "cherry"];
        array_unshift($fruits, "apple");
        print_r($fruits); // Outputs: Array ( [0] => apple [1] => banana [2] => cherry )



    //2. Removing Elements:

        //i. array_pop(): Removes the last element of an array.
        $fruits = ["apple", "banana", "cherry"];
        array_pop($fruits);
        print_r($fruits); // Outputs: Array ( [0] => apple [1] => banana )

        //ii.array_shift(): Removes the first element of an array.
        $fruits = ["apple", "banana", "cherry"];
        array_shift($fruits);
        print_r($fruits); // Outputs: Array ( [0] => banana [1] => cherry )



    //3. Merging Arrays:

        //i. array_merge(): Merges one or more arrays.
        $array1 = ["apple", "banana"];
        $array2 = ["cherry", "date"];
        $mergedArray = array_merge($array1, $array2);
        print_r($mergedArray); // Outputs: Array ( [0] => apple [1] => banana [2] => cherry [3] => date )



    //4. Array Keys and Values:

        //i. array_keys(): Returns all the keys of an array.
        $person = ["name" => "Alice", "age" => 25];
        $keys = array_keys($person);
        print_r($keys); // Outputs: Array ( [0] => name [1] => age )

        //ii. array_values(): Returns all the values of an array.
        $person = ["name" => "Alice", "age" => 25];
        $values = array_values($person);

        print_r($values); // Outputs: Array ( [0] => Alice [1] => 25 )



    //5. Searching Arrays:

        //i. in_array(): Checks if a value exists in an array.
        $fruits = ["apple", "banana", "cherry"];
        if (in_array("banana", $fruits)) // first we pass "value" then check if it is in the $arrayName
        {
            echo "Banana is in the array";
        }
        
        //ii. array_search(): Searches the array for a value and returns the corresponding key if found.
        $fruits = ["apple", "banana", "cherry"];
        $key = array_search("cherry", $fruits); // we create another $variable and check the condition and stored it in $key variable
        echo $key; // Outputs: 2



    //6. Iterating Over Arrays
        
        //i. Using `foreach`:
        $fruits = ["apple", "banana", "cherry"];
        foreach ($fruits as $fruit) {
            echo $fruit . "\n";
        }

        //ii. Using `for`:
        $fruits = ["apple", "banana", "cherry"];
        for ($i = 0; $i < count($fruits); $i++) {
            echo $fruits[$i] . "\n";
        }

        //iii. Using `while`:
        $fruits = ["apple", "banana", "cherry"];
        $i = 0;
        while ($i < count($fruits)) {
            echo $fruits[$i] . "\n";
            $i++;
        }
    


    //7. Count Elements
    $count = count($fruits); // Returns number of elements

    

    //8. Sorting Arrays
    sort($fruits); // Sorts indexed array in ascending order
    asort($person); // Sorts associative array by values



    //9. Merging Arrays
    $fruits = ["apple", "banana", "cherry"];
    $newFruits = ["Pineapple", "Grapes"];
    $merged = array_merge($fruits, $newFruits); // Merges arrays



    //10. Filtering Arrays
    $evenNumbers = array_filter([1, 2, 3, 4], function($n) {
        return $n % 2 == 0; // Returns only even numbers
    });



    //11. Mapping Values
    $squared = array_map(function($n) {
        return $n * $n;
    }, [1, 2, 3, 4]); // Returns [1, 4, 9, 16]
    


    //12. Array References: We can create references to arrays, allowing multiple variables to point to the same array.
    $refArray = &$fruits; // $refArray now references $fruits
    $refArray[] = "Mango"; // Modifies $fruits as well


    //13. checking array
    $array_hero = array("this", "is", "an", "array.");
    echo is_array($array_hero); //this will return '1'

        //using if statement
        $array_fake = "not an array!"; 
        if(is_array($array_fake)) //since condition is wrong 
        {
            echo "This is array";
        } else {
            echo $array_fake; //output: not an array!
        }

    //14. explode - converting string into array
    $str = "This is an array";
    print_r(explode(" ", $str)); //" " -> removing space
    print_r(explode("o", $str)); //" " -> removing 'o' character
    
    ?>
</body>
</html>