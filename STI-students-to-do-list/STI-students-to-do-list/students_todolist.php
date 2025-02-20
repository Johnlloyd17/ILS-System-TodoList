<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="us">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="ie=edge" />


      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--   
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.4.0/main.min.css">
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.4.0/main.min.js"></script> -->
<!-- 
      <link rel="stylesheet" type="text/css" href="css/jsdelivr.net_fullcalendar_5.4.0_main.min.css">
    <script src="js/jsdelivr_net_fullcalendar_5.4.0_main.min.js"></script> -->


  <link rel="stylesheet" href="fullcalendar_5.7.0/lib/main.min.css">
  <script src="fullcalendar_5.7.0/lib/main.min.js" defer></script>
  
  <script src="js/todo.js" defer></script>



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
    <!--===============================================================================================-->
    <link href="css/jquery-ui.css" rel="stylesheet">

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/todolist.css">
    <!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="css/pomodoro.css"> -->
    <style type="text/css">
      






      .profile_size {
        height: 2.6rem;
        width: 2.6rem;
        /*filter: blur(100%);*/
        /*transform: scale(1);*/
        border-radius: 50%;
        opacity: 9;
      }


      .timer {
        text-align: center;
        width: 20rem;
        height: 20rem;
        border: 5px solid #e0e0e0;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
      }


      .fa-play,
      .fa-redo-alt {
        /*color: #e3f6f5;*/
        border: 2px solid transparent;
        padding: 1rem;
      }
      .fa-play,
      .fa-redo-alt:hover {
        border-radius: 2rem;
        /*color: #bae8e8;*/
        border: 2px solid #bae8e8;
        transition: 0.3s ease; 
      }

      .myrow {
        width: 100%;
      }

      .showmessage {

        display: block;
        padding: 1rem 0;
        color: #272343;
        background: #e3f6f5;
        border-radius: 0.5rem;
        transition: 0.5s ease;

      }
    </style>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/dropdowns_animation.css">
    <!--===============================================================================================-->



  </head>
  <body onload="template()">




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
              <!--   <li class="nav-item" onclick="location.href = './registration.php';">
                  <a href="#" class="nav-link">
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

              <li class="nav-item" onclick="location.href = './manage_profiles.php';">
                <a href="#" class="nav-link">
                <span class="d-inline-block mr-3">Manage-Profiles</span>
                <span class="d-inline-block tm-white-rect"></span>
                </a>
              </li> 
                 -->
                <li class="nav-item">
                  <a href="#todolist" class="nav-link" id="_todos">
                    <span class="d-inline-block mr-3">Todo list</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
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



          <main role="main" class="ml-sm-auto col-12" >

            <div class="tm-section-wrap bg-white">
              <?php
$sql="SELECT * FROM member where mem_id=$loggedin_id";
$result=mysqli_query($con,$sql);

?>

              <?php
while($rows=mysqli_fetch_array($result)){
?>
              <nav class="static-top">
                <div class="nav nav-tabs" style="background: #f1f2f7;" id="nav-tab" role="tablist">


                  <a class="navbar-brand m-1" href="#" >
                    <img src="img/todo.png" class=" rounded" style="width: 145px; height: 40px; opacity: 999; margin-bottom: 0; margin: 0px 20px;" alt="...">
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>


                  <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Todo</button>

                  <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">History</button>

                  <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Pomodoro</button>
                </div>

                <div class="container">
                  <div class="row">
                    <!--<div class="col align-self-start">
One of three columns
</div>
<div class="col align-self-center"> 

</div>
-->
                    <div class="col align-self-end">



                      <div style="position: absolute; right: 0; top: 0;">




                        <li class="dropdown dropdown-4">
                          <a href="#" data-toggle="dropdown" role="button" aria-expanded="true" class="nav-link dropdown-toggle">
                            <img class="profile_size" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
                            <span class="admin-name"><?php echo $rows['fname']; ?>  <?php echo $rows['lname']; ?></span>
                            <!-- <i class="fa fa-angle-down edu-icon edu-down-arrow"></i> -->
                          </a>
                          <ul class="dropdown_menu dropdown_menu-4">
                            <li class="dropdown_item-1" onclick="location.href = './profilepage.php';">My Profile<i class="fa fa-user-circle" aria-hidden="true" style="position: absolute; right: 20px; font-size: 20px;"></i></li>



                            <!-- MODAL - 1 -->

                            <li class="dropdown_item-2"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">

                              Notifications <i class="fa fa-bell" aria-hidden="true" style="position: absolute; right: 20px; font-size: 20px;" ></i>


                            </li>


                            <!-- MODAL - 2 -->
                            <li class="dropdown_item-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                              Messages <i class="fa fa-envelope" aria-hidden="true" style="position: absolute; right: 20px; font-size: 20px;" ></i>
                            </li>



                            <li class="dropdown_item-4" onclick="location.href = './log-in.php';">Logout <i class="fa fa-sign-out" aria-hidden="true" style="position: absolute; right: 20px; font-size: 20px;"></i></li>
                          </ul>
                        </li>
                      </div>
                    </div>



                    <!-- Modal 1 -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Admin Notifications</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            ...
                          </div>
                          <div class="modal-footer">

                            Notifications
                          </div>
                        </div>
                      </div>
                    </div>


                    <!-- MODAL 2 -->
  <form method="post" id="comment_form">
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Send to Student</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">



              <!--               <form>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Your Name:</label>
                                <input type="text" class="form-control" id="recipient-name">
                              </div>
                              <div class="mb-3">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                              </div>
                            </form> -->
   <div class="form-group">
    <label>Enter Subject</label>
    <input type="text" name="subject" id="subject" class="form-control">
   </div>
   <div class="form-group">
    <label>Enter Comment</label>
    <textarea name="comment" id="comment" class="form-control" rows="5"></textarea>
   </div>
 <!--   <div class="form-group">
    <input type="submit" name="post" id="post" class="btn btn-info" value="Post" />
   </div> -->




                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <!-- <button type="button" class="btn btn-primary">Send message</button> -->

    <input type="submit" name="post" id="post" class="btn btn-primary" value="Post" />
   
                          </div>
                        </div>
                      </div>
                    </div>
  </form>
                    <!-- MODAL 2 -->


                  </div>
                </div>


                <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button> -->









              </nav>

<?php 
// close while loop 
}
?>
              <!-- Navigation -->
              <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
