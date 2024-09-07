<?php

$capital = array(
    "INDIA" => "BHUTAN"
);

foreach ($capital as $key => $value)
{
    echo "{$key} = {$value} <br/>"; //output: INDIA = BHUTAN
}


//Updating the associative array key's value
$capital["INDIA"] = "New Delhi";

foreach ($capital as $key => $value)
{
    echo "{$key} = {$value} <br/>"; //output: INDIA = New Delhi
}

//Adding new key value 
$capital["USA"] = "Washington D.C"; //new key and value inserted into associative array
foreach ($capital as $key => $value)
{
    echo "{$key} = {$value} <br/>"; 
}

//printing key only
$keyHERO = array_keys($capital); //prints all the keys from $captial associative array
foreach ($keyHERO as $keyCHOR) {
    echo "{$keyCHOR} <br/>";
    /*output:
        INDIA
        USA
    */
}

//printing values only from key
$valueHERO = array_values($capital); //prints all the key's value from $captial associative array
foreach ($valueHERO as $valueCHOR) {
    echo "{$valueCHOR} <br/>";
    /*output:
        New Delhi
        Washington D.C
    */
}


//Fliping keys into values and values into keys
$capital_into_country = array_flip($capital);
foreach ($capital_into_country as $capital_now_country => $country_now_capital) {
    echo "<br/>";
    echo "<br/>";
    echo "{$capital_now_country} = {$country_now_capital}";

    /*
    (FROM) -
    INDIA = New Delhi
    USA = Washington D.C

    (TO) -
    
    New Delhi = INDIA
    Washington D.C = USA
    */
}


?>