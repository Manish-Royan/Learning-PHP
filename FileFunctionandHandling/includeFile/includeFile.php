<?php
/* The purpose of using `include file` is share same code among different web page */
// include ("./index.php");

    echo "<h1/>include()</h1>";
    //i. include - calling mutliple time
    for ($i=0; $i < 10; $i++) { 
        include ("./child1.php"); //it can be called multiple times
    }

    echo"\n";
    echo"<h1>include_once()</h1>";
    //ii. include_once - it used to avoid calling include mutliple time by mistake if a child file need for only onces time 
    
    for ($j=0; $j < 3; $j++) { 
        include_once("./child2.php"); //it can't be called multiple
    }
    include_once("./child2.php"); //this won't work as it has been called already in this page, if it was "include_once("./child3.php");" it will iclude 'child3' file. The iclude_once check if the same file is been called or not?
?>