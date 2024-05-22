<?php

include "../database/connection.php";
/*
* [] Description: this class contains the connections to users database and all the sql commands for 
*     data retriving from the database 
* [] @method json all()
 *    - find($id);
*     - update($id)
*     - delete($id)
*     - insert(user)
*/





class User
{

 
    public function  create($name, $email, $password)
    {

        //connect to the database
        $db = new Db_connection();
        $conn =$db->Connect();

        $sql =" INSERT INTO `persons` ( `name`, `email`, `password`) VALUES ('$name', '$email', '$password');";

        mysqli_query($conn, $sql);
    }


    //this method contact the sql command to delete a user from the database

    public function  delete($id)
    {

        //connect to the database
        $db = new Db_connection();
        $conn =$db->Connect();

        $sql ="DELETE FROM `persons` WHERE `persons`.`id` = $id";

        mysqli_query($conn, $sql);
    }
}
