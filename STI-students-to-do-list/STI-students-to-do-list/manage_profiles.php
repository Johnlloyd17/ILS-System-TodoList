<?php

include_once('db.php');


if(isset($_GET['delete_id']))
 {
  // select image from db to delete
  $stmt_select = $DB_con->prepare('SELECT userPic FROM member WHERE mem_id =:uid');
  $stmt_select->execute(array(':uid'=>$_GET['delete_id']));
  $imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
  unlink("imgdata/".$imgRow['userPic']);
  
  // it will delete an actual record from db
  $stmt_delete = $DB_con->prepare('DELETE FROM member WHERE mem_id =:uid');
  $stmt_delete->bindParam(':uid',$_GET['delete_id']);
  $stmt_delete->execute();
  
  header("Location: view_tbl.php");
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
    <link rel="stylesheet" href="css/calendar.css">
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@500&display=swap" rel="stylesheet">
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
							  <a href="#intro" class="nav-link">
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
							<li class="nav-item" onclick="location.href = './registration.php';">
							  <a href="#" class="nav-link">
								<span class="d-inline-block mr-3">Registration</span>
								<span class="d-inline-block tm-white-rect"></span>
							  </a>
							</li>
				 			<li class="nav-item" onclick="location.href = './view_tbl.php';">
							  <a href="#manage-users" class="nav-link">
								<span class="d-inline-block mr-3">Manage-Users</span>
								<span class="d-inline-block tm-white-rect"></span>
							  </a>
							</li> 
							<li class="nav-item" onclick="location.href = './manage_profiles.php';">
							  <a href="#" class="nav-link">
								<span class="d-inline-block mr-3">Manage-Profiles</span>
								<span class="d-inline-block tm-white-rect"></span>
							  </a>
							</li>
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
				  <!--		Users		-->
<!--===============================================================================================-->
				  <div class="tm-section-wrap bg-white">


	 <nav class="static-top">
                <div class="nav nav-tabs" style="background: #f1f2f7;" id="nav-tab" role="tablist">


                  <a class="navbar-brand m-1" href="#" >
                    <!-- <img src="img/todo.png" class=" rounded" style="width: 145px; height: 40px; opacity: 999; margin-bottom: 0; margin: 0px 20px;" alt="..."> -->
                  </a>
               
                </div>
                <div class="d-flex justify-content-end m-3">
                		<span> </span>
                  <!-- <i class="fa fa-bell"aria-hidden="true"  style="position: absolute; top: 10px;  font-size: 2rem;"></i> -->
                </div>
              </nav>


					<section id="users" class="row tm-section">
		

						<div class="container-fluid rounded ">
<!-- 
						<form action="view_tbl.php" method="post">

						</form> -->







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

  <script src="js/calendar.js" defer></script>
  <!--===============================================================================================-->
<!--   <script type="text/javascript">
    function manage_users(){
      _m_users.click();
    }

    window.onload =  manage_users();
  </script> -->
  </body>
</html>
