<?php
ob_start();
    session_start();
    include('config_database.php');
    if($_SESSION['nn']=="") {header("location:index.php");}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Online Examination</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <!-- Favicon-->
<link rel="shortcut icon" type="image/x-icon" href="ULK_logo.png" />
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <style type="text/css">
        #side-main-menu li a:hover{
          background: teal;
        }
      </style>
    
  </head>
<!-- Side Navbar -->
<?php 
        
             
            $id=$_SESSION['nn'];
              $take=mysqli_query($connect,"SELECT * FROM user WHERE user_id='$id'");
              $view=mysqli_fetch_array($take);
              $id=$view['user_id'];
              $class_id=$view['class_id'];
              $department_id=$view['department_id'];
            ?>
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="<?php echo $view['photoprofile'];?>" alt="person" class="img-fluid rounded-circle">
            
            <h2 class="h5"><?php echo $view['names']; ?></h2><span><?php if($view['category_id']==3) echo 'Student'; else if($view['category_id']==1) echo 'Administrator';else if($view['category_id']==2) echo 'Lecture';else if($view['category_id']==4) echo 'Head of Depart';else if($view['category_id']==5) echo 'Recover Staff';?></span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class=" text-center"> <strong class="text-info"></strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">MENU</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="dashboard.php"> <i class="icon-home"></i>HOME                             </a></li>
          <?php if($view['category_id']==1) {?>
            <li><a href="admin.php"> <i class="fa  fa-group"></i>Admin                             </a></li>
            <li><a href="hods.php"> <i class="fa fa-group"></i>Head Of Depart                             </a></li>
            <li><a href="recover_staff.php"> <i class="fa fa-group"></i>Recover Staff                             </a></li>
            
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> 
              <i class="icon-interface-windows"></i>Class </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled text-info">
                <li><a href="faculty.php">Faculty </a></li>
                <li><a href="department.php">Department</a></li>
                <li><a href="class.php">Class & Section</a></li>
              </ul>
            </li>

            <li><a href="student.php"> <i class="fa fa-group"></i>Students                             </a></li>

          <?php } ?>
           <?php if($view['category_id']==4) {?>
            <li><a href="lecture.php"> <i class="fa fa-group"></i>Lectures                             </a></li>
            <li><a href="student.php"> <i class="fa fa-group"></i>Students                             </a></li>
            <li><a href="course.php"> <i class="icon-grid"></i>Courses                       </a></li>
            <li><a href="hod_attendances.php"> <i class="icon-list"></i>Attendences                       </a></li>
             <li><a href="hod_exam.php"> <i class="icon-list"></i>Exams                       </a></li>
             <li><a href="hod_report.php"> <i class="icon-grid"></i>Report                       </a></li>
          <?php } ?>
           <?php if($view['category_id']==5) {?>
            <li><a href="lecture.php"> <i class="fa fa-group"></i>Finance Report                             </a></li>
            <li><a href="student.php"> <i class="fa fa-group"></i>Exames Access                             </a></li>
            <li><a href="recover_exam.php"> <i class="icon-list"></i>Exams                       </a></li>
            <li><a href="course.php"> <i class="icon-grid"></i>Report                       </a></li>
          <?php } ?>
          <?php if($view['category_id']==3 ) {?>
            <li><a href="course.php"> <i class="icon-grid"></i>Courses                       </a></li>
              <li><a href="exam.php"> <i class="icon-list"></i>Exams                       </a></li>
          <?php } ?>  
            <?php if($view['category_id']==2 ) {?>
            <li><a href="course.php"> <i class="icon-grid"></i>Courses                       </a></li>
              <li><a href="lecture_attendances.php"> <i class="icon-list"></i>Attendences                       </a></li>
              <li><a href="lecture_exam.php"> <i class="icon-list"></i>Exams                       </a></li>
          <?php } ?>
            <li><a href="parametre.php"> <i class="fa  fa-gears" aria-hidden="true"></i></i>Settings </span>                         </a></li>
            <li><a href="logout.php"> <i class="fa fa-power-off"></i>Logout                             </a></li>

          </ul>
        </div>
        
      </div>
    </nav>
    <div class="page">

      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span class="h3">ONLINE <span style="color: grey;"> | </span></span><strong class="text-info"> EXAMINATION</strong></div></a></div>
            <!--start notifications -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                

                <!-- Notifications dropdown-->
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-info"></span></a>
                 
                </li>  
               
                <li class="nav-item"><a href="logout.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-power-off"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>

      <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>