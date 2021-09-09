
<?php
$conn = mysqli_connect("localhost","root","","smart");
if (!$conn){
    die("Database Connection Error : " . mysqli_connect_error());
}
// Remove SQL Injection
$jobID = mysqli_real_escape_string($conn,$_POST['searchDoctor']);

$sql = "select * from patients where patient_id = '$jobID'";
$result = $conn -> query($sql);
if ($result -> num_rows > 0){
// If the table has data
while ($row = $result -> fetch_assoc()){
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="files/images/Health.png">
    <title>Doctor update</title>
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
                <a href="doctorDashboard.php">   <div class="col-sm-4"><img src="files/images/dashboardMain.png" alt="" width="210" height="100px"></div></a>
                <a href="doctorDashboard.php"><div class="col-sm-8"><b>Dashboard</b></div></a>
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
        <h3>Patients' diagnosis</h3>
        <form action="diagnosisSave.php" method="post">
         <div class="doct">
             <label for=""><b>Surname:</b></label>
             <input type="text" name="surname" placeholder="Enter surname" required  class="form-control" readonly
                    value="<?php print $row['surname'];?>">

             <label for=""><b>last name:</b></label>
             <input type="text" name="last_name" placeholder="Enter last name" required  class="form-control" readonly
                    value="<?php print $row['last_name'];?>">
             <label for=""><b>first name:</b></label>
             <input type="text" name="first_name" placeholder="Enter first name" required class="form-control" readonly
                    value="<?php print $row['first_name'];?>">

             <label for=""><b>National ID:</b></label>
             <input type="text" name="national_id" placeholder="Enter National id"  class="form-control" readonly
                    value="<?php print $row['national_id'];?>"><br>
             <label for=""><b>Diagnosis:</b></label>

             <textarea type="text" name="diagnosis" cols="70" rows="10" placeholder="Patients diagnosis"
                       value="<?php print $row['diagnosis'];?>"></textarea>





         </div>

            <div class="button">
                <input type="submit" name="submit" value="Validate" class="btn btn-success">
            </div>
        </form>
    </div>
</div>
</div>
</body>
</html>
    <?php
}
}
mysqli_close($conn);
?>