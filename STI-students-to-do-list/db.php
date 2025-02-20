<?php 
// // Database configuration
// define("DB_SERVER", "localhost");
// define("DB_USER", "root");
// define("DB_PASSWORD", "");
// define("DB_DATABASE", "member");

// // Create database connection
// $con = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);

// // Check connection
// if($con->connect_error){
// 	die ("Connection failed: " . $con->connect_error);	
// }


// Database configuration
$DB_SERVER = "localhost";
$DB_USER = "root";
$DB_PASSWORD = "";
$DB_DATABASE = "member";

// Create database connection
$con = new MYSQLi($DB_SERVER, $DB_USER, $DB_PASSWORD, $DB_DATABASE);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

 

?>

