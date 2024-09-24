<?php
function autoloader($class) {
    echo $class .'.php'; //this will tell the fileName of where the class exist
    echo "<br/>";


    include($class.'.php');
}
spl_autoload_register('autoloader');

$t1 = new teacher();
echo "<br/>";
echo "<br/>";
$st1 = new student();
echo "<br/>";
echo "<br/>";
$M1 = new management();
?>