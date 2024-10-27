<?php
include 'conn.php';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the ID from the query string
    $id = $_GET['id'];

    // Collect form data
    $award_year = $_POST['award_year'];
    $nstp_program = $_POST['nstp_program'];
    $region = $_POST['region'];
    $serial = $_POST['serial'];
    $surname = $_POST['surname'];
    $fname = $_POST['fname'];
    $extension = $_POST['extension'];
    $middle_name = $_POST['middle_name'];
    $gender = $_POST['gender'];
    $birthdate = $_POST['birthdate'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $hei = $_POST['hei'];
    $inst_code = $_POST['inst_code'];
    $hei_type = $_POST['hei_type'];
    $program_level = $_POST['program_level'];
    $program = $_POST['program'];
    $email = $_POST['email'];
    $number = $_POST['number'];

    // Update the record in the database
    $sql = "UPDATE student SET award_year='$award_year', nstp_program='$nstp_program', region='$region', serial='$serial', surname='$surname', fname='$fname', extension='$extension', middle_name='$middle_name', gender='$gender', birthdate='$birthdate', city='$city', province='$province', hei='$hei', inst_code='$inst_code', hei_type='$hei_type', program_level='$program_level', program='$program', email='$email', number='$number' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        // Redirect to index.php after successful update
        header("Location: index.php");
        exit(); // Ensure the script stops after the redirect
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

// Fetch the existing data for the student
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM student WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Update Student</h2>
        <div class="mt-4">
            <form action="update.php?id=<?= $id ?>" method="POST">
            <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="award_year">Year Awarded</label>
                        <input type="text" class="form-control" name="award_year" id="award_year" value="<?= $row['award_year'] ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nstp_program">NSTP Program</label>
                        <input type="text" class="form-control" name="nstp_program" id="nstp_program" value="<?= $row['nstp_program'] ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="region">Region</label>
                        <input type="text" class="form-control" name="region" id="region" value="<?= $row['region'] ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="serial">Serial Number</label>
                        <input type="text" class="form-control" name="serial" id="serial" value="<?= $row['serial'] ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="surname">Surname</label>
                        <input type="text" class="form-control" name="surname" id="surname" value="<?= $row['surname'] ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="fname">First Name</label>
                        <input type="text" class="form-control" name="fname" id="fname" value="<?= $row['fname'] ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="extension">Extension</label>
                        <input type="text" class="form-control" name="extension" id="extension" value="<?= $row['extension'] ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="middle_name">Middle Name</label>
                        <input type="text" class="form-control" name="middle_name" id="middle_name" value="<?= $row['middle_name'] ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="gender">Gender</label>
                        <input type="text" class="form-control" name="gender" id="gender" value="<?= $row['gender'] ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="birthdate">Birthdate</label>
                        <input type="text" class="form-control" name="birthdate" id="birthdate" value="<?= $row['birthdate'] ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="city">City</label>
                        <input type="text" class="form-control" name="city" id="city" value="<?= $row['city'] ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="province">Province</label>
                        <input type="text" class="form-control" name="province" id="province" value="<?= $row['province'] ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="hei">HEI Name</label>
                        <input type="text" class="form-control" name="hei" id="hei" value="<?= $row['hei'] ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inst_code">Institutional Code</label>
                        <input type="text" class="form-control" name="inst_code" id="inst_code" value="<?= $row['inst_code'] ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="hei_type">Type of HEI</label>
                        <input type="text" class="form-control" name="hei_type" id="hei_type" value="<?= $row['hei_type'] ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="program_level">Program Level Code</label>
                        <input type="text" class="form-control" name="program_level" id="program_level" value="<?= $row['program_level'] ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="program">Main Program Name</label>
                        <input type="text" class="form-control" name="program" id="program" value="<?= $row['program'] ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="email">Email Address</label>
                        <input type="text" class="form-control" name="email" id="email" value="<?= $row['email'] ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="number">Telephone/CP Number</label>
                        <input type="text" class="form-control" name="number" id="number" value="<?= $row['number'] ?>" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update Student</button>
            </form>
        </div>
    </div>
</body>
</html>
