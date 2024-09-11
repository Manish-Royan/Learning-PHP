<?php

//Setting default time zone according to nation
// date_default_timezone_set("Asia/Kathmandu");



//$day = date("l"); //Weekend 
//$Date = date("d"); //DATE 01
//$Date1 = date("j"); //DATE 1
$DATE = date("d S F Y");
$time = date("g:i A");

echo "Today's day is \"$DATE\"  and Time is $time";


/* Visit "https://www.php.net/manual/en/function.date.php" */
?>