<?php

class User
{
    public $name = "USER";

    function __get($property)
    {
        echo "$property doesn't exist";
    }

}


$user = new User();
echo $user->name;
echo "<br/>";
echo $user->$age; //it doesnt exits in our class

?>