<div class="container">
<a class="navbar-brand" href="#">
<img src="http://placehold.it/150x50?text=Logo" alt="">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarResponsive">
<ul class="navbar-nav ml-auto">
<li class="nav-item active">
<a class="nav-link" href="#">Home
<span class="sr-only">(current)</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">About</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Services</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Contact</a>
</li>
</ul>
</div>
</div> -->
              </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

              <!--===============================================================================================-->
                                <!--TODO LIST-->
              <!--===============================================================================================-->

                <div class="todo-grid-parent">

                  <div>
                    <div class="todo-calendar  todo-block" >
                      <div id='calendar'></div>
                    </div>

                    <h2 style="display: flex; justify-content: center; align-items: center; margin-bottom: 1rem;"><span style=" background: #ffd6cc; padding: 0.5rem;">Make your to-do-list</span></h2>
                    <div class="todo-input todo-block todo_move">
                      <span>To-do: </span>
                      <input type="text" placeholder="Enter new to-do">
                      <span>Category: </span>
                      <input type="text" placeholder="Enter category" list="categoryList">
                      <datalist id="categoryList">
                        <option value="Personal"></option>
                        <option value="Work"></option>
                      </datalist>
                      <span>Date:</span>
                      <input type="date" id="dateInput">
                      <span>Time:</span>
                      <input type="time" id="timeInput">
                      <span></span>
                      <button id="addBtn">Add</button>
                      <span></span>
                      <button id="sortBtn">Sort by Date</button>
                      <span></span>
                      <label><input type="checkbox" id="shortlistBtn"> Incomplete First </label>

                    </div>

                    <div class="todo-block todoTable-block">
                      <div class="itemsPerPage">
                        <span>items per page</span>
                        <select id="itemsPerPageSelectElem">
                          <option>5</option>
                          <option>10</option>
                          <option>20</option>
                        </select>
                      </div>

                      <table id="todoTable">
                        <tr>
                          <td></td>
                          <td>Date</td>
                          <td>Time</td>
                          <td>to-do</td>
                          <td>
                            <select id="categoryFilter">
                            </select>
                          </td>
                          <td></td>
                        </tr>
                      </table>

                      <div class="pagination-pages">

                      </div>
                    </div>

                  </div>


                </div> <!-- class="todo-grid-parent" -->

                <div class="todo-overlay" id="todo-overlay">
                  <div class="todo-modal" id="todo-modal">
                    <div class="todo-input todo-block">
                      <span>To-do: </span>
                      <input type="text" placeholder="Enter new to-do" id="todo-edit-todo">
                      <span>Category: </span>
                      <input type="text" placeholder="Enter category" list="categoryList" id="todo-edit-category">
                      <datalist id="categoryList">
                        <option value="Personal"></option>
                        <option value="Work"></option>
                      </datalist>
                      <span>Date:</span>
                      <input type="date" id="todo-edit-date">
                      <span>Time:</span>
                      <input type="time" id="todo-edit-time">
                      <span></span>
                      <button id="changeBtn">Save Change</button>
                    </div>
                  </div>
                  <div class="todo-modal-close-btn" id="todo-modal-close-btn">X</div>
                </div>












              </div>
              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">this page is not available</div>





















              <!-- POMODORO -->
              <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

                <div class="container" >
                  <!-- HEADING -->
                  <h1 class="text-center my-5">Pomodoro</h1>

                  <!-- Main TIMER -->
                  <div class="container timer">
                    <div class="row myrow">

                      <div class="col-5">
                        <h4 id="minutes"></h4>
                      </div>

                      <div class="col-2">
                        <h4>:</h4>
                      </div>

                      <div class="col-5">
                        <h4 id="seconds"></h4>
                      </div>

                    </div>
                  </div>

                  <div>
                    <h3 id="done" class="text-center my-5"></h3>
                  </div>

                  <!-- Start and Reset Button -->
                  <div class="container d-flex justify-content-center align-items-center my-5">
                    <button class="btn" onclick="start()"><i class="fas fa-play fa-2x"></i></button>
                    <a href="todolist.php"><i class="fas fa-redo-alt fa-2x"></i></a>
                  </div>
                </div>





              </div>
              <!-- POMODORO -->

            </div>
            <section id="view_users" class="row tm-section">


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
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
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

  <!-- <script src="js/calendar.js" defer></script> -->


  <!--===============================================================================================-->
  <!-- <script src="js/modal.js"></script> -->
  <!--===============================================================================================-->





  <!-- <script src="js/pomodoro.js"></script> -->
  
  <script type="text/javascript">
      function todo(){
      _todos.click();
    }

    window.onload = todo();
  </script>


