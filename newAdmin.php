<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="files/images/Health.png">
    <title>Admin</title>
    <link rel="stylesheet" href="files/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="files/dash.css">
    <script src="files/bootstrap/js/bootstrap.js"></script>
    <script src="files/bootstrap/js/jquery-3.6.0.js" ></script>
    <script src="files/bootstrap/js/popper.min.js" ></script>


</head>
<body>
<div class="container">
    <h2><b>SmartHealthCare</b>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; <li class="btn btn-success"> <a class="nav-link" href="logout.php">Logout</a></li></h2>


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
                <a href="index.php"> <div class="col-sm-4"><img src="files/images/adminMain.png" alt=""  width="180" height="100px"></div></a>
                <a href="index.php"><div class="col-sm-8 "><b>Admin</b></div></a>
            </div>
            <br>
            <div class="row">
                <a href="index.php"> <div class="col-sm-4"><img src="files/images/doctor1.jpg" alt=""  width="180" height="100px"></div></a>
                <a href="index.php"> <div class="col-sm-8"><b>Doctors</b></div></a>
            </div>
            <br>
            <div class="row">
                <a href="index.php"><div class="col-sm-4"><img src="files/images/nurseM.png" alt=""  width="180" height="100px"></div></a>
                <a href="index.php"> <div class="col-sm-8"><b>Nurses</b></div></a>
            </div>
            <br>
            <div class="row">
                <a href="index.php"><div class="col-sm-4"><img src="files/images/pharm1.png" alt=""  width="210" height="100px"></div></a>
                <a href="index.php"> <div class="col-sm-8"><b>Pharmacists</b></div></a>
            </div>
            <br>




        </div>
    <div class="col-sm-10">
        <h3>Admin registration</h3>

        <?php
        $conn = mysqli_connect("localhost","root","","smart");
        if (!$conn){
            die("Database Connection Error : " . mysqli_connect_error());
        }
        // Removing SQL Injections
        $surname = mysqli_real_escape_string($conn,$_POST['surname']);
        $lastName = mysqli_real_escape_string($conn,$_POST['last_name']);
        $firstName = mysqli_real_escape_string($conn,$_POST['first_name']);

        $nationalID = mysqli_real_escape_string($conn,$_POST['national_id']);
        $email = mysqli_real_escape_string($conn,$_POST['email_address']);

        $cContact = mysqli_real_escape_string($conn,$_POST['contact_number']);


        // Using MySQL Insert to post the data to the database table courses
        $sql = "insert into admin(surname,last_name,first_name,national_id,email_address,contact_number)
values ('$surname','$lastName','$firstName','$nationalID',' $email',' $cContact')";
        if ($conn -> query($sql) == true){
            print "<p>New Admin  Added Successfully</p>";
            print "<a href='admin.php' class='btn btn-outline-success'>Add New Admin</a>";
        }
        else{
            print "<p>Admin not added</p>";
            print "<a href='admin.php' class='btn btn-outline-danger'>Try Again</a>";
        }
        mysqli_close($conn);
        ?>
    </div>
</div>
</div>
</body>
</html>