<?php

include_once "../controller/usersController.php";
//register a new user

//registering a new user
$email = $_POST["email"];
$password = $_POST["password"];
//store a new user in the database
$user = new userController();

$user->loginUser($email, $password);

header("Location: ../view/dashboard.php");
exit();
