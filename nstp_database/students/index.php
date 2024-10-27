<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapua MCM: List of NSTP Graduates</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .search-bar {
            width: 250%; /* Makes the search bar 70% of the screen width */
            height: 50px; /* Adjusts the height for a larger input field */
            margin: 20px auto; /* Centers the search bar horizontally */
            border-radius: 25px; /* Adds rounded corners */
            border: 1px solid #ccc; /* Optional: Adds a border */
            padding-left: 20px; /* Optional: Adds some padding inside the search bar */
            font-size: 18px; /* Optional: Increases the font size */
        }

        .search-container {
            display: flex;
            justify-content: center; /* Centers the container */
            margin-bottom: 30px; /* Adds space below the search bar */
        }

        .btn-primary-1 {
            height: 50px; /* Match the height of the search bar */
            background-color: #114B9F;
            font-size: 18px; /* Optional: Increases the font size */
            border-color: #114B9F;
            color: white;
        }

        .btn-primary-2 {
            height: 50px; /* Match the height of the search bar */
            background-color: #DC3545;
            font-size: 18px; /* Optional: Increases the font size */
            border-color: #DC3545;
            color: white;
        }

        .btn-primary-3 {
            height: 50px; /* Match the height of the search bar */
            background-color: #FFC107;
            font-size: 18px; /* Optional: Increases the font size */
            border-color: #FFC107;
            color: black;
        }

        .btn-primary-1:hover {
            background-color: #DC3545;
            border-color: #DC3545;
            color: white;
        }

        .btn-primary-2:hover {
            background-color: #114B9F;
            border-color: #114B9F;
            color: white;
        }

        .btn-primary-3:hover {
            background-color: #a7a7a7;
            border-color: #a7a7a7;
            color: black;
        }


        /* Style for the table header */
        thead th {
            background-color: #333333; /* Black background */
            color: white;            /* White text */
        }

        /* Optionally, you can add this to style the header text */
        thead th {
            font-weight: bold;
            text-align: center;      /* Center horizontally */
        }

        .logo-image {
        width: 200px; /* Adjust the width as per your logo size */
        height: auto; /* Keep the aspect ratio */
        }


        .logout-btn {
            background-color: transparent;
            color: #FFFFFF;
            border: none;
            padding: 29px 30px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        .logout-btn:hover {
            background-color: #a7a7a7;
        }

        .centered-text {
            text-align: center; /* Center horizontally */
            vertical-align: middle; /* Center vertically */
            background-color: #FFFFFF
        }
        .div-class {
            background-image: url('redbg3.jpg');
            background-size: cover; /* Ensures the image covers the entire div */
            background-position: center; /* Centers the image */
            background-repeat: no-repeat; /* Prevents repeating */
            height: 250px; /* Adjust the height to your requirement */
            width: 100%; /* Adjust the width to your requirement */
            /*padding: 10x;*/
        }
        /* Custom modal size */
        .custom-modal {
            max-width: 60%; /* Adjusts the width of the modal */
            width: 60%;     /* Makes the modal take up 80% of the screen width */
        }

        /* Custom modal content to allow height adjustments */
        .modal-content {
            padding: 20px;
        }

        @media (max-width: 768px) {
            .custom-modal {
                max-width: 95%; /* For smaller screens, make it almost full width */
            }
        }
    </style>
</head>

<body style="background-color: #eaeaea">
    <div style="background-color: #eaeaea; height: 85px;" class="div-class">
        <a href="logout.php" class="logout-btn" style="float: right">Logout</a>
    </div>

    <div>
        <img src="logo.png" alt="Logo" class="logo-image mr-3">
        <img src="csce.png" alt="Logo" class="logo-image">
    </div>


    <div>
        <h2 class="text-center" style = "padding: 10px; font-size: 50px "> Mapua MCM: List of NSTP Graduates </h2>
        
        <div class="d-flex justify-content-center align-items-center mt-4">
            <button type="button" class="btn btn-primary-3" data-toggle="modal" data-target="#addStudentModal">
                Add Student
            </button>
        </div>

        <div class="container mt-3">
            <div class="d-flex justify-content-center align-items-center">
                <form action="" method="GET" class="d-flex" style="width: 70%;">
                    <input type="text" name="search" class="form-control" placeholder="Search" style="width: 100%; height: 50px;">
                    <button type="submit" class="btn btn-primary-2 ml-2" style="height: 50px;">Search</button>
                </form>
            </div>
        </div>

        <!-- Button to trigger modal -->
        <div class="d-flex justify-content-center align-items-center mt-4">
            <form action="" enctype="multipart/form-data" method="post">
                <input type="file" name="excel" required value="">
                <button type="submit" name="import" class="btn btn-primary-1 ml-3">Import</button>
            </form>
        </div>
</div>

        <!-- Add Student Modal -->
        <div class="modal fade" id="addStudentModal" tabindex="-1" role="dialog" aria-labelledby="addStudentModalLabel"
        aria-hidden="true">
            <div class="modal-dialog custom-modal" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addStudentModalLabel">Add Student</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form action="create.php" method="POST">
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                    <label for="award_year">Year Awarded</label>
                                    <input type="text" class="form-control" name="award_year" id="award_year" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="nstp_program">NSTP Program</label>
                                    <input type="text" class="form-control" name="nstp_program" id="nstp_program" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="region">Region</label>
                                    <input type="text" class="form-control" name="region" id="region">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="serial">Serial Number</label>
                                    <input type="text" class="form-control" name="serial" id="serial" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="surname">Surname</label>
                                    <input type="text" class="form-control" name="surname" id="surname" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="fname">First Name</label>
                                    <input type="text" class="form-control" name="fname" id="fname" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="extension">Extension</label>
                                    <input type="text" class="form-control" name="extension" id="extension" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="middle_name">Middle Name</label>
                                    <input type="text" class="form-control" name="middle_name" id="middle_name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="gender">Gender</label>
                                    <input type="text" class="form-control" name="gender" id="gender">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="birthdate">Birthday</label>
                                    <input type="text" class="form-control" name="birthdate" id="birthdate" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" name="city" id="city" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="province">Province</label>
                                    <input type="text" class="form-control" name="province" id="province" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="hei">HEI Name</label>
                                    <input type="text" class="form-control" name="hei" id="hei" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inst_code">Institutional Code</label>
                                    <input type="text" class="form-control" name="inst_code" id="inst_code" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="hei_type">Type of HEI</label>
                                    <input type="text" class="form-control" name="hei_type" id="hei_type" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="program_level">Program Level Code</label>
                                    <input type="text" class="form-control" name="program_level" id="program_level" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="program">Main Program Name</label>
                                    <input type="text" class="form-control" name="program" id="program" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email Address</label>
                                    <input type="text" class="form-control" name="email" id="email" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="number">Telephone/CP Number</label>
                                    <input type="text" class="form-control" name="number" id="number" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Student</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- User Table -->
        <div class="table-responsive mt-5">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th style="vertical-align: middle">ID</th>
                        <th style="vertical-align: middle">Year Awarded</th>
                        <th style="vertical-align: middle">NSTP Program</th>
                        <th style="vertical-align: middle">Region</th>
                        <th style="vertical-align: middle">Serial Number</th>
                        <th style="vertical-align: middle">Surname</th>
                        <th style="vertical-align: middle">First Name</th>
                        <th style="vertical-align: middle">Extension</th>
                        <th style="vertical-align: middle">Middle Name</th>
                        <th style="vertical-align: middle">Gender</th>
                        <th style="vertical-align: middle">Birthdate</th>
                        <th style="vertical-align: middle">City Address</th>
                        <th style="vertical-align: middle">Provincial Address</th>
                        <th style="vertical-align: middle">HEI Name</th>
                        <th style="vertical-align: middle">Institutional Code</th>
                        <th style="vertical-align: middle">Type of HEI</th>
                        <th style="vertical-align: middle">Program Level Code</th>
                        <th style="vertical-align: middle">Main Program Name</th>
                        <th style="vertical-align: middle">Email Address</th>
                        <th style="vertical-align: middle">Telephone/CP Number</th>
                        <th style="vertical-align: middle">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'conn.php';

                    // Initialize the SQL query
                    $sql = "SELECT * FROM student";

                    // Check if a search term is entered
                    if (isset($_GET['search']) && !empty($_GET['search'])) {
                        $search = $conn->real_escape_string($_GET['search']);
                        
                        // Modify the SQL query to include a WHERE clause
                        $sql .= " WHERE award_year LIKE '%$search%' 
                                  OR nstp_program LIKE '%$search%' 
                                  OR region LIKE '%$search%'  
                                  OR serial LIKE '%$search%' 
                                  OR surname LIKE '%$search%' 
                                  OR fname LIKE '%$search%' 
                                  OR extension LIKE '%$search%' 
                                  OR middle_name LIKE '%$search%' 
                                  OR gender LIKE '%$search%' 
                                  OR birthdate LIKE '%$search%'
                                  OR city LIKE '%$search%'
                                  OR province LIKE '%$search%'
                                  OR hei LIKE '%$search%'
                                  OR inst_code LIKE '%$search%'
                                  OR hei_type LIKE '%$search%'
                                  OR program_level LIKE '%$search%'
                                  OR program LIKE  '%$search%'
                                  OR email LIKE '%$search%'
                                  OR number LIKE '%$search%'";
                    }

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td class='centered-text'>{$row['id']}</td>
                                    <td class='centered-text'>{$row['award_year']}</td>
                                    <td class='centered-text'>{$row['nstp_program']}</td>
                                    <td class='centered-text'>{$row['region']}</td>
                                    <td class='centered-text'>{$row['serial']}</td>
                                    <td class='centered-text'>{$row['surname']}</td>
                                    <td class='centered-text'>{$row['fname']}</td>
                                    <td class='centered-text'>{$row['extension']}</td>
                                    <td class='centered-text'>{$row['middle_name']}</td>
                                    <td class='centered-text'>{$row['gender']}</td>
                                    <td class='centered-text'>{$row['birthdate']}</td>
                                    <td class='centered-text'>{$row['city']}</td>
                                    <td class='centered-text'>{$row['province']}</td>
                                    <td class='centered-text'>{$row['hei']}</td>
                                    <td class='centered-text'>{$row['inst_code']}</td>
                                    <td class='centered-text'>{$row['hei_type']}</td>
                                    <td class='centered-text'>{$row['program_level']}</td>
                                    <td class='centered-text'>{$row['program']}</td>
                                    <td class='centered-text'>{$row['email']}</td>
                                    <td class='centered-text'>{$row['number']}</td>
                                    <td class='centered-text'>
                                        <a href='update.php?id={$row['id']}' class='btn btn-warning'>Edit</a>
                                        <a href='delete.php?id={$row['id']}' class='btn btn-danger'>Delete</a>
                                    </td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='22' class='text-center'>No students found</td></tr>";
                    }

                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php
    if(isset($_POST["import"])){
        include 'conn.php';
        $filename = $_FILES["excel"]["name"];
        $fileExtension = explode('.', $filename);
        $fileExtension = strtolower(end($fileExtension));

        $newFileName = date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;

        $targetDirectory = "C:/xampp/htdocs/nstp_database/students/" . $newFileName;
        move_uploaded_file($_FILES["excel"]["tmp_name"], $targetDirectory);

        error_reporting(0);
        ini_set('display_errors', 0);
        
        require "C:/xampp/htdocs/nstp_database/excelReader/excel_reader2.php";
        require "C:/xampp/htdocs/nstp_database/excelReader/SpreadsheetReader.php";


        $reader = new SpreadsheetReader($targetDirectory);
        $isFirstRow = true;
        foreach($reader as $key => $row){
            if ($isFirstRow) {
                $isFirstRow = false;
                continue;
            }
            
            // Skip the row if the birthdate or other key fields are empty
            if (empty($row[1]) || empty($row[2])) {
                continue;
            }

            $award_year = $row[1];
            $nstp_program = $row[2];
            $region = $row[3];
            $serial = $row[4];
            $surname = $row[5];
            $fname = $row[6];
            $extension = $row[7];
            $middle_name = $row[8];
            $gender = $row[9];
            $birthdate = $row[10];
            $city = $row[11];
            $province = $row[12];
            $hei = $row[13];
            $inst_code = $row[14];
            $hei_type = $row[15];
            $program_level = $row[16];
            $program = $row[17];
            $email = $row[18];
            $number = (string)$row[19];
            $number = str_pad($number, 11, '0', STR_PAD_LEFT);

            mysqli_query($conn, "INSERT INTO student VALUES ('', '$award_year', '$nstp_program', '$region', '$serial', '$surname', '$fname', '$extension', '$middle_name', '$gender', '$birthdate', '$city', '$province', '$hei', '$inst_code', '$hei_type', '$program_level', '$program', '$email', '$number')");
        }

        echo
        "
        <script>
        alert('Successfully Imported');
        document.location.href = '';
        </script>
        ";
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
