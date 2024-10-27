<?php
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
    

    $sql = "INSERT INTO student (award_year, nstp_program, region, serial, surname, fname, extension, middle_name, gender, birthdate, city, province, hei, inst_code, hei_type, program_level, program, email, number) VALUES ('$award_year', '$nstp_program', '$region', '$serial', '$surname', '$fname', '$extension', '$middle_name', '$gender', '$birthdate', '$city', '$province', '$hei', '$inst_code', '$hei_type', '$program_level', '$program', '$email', '$number')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}