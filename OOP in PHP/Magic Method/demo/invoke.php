<?php

class User
{
    function __invoke() //this method will directly called by it's reference variable only
    {
        echo "Invoke functioon called!!";
    }

    function other()
    {
        echo "<br/> Other Function!!";
    }
}


$user = new User();

$user();
$user->other();
?>