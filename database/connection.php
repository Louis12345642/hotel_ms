<?php
/*
*  [] description: Connect to sql database
*  [] @properties: $username,$password,$db_name
*  [] @methods: Connect($username,$password,$db_name)
*/

class Db_connection
{

    public   function Connect()
    {
        //connect to the database
        return   mysqli_connect("localhost", "root", "", "hotel_system");
    }
}
