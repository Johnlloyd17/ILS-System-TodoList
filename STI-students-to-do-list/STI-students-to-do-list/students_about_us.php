<!--===============================================================================================-->
<!--SPLIT CODE TO ADMIN-->
<!--===============================================================================================-->







<?php
include_once('session.php');

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
    
    <style type="text/css">
      body {
        font-family: tahoma;
        /*height: 100vh;*/
        /*background-image: url(https://picsum.photos/g/3000/2000);*/
        /*background-size: cover;*/
        /*background-position: center;*/
        /*display: flex;*/
        /*align-items: center;*/
      }

      .our-team {
        padding: 30px 0 40px;
        margin-bottom: 30px;
        background-color: #f7f5ec;
        text-align: center;
        overflow: hidden;
        position: relative;
      }

      .our-team .picture {
        display: inline-block;
        height: 130px;
        width: 130px;
        margin-bottom: 50px;
        z-index: 1;
        position: relative;
      }

      .our-team .picture::before {
        content: "";
        width: 100%;
        height: 0;
        border-radius: 50%;
        background-color: #1369ce;
        position: absolute;
        bottom: 135%;
        right: 0;
        left: 0;
        opacity: 0.9;
        transform: scale(3);
        transition: all 0.3s linear 0s;
      }

      .our-team:hover .picture::before {
        height: 100%;
      }

      .our-team .picture::after {
        content: "";
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background-color: #1369ce;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
      }

      .our-team .picture img {
        width: 100%;
        height: auto;
        border-radius: 50%;
        transform: scale(1);
        transition: all 0.9s ease 0s;
      }

      .our-team:hover .picture img {
        box-shadow: 0 0 0 14px #f7f5ec;
        transform: scale(0.7);
      }

      .our-team .title {
        display: block;
        font-size: 15px;
        color: #4e5052;
        text-transform: capitalize;
      }

      .our-team .social {
        width: 100%;
        padding: 0;
        margin: 0;
        background-color: #1369ce;
        position: absolute;
        bottom: -100px;
        left: 0;
        transition: all 0.5s ease 0s;
      }

      .our-team:hover .social {
        bottom: 0;
      }

      .our-team .social li {
        display: inline-block;
      }

      .our-team .social li a {
        display: block;
        padding: 10px;
        font-size: 17px;
        color: white;
        transition: all 0.3s ease 0s;
        text-decoration: none;
      }

      .our-team .social li a:hover {
        color: #1369ce;
        background-color: #f7f5ec;
      }
    </style>
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
							<li class="nav-item" onClick="location.href = './student.php';">
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
							<li class="nav-item" onclick="location.href = './students_todolist.html';">
							  <a href="#" class="nav-link">
								<span class="d-inline-block mr-3">Todo list</span>
								<span class="d-inline-block tm-white-rect"></span>
							  </a>
							</li>
							<li class="nav-item" onclick="location.href = './students_about_us.php';">
							  <a href="#studbout" class="nav-link" id="_studbout">
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
            <!--ABOUT US-->
            <!--===============================================================================================-->

            <div class="tm-section-wrap bg-white">
              <section id="about" class="row tm-section">
                <div class="col-12 tm-section-pad">
                  <div class="tm-flex-item-left">
                    <div class="tm-w-80">
                      <h2 class="tm-color-primary tm-section-title mb-4">Our Project</h2>
                      <p class="mb-5">
                        This programs has been created for our submission to our required ILS project. 
                        The students who programmed this has made great efforts to create this and would like to welcome anyone who uses it.
                      </p>
                    </div>
                  </div> 
                </div> 
                <div class="col-12 tm-section-pad">
                  <div class="tm-flex-item-left">
                    <h2 class="tm-color-primary tm-section-title mb-4">Our Teams</h2>

                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 ">
                  <div class="our-team">

                    <div class="picture">
                      <img class="img-fluid" src="img/gallery/jl.jpg">
                    </div>
                    <div class="team-content">
                      <h3 class="name">JohnLloyd Caban</h3>
                      <h4 class="title">Web Developer</h4>
                    </div>
                    <ul class="social">
                      <li><a href="#" class="fa fa-facebook" aria-hidden="true"></a></li>
                      <li><a href="#" class="fa fa-twitter" aria-hidden="true"></a></li>
                      <li><a href="#" class="fa fa-google-plus" aria-hidden="true"></a></li>
                      <li><a href="#" class="fa fa-linkedin" aria-hidden="true"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                  <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="https://picsum.photos/130/130?image=839">
                    </div>
                    <div class="team-content">
                      <h3 class="name">JonRitchel Paloma</h3>
                      <h4 class="title">Researcher</h4>
                    </div>
                    <ul class="social">
                      <li><a href="#" class="fa fa-facebook" aria-hidden="true"></a></li>
                      <li><a href="#" class="fa fa-twitter" aria-hidden="true"></a></li>
                      <li><a href="#" class="fa fa-google-plus" aria-hidden="true"></a></li>
                      <li><a href="#" class="fa fa-linkedin" aria-hidden="true"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                  <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="img/gallery/sa.jpg">
                    </div>
                    <div class="team-content">
                      <h3 class="name">SeanAnthony Escalante</h3>
                      <h4 class="title">Assisstant Designer</h4>
                    </div>
                    <ul class="social">
                      <li><a href="#" class="fa fa-facebook" aria-hidden="true"></a></li>
                      <li><a href="#" class="fa fa-twitter" aria-hidden="true"></a></li>
                      <li><a href="#" class="fa fa-google-plus" aria-hidden="true"></a></li>
                      <li><a href="#" class="fa fa-linkedin" aria-hidden="true"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                  <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="https://picsum.photos/130/130?image=836">
                    </div>
                    <div class="team-content">
                      <h3 class="name">JohnClifford Mahusay</h3>
                      <h4 class="title">Assisstant Designer</h4>
                    </div>
                    <ul class="social">
                      <li><a href="#" class="fa fa-facebook" aria-hidden="true"></a></li>
                      <li><a href="#" class="fa fa-twitter" aria-hidden="true"></a></li>
                      <li><a href="#" class="fa fa-google-plus" aria-hidden="true"></a></li>
                      <li><a href="#" class="fa fa-linkedin" aria-hidden="true"></a></li>
                    </ul>
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
		function _studbout(){
			_studbout.click();
		}

		window.onload = _studbout();
	</script>
  </body>
</html>