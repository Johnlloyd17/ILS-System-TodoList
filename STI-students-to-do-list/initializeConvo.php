<?php
include('session.php');
  if(isset($_POST['init_log_id'])){
    $user_id = $_POST['init_log_id'];
    $convo = array();
    $result_messages = $con->query("SELECT * FROM messages WHERE sender = '$user_id' OR receiver = '$user_id' ORDER BY id DESC") or die($con->error);
    while($row_messages = $result_messages->fetch_assoc()){
      if($row_messages['sender'] == $row_messages['receiver']){
        if(!in_array($row_messages['sender'], $convo)){
          $convo[sizeof($convo)] = $row_messages['sender'];
        }
      }else{
        if(!in_array($row_messages['sender'], $convo) && $row_messages['sender'] != $user_id){
          $convo[sizeof($convo)] = $row_messages['sender'];
        }

        if(!in_array($row_messages['receiver'], $convo) && $row_messages['receiver'] != $user_id){
          $convo[sizeof($convo)] = $row_messages['receiver'];
        }
      }
    }
    $counter = 0;
    $display = '';
    while($counter < sizeof($convo)){
      $friend_id = $convo[$counter];
      $result_friend = $con->query("SELECT * FROM member WHERE mem_id = '$friend_id'") or die($con->error);
      $row_friend = $result_friend->fetch_assoc();

      $all_convoID = array(); 
      $result_conversation = $con->query("SELECT * FROM messages WHERE (sender like '%$friend_id%' OR receiver like '%$friend_id%') AND (sender like '%$user_id%' OR receiver like '%$user_id%') ORDER BY id DESC") or die($con->error);
      $row_conversation = $result_conversation->fetch_assoc();

      $display .= '<div style="height: 65px;padding: 10px;" class="hover_message" onclick="openMessage(this)">
    <input type="hidden" value="'.$row_friend['fname'].' '.$row_friend['lname'].'">
    <input type="hidden" value="'.$friend_id.'">
    <img style="margin: 5px;position: relative;top: -10px;" class="profile_size" src="uploads/'.$friend_id.'.jpg" alt="picture">
    <span style="display: inline-block;">
      <div style="font-size: 11pt">
        '.$row_friend['fname'].' '.$row_friend['lname'].'
      </div>
    <div style="font-size: 10pt">';
      $theStyle = ($row_conversation['sender'] == $user_id) ? '':'font-weight: bold';
      $theSpan = ($row_conversation['sender'] == $user_id) ? 'You: '.$row_conversation['content']:$row_conversation['content'];
      $display .= '<span style="'.$theStyle.'">

        '.$theSpan.'
      </span>
    </div>
    </span>
  </div>';
      $counter++;
    }
    echo $display;
  }
  
?>