<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="files/images/Health.png">
    <title>User registration</title>
    <link rel="stylesheet" href="files/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="files/dash.css">
    <script src="files/bootstrap/js/bootstrap.js"></script>
    <script src="files/bootstrap/js/jquery-3.6.0.js" ></script>
    <script src="files/bootstrap/js/popper.min.js" ></script>
</head>
<body>
<div class="container">
    <h2><b>SmartHealthCare</b></h2>
    <div class="row">
        <div class="col-sm-2 col1">
            <div class="row">
                <div class="col-sm-4"><img src="files/images/adminMain.png" alt=""  width="50" height="80px"></div>
                <div class="col-sm-8"><h6>Hillary Bett</h6><h8>Admin</h8></div>
            </div>
            <br><br><br><br>
            <div class="row">
                <a href="dashboard.php">   <div class="col-sm-4"><img src="files/images/dashboardMain.png" alt="" width="210" height="100px"></div></a>
                <a href="dashboard.php"><div class="col-sm-8"><b>Dashboard</b></div></a>
            </div>
            <br>
            <div class="row">
                <a href=""> <div class="col-sm-4"><img src="files/images/adminMain.png" alt=""  width="180" height="100px"></div></a>
                <a href=""><div class="col-sm-8 "><b>Admin</b></div></a>
            </div>
            <br>
            <div class="row">
                <a href=""> <div class="col-sm-4"><img src="files/images/doctor1.jpg" alt=""  width="180" height="100px"></div></a>
                <a href=""> <div class="col-sm-8"><b>Doctors</b></div></a>
            </div>
            <br>
            <div class="row">
                <a href=""><div class="col-sm-4"><img src="files/images/nurseM.png" alt=""  width="180" height="100px"></div></a>
                <a href=""> <div class="col-sm-8"><b>Nurses</b></div></a>
            </div>
            <br>
            <div class="row">
                <a href=""><div class="col-sm-4"><img src="files/images/pharm1.png" alt=""  width="210" height="100px"></div></a>
                <a href=""> <div class="col-sm-8"><b>Pharmacists</b></div></a>
            </div>
            <br>




    </div>
    <div class="col-sm-10">
        <h3>User registration</h3>

        <?php
        $conn = mysqli_connect("localhost","root","","smart");
        if (!$conn){
            die("Database Connection Error : " . mysqli_connect_error());
        }
        // Removing SQL Injections
        $firstName = mysqli_real_escape_string($conn,$_POST['first_name']);
        $middleName = mysqli_real_escape_string($conn,$_POST['middle_name']);
        $lastName = mysqli_real_escape_string($conn,$_POST['last_name']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $userGroup = mysqli_real_escape_string($conn,$_POST['user_group']);
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $password = mysqli_real_escape_string($conn,$_POST['passwd']);



        // Using MySQL Insert to post the data to the database table courses
        $sql = "insert into user(first_name,middle_name,last_name,email,user_group,username,passwd)
values ('$firstName','$middleName','$lastName','$email','$userGroup','$username','$password')";
        if ($conn -> query($sql) == true){
            print "<p>New User  Added Successfully</p>";
            print "<a href='index.php' class='btn btn-outline-success'>Log in</a>";
        }
        else{
            print "<p>User not added</p>";
            print "<a href='NewAccount.php' class='btn btn-outline-danger'>Try Again</a>";
        }
        mysqli_close($conn);
        ?>
    </div>
</div>
</div>
</body>
</html>