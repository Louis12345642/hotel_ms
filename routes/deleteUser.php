<?php
include_once "../controller/usersController.php";
//get the id from the request body

$id = $_GET["id"];
//call the delete method from user controller
$userController = new userController();
//delete the user from the database
$userController->delete($id);
header("Location: ../view/users.php");
exit();