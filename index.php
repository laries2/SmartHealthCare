<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User login</title>
    <link rel="icon" href="files/images/Health.png">
    <link rel="stylesheet" href="files/index.css">
</head>
<body>

<div class="container">
    <h1 class="btn btn-secondary head">SmartHealthCare </h1>
    <form method="post" action="">
        <div class="login-form">
            <div class="login">
                <h3>Login</h3>
            </div>
            <form method="post" action="">
                <select name="user_group" id="user_group" class="form-control" required>

                    <option value="">=========Log In As=========</option>
                    <option value="admin">Admin</option>
                    <option value="doctor">Doctor</option>
                    <option value="nurse">Nurse</option>
                    <option value="pharmacist">Pharmacist</option>


                    <br>

                <label>
                    <input type="text" name="username" placeholder="Username" required>
                </label><br>
                <label>
                    <input type="password" name="passwd" placeholder="Password" required>
                </label><br>
                <input type="submit" name="submit" value="Log In">
                </form><br>


                <a href="NewAccount.php"><div class="btn">Create account</div></a>
                <a href="forgetPassword.php"><div class="btn">Forgot password</div></a>

        </div>
</div>
<video autoplay muted loop src="files/video/smart4.mp4" width="100%" height="100%"></video>
</body>
</html>

<?php
session_start();

if(isset($_POST['submit'])){
    include 'db_connect.php';



        $userGroup = mysqli_real_escape_string($db,$_POST['user_group']);
        $username = mysqli_real_escape_string($db,$_POST['username']);
        $password = mysqli_real_escape_string($db,$_POST['passwd']);



    $qry=mysqli_query($db,"SELECT * FROM user WHERE user_group='$userGroup' AND  username='$username' AND passwd='$password'");
    $row = mysqli_fetch_array($qry,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($qry);

    // If result matched $username,$password and $usertype, table row must be 1 row

    if($count == 1) {

        if(!empty($username) AND !empty($password) AND  $userGroup=='admin'){
            header("LOCATION:dashboard.php");
        }

        else if(!empty($username) AND !empty($password) AND $userGroup=='doctor'){
            header("LOCATION:doctorDashboard.php");
        }

        else if(!empty($username) AND !empty($password) AND $userGroup=='nurse'){
            header("LOCATION:nurseDashboard.php");
        }

        else if(!empty($username) AND !empty($password) AND $userGroup=='pharmacist'){
            header("LOCATION:pharmacistDashboard.php");
        }
        else if(!empty($username) AND !empty($password) AND $userGroup=='patient'){
            header("LOCATION:pharmacistDashboard.php");
        }


    }else {
        header("LOCATION:login_error.php");
    }
}