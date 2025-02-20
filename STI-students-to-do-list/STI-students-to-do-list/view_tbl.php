<!--===============================================================================================-->
<!--SPLIT CODE TO ADMIN-->
<!--===============================================================================================-->


<?php
include_once('db.php');
 

$msg = ''; $displayResult = ''; 
$search = isset($_POST['search']) ? $_POST['search'] : '';
if($search == 'find'){
	$all_records = mysqli_query($con ,"SELECT * FROM member WHERE fname LIKE '$_POST[searchBar]%'") or die(mysqli_error($con));

}else{

	$all_records = mysqli_query($con, "SELECT * FROM member") or die(mysqli_error($con));
}


if(mysqli_num_rows($all_records) >=0 ){
	$ctr = 1; 
								  // <th scope="col">Profile</th>
	$displayResult .= '		<div class="table-responsive">

							<table class="table table-bordered  border-secondary">

							  <thead class="table-dark">
								<tr>
								  <th scope="col">#</th>

								  <th scope="col">FullName</th>
						
								  <th scope="col">Gender</th>
								  
								  <th scope="col">UserType</th>
								  <th scope="col">Address</th>
								  <th scope="col">Birthday</th>
								  <th scope="col">ContactNo.</th>
								  <th scope="col">Username</th>
								  <th scope="col">Password</th>
								  <th scope="col">Action</th>
								</tr>
							  </thead>
							  ';
	while($rowUsers = mysqli_fetch_array($all_records, MYSQLI_ASSOC)){
		$studid = $rowUsers['mem_id'];
		$lname = $rowUsers['lname'];
		$fname = $rowUsers['fname'];
		$mname = $rowUsers['mi'];
		$completeName = $lname.', '.$fname.' '.$mname.'.';
	
		$gender = $rowUsers['gender'];
		$usertype = $rowUsers['usertype'];
		$address = $rowUsers['address'];
		$birthday = $rowUsers['birthday'];
		$contactno = $rowUsers['contactno'];
		$username = $rowUsers['username'];
		$password = $rowUsers['password'];
		
								// <td style="border:1px solid black;"> <img src="imgdata/'.$studid.'.jpg" width="50" height="50" /> </td>

		$displayResult .=  '
							<tbody>
							<tr>
								<td style="border:1px solid black;">'.$ctr++.'</td>

								<td > <input type="hidden"  value="'.$studid.'">
								'.$completeName.'
								</td>
								<td>'.$gender.'</td>
								<td>'.$usertype.'</td>
								<td>'.$address.'</td>
								<td>'.$birthday.'</td>
								<td>'.$contactno.'</td>
								<td>'.$username.'</td>
								<td>'.$password.'</td>

								<td><a class="btn btn-danger" href="delete_users.php?uid='.$studid.'" onclick="return confirm(\'Are you sure you want to delete record?\')">Delete</a></td>

								
							</tr>';
	}
								  // <th scope="col">Profile</th>
	$displayResult .= '			</tbody>
	  <tfoot style="background: 	 #bfbfbf">
					<tr>
								  <th scope="col">#</th>


								  <th scope="col">FullName</th>
						
								  <th scope="col">Gender</th>
								  
								  <th scope="col">UserType</th>
								  <th scope="col">Address</th>
								  <th scope="col">Birthday</th>
								  <th scope="col">ContactNo.</th>
								  <th scope="col">Username</th>
								  <th scope="col">Password</th>
								  <th scope="col">Action</th>
								</tr>
  </tfoot>
						  	  </table>
						     </div>
						   </table>
						</div>';

}else{
	$msg = '<div class="alert alert-info text-center" role="alert">
				  Record is empty!
				</div>';
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
				 			<li class="nav-item">
							  <a href="#manage-users" class="nav-link" id="_m_users">
								<span class="d-inline-block mr-3">Manage-Users</span>
								<span class="d-inline-block tm-white-rect"></span>
							  </a>
							</li> 
<!-- 
							<li class="nav-item" onclick="location.href = './manage_profiles.php';">
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
				  <!--		Users		-->
<!--===============================================================================================-->
				  <div class="tm-section-wrap bg-white">


	 <nav class="static-top">
                <div class="nav nav-tabs" style="background: #f1f2f7;" id="nav-tab" role="tablist">


                  <a class="navbar-brand m-1" href="#" >
                    <img src="img/users-data.png" class=" rounded" style="width: 145px; height: 40px; opacity: 999; margin-bottom: 0; margin: 0px 20px;" alt="...">
                  </a>
               
                </div>
                <div class="d-flex justify-content-end m-3">
                		<span> </span>
                  <!-- <i class="fa fa-bell"aria-hidden="true"  style="position: absolute; top: 10px;  font-size: 2rem;"></i> -->
                </div>
              </nav>


					<section id="users" class="row tm-section">
		

						<div class="container-fluid rounded ">

						<?php echo $msg;?>
						<form action="view_tbl.php" method="post">
							<?php echo $displayResult; ?>
						</form>
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
  <script type="text/javascript">
    function manage_users(){
      _m_users.click();
    }

    window.onload =  manage_users();
  </script>
  </body>
</html>