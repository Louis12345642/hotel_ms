<?php

include_once "../controller/usersController.php";
//register a new user

//registering a new user
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

//validate the user
if ($email =="" || $name == "" || $password=="") {

       $errors = "flied in all flied";

    //sending the error as cookies
    setcookie("errors", $errors, time() + (1 * 10), "/");
    header("Location: ../view/register.user.php");
    exit();
 
} else {
    
    $success = "user created successfully";

    //store a new user in the database
    $user = new userController();

    $user->store($name, $email, $password);

    //send the success as message
    setcookie("success", $success, time() + (86400 * 30), "/");
    header("Location: ../view/users.php");
    exit();
}
