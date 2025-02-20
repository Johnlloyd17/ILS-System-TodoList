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
  <link rel="stylesheet" href="fullcalendar_5.7.0/lib/main.min.css">
  <script src="fullcalendar_5.7.0/lib/main.min.js" defer></script>
  <script type="text/javascript" src="js/todolist.js" defer></script>
  <title>STI STUDENT TODO LIST</title>

  <!--===============================================================================================-->
  <!--WEB-ICON-->
  <link rel="icon" type="image/png" href="images/icons/calendar_icon.png" />
  <!--===============================================================================================-->

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="bootstrap_v5/css/bootstrap.min.css">
  <!--===============================================================================================-->

  <link rel="stylesheet" type="text/css" href="css/fonts_googleapis_css2.css">
  <link rel="stylesheet" type="text/css" href="css/fonts_googleapis.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" href="css/all.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" href="slick/slick.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" href="slick/slick-theme.css" />
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
  <!--===============================================================================================-->
  <link href="css/jquery-ui.css" rel="stylesheet">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/todolist.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/pomodoro.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/dropdowns_animation.css">
  <!--===============================================================================================-->

</head>

<body>
  <!-- onload="template()" -->
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
                <a href="#" class="nav-link">
                  <span class="d-inline-block mr-3">Manage-Users</span>
                  <span class="d-inline-block tm-white-rect"></span>
                </a>
              </li>

              <li class="nav-item">
                <a href="#todolist" class="nav-link" id="_todos">
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
          <div class="tm-section-wrap bg-white">
            <?php
            $sql = "SELECT * FROM member where mem_id=$loggedin_id";
            $result = mysqli_query($con, $sql);
            ?>

            <?php
            while ($rows = mysqli_fetch_array($result)) {
            ?>
              <input type="hidden" name="userID" value="<?= $loggedin_id ?>">
              <nav class="static-top">
                <div class="nav nav-tabs" style="background: #f1f2f7;" id="nav-tab" role="tablist">

                  <a class="navbar-brand m-1" href="#">
                    <img src="img/todo.png" class=" rounded" style="width: 145px; height: 40px; opacity: 999; margin-bottom: 0; margin: 0px 20px;" alt="...">
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Todo</button>
                </div>

                <div class="container">
                  <div class="row">
                    <div class="col align-self-end">
                      <div style="position: absolute; right: 0; top: 0;">
                        <li class="dropdown dropdown-4">
                          <a href="#" data-toggle="dropdown" role="button" aria-expanded="true" class="nav-link dropdown-toggle">
                            <img class="profile_size" src="uploads/<?= $rows['mem_id'] ?>.jpg" alt="">
                            <span class="admin-name"><?php echo $rows['fname']; ?> <?php echo $rows['lname']; ?></span>                         
                          </a>
                          <ul class="dropdown_menu dropdown_menu-4">
                            <li class="dropdown_item-1" onclick="location.href = './profilepage.php';">My Profile<i class="fa fa-user-circle" aria-hidden="true" style="position: absolute; right: 20px; font-size: 20px;"></i></li>
                            <!-- MODAL - 1 -->
                            <li class="dropdown_item-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="theNotif">
                              Notifications <i class="fa fa-bell" aria-hidden="true" style="position: absolute; right: 20px; font-size: 20px;"></i>
                            </li>
                            <!-- MODAL - 2 -->
                            <li class="dropdown_item-3" data-bs-toggle="modal" data-bs-target="#exampleModal" id="messages_nav">
                              Messages <i class="fa fa-envelope" aria-hidden="true" style="position: absolute; right: 20px; font-size: 20px;"></i>
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
                            <h5 class="modal-title" id="staticBackdropLabel">Admin Notifications: Thing to do Today</h5>
                            <button type="button" id="notifClose" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body" style="padding: 0">
                            <table class="table" style="text-align: center;">
                              <thead>
                                <th>#</th>
                                <th>Todo Today</th>
                                <th>Category</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Action</th>
                              </thead>
                              <tbody id="todayNotify">
                              </tbody>
                            </table>
                          </div>
                          <div class="modal-footer">
                            Notifications
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- MODAL 2 -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Messages</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body" style="height: 80vh;padding: 0;overflow-y: scroll;scrollbar-width: thin;overflow-x: hidden;">
                            <figure style="width: 400%; display: flex; position: relative;" id="message_slider">
                              <div style="width: 25%" id="slider_1">
                                <div style="border-bottom: 1px solid #ced4da;padding: 10px;">
                                  <input style="width: calc(100% - 50px); display: inline-block;border: 1px solid #ced4da !important;" class="form-control" type="search" placeholder="Search Conversation">
                                  <button class="btn btn-primary" style="padding: 1px 7px;float: right;height: 37px;" onclick="searchFriend()">Add</button>
                                </div>
                                <style type="text/css">
                                  .hover_message:hover {
                                    background: #ced4da;
                                    cursor: pointer;
                                  }
                                </style>
                                <div id="toInitializeConvo">

                                </div>
                              </div>
                              <div style="width: 25%;height: 72vh;" id="slider_2">
                                <div style="border-bottom: 1px solid #ced4da;padding: 10px;">
                                  <style type="text/css">
                                    .btn_outline_hover:hover {
                                      background: #90acff42 !important;
                                    }
                                  </style>
                                  <button class="btn btn-primary btn_outline_hover" style="padding: 1px 7px;float: left;height: 37px;background: #f000;border: none;margin-right: 6px;position: relative;top: -5px;" onclick="backMain()">
                                    <span style="font-size: 20pt;color: #0d6efd;position: relative;top: -5px;">
                                      ←
                                    </span>
                                  </button>
                                  <span id="friend_name">Name</span>
                                </div>
                                <div id="message_body" style="height: 100%;">
                                  <style type="text/css">
                                    .friend_message {
                                      background: #007BFF;
                                      color: white;
                                      margin-top: 5px;
                                      margin-left: 5px;
                                      max-width: 50%;
                                      border-radius: 5px;
                                      padding: 5px;
                                      margin-bottom: 5px;
                                      margin-right: 5px;
                                      width: 100%;
                                    }

                                    .user_message {
                                      background: #9D9D9D;
                                      color: white;
                                      margin-top: 5px;
                                      margin-left: 5px;
                                      max-width: 50%;
                                      border-radius: 5px;
                                      padding: 5px;
                                      margin-bottom: 5px;
                                      margin-right: 5px;
                                      width: 100%;
                                      position: relative;
                                      left: calc(50% - 10px);
                                    }
                                  </style>
                                  <div style="height: calc(100% - 50px);overflow-y: scroll;scrollbar-width: thin;" id="message_conversation">

                                  </div>
                                  <div style="height: 50px;border-top: 1px solid #ced4da;padding: 5px;">
                                    <input name="raw_message" style="width: calc(100% - 60px); display: inline-block;border: 1px solid #ced4da !important;" class="form-control" type="text" placeholder="Type a Message...">
                                    <button class="btn btn-primary" style="padding: 1px 7px;float: right;height: 37px;" onclick="sendMessage()">
                                      Send
                                    </button>
                                  </div>
                                </div>
                              </div>
                              <div style="width: 25%" id="slider_3">
                                <div style="border-bottom: 1px solid #ced4da;padding: 10px;">
                                  <style type="text/css">
                                    .btn_outline_hover:hover {
                                      background: #90acff42 !important;
                                    }
                                  </style>
                                  <button class="btn btn-primary btn_outline_hover" style="padding: 1px 7px;float: left;height: 37px;background: #f000;border: none;margin-right: 6px;position: relative;" onclick="backMain()">
                                    <span style="font-size: 20pt;color: #0d6efd;position: relative;top: -5px;">
                                      ←
                                    </span>
                                  </button>
                                  <input style="width: calc(100% - 60px); display: inline-block;border: 1px solid #ced4da !important;" class="form-control" type="text" placeholder="Search friend">
                                </div>
                                <?php
                                $result_friend_search = $con->query("SELECT * FROM member WHERE NOT mem_id = '$loggedin_id' LIMIT 10") or die($con->error);
                                while ($row_friend_search = $result_friend_search->fetch_assoc()):
                                ?>

                                  <div style="height: 65px;padding: 10px;" class="hover_message" onclick="openMessage(this)">
                                    <input type="hidden" value="<?= $row_friend_search['fname'] . ' ' . $row_friend_search['lname'] ?>">
                                    <input type="hidden" value="<?= $row_friend_search['mem_id'] ?>">
                                    <img style="margin: 5px;position: relative;top: -3px;" class="profile_size" src="uploads/<?= $row_friend_search['mem_id'] ?>.jpg" alt="picture">
                                    <span style="display: inline-block;position: relative;top: -3px;">
                                      <div style="font-size: 13pt">
                                        <?= $row_friend_search['fname'] . ' ' . $row_friend_search['lname'] ?>
                                      </div>
                                    </span>
                                  </div>
                                <?php
                                endwhile;
                                ?>
                              </div>
                              <div style="width: 25%" id="slider_4">
                                4
                                <button onclick="message_slider.style.left = '-200%'">Back</button>
                              </div>
                            </figure>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- MODAL 2 -->


                  </div>
                </div>
              </nav>
            <?php
              // close while loop 
            }
            ?>

            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                <!--===============================================================================================-->
                <!--TODO LIST-->
                <!--===============================================================================================-->

                <div class="todo-grid-parent">

                  <div>
                    <div class="todo-calendar  todo-block">
                      <div id='calendar'></div>
                    </div>

                    <h2 style="display: flex; justify-content: center; align-items: center; margin-bottom: 1rem;"><span style=" background: #ffd6cc; padding: 0.5rem;">Make your to-do-list</span></h2>
                    <div class="todo-input todo-block todo_move">
                      <span>To-do: </span>
                      <input type="text" placeholder="Enter new to-do" id="todo-add-todo" required>
                      <span>Category: </span>
                      <input type="text" placeholder="Enter category" list="categoryList" id="todo-add-category" required>
                      <datalist id="categoryList">
                        <option value="Personal"></option>
                        <option value="Work"></option>
                      </datalist>
                      <span>Date:</span>
                      <input type="date" id="dateInput" required>
                      <span>Time:</span>
                      <input type="time" id="timeInput" required>
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
                  <div class="todo-modal-close-btn" id="todo-modal-close-btn" style="cursor: pointer;">X</div>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <table class="table" style="text-align: center;">
                  <thead>
                    <tr>
                      <th>Todo</th>
                      <th>Category</th>
                      <th>Date</th>
                      <th>Time</th>
                    </tr>
                  </thead>
                  <tbody id="historyToDo">

                  </tbody>
                </table>
              </div>

              <!-- POMODORO -->
              <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

                <div class="container">
                  <!-- HEADING -->
                  <h1 class="text-center my-5">Pomodoro App</h1>

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

  <!--===============================================================================================-->
  <script src="js/kit_fontawesome.js"></script>
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
  <script src="js/pomodoro.js"></script>
  <!--===============================================================================================-->

  <script type="text/javascript">
    function todo() {
      _todos.click();
    }

    window.onload = todo();
  </script>

  <script type="text/javascript">
    function backMain() {
      message_slider.style.left = '0%';
      init_Convo();
    }
    init_Convo();

    function init_Convo() {
      var initID = $('[name=userID]').val();
      $.ajax({
        type: "POST",
        url: "initializeConvo.php",
        data: {
          init_log_id: initID
        },
        success: function(result) {
          $('#toInitializeConvo').html(result);
        }
      });
    }

    function openMessage(x) {
      message_slider.style.left = '-100%';
      var friendName = $(x).children().eq(0).val();
      var friendID = $(x).children().eq(1).val();
      init_Message(friendName, friendID);
    }
    var friendIdentity = '';
    var userIdentity = '';

    function init_Message(name, id) {
      $('#friend_name').text(name);
      friendIdentity = id;
      userIdentity = $('[name=userID]').val();
      $.ajax({
        type: "POST",
        url: "getMessages.php",
        data: {
          friend: friendIdentity,
          user: userIdentity
        },
        success: function(result) {
          $('#message_conversation').html(result);
        }
      });
      message_conversation.scrollTo(0, 0);
    }

    function sendMessage() {
      var the_message = $('[name=raw_message]').val();
      if (the_message != '') {
        $.ajax({
          type: "POST",
          url: "sendMessages.php",
          data: {
            receiverFrom: friendIdentity,
            senderTo: userIdentity,
            messageContent: the_message
          },
          success: function(result) {
            console.log(result);
            $('#message_conversation').html(result);
          }
        });
      }
      $('[name=raw_message]').val('');
    }

    function searchFriend() {
      message_slider.style.left = '-200%';
    }
  </script>
</body>

</html>