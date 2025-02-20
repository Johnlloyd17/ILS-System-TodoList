<!--===============================================================================================-->
<!--SPLIT CODE TO ADMIN-->
<!--===============================================================================================-->





<?php
include "logincheck.php"; 

  $bSave = isset($_POST['Save']) ? $_POST['Save'] : '';
  if($bSave == 'Add This Item Now'){
    // var = name 

    $lname = $_POST['lastname'];
    $fname = $_POST['firstname'];
    $mi = $_POST['middleinitial'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $usertype = $_POST['usertype'];
    $birthday = $_POST['birthday'];
    $contactno = $_POST['conntactno'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    mysqli_query($con, "INSERT INTO member(fname, mi, lname, address, gender, contactno, birthday, usertype, username, password) values('$fname','$mi', '$lname','$address','$gender','$contactno','$birthday','$usertype', '$username', '$password')") or die(mysqli_error($con));
    
    $productIdGenerated = mysqli_insert_id($con);
    // Place image in the folder 
    $ImgName = "$productIdGenerated.jpg";
    move_uploaded_file( $_FILES['fileField']['tmp_name'], "imgdata/$ImgName");
    
    // header('location: view.php');
  }






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


    <div class="mycon">
      <main class="container-fluid">
        <div class="row">        
          <nav id="tmSidebar" class="bg-warning tm-sidebar">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
            </button>
            <div class="tm-sidebar-sticky">
              <div class="tm-brand-box">
                <div class="tm-double-border-1">
                  <div class="tm-double-border-2">
                    <h1 class="tm-brand text-uppercase">Sti Students' Todo list</h1>
                  </div>
                </div>
              </div>

              <ul id="tmMainNav" class="nav flex-column text-uppercase text-right tm-main-nav">
                <li class="nav-item" onClick="location.href = './admin.php';">
                  <a href="#" class="nav-link">
                    <span class="d-inline-block mr-3">Intro</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
              <li class="nav-item" onclick="location.href = './profilepage.php';">
                <a href="#" class="nav-link">
                <span class="d-inline-block mr-3">Profile</span>
                <span class="d-inline-block tm-white-rect"></span>
                </a>
              </li>
                <li class="nav-item">
                  <a href="#registration" class="nav-link" id="_registration">
                    <span class="d-inline-block mr-3">Registration</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
                <li class="nav-item" onclick="location.href = './view_tbl.php';">
                  <a href="#" class="nav-link">
                    <span class="d-inline-block mr-3">Manage-Users</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li> 
                
    <!--           <li class="nav-item" onclick="location.href = './manage_profiles.php';">
                <a href="#" class="nav-link">
                <span class="d-inline-block mr-3">Manage-Profiles</span>
                <span class="d-inline-block tm-white-rect"></span>
                </a>
              </li>  -->
                <li class="nav-item" onclick="location.href = './todolist.php';">
                  <a href="#" class="nav-link">
                    <span class="d-inline-block mr-3">Todo list</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
                <li class="nav-item" onclick="location.href = './about_us.php';">
                  <a href="#" class="nav-link">
                    <span class="d-inline-block mr-3">About Us</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
                <li class="nav-item" onclick="location.href = './log-in.php';">
                  <a href="#" class="nav-link">
                    <span class="d-inline-block mr-3">Logout</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
              </ul>
              <ul class="nav flex-row tm-social-links">
                <li class="nav-item">
                  <a href="https://facebook.com" class="nav-link tm-social-link">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://twitter.com" class="nav-link tm-social-link">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://dribbble.com" class="nav-link tm-social-link">
                    <i class="fab fa-dribbble"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://linkedin.com" class="nav-link tm-social-link">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
              <footer class="text-center text-white small">
                <p class="mb--0 mb-2">Copyright 2020 Dream Pulse</p>
                <p class="mb-0">Design:
                  <a rel="nofollow" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
                </p>
              </footer>
            </div>
          </nav>



          <main role="main" class="ml-sm-auto col-12">

            <!--===============================================================================================-->
            <!--    Users   -->
            <!--===============================================================================================-->
            <div class="tm-section-wrap bg-white">

              <section id="users" class="row tm-section">

                <div class="container rounded">
                  <!--===============================================================================================-->
                  <!--REGISTER USER FORM-->
                  <!--===============================================================================================-->
                  <div class="regcontainer ">
                    <div class="container-login100 ">
                      <div class="wrap-login100">


                        <div class="login100-form-title" style="background-image: url(img/bg-calendar.png);">
                          <span class="login100-form-title-1">
                            Sign Up
                          </span>

                        </div>

                        <form class="login100-form validate-form form-control" onsubmit="return validateForm()" action="execute.php" method="post">
                            <?php
                                $remarks = isset($_GET['remarks']) ? $_GET['remarks'] : '';
                                if ($remarks==null and $remarks=="") {
                                  // echo ' <div id="reg-head" class="headrg">Register Here</div> ';
                                }
                                if ($remarks=='success') {
                                  echo ' <div id="reg-head" class="headrg">Registration Success</div> ';
                                }
                                if ($remarks=='failed') {
                                  echo ' <div id="reg-head-fail" class="headrg">Registration Failed!, Username exists</div> ';
                                }
                                if ($remarks=='error') {
                                  echo ' <div id="reg-head-fail" class="headrg">Registration Failed! <br> Error: '.$_GET['value'].' </div> ';
                                }
                              ?>
                          <div class="wrap-input100 validate-input m-b-26 " data-validate="LastName is required" >
                            <span class="label-input100">LastName:</span>
                            <input class="input100  form-control" id="lname" type="text" name="lastname" placeholder="Enter lastname" onKeyPress="return ValidateAlpha(event);">
                            <span class="focus-input100"></span>
                          </div>
                          <div class="wrap-input100 validate-input m-b-26" data-validate="FirstName is required">
                            <span class="label-input100">FirstName:</span>
                            <input class="input100 form-control" id="fname" type="text" name="firstname" placeholder="Enter firstname" onKeyPress="return ValidateAlpha(event);">
                            <span class="focus-input100"></span>
                          </div>
                          <div class="wrap-input100 validate-input m-b-26" data-validate="MiddleInitial is required">
                            <span class="label-input100">Mi:</span>
                            <input class="input100 form-control" id="mi"  maxlength="1" type="text" name="middleinitial" placeholder="Middle_Initial" onKeyPress="return ValidateAlpha(event);">
                            <span class="focus-input100"></span>
                          </div>

<!--  ADD IMAGE -->
                  <!--         <div class="wrap-input100 validate-input m-b-26 input-group" data-validate="Upload profile-image is required">

                              <label for="formFile" class="label-input100">Image: </label>

                              <input class="form-control" type="file"  name="fileField" id="fileField"/>
                              <span class="focus-input100"></span>
                          </div> -->
<!--  -->

  
                          <div class=" wrap-input100 validate-input m-b-26" >
                              <label for="" class="label-input100 ">Gender:</label>
                              <select  class="form-control"  name="gender">
                                <option>Male</option>
                                <option>Female</option>
                              </select>
                          </div>

                          <div class=" wrap-input100 validate-input m-b-26" >
                              <label for="" class="label-input100 ">UserType:</label>
                              <select  class="form-control"  name="userType">
                                <option>Admin</option>
                                <option>Student</option>
                              </select>

                          </div>

                          <div class="wrap-input100 validate-input m-b-26" data-validate="Address is required">
                            <span class="label-input100">Address:</span>
                            <input class="input100 form-control" id="adrs" type="text" name="address" placeholder="Enter your address">
                            <span class="focus-input100"></span>
                          </div>
                      
                          <div class="wrap-input100 validate-input m-b-26" data-validate="Birthday is required">
                            <span class="label-input100">Birthday:</span>
                            <input class="input100 form-control" id="bday" type="date" name="birthday" placeholder="MM/DD/YYY">
                            <span class="focus-input100"></span>
                          </div>

                          <div class="wrap-input100 validate-input m-b-26" data-validate="Birthday is required">
                            <span class="label-input100">ContactNo:</span>
                            <input class="input100 form-control" id="cntn" type="text" name="contactno" placeholder="Enter your phone number">
                            <span class="focus-input100"></span>
                          </div>

                          <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                            <span class="label-input100">Username:</span>
                            <input class="input100 form-control" id="usrname" type="text" name="username" placeholder="Enter username">
                            <span class="focus-input100"></span>
                          </div>

                          <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                            <span class="label-input100">Password:</span>
                            <input class="input100 form-control" id="inputSP2" type="password" name="password" placeholder="Enter password">
                            <span class="focus-input100"></span>

                          </div>

                          <div class="flex-sb-m w-full p-b-30">
                 <!--            <div class="contact100-form-checkbox">
                              <input class="input-checkbox100" id="passShow2" type="checkbox" name="showpassword"  onclick="regshowPass()" >
                              <label class="label-checkbox100" for="passShow2">
                                Show Password
                              </label>
                            </div> -->
                          </div>

                          <div class="container-login100-form-btn">
                            <button  type="submit" class="login100-form-btn" name="Save" id="Save" value="Add This Item Now">
                              Register
                            </button>

  <!--                           <button type="submit" name="btnsave" class="btn btn-default">
     save
        </button> -->
                          </div>
                        </form>

                      </div>
                    </div>
                  </div>
                </div>
                </div>
            </div>
            </section>
        </div>

      </main>
    </div>
    </main>
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
  <script src="js/templatemo-scripts.js"></script>
  <!--===============================================================================================-->
  <!--LOGIN AND REGISTER FORM (JS)-->
  <script src="js/main.js"></script>
  <!--===============================================================================================-->

<script type="text/javascript">

// onkeypress="return (event.charCode > 64 && 
//event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"

// numberonly <input onkeypress="return isNumberKey(event)">
// function isNumberKey(evt){  <!--Function to accept only numeric values-->
//     //var e = evt || window.event;
//   var charCode = (evt.which) ? evt.which : evt.keyCode
//     if (charCode != 46 && charCode > 31 
//   && (charCode < 48 || charCode > 57))
//         return false;
//         return true;
//   }

    // letter only <input  onKeyPress="return ValidateAlpha(event);">
    function ValidateAlpha(evt)
    {
        var keyCode = (evt.which) ? evt.which : evt.keyCode
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32) {
         
            return false;
        }
        return true;
    }


  function register(){
    _registration.click();
  }

  window.onload = register();
</script>

</body>
</html>