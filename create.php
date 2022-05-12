<html>
    <head>
        <title>New Movie</title>
    </head>

    <body>
        <?php
            //DB Connection
            include_once("config.php");

            if(isset($_POST['Submit'])) {	


                $movie_name = mysqli_real_escape_string($connection, $_POST['movie_name']);
                $movie_genre = mysqli_real_escape_string($connection, $_POST['movie_genre']);
                $year_release = mysqli_real_escape_string($connection, $_POST['movie_yearOf_release']);
                    
                // Validation
                if(empty($movie_name) || empty($movie_genre) || empty($year_release)) {
                            
                    if(empty($movie_name)) {
                        echo "<font color='red'>'Name of the Movie' field is empty.</font><br/>";
                    }
                    
                    if(empty($movie_genre)) {
                        echo "<font color='red'>'Movie Genre' field is empty.</font><br/>";
                    }
                    
                    if(empty($year_release)) {
                        echo "<font color='red'>'Year of Relase' field is empty.</font><br/>";
                    }
                    
                    //Go back to prev page in case of error
                    echo "<br/><button onclick='history.back()'>BACK</button";
                } else {

                    //query to inser new data
                    $query = mysqli_query($connection, "INSERT INTO movie_index (movie_name,movie_genre,movie_yearOf_release) VALUES('$movie_name','$movie_genre','$year_release')");
                    
                    //success
                    header("Location:index.php");
                }
            }
        ?>
    </body>
</html>