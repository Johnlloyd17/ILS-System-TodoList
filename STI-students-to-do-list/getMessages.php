<?php  

include('session.php');

	if(isset($_POST['friend'])){
		$friend_id = $_POST['friend'];
		$user_id = $_POST['user'];
		$result_conversation = $con->query("SELECT * FROM messages WHERE (sender = '$friend_id' OR receiver = '$friend_id') AND (sender = '$user_id' OR receiver = '$user_id') ORDER BY id ASC") or die($con->error);
		$display = '';
		while($row_conversation = $result_conversation->fetch_assoc()){
			if($row_conversation['sender'] == $friend_id){
				$display .= '<div class="friend_message">'.$row_conversation['content'].'</div>';
			}else{
				$display .= '<div class="user_message">'.$row_conversation['content'].'</div>';
			}
		}
		
		echo $display;
	}
?>