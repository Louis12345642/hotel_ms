<?php
include_once "../model/User.php";

/*
* Description: this controller class contains all the crude operation methods belong to the user resource
* 
*
*/

class userController
{
    /*
* index(): this methods gets all the users from the database 
* @return: json object
*
*/

    public function index()
    {

        //call the get users from the user model


        return [
            "name" => "dev"
        ];
    }

        /*
* store(): this methods stores a new user in the database
* @return: null
*
*/
public function store($name,$email,$password){
    $user = new User();
    $user->create($name,$email,$password);
    echo "user created";
        
}



}

//register a new user

//registering a new user
$name =$_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
//store a new user in the database
$user = new userController();

$user->store($name,$email,$password);
header("Location: ../view/users.php");
exit();
