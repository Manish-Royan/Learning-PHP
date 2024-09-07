<?php
//The elements in an array can be sorted in alphabetical or numerical order, descending or ascending.

// PHP array sort functions:
    //i. sort() - sort arrays in ascending order
    $cars = array("Volvo", "BMW", "Toyota");
    sort($cars);

    $clength = count($cars);
    for($x = 0; $x < $clength; $x++) {
      echo $cars[$x];
      echo "<br>";
    }
    /*Output
        BMW
        Toyota
        Volvo
    */


    //ii. rsort() - sort arrays in descending order
    $numbers = array(4, 6, 2, 22, 11);
    rsort($numbers);
    
    $arrlength = count($numbers);
    for($x = 0; $x < $arrlength; $x++) {
      echo $numbers[$x];
      echo "<br>";
    }
    /*Output
        22
        11
        6
        4
        2    
    */


    //iii. asort() - sort associative arrays in ascending order, according to the value
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    asort($age);
    
    foreach($age as $x => $x_value) {
      echo "Key=" . $x . ", Value=" . $x_value;
      echo "<br>";
    }
    /*Output
        Key=Peter, Value=35
        Key=Ben, Value=37
        Key=Joe, Value=43
    */


    //iv.ksort() - sort associative arrays in ascending order, according to the key
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    ksort($age);

    foreach($age as $x => $x_value) {
      echo "Key=" . $x . ", Value=" . $x_value;
      echo "<br>";
    }
    /*Output
        Key=Ben, Value=37
        Key=Joe, Value=43
        Key=Peter, Value=35
    */



    //v.arsort() - sort associative arrays in descending order, according to the value
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    arsort($age);
    
    foreach($age as $x => $x_value) {
      echo "Key=" . $x . ", Value=" . $x_value;
      echo "<br>";
    }
    /*Output
        Key=Joe, Value=43
        Key=Ben, Value=37
        Key=Peter, Value=35
    */



    //vi.krsort() - sort associative arrays in descending order, according to the key
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    krsort($age);

    foreach($age as $x => $x_value) {
      echo "Key=" . $x . ", Value=" . $x_value;
      echo "<br>";
    }

    /*output
    	Key=Peter, Value=35
    	Key=Joe, Value=43
    	Key=Ben, Value=37
    */


?>