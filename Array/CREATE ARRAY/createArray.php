<?php
//Array Keys: When creating indexed arrays the keys are given automatically, starting at `0` and increased by `1` for each item, so the array above could also be created with keys:

$cars = [
    0 => "Volvo",
    1 => "BMW",
    2 => "Toyota",
];

var_dump($cars);
//As you can see, indexed arrays are the same as associative arrays, but associative arrays have names instead of numbers

$myCar = [
    "brand" => "Ford",
    "model" => "Mustang",
    "year" => 1964
  ];
  
  var_dump($myCar);
?>