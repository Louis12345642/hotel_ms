<?php
include_once "../model/Room.php";

/*
* Description: this controller class contains all the crude operation methods belong to the rooms resource
* 
*
*/

class roomsController
{
    /*
* index(): this methods gets all the rooms from the database 
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
* store(): this methods stores a new room in the database
* @return: null
*
*/
public function store($room_number,$status){
$room = new Room();
    $room->create($room_number,$status);
    echo "user created";     
}


        /*
* delete(): this deletes a user from the database using the id
* @return: null
*
*/

public function delete($id){
    //getting the user instance
    $room = new Room();
    $room->delete($id);

}


 
 /*
* update(): this method updates a user from the database using the id
* @return: null
*
*/
public function update($id,$room_number,$status){
    $room = new Room();
    $room->Update($id,$room_number,$status);
}
}

