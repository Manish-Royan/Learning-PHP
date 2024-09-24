<?php
namespace MyApp\Controllers;

use MyApp\Models\User;

class UserController {
    public function showUser() {
        $user = new User();
        echo $user->getName();
    }
}
?>