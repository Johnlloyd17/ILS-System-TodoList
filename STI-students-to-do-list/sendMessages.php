<?php  

include('session.php');

	if(isset($_POST['senderTo'])){
		$friend_id = $_POST['receiverFrom'];
		$user_id = $_POST['senderTo'];
		$message = $_POST['messageContent'];
		$con->query("INSERT INTO messages(content, sender, receiver) VALUES ('$message','$user_id','$friend_id')") or die($con->error);
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