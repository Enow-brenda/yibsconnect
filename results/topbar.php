<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
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

</body>
</html>
<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-primary navbar-dark ">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <?php if(isset($_SESSION['login_id'])): ?>
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="" role="button"><i class="fas fa-bars"></i></a>
      </li>
    <?php endif; ?>
      <li>
        <a class="nav-link text-white"  href="./" role="button"> <large><b><?php echo $_SESSION['system']['name'] ?></b></large></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
     
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <?php if(isset($_SESSION['rs_id'])): ?>
        <li class="nav-item">
        <a class="nav-link" href="ajax.php?action=logout" >
          <i class="fas fa-user"></i>
          <?php echo ucwords($_SESSION['rs_name']) ?>
          <i class="fa fa-sign-out-alt"></i>
        </a>
      </li>
      <?php endif;  ?>
    </ul>
  </nav>
  <!-- /.navbar -->
