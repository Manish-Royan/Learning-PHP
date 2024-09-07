<?php

function arrayUnion($arr_color1, $arr_color2)
{
    $arr_merge = array_merge($arr_color1, $arr_color2);
    $remove_duplicate = array_unique($arr_merge);

    print_r($remove_duplicate);
}

$arr_color1 = array("red", "blue","green");
$arr_color2 = array("red", "blue","yellow", "purplue");

arrayUnion($arr_color1, $arr_color2)
?>