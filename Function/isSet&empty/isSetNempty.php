<?php

/* 

- isset() = returns 'TURE' if a variable is declared and not null


- empty() = return  'TURE' if a variable is not declared, false, null, ""
*/

$userName1 = "BroCode"; 
echo isset($userName1); //output: '1' -> as in PHP '1' means 'true'
$userName2 = null;
echo isset($userName2); //it won't display anything meaning it is 'false' as 'isset() only return '1' when it is true otherwise when it is false it won't show anything

if(isset($userName1)) //checking if it is set
{
    echo "Variable is set";
} else {
    echo "Variable is not set";
}



if(empty($userName1)) //checking if it is empty
{
    echo "Variable is empty";
} else {
    echo "Variable is set";
}


?>