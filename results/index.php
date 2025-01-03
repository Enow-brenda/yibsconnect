<!DOCTYPE html>
<html lang="en">
<?php 
    include_once('../auth/auth.php');
    include 'db_connect.php';
    ob_start();
  if(!isset($_SESSION['system'])){

    $system = $conn->query("SELECT * FROM system_settings")->fetch_array();
    foreach($system as $k => $v){
      $_SESSION['system'][$k] = $v;
    }
  }
  ob_end_flush();

	include 'header.php' 
?><html lang = "eng">
<head>
  <title>Online</title>
  <meta charset = "utf-8" />
  <meta name = "viewport" content = "width=device-width, initial-scale=1" />
  <link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
  <link rel = "stylesheet" type = "text/css" href = "css/jquery.dataTables.css" />
  <link rel="stylesheet" href="../front/assets/css/w3.css">
      <link rel="stylesheet" href="../front/assets/css/st.css">
  <link rel="stylesheet" href="../front/assets/css/style.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

<nav>
        <div class="nav-left">
            <img src="../front/images/YIBS logo.png" class="logo">
            <ul>
                <li><a href="http://127.0.0.1:5000/"><img src="../front/images/charbott.jpg" title="Chatbot"></a>
                </a></li>
                <li><a href="Messages.php"><img src="../front/images/inbox.png" title="Messages"></a>
                </a></li>
                <li><a href="studyicon.php"><img src="../front/images/skull.png" title="Studies"class="study-icon"></a>
                </a></li>
                <li><a href="http://localhost:3030"><img src="../front/images/video.png" title="Lives"></a>
                </a></li>
                <li><a href="memba.php"><img src="../front/images/grp.jpg" title="Community"></a>
                </a></li>
            </ul>
        
        <div class="nav-right">
            <div class="search-box">
                <img src="../front/images/search.png">
                <input type="text" placeholder="Search">
            </div>
            <div class="nav-user-icon online" onclick="settingsMenuToggle()"> 
                 <a href="../front/profile.php"><img src="../front/images/profile-pic.png"></a>   
            </div>
            <a href="../auth/logout.php">log out</a>   

        </div>

        </div>
        
           <!---------- settings-menu ---------->
        <div class="settings-menu">

            <div id="dark-btn">
                <span></span>
            </div>

            <div class="settings-menu-inner">
                <div class="user-profile">
                    <img src="../front/images/profile-pic.png">
                    <div>
                        <p>John Nicholson</p>
                        <a href="../front/profile.php">See your Profile</a>
                    </div>
                </div> 
                <hr>
                <div class="user-profile">
                    <img src="../front/images/feedback.png">
                    <div>
                        <p>Give Feedback</p>
                        <a href="#">Help us to improve the new design</a>
                    </div>
                </div> 
                <hr>
                <div class="setting-links">
                    <img src="../front/images/setting.png" class="settings-icon">
                    <a href="#">Settings & Privacy <img src="images/arrow.png" width="10px"></a>
                </div>
                <div class="setting-links">
                    <img src="../front/images/help.png" class="settings-icon">
                    <a href="#">Help & Support<img src="images/arrow.png" width="10px"></a>
                </div>
                <div class="setting-links">
                    <img src="../front/images/display.png" class="settings-icon">
                    <a href="#">Display & Accessibility <img src="images/arrow.png" width="10px"></a>
                </div>
                <div class="setting-links">
                    <img src="../front/images/logout.png" class="settings-icon">
                    <a href="#">Logout <img src="../front/images/arrow.png" width="10px"></a>
                </div>

            </div>
           

        </div>
  </nav>

<div class="wrapper">

   <?php include 'sidebar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	 <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
	    <div class="toast-body text-white">
	    </div>
	  </div>
    <div id="toastsContainerTopRight" class="toasts-top-right fixed"></div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $title ?></h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
            <hr class="border-primary">
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
         <?php 
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';
            if(!file_exists($page.".php")){
                include '404.html';
            }else{
            include $page.'.php';

            }
          ?>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
    <div class="modal fade" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal_right" role='dialog'>
    <div class="modal-dialog modal-full-height  modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="fa fa-arrow-right"></span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="viewer_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
              <button type="button" class="btn-close" data-dismiss="modal"><span class="fa fa-times"></span></button>
              <img src="" alt="">
      </div>
    </div>
  </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>1 source code <a href="https://1sourcecodr.blogspot.com/">Link</a>.</strong>
   
    <div class="float-right d-none d-sm-inline-block">
      <b><?php echo $_SESSION['system']['name'] ?></b>
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<!-- Bootstrap -->
<?php include 'footer.php' ?>
</body>
</html>
