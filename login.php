<?php

$userC = 'admin';
$passwordC = 'admin';

if(isset($_POST['login'])){

    $user = $_POST['user'];
    $password = $_POST['password'];

    if($user == $userC && $password == $passwordC){
        session_start();

        $_SESSION['user'] = 'Admin';

        $_SESSION['roles'] = ['Administrator', 'Approver', 'Editor'];

        header("Location: index.php");
    }else{

        echo "<font color='red'>Username or Password incorrect.</font><br/>";

    }

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body style ="background-color:#0F172A; color: #fff">
        <!--Body Starts-->

        <h1 style="font-size:50px; text-align:center;">Login</h1>

        <hr>

        <div 
            style="position:relative;
            width: 80%;  
            margin-left: auto;
            margin-right:auto;
            text-align: center;"
            >
            <form action="login.php" method="post">
                <div style="position: relative;
                    width: 100%;
                    ">
                    <div>
                        <p style="font-size:20px">
                           Username 
                            <input style="width: 300px; 
                                height: 20px;
                                margin-left: 10px" 
                                type="text" 
                                name="user">
                        </p>
                    </div>
                    <div>
                        <p style="font-size:20px">
                            Password 
                            <input style="width:300px; 
                                height: 20px;
                                margin-left: 10px" 
                                type="password" 
                                name="password">
                        </p>
                    </div>
                    <!--Button Submit-->
                    <input  style="background-color: #7F1D1D;
                        color: #fff;
                        font-size:18px;
                        width: 30%;
                        height: 40px;
                        margin-top: 30px;"
                        type="submit" 
                        name="login" 
                        value="Log In"
                    >
                </div>
            </form>
            <!--End Form-->
        </div> 


    </body>
</html>
