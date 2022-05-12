<?php

//DB Connection 
$servername = "localhost";
$username = "root";
$password = "";
$database = "movie_list";

$connection = mysqli_connect($servername, $username, $password, $database);


//Verify Connection 
if(!$connection){
    die("Could not connect to Database ". mysqli_connect_error());
}

//echo "Connection established";


/************************************************************************************************ */
/*Enable DB Creation this to creta DB then comment it again an uncomment Create table to create movie_index table
/*********************************************************************************************** */


//DB Creation/

/*
$sql = "CREATE DATABASE movie_list";

if($connection->query($sql) == TRUE){
    echo "Database created";
} else{
    echo "Database not created ". $connection->error;
}
*/

//Create Table
/*
$sql2 = "CREATE TABLE movie_index (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    movie_name VARCHAR(100) NOT NULL,
    movie_genre VARCHAR(100) NOT NULL,
    movie_yearOf_release VARCHAR(100) NOT NULL,
    timeDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

if($connection->query($sql2) == TRUE){
    echo "Table created";
} else{
    echo "Table not created ". $connection->error;
}
*/
?>