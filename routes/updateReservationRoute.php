<?php

include_once "../controller/reservationController.php";
//register a new user

//registering a new user
$id = $_GET['id'];
$price =$_POST["price"];
$room_number = $_POST["room_number"];
$location =$_POST["location"];

//store a new user in the database
$reservation = new reservationController();

$reservation->update($id,$room_number,$price,$location);
header("Location: ../view/reservation.php");
exit();
