<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	
    //Get new values 
	$id =mysqli_real_escape_string($connection, $_POST['id']);
	$movie_name = mysqli_real_escape_string($connection, $_POST['movie_name']);
    $movie_genre = mysqli_real_escape_string($connection, $_POST['movie_genre']);
    $year_release = mysqli_real_escape_string($connection, $_POST['movie_yearOf_release']);
	

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
    }else{

        //Query using new values
        $update = "UPDATE `movie_index` SET `movie_name`='$movie_name',`movie_genre`='$movie_genre',`movie_yearOf_release`='$year_release' WHERE id='$id'";
        
        //updating values
        $query = mysqli_query($connection, $update);

        //redirectig to main page
        header("Location: index.php");

    }
}
?>

<?php
//Get ID from URL
$id = $_GET['id'];

//retrieving data form DB using ID 
$data = mysqli_query($connection, "SELECT * FROM movie_index WHERE id=$id");


//Storing data from query into variables
while($d1 = mysqli_fetch_array($data))
{
    $id = $d1['id'];
	$movie_name = $d1['movie_name'];
	$movie_genre = $d1['movie_genre'];
	$year_release = $d1['movie_yearOf_release'];
}
?>

<!--HTML Starts-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>New Movie</title>
    </head>
    <body style ="background-color:#0F172A; color: #fff">
        <!--Body Starts-->

        <h1 style="font-size:50px; text-align:center;">New Movie</h1>

        <hr>
        <div style="position:relative;
            width: 80%;  
            margin-left: auto;
            margin-right:auto;"
            >

        <!--Home Button-->
            <a href="index.php">
                <button 
                    style="background-color: #0C4A6E;
                    color: #fff;
                    font-size:18px;
                    width: 100%;
                    height: 40px;
                    margin-top: 30px;
                    "
                >
                    Home
                </button>
            </a>
        </div>  

        <br>
        <br>

        <!--Form Starts-->
        <div 
            style="position:relative;
            width: 80%;  
            margin-left: auto;
            margin-right:auto;
            text-align: center;"
            >
            <form action="edit.php" method="post">
                <div style="position: relative;
                    width: 100%;
                    ">
                    <div>
                        <p style="font-size:20px">
                            Name of the Movie 
                            <input style="width: 590px; 
                                height: 20px;
                                margin-left: 10px" 
                                type="text" 
                                name="movie_name"
                                value="<?php echo $movie_name; ?>">
                        </p>
                    </div>
                    <div>
                        <p style="font-size:20px">
                            Movie Genre 
                            <input style="width:640px; 
                                height: 20px;
                                margin-left: 10px" 
                                type="text" 
                                name="movie_genre"
                                value="<?php echo $movie_genre; ?>">
                        </p>
                    </div>
                    <div>
                        <p style="font-size:20px">
                           Year of Release
                            <input style="width: 620px; 
                                height: 20px;
                                margin-left: 10px" 
                                type="text" 
                                name="movie_yearOf_release"
                                value="<?php echo $year_release; ?>">
                        </p>
                    </div>
                    <!--Send ID-->
                    <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                    <!--Button Submit-->
                    <input  style="background-color: #7F1D1D;
                        color: #fff;
                        font-size:18px;
                        width: 30%;
                        height: 40px;
                        margin-top: 30px;"
                        type="submit" 
                        name="update" 
                        value="Update"
                    >
                </div>
            </form>
            <!--End Form-->
        </div>  
    </body>
</html>