<script type="text/javascript">
      var minutes = 25;
    var seconds = "00";

    var click = new Audio("click.mp3");
    var bell = new Audio("bell.mp3");


    function template() {
      document.getElementById("minutes").innerHTML = minutes;
      document.getElementById("seconds").innerHTML = seconds;

    }

    function start (){
      click.play();

      minutes = 24;
      seconds = 59;

      document.getElementById("minutes").innerHTML = minutes;
      document.getElementById("seconds").innerHTML = seconds;

      var minutes_interval = setInterval(minutesTimer, 60000);
      var seconds_interval = setInterval(secondsTimer, 1000);

      function minutesTimer() {

        minutes = minutes - 1;
        document.getElementById("minutes").innerHTML = minutes;


      }
      function secondsTimer() {

        seconds = seconds - 1;
        document.getElementById("seconds").innerHTML = seconds;

        if (seconds <= 57) {
          if (minutes <= 24) {
            clearInterval (minutes_interval);
            clearInterval (seconds_interval);

            document.getElementById("done").innerHTML = "Session Completed! Take a break";
            document.getElementById("done").classList.add("showmessage");

            bell.play();
          } 
          seconds = 60;
        }

      }


    }
</script>

<!--   <script>
$(document).ready(function(){
// updating the view with notifications using ajax
function load_unseen_notification(view = '')
{
 $.ajax({
  url:"fetch.php",
  method:"POST",
  data:{view:view},
  dataType:"json",
  success:function(data)
  {
   $('.dropdown-menu').html(data.notification);
   if(data.unseen_notification > 0)
   {
    $('.count').html(data.unseen_notification);
   }
  }
 });
}
load_unseen_notification();
// submit form and get new records
$('#comment_form').on('submit', function(event){
 event.preventDefault();
 if($('#subject').val() != '' && $('#comment').val() != '')
 {
  var form_data = $(this).serialize();
  $.ajax({
   url:"insert.php",
   method:"POST",
   data:form_data,
   success:function(data)
   {
    $('#comment_form')[0].reset();
    load_unseen_notification();
   }
  });
 }
 else
 {
  alert("Both Fields are Required");
 }
});
// load new notifications
$(document).on('click', '.dropdown-toggle', function(){
 $('.count').html('');
 load_unseen_notification('yes');
});
setInterval(function(){
 load_unseen_notification();;
}, 5000);
});
</script> -->

  <script type="text/javascript">
    // $(document).ready(function() {
    //   // Making 2 variable month and day
    //   var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ]; 
    //   var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]

    //   // make single object
    //   var newDate = new Date();
    //   // make current time
    //   newDate.setDate(newDate.getDate());
    //   // setting date and time
    //   $('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

    //   setInterval( function() {
    //     // Create a newDate() object and extract the seconds of the current time on the visitor's
    //     var seconds = new Date().getSeconds();
    //     // Add a leading zero to seconds value
    //     $("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
    //   },1000);

    //   setInterval( function() {
    //     // Create a newDate() object and extract the minutes of the current time on the visitor's
    //     var minutes = new Date().getMinutes();
    //     // Add a leading zero to the minutes value
    //     $("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
    //   },1000);

    //   setInterval( function() {
    //     // Create a newDate() object and extract the hours of the current time on the visitor's
    //     var hours = new Date().getHours();
    //     // Add a leading zero to the hours value
    //     $("#hours").html(( hours < 10 ? "0" : "" ) + hours);
    //   }, 1000); 
    // });
  </script>





  </body>
</html>