<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="files/images/Health.png">
    <title>Doctor</title>
    <link rel="stylesheet" href="files/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="files/dash.css">
    <script src="files/bootstrap/js/bootstrap.js"></script>
    <script src="files/bootstrap/js/jquery-3.6.0.js" ></script>
    <script src="files/bootstrap/js/popper.min.js" ></script>
</head>
<body>
<div class="container">
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
                <a href="doctorDashboard.php">   <div class="col-sm-4"><img src="files/images/dashboardMain.png" alt="" width="210" height="100px"></div></a>
                <a href="doctorDashboard.php"><div class="col-sm-8"><b>Dashboard</b></div></a>
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
        <h3>Doctor registration</h3>
        <form action="newDoctor.php" method="post">
         <div class="doct">
             <label for=""><b>Surname:</b></label>
             <input type="text" name="surname" placeholder="Enter surname" required  class="form-control">

             <label for=""><b>Last name:</b></label>
             <input type="text" name="last_name" placeholder="Enter last name" required  class="form-control">
             <label for=""><b>First name:</b></label>
             <input type="text" name="first_name" placeholder="Enter first name" required class="form-control">
             <label for=""><b>National ID:</b></label>
             <input type="text" name="national_id" placeholder="Enter National id" required class="form-control">
             <label for="" ><b>Email address:</b></label>
             <input type="email" name="email" placeholder="Your Email address" required class="form-control">
             <label for="" ><b>Telephone Number:</b></label>
             <input type="tel" name="telephone" placeholder="Your Telephone number" required class="form-control">

             <label for="" ><b>Job Code:</b></label>
             <input type="text" name="job_code"  value="DOC1230" required class="form-control" readonly>
             <label for=""><b>Salary:</b></label>
             <input type="text" name="salary" placeholder="Enter Salary" required class="form-control">
             <label for="" ><b>Speciality:</b></label><br>
             <select name="specialization" id=""  required>
                 <option value="Neurology"> Neurology</option>
                 <option value="Radiology"> Radiology</option>
                 <option value="Cardiology"> Cardiology</option>
                 <option value="Anesthesiology">Anesthesiology</option>
                 <option value="Emergency medicine">Emergency medicine</option>
             </select>



         </div>
            <br>

            <div class="button">
                <input type="submit" name="submit" value="Submit Doctor Details" class="btn btn-success">
            </div>
        </form>
    </div>
</div>
</div>
</body>
</html>