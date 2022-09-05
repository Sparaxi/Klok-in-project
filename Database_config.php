<?php

class Database {

    // connection variables for the database.
    function __construct(){
        // gives the ip of the database it needs to connect to.
        define ("DB_SERVER", "EXAMPLE");
        // database user.
        define("DB_USER", "EXAMPLE");
        // database user password
        define("DB_PASSWORD", "EXAMPLE");
        //database name
        define("DB_DATABASE", "EXAMPLE");
        // database port this can be empty if you dont use it.
        define("DB_PORT", "EXAMPLE");
    }




    function connect(){
        // tries to connect to the database, throws an error if it can't connect.
        try {
            // connection to database
            $con  = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE, DB_PORT) or die(mysqli_error());
        } catch (mysqli_sql_exception $e){
            // throws error when it can't connect to the database.
            echo $e->getMessage();
        } finally {
            // checks if the connections exist, if the connection does not exist it will return null and an error.
            if (mysqli_ping($con)) {
                return $con;
            } else {
                mysqli_error($con);
                mysqli_close($con);
                return null;
            }
        }
    }

}
