<?php
	include_once('db.php');
	
	$uid = $_GET['uid'];
	if(!empty($uid)){
		mysqli_query($con, "DELETE FROM member WHERE mem_id = $uid") or die(mysqli_error($con));

		unlink('uploads/'.$uid.'.jpg');
		header("location: view_tbl.php?delete=success");
	}
?>