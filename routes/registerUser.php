<?php

include_once "../controller/usersController.php";
//register a new user

//registering a new user
$name =$_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
//store a new user in the database
$user = new userController();

$user->store($name,$email,$password);
header("Location: ../view/users.php");
exit();
