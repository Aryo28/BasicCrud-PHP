<?php

session_start();


//Blocks access to main page if user is not logged in
if($_SESSION['user']!= 'Admin'){
    Header('Location:login.php');
}

//DB Connection
include_once("config.php");

//Query loads data from movie_index table
$data = mysqli_query($connection, "SELECT * FROM movie_index ORDER BY id ");



//Session for admin with roles

?>

<!--HTML starts-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Movies</title>
    </head>
    <body style ="background-color:#0F172A; color: #fff">
        <!--Body Starts-->
        <h1 style="font-size:50px; text-align:center;">Movies</h1>

        <hr>
        <div style="position:relative;
            width: 80%;  
            margin-left: auto;
            margin-right:auto;"
            >
            <a href="create.html">
                <button 
                    style="background-color: #0C4A6E;
                    color: #fff;
                    font-size:18px;
                    width: 100%;
                    height: 40px;
                    margin-top: 30px;
                    "
                >
                    New Movie
                </button>
            </a>
        </div>
        <br>
        <br>
        <div 
            style="position:relative;
            width: 80%;  
            margin-left: auto;
            margin-right:auto;"
            >
            <!--Table Starts-->
            <table 
                style="width: 70%; 
                    border:0;
                    margin-left: auto;
                    margin-right:auto;
                    font-size: 20px;
                    "
                >

                <tr 
                    style=" background-color:#27272A;
                    color: #fff;
                    text-align:center;"
                >
                    <td>Movie</td>
                    <td>Genre</td>
                    <td>Year of Release</td>
                    <td></td>
                </tr>
                <?php 
               //Turn data into an arrray
                while($d1 = mysqli_fetch_array($data)) { 		
                    echo "<tr 
                        style=' background-color:#fff;
                        color: black;
                        text-align:center;'
                        >";
                    echo "<td>".$d1['movie_name']."</td>";
                    echo "<td>".$d1['movie_genre']."</td>";
                    echo "<td>".$d1['movie_yearOf_release']."</td>";	
                    echo "<td><a href=\"edit.php?id=$d1[id]\">Edit</a> | <a href=\"delete.php?id=$d1[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
                }
                ?>
            </table>
            <!--Table end-->
        </div>

        <br>
        <br>

        <a href="admin.php">
                <button 
                    style="background-color: #EAB308;
                    color: #fff;
                    font-size:18px;
                    width: 30%;
                    height: 40px;
                    margin-top: 30px;
                    margin-left: 35%;
                    "
                >
                    Admin Settings
                </button>
        </a>
        <a href="logout.php">
                <button 
                    style="background-color: #B91C1C;
                    color: #fff;
                    font-size:18px;
                    width: 30%;
                    height: 40px;
                    margin-top: 30px;
                    margin-left: 35%;
                    "
                >
                    Log Out
                </button>
        </a>

    </body>
</html>