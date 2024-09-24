<?php

class User
{
    private $name = "USER";

    function __set($property, $value)
    {
        if(property_exists($this, $property))
        {
            $this->$property = $value;
        } else {
            echo "no";
        }
    }

    function getName()
    {
        echo $this->name;
    }

}


$user = new User();
echo $user->getName();
echo "<br/>";
echo $user->name = "Lulu";
echo $user->getName();

?>