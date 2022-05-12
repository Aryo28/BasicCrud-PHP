<?php
//DB Connection
include("config.php");

//getting id from url
$id = $_GET['id'];

//Delete element
$delete = mysqli_query($connection, "DELETE FROM movie_index WHERE id=$id");

//redirecting to main page
header("Location:index.php");
?>


