<?php 
session_start(); 
include "db.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=UserName is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM logintab WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['id'] = $row['id'];

            	// Dynamically get the host (IP or domain). Change here once deployed
            	$host = $_SERVER['HTTP_HOST'];
                
            	// Redirect to the students index page using the dynamic host. Change here once deployed
            	header("Location: http://$host/nstp_database/students/index.php");
		        exit();
            }else{
				header("Location: index.php?error=Incorect Username or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect Username or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}