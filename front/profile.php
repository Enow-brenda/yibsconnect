<?php 
   include_once('../auth/auth.php');
    include_once('../CRUDR/edit.php');
    $member=edit('users',$_GET['id']);
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yibs Connect Profile-Page </title>
    <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>

<body>
    
    <nav>
        <div class="nav-left">
            <a href="social.php">
            <img src="images/YIBS logo.png" class="logo">
            </a>
            <ul>
            <li><a href="http://127.0.0.1:5000/"><img src="images/charbott.jpg" title="Chatbot"></a>
                </a></li>
                <li><a href="Messages.php"><img src="images/inbox.png" title="Messages"></a>
                </a></li>
                <li><a href="studyicon.php"><img src="images/skull.png" title="Studies"class="study-icon"></a>
                </a></li>
                <li><a href="http://localhost:3030"><img src="images/video.png" title="Lives"></a>
                </a></li>
                <li><a href="social.php"><img src="images/grp.jpg" title="Community"></a>
                </a></li>
            </ul>
        </div>
        <div class="nav-right">
            <div class="search-box">
                <img src="images/search.png">
                <input type="text" placeholder="Search">
            </div>
            <div class="nav-user-icon online" onclick="settingsMenuToggle()"> 
                <img src="images/course.jpg">    
            </div>
        </div>

           <!---------- settings-menu ---------->
        <div class="settings-menu">

            <div id="dark-btn">
                <span></span>
            </div>

            <div class="settings-menu-inner">
                <div class="user-profile">
                    <img src="images/profile-pic.png">
                    <div>
                        <p><?php echo $_SESSION['user_name'] ?></p>
                        <a href="profile.php?id=<?php echo $_SESSION['user_id'] ?>">
                            See your Profile
                        </a>
                    </div>
                </div> 
                <hr>
                <div class="user-profile">
                    <img src="images/feedback.png">
                    <div>
                        <p>Give Feedback</p>
                        <a href="#">Help us to improve the new design</a>
                    </div>
                </div> 
                <hr>
                <div class="setting-links">
                    <img src="images/setting.png" class="settings-icon">
                    <a href="#">Settings & Privacy <img src="images/arrow.png" width="10px"></a>
                </div>
                <div class="setting-links">
                    <img src="images/help.png" class="settings-icon">
                    <a href="#">Help & Support<img src="images/arrow.png" width="10px"></a>
                </div>
                <div class="setting-links">
                    <img src="images/display.png" class="settings-icon">
                    <a href="#">Display & Accessibility <img src="images/arrow.png" width="10px"></a>
                </div>
                <div class="setting-links">
                    <img src="images/logout.png" class="settings-icon">
                    <a href="#">Logout <img src="images/arrow.png" width="10px"></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- --------profile page------------ -->

    <div class="profile-container">
        <img class="cover-img" src="images/award.jpg">    
        <div class="profile-details">
            <div class="pd-left">
                <div class="pd-row">
                    <img class="pd-image" src="images/photoo4.jpeg">    
                    <div>
                        <h3><?php echo $member[0][1]?></h3>
                        <p>120 Friends - 20 mutual</p>
                        <img src="images/photoo4.jpeg">
                        <img src="images/photoo5.jpeg">
                        <img src="images/photoo1.jpeg">
                        <img src="images/photoo2.jpeg">
                    </div>
                </div>
            </div>
            <div class="pd-right">

                <button type="button"><img src="images/add-friends.png"> Friend</button>
                <button type="button"><img src="images/message.png"> Message</button>
                <br>
                <a href=""><img src="images/more.png"></a>

            </div>
        </div>

        <div class="profile-info">
            <div class="info-col">

                <div class="profile-intro">
                    <h3>Intro</h3>
                    <p class="intro-text">Believe in yourself and you can do unbelievable things. <img src="images/feeling.png"></p>
                    <hr>
                    <ul>
                        <li><img src="images/profile-job.png"> Director at 99media Ltd</li>
                        <li><img src="images/profile-study.png">Studied at YIBS University</li>
                        <li><img src="images/profile-study.png">Went to YIBS</li>
                        <li><img src="images/profile-home.png">Yaounde</li>
                        <li><img src="images/profile-location.png">Located at carrifour simbock/Obili</li>
                    </ul>
                </div>

                <div class="profile-intro">
                    <div class="title-box">
                        <h3>Photos</h3>
                        <a href="">All photos</a>
                    </div>
                    
                    <div class="photo-box">
                        <div><img src="images/photoo1.jpeg"></div>
                        <div><img src="images/photoo2.jpeg"></div>
                        <div><img src="images/photoo3.jpeg"></div>
                        <div><img src="images/photoo4.jpeg"></div>
                        <div><img src="images/photoo5.jpeg"></div>
                        <div><img src="images/photoo6.jpeg"></div>
                    </div>
                </div>

                <div class="profile-intro">
                    <div class="title-box">
                        <h3>Friends</h3>
                        <a href="">All Friends</a>
                    </div>
                    <p>120 (10 mutual)</p>
                    <div class="friends-box">
                        <div><img src="images/photoo.jpeg"> <p>Joseph N</p></div>
                        <div><img src="images/photoo1.jpeg"><p>Nathan N</p></div>
                        <div><img src="images/photoo2.jpeg"><p>Goerge D</p></div>
                        <div><img src="images/photoo3.jpeg"><p>Francis L</p></div>
                        <div><img src="images/photoo4.jpeg"><p>Anthony E</p></div>
                        <div><img src="images/photoo5.jpeg"><p>Micheal A</p></div>
                        <div><img src="images/photoo6.jpeg"><p>Edward M</p></div>
                        <div><img src="images/photoo7.jpeg"><p>Brandon C</p></div>
                        <div><img src="images/photoo8.jpeg"><p>James Doe</p></div>
                    </div>
                </div>

            </div>
            <div class="post-col">
                <div class="write-post-container">
                    <div class="user-profile">
                        <img src="images/Alumni.jpg">
                        <div>
                            <p>John Nicholson</p>
                            <small>Public <i class="fas fa-caret-down"></i></small>
                        </div>
                    </div>
                    <div class="post-input-container">
                        <textarea rows="3" placeholder="what's on your mind, John?"></textarea>
     
                        <div class="add-post-links">
                            <a href="#"><img src="images/live-video.png">Live Video</a>
                            <a href="#"><img src="images/photo.png">Photo/Video</a>
                            <a href="#"><img src="images/feeling.png">Feeling/Activity</a>
                        </div>
     
                    </div>
                 </div>
                 <div class="post-container">
                    <div class="post-row"> 
                    <div class="user-profile">
                        <img src="images/yibbbs.jpeg">
                        <div>
                            <p>John Nicholson</p>
                           <span>June 24 2021, 13:40 pm</span>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-ellispsis-v"></i></a>
                 </div>
                    <img src="images/About-us.jpg" class="post-img">
     
                    <div class="post-row">
                        <div class="activity-icons">
                            <div><img src="images/like-blue.png">120</div>
                            <div><img src="images/comments.png">45</div>
                            <div><img src="images/share.png">20</div>
                        </div>
                        <div class="post-profile-icon">
                            <img src="images/profile-pic.png"> <i class="fas fa-caret-down"></i>
                        </div>
                    </div>
     
                </div>
     
                <div class="post-container">
                    <div class="post-row"> 
                    <div class="user-profile">
                        <img src="images/Team.jpg">
                        <div>
                            <p>John Nicholson</p>
                           <span>June 24 2021, 13:40 pm</span>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-ellispsis-v"></i></a>
                    </div>
                    <img src="images/about-us-1.jpg" class="post-img">
     
                    <div class="post-row">
                        <div class="activity-icons">
                            <div><img src="images/like.png">120</div>
                            <div><img src="images/comments.png">45</div>
                            <div><img src="images/share.png">20</div>
                        </div>
                        <div class="post-profile-icon">
                            <img src="images/photoo1.jpeg"> <i class="fas fa-caret-down"></i>
                        </div>
                    </div>
     
                </div>
     
                <div class="post-container">
                    <div class="post-row"> 
                    <div class="user-profile">
                        <img src="images/photoo4.jpeg">
                        <div>
                            <p>John Nicholson</p>
                           <span>June 24 2021, 13:40 pm</span>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-ellispsis-v"></i></a>
                 </div>
                    <img src="images/Campus-pic-B.jpg" class="post-img">
     
                    <div class="post-row">
                        <div class="activity-icons">
                            <div><img src="images/like-blue.png">120</div>
                            <div><img src="images/comments.png">45</div>
                            <div><img src="images/share.png">20</div>
                        </div>
                        <div class="post-profile-icon">
                            <img src="images/photoo4.jpeg"> <i class="fas fa-caret-down"></i>
                        </div>
                    </div>
     
                </div>
     
                <div class="post-container">
                    <div class="post-row"> 
                    <div class="user-profile">
                        <img src="images/photoo5.jpeg">
                        <div>
                            <p>John Nicholson</p>
                           <span>June 24 2021, 13:40 pm</span>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-ellispsis-v"></i></a>
                 </div>       
                    <img src="images/Campus-pic-C.jpg" class="post-img">
     
                    <div class="post-row">
                        <div class="activity-icons">
                            <div><img src="images/like.png">120</div>
                            <div><img src="images/comments.png">45</div>
                            <div><img src="images/share.png">20</div>
                        </div>
                        <div class="post-profile-icon">
                            <img src="images/photoo5.jpeg"> <i class="fas fa-caret-down"></i>
                        </div>
                    </div>
     
                </div>
     
                <div class="post-container">
                    <div class="post-row"> 
                    <div class="user-profile">
                        <img src="images/photoo6.jpeg">
                        <div>
                            <p>John Nicholson</p>
                           <span>June 24 2021, 13:40 pm</span>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-ellispsis-v"></i></a>
                 </div>                 
                    <img src="images/Code-of-ethics.jpg" class="post-img">
     
                    <div class="post-row">
                        <div class="activity-icons">
                            <div><img src="images/like.png">120</div>
                            <div><img src="images/comments.png">45</div>
                            <div><img src="images/share.png">20</div>
                        </div>
                        <div class="post-profile-icon">
                            <img src="images/photoo6.jpeg"> <i class="fas fa-caret-down"></i>
                        </div>
                    </div>
     
                </div>
            </div>
        </div>

    </div>
   

    <div class="footer">
        <p>See More</p>
    </div>

<script src="assets/js/script.js"></script>
</body>
</html>