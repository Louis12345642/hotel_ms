<?php

include_once "../controller/reservationController.php";
//register a new user

//registering a new user
$room_number =$_POST["room_number"];
$location = $_POST["location"];
$price = $_POST["price"];

//store a new user in the database
$reservation= new reservationController();

$reservation->store($price,$room_number,$location);
header("Location: ../view/reservation.php");
exit();
