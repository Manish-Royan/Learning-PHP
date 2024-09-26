<?php

/* Cookies are stored in associative aaray */

/* Syntax:
setcookie("key", "value", timeExpressio()+ (timesInSecond), "filePath");

- if we set "/" to filePath - it means we are using the default path

*/

setcookie("favFood", "pizza", time()+ (86400 * 2), "/");
setcookie("favDrink", "coffee", time()+ (86400 * 3), "/");
setcookie("favDrink", "coffee", time()+ -0, "/"); //set cookie timeExpression '-0' delete the cookie


//Printing Cookies
foreach($_COOKIE as $key => $value)
{
    echo "{$key} = {$value} <br/>";
}


//If our 'favFood' keyt has set in cookie then we will show advertisment
if(isset($_COOKIE['favFood']))
{
    echo "Buy some {$_COOKIE['favFood']} !!!";
} else {
    echo "I don't know your favorite food.";
}
?>