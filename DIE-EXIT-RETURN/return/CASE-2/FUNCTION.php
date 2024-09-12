<?php

$a = 10;
$b = 5;

echo $a+$b ."<br/>"; //output: 15

echo test() ."<br/>"; //output: 20

echo $a-$b ."<br/>";  //output: 5


function test(){
    return 20; //this will stop the execution of this function, meaning it is limted to this function and anything below within this function will not execute - that's why we use 'return' keyword at the end.
    echo "Hello"; //this won't be execute
}

echo $a*$b ."<br/>"; //50
echo $a/$b ."<br/>"; //2

?>