<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="files/images/Health.png">
    <title>pharmacist search</title>
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
            <h3>Pharmacists Search by Job-ID</h3>

                <div class="doct">
                    <form action="displayPharmacistsUpdate.php" method="post">
                        <select name="searchDoctor" id="" class="form-control" required>
                            <?php
                            $conn = mysqli_connect("localhost","root","","smart");
                            if (!$conn){
                                die("Database Connection Error : " . mysqli_connect_error());
                            }
                            $sql = "select job_id from pharmacists";
                            $result = $conn -> query($sql);
                            if ($result -> num_rows > 0){
                                // If the table has data
                                while ($row = $result -> fetch_assoc()){
                                    ?>
                                    <option value="<?php echo $row['job_id'];?>"><?php echo $row['job_id'];?></option>
                                    <?php
                                }
                            }
                            mysqli_close($conn);
                            ?>
                        </select>
                        <hr>
                        <div class="buttons">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>






                </div>



        </div>
    </div>
</div>
</body>
</html>