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

    public function find($id)
    {
        $user = new User();
        $authUser = $user->Find($id);
        return $authUser;

    }

    /*
* store(): this methods stores a new user in the database
* @return: null
*
*/
    public function store($name, $email, $password)
    {
        $user = new User();
        $user->create($name, $email, $password);
        echo "user created";
    }


    /*
* delete(): this deletes a user from the database using the id
* @return: null
*
*/

    public function delete($id)
    {
        //getting the user instance
        $user = new User();
        $user->delete($id);
    }



    /*
* update(): this method updates a user from the database using the id
* @return: null
*
*/
    public function update($id, $name, $email, $password)
    {

        $user = new User();
        $user->Update($id, $name, $email, $password);
    }

    /*
* update(): this method updates a user from the database using the id
* @return: null
*
*/
    public function loginUser($email, $password)
    {

        $user = new User();
        //login the user
        $userpassword = $user->Login($email, $password);
        return $userpassword;
    }

    //this method logout out a user
    public function logoutUser(){
        $user = new User();
        $user->Logout();
    }
}
