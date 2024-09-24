<?php
require 'User.php';
require 'UserController.php';

use MyApp\Controllers\UserController;

$controller = new UserController();
$controller->showUser(); // Outputs: John Doe
