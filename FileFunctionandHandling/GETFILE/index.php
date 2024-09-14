<?php

//for getting the file path
$PATH = "file"; //"file" is the path/folder holding our files

$items = scandir($PATH); //it will check how many files in the given folder directory

//Removing the (.) dots /* to check the dots - just 'print_r($items)'*/
$items = array_diff($items, array(".","..")); //arraydiff - remove's first and second element


foreach($items as $item) {
    //href contains the file path
    echo "<a href=./file/$item> {$item} </a> <br/>"; // {item} will tell the file name
}



?>
