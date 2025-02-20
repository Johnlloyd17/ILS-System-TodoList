<?php 
	

		// Database configuration
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$database = "member";

// Create database connection
$conn = new MYSQLi($db_server, $db_user, $db_pass, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	

	$bSave = isset($_POST['post']) ? $_POST['post'] : '';
	if($bSave == "Post"){
		
		$yourname = $_POST['yourname'];
		$comment = $_POST['comment'];
		// php user_type
		mysqli_query($conn, "INSERT INTO messages(yourname, comment) values('$yourname','$comment')") or die(mysqli_error($conn));
    // html usertype
		
		// header("location: manage-users.php?addN=success");
	}










	
?>
