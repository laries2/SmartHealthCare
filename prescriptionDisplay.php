
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="files/images/Health.png">
    <title> Report</title>
    <link rel="stylesheet" href="files/bootstrap/css/bootstrap.css">
    <script src="files/bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
    <table class="table table-bordered table-striped table-responsive-sm">
        <h2>SmartHealthCare Facility</h2>
        <tr>
            <th colspan="9">PATIENTS' PRESCRIPTION</th>
        </tr>
        <tr>
            <th>Patient's ID</th>
            <th>Surname</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>National ID</th>
            <th>Diagnosis</th>
            <th>Prescriptions</th>

        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "smart");
        if (!$conn) {
            die("Database Connection Error : " . mysqli_connect_error());
        }
        $jobID = mysqli_real_escape_string($conn,$_POST['patient_id']);
        $sql = "select * from patients where patient_id = '$jobID'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['patient_id']; ?></td>
                    <td><?php echo $row['surname']; ?></td>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['national_id']; ?></td>
                    <td><?php echo $row['diagnosis']; ?></td>
                    <td><?php echo $row['drugs_administered']; ?></td>
                </tr>
                <?php
            }
            mysqli_close($conn);
        }
        ?>
    </table>
</div>
</body>
</html>


