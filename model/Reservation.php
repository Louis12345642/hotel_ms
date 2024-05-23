<?php

include_once "../database/connection.php";
/*
* [] Description: this class contains the connections and sql commands for the reservations
*     data retriving from the database 
* [] @method json all()
 *    - find($id);
*     - update($id)
*     - delete($id)
*     
*/





class Reservation
{


    public function  create($price,$room_number,$location)
    {

        //connect to the database
        $db = new Db_connection();
        $conn = $db->Connect();

        $sql ="INSERT INTO `reservations` ( `price`, `room_number`, `location`) VALUES ( '$price', '$room_number', '$location');";
        mysqli_query($conn, $sql);
    }


    //this method contact the sql command to delete a user from the database

    public function  delete($id)
    {

        //connect to the database
        $db = new Db_connection();
        $conn = $db->Connect();

        $sql = "DELETE FROM `reservations` WHERE `reservations`.`id` = $id";

        mysqli_query($conn, $sql);
    }

    //this method a update a single user using the id 

    public function Update($id,$room_number,$price,$location)
    {
        //connect to the database
        $db = new Db_connection();
        $conn = $db->Connect();
       $sql ="UPDATE `reservations` SET `price` = '$price', `room_number` = '$room_number', `location` = '$location' WHERE `reservations`.`id` = $id;";
        
        mysqli_query($conn, $sql);
        
    }

    
}
