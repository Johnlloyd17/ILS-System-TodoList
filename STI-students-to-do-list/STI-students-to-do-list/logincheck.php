<?php
include("db.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {

	$firstname=mysqli_real_escape_string($con,$_POST['firstname']);
	$initial=mysqli_real_escape_string($con,$_POST['middleinitial']);
	$lastname=mysqli_real_escape_string($con,$_POST['lastname']);

	$address=mysqli_real_escape_string($con,$_POST['address']);
	$gender=mysqli_real_escape_string($con,$_POST['gender']);
	$contactno=mysqli_real_escape_string($con,$_POST['contactno']);
	
	$birthday=mysqli_real_escape_string($con,$_POST['birthday']);
	$_usertype=mysqli_real_escape_string($con,$_POST['userType']);

	$username=mysqli_real_escape_string($con,$_POST['username']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	
	// $userpic=mysqli_real_escape_string($con,$_POST['userPic']);



	$result = mysqli_query($con,"SELECT * FROM member");
	$c_rows = mysqli_num_rows($result);
	if ($c_rows!=$username) {
		header("location: log-in.php?remark_login=failed");
	}
	$sql="SELECT * FROM member WHERE username='$username' and password='$password'";
	  
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result); 

	$active=$row['active'];
	$count=mysqli_num_rows($result);

	// trying to act or find the usertype is "Admin or Student"
	if($count>=1) {
		$_SESSION['login_user']=$username;
		if($row['usertype'] == 'Admin'){
			header("location: admin.php");
		}else if($row['usertype'] == 'Student'){
			header("location: student.php");

		}
	}







}


?>


