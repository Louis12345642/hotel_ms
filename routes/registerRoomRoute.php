<?php

include_once "../controller/roomsController.php";
//register a new user

//registering a new user
$room_number =$_POST["room_number"];
$status = $_POST["status"];

//store a new user in the database
$room = new roomsController();

$room->store($room_number,$status);
header("Location: ../view/rooms.php");
exit();
