<!--===============================================================================================-->
<!-- MAIN PAGES GOES HERE -->
<!-- =============================================================================================== -->




<?php

include('session.php');
// include_once ('db.php');

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
								<h1 class="tm-brand text-uppercase text-white">Sti Students' Todo list</h1>
							  </div>
							</div>
						  </div>

						  <ul id="tmMainNav" class="nav flex-column text-uppercase text-right tm-main-nav">
							<li class="nav-item">
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
							<li class="nav-item" onclick="location.href = './students_todolist.php';">
							  <a href="#" class="nav-link">
								<span class="d-inline-block mr-3">Todo-list</span>
								<span class="d-inline-block tm-white-rect"></span>
							  </a>
							</li>
					<!-- 		<li class="nav-item" onclick="location.href = './history.html';">
							  <a href="#" class="nav-link">
								<span class="d-inline-block mr-3">history</span>
								<span class="d-inline-block tm-white-rect"></span>
							  </a>
							</li> -->
							<li class="nav-item" onclick="location.href = './students_about_us.php';">
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
					<div
					  class="parallax-window"
					  data-parallax="scroll"
					  data-image-src="img/bg-calendar_intro.png">
					  <div class="tm-section-wrap">
						<section id="intro" class="tm-section">
							<div class="tm-bg-white-transparent tm-intro">
								<h2 class="tm-section-title font-weight-bold mb-5 text-uppercase text-black">Introducing STI Student Todo List</h2>
								<p class="text-black">
								  Behold! The STI Students' To Do List! Now you don't have to worry about certain tasks in eLMS being out of your memory because the app aims to acts as one! Take notes of various assignments or compliances, set schedules, or even record information in general! All possible in just the tap of a button!
								</p>
			
							</div>              
						</section>
					</div>            
				  </div>
<!--===============================================================================================-->
				  <!--		Add-Users		-->
<!--===============================================================================================-->
				  <div class="tm-section-wrap bg-white">
					<section id="add_users" class="row tm-section">
						<a href="registration.php"></a>

					</section>
				  </div>
<!--===============================================================================================-->
				  <!--		View-Profile		-->
<!--===============================================================================================-->
				  <div class="tm-section-wrap bg-white">
					<section id="view_profile" class="row tm-section">
						<a href="view_tbl.php"></a>
				
					</section>
				  </div>
<!--===============================================================================================-->
		<!--TODO LIST-->
<!--===============================================================================================-->
				  <div class="tm-section-wrap bg-white">
					<section id="todos" class="row tm-section">
						
						<a href="todolist.php"></a>
					</section>
				  </div>
<!--===============================================================================================-->					  
		<!--ABOUT US-->
<!--===============================================================================================-->
				  <div class="tm-section-wrap bg-white">
					<section id="about" class="row tm-section">
					</section>
				  </div>
<!--===============================================================================================-->
<!--LOGOUT-->
<!--===============================================================================================-->
				  <div class="tm-section-wrap bg-white">
					<section id="logout" class="row tm-section">
						<a href="log-in.php"></a>
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

  </body>
</html>