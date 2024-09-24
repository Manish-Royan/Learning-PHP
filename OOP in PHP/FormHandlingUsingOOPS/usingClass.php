<?php

if(isset($_POST['user_name']))
{
    class User {
        function getName($name)
        {
            echo "User name is: {$name}";
        }
    }

    $user = new User();
    $user->getName($_POST['user_name']);
}
?>

<form action="" method="post">
    <input type="text" name="user_name" placeholder="Enter Name">
    <button name="btn">Click</button>
</form>