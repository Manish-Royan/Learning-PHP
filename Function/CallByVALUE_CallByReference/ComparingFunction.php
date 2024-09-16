<?php
// Passing Argument by Value
    function msg ($msg){
        $msg = "Hey";
    }

    $str = "Hello";
    msg($str);
    echo $str . "<br/>"; //output: Hello

// Passing Argument by Reference
    function disp (&$disp){
        $disp = "Hey";
    }

    $strg = "Hello";
    disp($strg);
    echo $strg; //output: Hey


/*Another Demonstration*/


// Passing Argument by Value
    function test($test)
    {
        $test .= " and something extra.";
    }

    $st ="This is a string";
    test($st);
    echo $st; //This is a string


// Passing Argument by Reference
    function testing(&$testing) // we use it when we want to change the value which is passed to the function argument (eg. In a program user write somethig in a input "Manish' and we want to concat extra to the user input with "Hello," and intogether "Hello, Manish")
    {
        $testing .= " and something extra."; //concate with '$stg'
    }

    $stg ="This is a string";
    testing($stg);
    echo $stg; //This is a string and something extra.


/*Another Demonstration*/

    function first($num) // Passing Argument by Value
    {
        $num += 5;
    }
    function second (&$num) // Passing Argument by Reference
    {
        $num += 5;
    }

    $number = 10;
    first($number);
    echo "Orginal value is $number <br/>";

    second($number);
    echo "Orginal value is $number <br/>";

?>