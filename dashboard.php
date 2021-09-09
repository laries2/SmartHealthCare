<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="files/images/Health.png">
    <title>Smart Health Care Dashboard</title>
    <link rel="stylesheet" href="files/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="files/dash.css">
    <script src="files/bootstrap/js/jquery-3.6.0.js" ></script>
    <script src="files/bootstrap/js/popper.min.js" ></script>
    <script src="files/bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
    <h2><b>SmartHealthCare</b>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; <li class="btn btn-success"> <a class="nav-link" href="logout.php">Logout</a></li></h2>
    <div class="row">
        <div class="col-sm-2 col1">
            <div class="row">
                <div class="col-sm-4"><img src="files/images/adminMain.png" alt=""  width="50" height="80px"></div>
                <div class="col-sm-8">
                    <h6>Hillary Bett</h6>
                    <h8>Admin</h8></div>

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
                <a href=""> <div class="col-sm-8"><b>Pharmacists</b></div></a>
            </div>
            <br>


        </div>




        <div class="col-sm-10">
            <h3>Dashboard</h3>



            <div class="row">

                <div class="col-sm-3">
                    <button data-toggle="collapse" data-target="#menu1" class="btn">Doctors</button>

                     <div id="menu1" class="collapse bg-info border-success"><br>
                        <a class="dropdown-item " href="doctor.php" ><b>Add New</b></a><br>
                        <a class="dropdown-item" href="doctorDashUpdate.php"><b>Update</b></a><br>
                        <a class="dropdown-item" href="doctorDashDelete.php"><b>Delete</b></a><br>
                        <a class="dropdown-item" href="doctorReport.php"><b>Report</b></a><br>
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    </div>
                </div>
                <div class="col-sm-3">
                    <button data-toggle="collapse" data-target="#menu2" class="btn">Nurses</button>
                    <div id="menu2" class="collapse bg-info border-success"><br>
                        <a class="dropdown-item " href="nurses.php" ><b>Add New</b></a><br>
                        <a class="dropdown-item" href="nurseDashUpdate.php"><b>Update</b></a><br>
                        <a class="dropdown-item" href="nurseDashDelete.php"><b>Delete</b></a><br>
                        <a class="dropdown-item" href="nurseReport.php"><b>Report</b></a><br>
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    </div>
                </div>
                <div class="col-sm-3">
                    <button data-toggle="collapse" data-target="#menu3" class="btn">Pharmacists</button>
                    <div id="menu3" class="collapse bg-info border-success"><br>
                        <a class="dropdown-item " href="pharmacists.php" ><b>Add New</b></a><br>
                        <a class="dropdown-item" href="pharmacistDashUpdate.php"><b>Update</b></a><br>
                        <a class="dropdown-item" href="pharmacistDashDelete.php"><b>Delete</b></a><br>
                        <a class="dropdown-item" href="pharmacistReport.php"><b>Report</b></a><br>
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    </div>
                </div>
                <div class="col-sm-3">
                    <button data-toggle="collapse" data-target="#menu4" class="btn">Patients</button>
                    <div id="menu4" class="collapse bg-info border-success"><br>
                        <a class="dropdown-item " href="patient.php" ><b>Register</b></a><br>
                        <a class="dropdown-item" href="patientDashUpdate.php"><b>Update</b></a><br>
                        <a class="dropdown-item" href="patientDashDelete.php"><b>Delete</b></a><br>
                        <a class="dropdown-item" href="patientDashReport.php"><b>Report</b></a><br>
                        <a class="dropdown-item" href="prescriptionSearch.php"><b>Prescriptions</b></a><br>
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    </div>
                </div>

            </div>




        </div>
    </div>
</div>
</body>
</html>
