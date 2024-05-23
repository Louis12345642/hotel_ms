<?php

include_once "../controller/roomsController.php";
//register a new user

//registering a new user
$id = $_GET['id'];
$status =$_POST["status"];
$room_number = $_POST["room_number"];

//store a new user in the database
$room = new roomsController();

$room->update($id,$room_number,$status);
header("Location: ../view/rooms.php");
exit();
