<?php
include_once "../controller/roomsController.php";
//get the id from the request body

$id = $_GET["id"];
//call the delete method from user controller
$roomController = new roomsController();
//delete the user from the database
$roomController->delete($id);
header("Location: ../view/rooms.php");
exit();