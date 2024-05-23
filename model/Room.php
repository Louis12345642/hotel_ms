<?php

include "../database/connection.php";
/*
* [] Description: this class contains the connections and sql commands for the rooms
*     data retriving from the database 
* [] @method json all()
 *    - find($id);
*     - update($id)
*     - delete($id)
*     
*/





class Room
{


    public function  create($room_number,$status)
    {

        //connect to the database
        $db = new Db_connection();
        $conn = $db->Connect();

        $sql = " INSERT INTO `rooms` (`room_number`, `status`) VALUES ('$room_number','$status');";

        mysqli_query($conn, $sql);
    }


    //this method contact the sql command to delete a user from the database

    public function  delete($id)
    {

        //connect to the database
        $db = new Db_connection();
        $conn = $db->Connect();

        $sql = "DELETE FROM `rooms` WHERE `rooms`.`id` = $id";

        mysqli_query($conn, $sql);
    }

    //this method a update a single user using the id 

    public function Update($id,$room_number,$status)
    {
        //connect to the database
        $db = new Db_connection();
        $conn = $db->Connect();
        $sql = "UPDATE `rooms` SET `room_number` = '$room_number', `status` = '$status' WHERE `rooms`.`id` = $id;";
        
        mysqli_query($conn, $sql);
        
    }

    
}
