

<?php

include "logincheck.php";
// include_once('mydb.php');

// $msg = '';
//   $bLog_in = isset($_POST['bLog_in']) ? $_POST['bLog_in'] : '';
//   if($bLog_in == 'log_in'){
    
//     $fetch_user_exists = mysqli_query($con, "select * from member where username = '$_POST[uname]' and password = '$_POST[pword]'") or die(mysqli_error($con));
//     $records = mysqli_fetch_array($fetch_user_exists, MYSQLI_ASSOC);
    
 

//     if(mysqli_num_rows($fetch_user_exists) >= 1){
//       $_SESSION['usertype'] = $records['usertype'];
//         header("location: admin.php");
//           if($records['usertype'] == 'Admin'){
//             header("location: admin.php");
//           }else if($records['usertype'] == 'Student'){
//             header("location: student.php");
//           }
      
//     }else{
//       $msg = '<div class="alert alert-danger center"="alert">
//                 <strong>Invalid username and/or password is incorrect!</strong>
//               </div>';
//     }

//   }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>STI STUDENT TODO LIST</title>
  
    <!--===============================================================================================-->
    <!--WEB-ICON-->
    <link rel="icon" type="image/png" href="images/icons/calendar_icon.png"/>
    <!--===============================================================================================-->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap_v5/css/bootstrap.min.css">
    <!--===============================================================================================-->

    <link rel="stylesheet" type="text/css" href="css/fonts_googleapis_css2.css">
    <link rel="stylesheet" type="text/css" href="css/fonts_googleapis.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/all.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" href="slick/slick.css"/>    
    <!--===============================================================================================-->
    <link rel="stylesheet" href="slick/slick-theme.css"/>    
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/templatemo-dream-pulse.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <!--LOGIN AND REGISTER FORM (CSS)-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <!-- <link rel="stylesheet" href="css/calendar.css"> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@500&display=swap" rel="stylesheet"> -->
    <!--===============================================================================================-->
  </head>
  <body>


    <div class="limiter">
      <!--===============================================================================================-->
      <!--LOGIN FORM-->
      <!--===============================================================================================-->
      <div class="container-login100" style="background-color: #e0e0e0;">
        <div class="wrap-login100">
          <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
            <span class="login100-form-title-1">
              Sign In
            </span>
          </div>
          <!-- <?php $msg; ?> -->
          <!-- password -->
          <form class="login100-form validate-form" action="log-in.php" method="post">
            <?php
              $remarks = isset($_GET['remark_login']) ? $_GET['remark_login'] : '';
                if ($remarks==null and $remarks=="") {
                  // echo ' <div id="reg-head" class="headrg">Login Here</div> ';
                }
                if ($remarks=='failed') {
                  echo ' <div id="reg-head-fail" class="headrg">Login Failed!, Invalid Credentials</div> ';
              }
            ?>
            <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
              <span class="label-input100">Username:</span>
              <input class="input100" type="text" name="username" placeholder="Enter username">
              <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
              <span class="label-input100">Password:</span>
              <input class="input100" id="inputSP" maxlength="12" type="password" name="password" placeholder="Enter password">
              <span class="focus-input100"></span>

            </div>

            <div class="flex-sb-m w-full p-b-30">
              <div class="contact100-form-checkbox">
                <input class="input-checkbox100" id="passShow" type="checkbox" name="showpassword"  onclick="showPass()" >
                <label class="label-checkbox100" for="passShow">
                  Show Password
                </label>
              </div>
            </div>
            <div class="container-login100-form-btn">
              <button type="submit" class="login100-form-btn btnSUB"  name="bLog_in" value="log_in">
                Login
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>





  <!--===============================================================================================-->
  <!-- BOOTSTRAP 5 -->
  <script src="bootstrap_v5/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="js/jquery_3.6.0.js"></script>

  <script src="js/kit_fontawesome.js"></script>
  <!--===============================================================================================-->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <!--===============================================================================================-->
  <script src="js/jquery.singlePageNav.min.js"></script>
  <!--===============================================================================================-->
  <script src="js/parallax.min.js"></script>
  <!--===============================================================================================-->
  <script src="slick/slick.min.js"></script>
  <!--===============================================================================================-->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <!--===============================================================================================-->
  <!-- <script src="js/templatemo-scripts.js"></script> -->
  <!--===============================================================================================-->
  <!--LOGIN AND REGISTER FORM (JS)-->
  <script src="js/main.js"></script>
  <!--===============================================================================================-->

  </body>
</html>