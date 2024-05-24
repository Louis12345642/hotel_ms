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


    //find a single user in the database
    public function  Find($id)
    {

        //connect to the database
        $db = new Db_connection();
        $conn = $db->Connect();

        $sql = " SELECT * FROM `persons` WHERE `persons`.`id` = $id";

        $result = mysqli_query($conn, $sql);
        $checkResult = mysqli_num_rows($result);
        if ($checkResult > 0) {
            $user = mysqli_fetch_assoc($result);
            return $user;
        }
    }



    public function  create($name, $email, $password)
    {

        //connect to the database
        $db = new Db_connection();
        $conn = $db->Connect();

        $sql = " INSERT INTO `persons` ( `name`, `email`, `password`) VALUES ('$name', '$email', '$password');";

        mysqli_query($conn, $sql);
    }


    //this method contact the sql command to delete a user from the database

    public function  delete($id)
    {

        //connect to the database
        $db = new Db_connection();
        $conn = $db->Connect();

        $sql = "DELETE FROM `persons` WHERE `persons`.`id` = $id";

        mysqli_query($conn, $sql);
    }

    //this method a update a single user using the id 

    public function Update($id, $name, $email, $password)
    {
        //connect to the database
        $db = new Db_connection();
        $conn = $db->Connect();
        $sql = "UPDATE `persons` SET `name` = '$name', `email` = '$email', `password` = '$password' WHERE `persons`.`id` = '$id';";

        mysqli_query($conn, $sql);
    }


    //this method a searches for a user in the database

    public function Login($email, $password)
    {
        //connect to the database
        $db = new Db_connection();
        $conn = $db->Connect();
        $sql = "SELECT * FROM `persons` WHERE  email='$email';";

        $result = mysqli_query($conn, $sql);
        $checkResult = mysqli_num_rows($result);
        if ($checkResult > 0) {
            //fetch the user as an array
            $user = mysqli_fetch_assoc($result);
            //check if the pasword is the same
            if ($password == $user['password']) {
                // Setting a cookie
                setcookie("token", "user", time() + (86400 * 30), "/");
                setcookie("user_id", $user['id'], time() + (86400 * 30), "/");
            } else {
                header("Location: ../index.php");
                exit();
            }
        }
    }
}
