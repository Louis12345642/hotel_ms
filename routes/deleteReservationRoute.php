<?php
include_once "../controller/reservationController.php";
//get the id from the request body

$id = $_GET["id"];
//call the delete method from user controller
$reservation= new reservationController();
//delete the user from the database
$reservation->delete($id);
header("Location: ../view/reservation.php");
exit();