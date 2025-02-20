<?php
include('session.php');
// include ('upload.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap_v5/css/bootstrap.min.css">
    <title>PROFILE PAGE</title>




    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" type="text/css" href="css/uploadprofile.css">

  </head>
  <body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <div class="container bootstrap snippets bootdey ">

      <div class="row ">
        <div class="profile-nav col-md-3 p-0" >
          <!-- <div class="col-md-4"> -->
          <!--           <nav aria-label="breadcrumb" class="main-breadcrumb ">
<ol class="breadcrumb">
<li class="breadcrumb-item fas">&#xf100; <a href="session.php">Return Home</a></li>

</ol>
</nav> -->


          <?php
$sql="SELECT * FROM member where mem_id=$loggedin_id";
$result=mysqli_query($con,$sql);



?>

          <?php
while($rows=mysqli_fetch_array($result)){
?>




          <div class="card user-card shadow rounded">
            <div class="card-header">
              <h5>Profile</h5>
            </div>

            <div class="card-block">





              <!-- DIRI DAPIT KAY MAY ERROR, DILI MA DISPLAY PROFILE-IMAGE -->
              <div class="user-image ">
                <img src="uploads/<?=$rows['mem_id']?>.jpg" width="80" height="80" alt="" style="border-radius: 50%;">

              </div>
              <!-- DIRI DAPIT KAY MAY ERROR, DILI MA DISPLAY PROFILE-IMAGE -->



              <h6 class="f-w-600 m-t-25 m-b-10 h4"> <?php echo $rows['fname']; ?>  <?php echo $rows['mi']; ?>  <?php echo $rows['lname']; ?></h6>
              <p class="text-muted">Active |  <?php echo $rows['gender']; ?> | Born <?php echo $rows['birthday']; ?></p>



              <!-- Button trigger modal -->
<!--               <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Upload
              </button> -->


              <hr>
              <p class="text-muted m-t-15">Activity Level: 87%</p>
              <ul class="list-unstyled activity-leval">
                <li class="active"></li>
                <li class="active"></li>
                <li class="active"></li>
                <li></li>
                <li></li>
              </ul>
              <div class="bg-c-blue counter-block m-t-10 p-20">
                <div class="row">
                  <div class="col-md-4">
                    <i class="fa fa-comment"></i>
                    <p>1256</p>
                  </div>
                  <div class="col-md-4"> 
                    <i class="fa fa-user"></i>
                    <p>8562</p>
                  </div>
                  <div class="col-md-4">
                    <i class="fa fa-suitcase"></i>
                    <p>189</p>
                  </div>
                </div>
              </div>
              <h2 class="m-t-15 m-b-10"><b>Bio</b></h2>
              <p class="m-t-15 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


              <hr>
              <div class="row justify-content-center user-social-link">
                <div class="col-md-4"><a href="#!"><i class="fa fa-facebook text-facebook"></i></a></div>
                <div class="col-md-4"><a href="#!"><i class="fa fa-twitter text-twitter"></i></a></div>
                <div class="col-md-4"><a href="#!"><i class="fa fa-dribbble text-dribbble"></i></a></div>
              </div>
            </div>




            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload Profile image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">



                    <form action="upload.php" method="post" enctype="multipart/form-data">
                      Select Image File to Upload:
                      <input type="file" name="file">
                      <input type="submit" name="submit" value="Upload">
                    </form>


                  </div>
                  <!-- FOOTER MODAL -->
                  <!--              <div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
<button type="button" class="btn btn-primary">Save changes</button>
</div> 
-->
                  <!-- FOOTER MODAL -->

                </div>
              </div>
            </div>



          </div>


        </div> 
        <!-- END PROFILE-NAV -->




        <div class="profile-info  col-md-9 lh-5 ">

          <div class="panel card my-10 shadow bg-body rounded">
            <div class="bio-graph-heading">
              <h1 class="font-weight-bold text-capitalize adjust"> <?php echo $rows['usertype']; ?></h1>
            </div>



            <form action="" method="POST" id="signin" id="reg">
              <div class="panel-body bio-graph-info p-3">
                <h1>Profile Detail</h1>
                <div class="row">

                  <div class="bio-row">
                    <p><span>Full Name </span>: <?php echo $rows['fname']; ?>  <?php echo $rows['mi']; ?>  <?php echo $rows['lname']; ?></p>
                  </div>
                  <div class="bio-row">
                    <p><span>Gender</span>: <?php echo $rows['gender']; ?></p>
                  </div>
                  <div class="bio-row">
                    <p><span> UserType </span>: <?php echo $rows['usertype']; ?></p>
                  </div>
                  <div class="bio-row">
                    <p><span>Birthday</span>: <?php echo $rows['birthday']; ?></p>
                  </div>
                  <div class="bio-row">
                    <p><span>Address </span>: <?php echo $rows['address']; ?></p>
                  </div>
                  <div class="bio-row">
                    <p><span>ContactNo. </span>: <?php echo $rows['contactno']; ?></p>  
                  </div>
                  <div class="bio-row">
                    <p><span>Username </span>: <?php echo $rows['username']; ?></p>
                  </div>
                  <div class="bio-row">
                    <p><span>Password </span>: <?php echo $rows['password']; ?></p>
                  </div>
                </div>
              </div>
            </form>
            <?php 
// close while loop 
}
?>




          </div>

          <div>
            <div class="row g-3">
              <div class="col-sm-6 mb-5">
                <div class="card h-80 shadow">
                  <div class="card-body">
                    <h6 class="d-flex align-items-center mb-sm-4 fs-4 "><i class="material-icons fs-5 text-info">assignment </i>: Project Status</h6>
                    <small class="h5">Web Design</small>
                    <div class="progress mt-sm-2 mb-sm-4" style="height: 5px">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="h5">Website Markup</small>
                    <div class="progress mt-sm-2 mb-sm-4" style="height: 5px">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="h5">One Page</small>
                    <div class="progress mt-sm-2 mb-sm-4" style="height: 5px">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="h5">Mobile Template</small>
                    <div class="progress mt-sm-2 mb-sm-4" style="height: 5px">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="h5">Backend API</small>
                    <div class="progress mt-sm-2 mb-sm-4" style="height: 5px">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 mb-5">
                <div class="card h-80 shadow">
                  <div class="card-body">
                    <h6 class="d-flex align-items-center mb-sm-4 fs-4 "><i class="material-icons fs-5 text-info">assignment </i>: Project Status</h6>
                    <small class="h5">Web Design</small>
                    <div class="progress mt-sm-2 mb-sm-4" style="height: 5px">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="h5">Website Markup</small>
                    <div class="progress mt-sm-2 mb-sm-4" style="height: 5px">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="h5">One Page</small>
                    <div class="progress mt-sm-2 mb-sm-4" style="height: 5px">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="h5">Mobile Template</small>
                    <div class="progress mt-sm-2 mb-sm-4" style="height: 5px">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="h5">Backend API</small>
                    <div class="progress mt-sm-2 mb-sm-4" style="height: 5px">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>





            </div>
          </div>
        </div>



      </div>
    </div>


    <!-- Bootstrap 5 OFFLINE CDN -->

    <script src="bootstrap_v5/js/bootstrap.min.js"></script>
    <!-- JQUERY OFFLINE CDN -->
    <script src="js/jquery_3.6.0.js"></script>
    <!-- <script src="ajax_googleapis_3.6.0_jquery.min.js"></script> -->




    <!-- INSIDE THE MODAL -->
    <script src="js/uploadprofile.js"></script>

    <!-- MODAL TRIGGER -->
    <script src="js/modal2.js"></script>

  </body>
</html>