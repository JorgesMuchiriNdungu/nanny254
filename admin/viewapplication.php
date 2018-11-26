



<?php

include('connection.php');
include('checklogin.php');
//$spot_users = "SELECT user_id, full_name, email, phone_number,pick_file, username, password, Address,usertype FROM users2 ";
$spot_users = "SELECT * FROM application ";

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Nanny 254</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Nanny 254</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             
            </a>
           
          <!-- Notifications: style can be found in dropdown.less -->
  
          <!-- Tasks: style can be found in dropdown.less -->
      
          <!-- User Account: style can be found in dropdown.less -->
 <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="images/default.png" class="user-image" alt="User Image">
   <span class="hidden-xs"><?php echo $_SESSION["authlog"]["first_name"]?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="images/default.png" class="img-circle" alt="User Image">

             
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
     
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
     <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="dashboard.php"><i class="fa fa-pencil-square-o"></i> <span> User Dashboard</span></a></li>
         
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Application</span>
         <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="viewapplication.php"><i class="fa fa-circle-o"></i> View Application</a></li>
           
       
          </ul>
        </li>
       <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Nannies</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="viewnannies.php"><i class="fa fa-circle-o"></i>View Nannies</a></li>
                       
          
         
        </li>
       </ul>
<li class="treeview">
     <ul class="treeview-menu">
            <li><a href="viewapplication.php"><i class="fa fa-circle-o"></i> View Application</a></li>
           
       
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i>
            <span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="backgroundcheck.php"><i class="fa fa-circle-o"></i>Background Check Report</a></li>
            <li><a href="employment_status.php"><i class="fa fa-circle-o"></i>Employment Status Report</a></li>
            <li><a href="user_report.php"><i class="fa fa-circle-o"></i>User Status Report</a></li>
            <li><a href="education_level.php"><i class="fa fa-circle-o"></i>Education Level Status Report</a></li>
            <li><a href="nhif_status.php"><i class="fa fa-circle-o"></i>NHIF Memebrship Status Report</a></li>
            <li><a href="gender_status.php"><i class="fa fa-circle-o"></i>Gender Status Report</a></li>

        </li>
       </ul>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Manage Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="viewuser.php"><i class="fa fa-user"></i>View Users</a></li>
            <li><a href="registration.php"><i class="fa fa-user"></i> Add Users</a></li>
         
        </li>
       </ul>

    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                 <h3 class="box-title">Manage Applications</h3>
              <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
<tr>
   <th>No</th>
   <th>Name</th>
   <th>Email</th>
   <th>Phone No</th>
   <th>Salary</th>
   <th>Age</th>
   <th>Category</th>
   <th>Location</th>
   <th>Action</th>
     
<script>
function myFunction() {
    document.getElementById("db-table").deleteRow($spot_users_row);
}
</script>





 <?php 

$result_spot_users = $conn->query($spot_users);
  if($result_spot_users->num_rows >0){
    while($spot_users_row = $result_spot_users->fetch_assoc()){
  ?>
        <tr>
        <td><?php echo $spot_users_row["id"]; ?></td> 
        <td><?php echo $spot_users_row["first_name"]; ?></td>
        <td><?php echo $spot_users_row["email"]; ?></td>
        <td><?php echo $spot_users_row["phoneno"]; ?></td>
        <td><?php echo $spot_users_row["salary"]; ?></td> 
        <td><?php echo $spot_users_row["age"]; ?></td>
        <td><?php echo $spot_users_row["category"]; ?></td>
        <td><?php echo $spot_users_row["location"]; ?></td>
 
        <td>  <button type="submit" name="search"><a href="viewnannies.php">Find Match</a>
        </button>
        </td>
                       <?php
  



}
        }
?>
            </tr>
                   </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      
    <!-- /.content -->
  </div>
  <!-- Content Wrapper. Contains page content -->

  <!-- /.content-wrapper -->
 <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
     <!-- Anything you want-->
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017 <a href="#">Nanny 254</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
     
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="bower_components/Chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
