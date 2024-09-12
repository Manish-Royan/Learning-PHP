<?php

$a = 10;
$b = 5;

echo $a+$b ."<br/>"; //output: 15

echo test() ."<br/>"; //the execution of program stops from here
echo $a-$b ."<br/>"; //won't execute


function test(){
  die; //this will stop the execution of whole program from where it is been called
    echo "Hello"; //this won't be execute
}

echo $a*$b ."<br/>"; //won't execute
echo $a/$b ."<br/>"; //won't execute

?>