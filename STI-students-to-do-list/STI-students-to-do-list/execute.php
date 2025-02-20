<?php 
  session_start();
  include('db.php');





  $username=$_POST['username'];
  $result = mysqli_query($con,"SELECT * FROM member WHERE username='$username'");
  $num_rows = mysqli_num_rows($result);

  if ($num_rows) {
    header("location: registration.php?remarks=failed"); 
  }else {

    $fname=$_POST['firstname'];
    $mi=$_POST['middleinitial'];
    $lname=$_POST['lastname'];

    $address=$_POST['address'];
    $gender=$_POST['gender'];

    $contactno=$_POST['contactno'];
    $birthday=$_POST['birthday'];
    $usertype=$_POST['userType'];


    $username=$_POST['username'];
    $password=$_POST['password'];


  if(mysqli_query($con,"INSERT INTO member(fname, mi, lname, address, gender, contactno, birthday, usertype, username, password, userPic)VALUES('$fname','$mi', '$lname','$address','$gender','$contactno','$birthday','$usertype', '$username', '$password', '$userpic')")){ 

      header("location: view_tbl.php?remarks=success");
    }else{
      $e=mysqli_error($con);
      header("location: registration.php?remarks=error&value=$e");   
    }
  }




// $statusMsg = '';
// $backlink = ' <a href="./">Go back</a>';
// // File upload path
// $targetDir = "imgdata/";
// $fileName = basename($_FILES["file"]["name"]);
// $targetFilePath = $targetDir . $fileName;
// $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

// if(isset($_POST["submit"]) && !empty($_FILES["user_image"]["name"])){
//     // Allow certain file formats
//     $allowTypes = array('jpg','png','jpeg','gif','pdf');
//     if (!file_exists($targetFilePath)) {
//         if(in_array($fileType, $allowTypes)){
//                 // Upload file to server
//             if(move_uploaded_file($_FILES["user_image"]["tmp_name"], $targetFilePath)){
                
//                 // Insert image file name into database
//                 $insert = $db->query("INSERT into images (userPic, uploaded_on) VALUES ('".$fileName."', NOW())");

//                 if($insert){
//                     $statusMsg = "The file <b>".$fileName. "</b> has been uploaded successfully." . $backlink;
//                 }else{
//                     $statusMsg = "File upload failed, please try again." . $backlink;
//                 } 
//             }else{
//                 $statusMsg = "Sorry, there was an error uploading your file." . $backlink;
//             }
//         }else{
//             $statusMsg = "Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload." . $backlink;
//         }
//     }else{
//             $statusMsg = "The file <b>".$fileName. "</b> is already exist." . $backlink;
//         }
// }else{
//     $statusMsg = 'Please select a file to upload.' . $backlink;
// }

// // Display status message
// echo $statusMsg;











?>