<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile-Page SocialBook - Easy Tutorial</title>
    <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <style>
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }
            /* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
  }
  
  /* The Close Button */
  .close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }
  
  .close:hover,
  .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }
        </style>

</head>

<body>
    
    <nav>
        <div class="nav-left">
            <a href="index.html">
            <img src="images/YIBS logo.png" class="logo">
            </a>
            <ul>
                <li><a href="chatbot.php"><img src="images/charbott.jpg" title="Chatbot"></a>
                </a></li>
                <li><a href="Messages.php"><img src="images/inbox.png" title="Messages"></a>
                </a></li>
                <li><a href="studyicon.php"><img src="images/skull.png" title="Studies"class="study-icon"></a>
                </a></li>
                <li><a href="video.php"><img src="images/video.png" title="Lives"></a>
                </a></li>
                <li><a href="memba.php"><img src="images/grp.jpg" title="Community"></a>
                </a></li>
            </ul>
            <div class="nav-right">
                <div class="search-box">
                    <a href="#"><img src="images/search.png"></a>
                    <input type="text" placeholder="Search">
                </div>
                <div class="nav-user-icon online" onclick="settingsMenuToggle()"> 
                    <a href="#"><img src="images/profile-pic.png"></a>   
                </div>
            </div>
        </div>

           <!---------- settings-menu ---------->
        <div class="settings-menu">

            <div id="dark-btn">
                <span></span>
            </div>

            <div class="settings-menu-inner">
                <div class="user-profile">
                    <a href="#"><img src="images/profile-pic.png"></a>
                    <div>
                        <p>John Nicholson</p>
                        <a href="profile.html">See your Profile</a>
                    </div>
                </div> 
                <hr>
                <div class="user-profile">
                    <a href="#"><img src="images/feedback.png"></a>
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

    <!-- --------Event page------------ -->

    <div class="profile-container">
        <img src="images/happy easter.jpeg" class="cover-img">
        <div class="profile-details">
            <div class="pd-left">
                <div class="pd-row">
                    <a href="#"><img src="images/course.jpg" class="pd-image"></a>
                    <div>
                        <h3>Jack Nicholson</h3>
                        <p>120 Friends - 20 mutual</p>
                        <a href="#"><img src="images/photoo.jpeg"></a>
                        <a href="#"><img src="images/photoo2.jpeg"></a>
                        <a href="#"><img src="images/photoo3.jpeg"></a>
                        <a href="#"><img src="images/photoo4.jpeg"></a>
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
                        <li><img src="images/profile-home.png">Located at Yaounde</li>
                        <li><img src="images/profile-location.png">Precisely at carrifour Simbock and Obili</li>
                    </ul>
                </div>
                <?php foreach ($events as $key => $event) { 
                ?>
            <div class="event1">
                <a href="../upload/uploads/photos/events/<?php echo($story[1])?>">
                <img src="../upload/uploads/photos/events/<?php echo($story[2])?>"></a>
                <p><?php echo($story[1]) ?></p>
            </div>
            <?php } ?>
                <div class="profile-intro">
                    <div class="title-box">
                        <h3>Daily Recomendations</h3>
                        <a href="">All photos</a>
                    </div>
                    
                    <div class="photo-box">
                        <div><img src="images/Campus-pic-B.jpg"></div>
                        <div><img src="images/Campus-pic-C.jpg"></div>
                        <div><img src="images/Code-of-ethics.jpg"></div>
                        <div><img src="images/Alumni.jpg"></div>
                        <div><img src="images/award.jpg"></div>
                        <div><img src="images/picture.jpg"></div>
                    </div>
                </div>
                <div class="profile-intro">
                    <div class="title-box">
                        <h3>Conferences</h3>
                        <a href="">All photos</a>
                    </div>
                    
                    <div class="photo-box">
                        <div><img src="images/Campus-pic-B.jpg"></div>
                        <div><img src="images/Campus-pic-C.jpg"></div>
                        <div><img src="images/Code-of-ethics.jpg"></div>
                        <div><img src="images/Alumni.jpg"></div>
                        <div><img src="images/award.jpg"></div>
                        <div><img src="images/picture.jpg"></div>
                    </div>
                </div>

                <div class="profile-intro">
                    <div class="title-box">
                        <h3>Youth week Events</h3>
                        <a href="">All Friends</a>
                    </div>
                    <p>120 (10 mutual)</p>
                    <div class="friends-box">
                        <div><img src="images/photoo1.jpeg"> <p></p></div>
                        <div><img src="images/photoo2.jpeg"><p></p></div>
                        <div><img src="images/photoo3.jpeg"><p></p></div>
                        <div><img src="images/photoo4.jpeg"><p></p></div>
                        <div><img src="images/photoo5.jpeg"><p></p></div>
                        <div><img src="images/photoo6.jpeg"><p></p></div>
                        <div><img src="images/photoo7.jpeg"><p></p></div>
                        <div><img src="images/photoo8.jpeg"><p></p></div>
                        <div><img src="images/photoo.jpeg"><p></p></div>
                    </div>
                </div>
                <div class="profile-intro">
                    <div class="title-box">
                        <h3>YIBS Matriculation Events</h3>
                        <a href="">All Friends</a>
                    </div>
                    <p>120 (10 mutual)</p>
                    <div class="friends-box">
                        <div><img src="images/photoo1.jpeg"> <p></p></div>
                        <div><img src="images/photoo2.jpeg"><p></p></div>
                        <div><img src="images/photoo3.jpeg"><p></p></div>
                        <div><img src="images/photoo4.jpeg"><p></p></div>
                        <div><img src="images/photoo5.jpeg"><p></p></div>
                        <div><img src="images/photoo6.jpeg"><p></p></div>
                        <div><img src="images/photoo7.jpeg"><p></p></div>
                        <div><img src="images/photoo8.jpeg"><p></p></div>
                        <div><img src="images/photoo.jpeg"><p></p></div>
                    </div>
                </div>
                <div class="profile-intro">
                    <div class="title-box">
                        <h3>Advertisement </h3>
                        <a href="">All photos</a>
                    </div>
                    
                    <div class="photo-box">
                        <div><img src="images/Campus-pic-B.jpg"></div>
                        <div><img src="images/Campus-pic-C.jpg"></div>
                        <div><img src="images/Code-of-ethics.jpg"></div>
                        <div><img src="images/Alumni.jpg"></div>
                        <div><img src="images/award.jpg"></div>
                        <div><img src="images/picture.jpg"></div>
                    </div>
                </div>
                <div class="profile-intro">
                    <div class="title-box">
                        <h3>YIBS Matriculation Events</h3>
                        <a href="">All Friends</a>
                    </div>
                    <p>120 (10 mutual)</p>
                    <div class="friends-box">
                        <div><img src="images/photoo1.jpeg"> <p></p></div>
                        <div><img src="images/photoo2.jpeg"><p></p></div>
                        <div><img src="images/photoo3.jpeg"><p></p></div>
                        <div><img src="images/photoo4.jpeg"><p></p></div>
                        <div><img src="images/photoo5.jpeg"><p></p></div>
                        <div><img src="images/photoo6.jpeg"><p></p></div>
                        <div><img src="images/photoo7.jpeg"><p></p></div>
                        <div><img src="images/photoo8.jpeg"><p></p></div>
                        <div><img src="images/photoo.jpeg"><p></p></div>
                    </div>
                </div>
                <div class="profile-intro">
                    <div class="title-box">
                        <h3>YIBS Matriculation Events</h3>
                        <a href="">All Friends</a>
                    </div>
                    <p>120 (10 mutual)</p>
                    <div class="friends-box">
                        <div><img src="images/photoo1.jpeg"> <p></p></div>
                        <div><img src="images/photoo2.jpeg"><p></p></div>
                        <div><img src="images/photoo3.jpeg"><p></p></div>
                        <div><img src="images/photoo4.jpeg"><p></p></div>
                        <div><img src="images/photoo5.jpeg"><p></p></div>
                        <div><img src="images/photoo6.jpeg"><p></p></div>
                        <div><img src="images/photoo7.jpeg"><p></p></div>
                        <div><img src="images/photoo8.jpeg"><p></p></div>
                        <div><img src="images/photoo.jpeg"><p></p></div>
                    </div>
                </div>

            </div>
            <div class="post-col">
                <div class="write-post-container">
                    <div class="user-profile">
                        <img src="images/profile-pic.png">
                        <div>
                            <p>John Nicholson</p>
                            <small>Public <i class="fas fa-caret-down"></i></small>
                        </div>
                    </div>
                    <div class="post-input-container">
                        <textarea rows="3" placeholder="Up coming Events"></textarea>
                        <div id="Demo" class="w3-bar-block w3-border" style="display:none">
                            <input class="w3-button" type='file' name='photo' id='photo'>
                        </div>
                       <input class="w3-button w3-blue" type='button' value="Post" id="post" onclick='post()'>
                       <div class="add-post-links">
                            <div>
                            <button class="w3-button" onclick="imageDropDown()">
                                    <img src="images/photo.png">
                                    Photo
                                </button>
                            </div>
     
                        <div class="add-post-links">
                            <div >
                              
                            <img src="images/photo.png"id="Demo" class="w3-bar-block w3-border" style="display:none">
                            <button type="button" class="btn btn-primary" id="myBtn" class="modal-dialog w3-container w3-white w3-col s6 w3-display-middle">Upload Post</button>
                            
                            </div>
                            </a>
                            <div>
                                <button class="w3-button" onclick="showEmojiModal('emoji-content-feelings','emojisFeelings','postText')">
                                    <img src="images/feeling.png">Feeling</a>
                                </button>
                                <div id="emojisFeelings" class="w3-dropdown-content w3-bar-block w3-border" role="dialog w3-row" >
                                            <div id="emoji-content-feelings"></div>
                                </div>
                                </div>
                        </div>
     
                    </div>
                 </div>
                 <div class="post-container">
                    <div class="post-row"> 
                    <div class="user-profile">
                        <img src="images/profile-pic.png">
                        <div>
                            <p>John Nicholson</p>
                           <span>June 24 2021, 13:40 pm</span>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-ellispsis-v"></i></a>
                 </div>
                 <p></p>
                    <img src="images/photoo1.jpeg" class="post-img">
     
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
                        <img src="images/profile-pic.png">
                        <div>
                            <p>John Nicholson</p>
                           <span>June 24 2021, 13:40 pm</span>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-ellispsis-v"></i></a>
                 </div>
                 <p></p>
                    <img src="images/photoo2.jpeg" class="post-img">
     
                    <div class="post-row">
                        <div class="activity-icons">
                            <div><img src="images/like.png">120</div>
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
                        <img src="images/profile-pic.png">
                        <div>
                            <p>John Nicholson</p>
                           <span>June 24 2021, 13:40 pm</span>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-ellispsis-v"></i></a>
                 </div>
                 <P></P>
                    <img src="images/photoo3.jpeg" class="post-img">
     
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
                        <img src="images/profile-pic.png">
                        <div>
                            <p>John Nicholson</p>
                           <span>June 24 2021, 13:40 pm</span>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-ellispsis-v"></i></a>
                 </div>
                 <p></p>
                    <img src="images/photoo4.jpeg" class="post-img">
     
                    <div class="post-row">
                        <div class="activity-icons">
                            <div><img src="images/like.png">120</div>
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
                        <img src="images/profile-pic.png">
                        <div>
                            <p>John Nicholson</p>
                           <span>June 24 2021, 13:40 pm</span>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-ellispsis-v"></i></a>
                 </div>
                <p></p>
                    <img src="images/photoo5.jpeg" class="post-img">
     
                    <div class="post-row">
                        <div class="activity-icons">
                            <div><img src="images/like.png">120</div>
                            <div><img src="images/comments.png">45</div>
                            <div><img src="images/share.png">20</div>
                        </div>
                        <div class="post-profile-icon">
                            <img src="images/profile-pic.png"> <i class="fas fa-caret-down"></i>
                        </div>
                    </div>
     
                </div>
            </div>
        </div>

    </div>

     <!-- The Modal -->
     <div id="myModal" class="modal">
     <!-- Modal content -->
     <div class="modal-content">
         <span class="close">&times;</span>
         <input type="file" name="photo" id="photo">
         <button class="btn btn-flat bg-gradient-primary mx-2">Post</button>
     </div>

     </div>

    </div>
   
   
    <div class="footer">
      <a href="#"><p>See More Events</p></a>
    </div>

    <script>
        // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}




    //script for image dropdown
    function imageDropDown() {
        var x = document.getElementById("Demo");
            console.log('start')
        if (x.className.indexOf("w3-show") == -1) {
            console.log('in')
          x.className += " w3-show";
        } else { 
          x.className = x.className.replace(" w3-show", "");
          console.log('out')
        }
      } 



      
    //ajax to send post
    function post() {
        // predefined file types for validation
    var mime_types = [ 'image/jpeg', 'image/png' ];
    
    //var submit_button = document.querySelector('#submit_button');
        
    //submit_button.addEventListener('click', function() {
    
    // check if user has selected file OR not
    var selected_file = document.querySelector('#photo');
    if(selected_file.files.length == 0) {
        //alert('Please select file to upload.');
        uploadPostText('NO IMAGE')
        return;
    }

    // Get the file uploaded
    var file = selected_file.files[0];
    
    // validate MIME type
    if(mime_types.indexOf(file.type) == -1) {
        alert('Please select jpeg or png files only.');
        return;
    }

    // max 5 MB size allowed
    if(file.size > 10*1024*1024) {
        alert('Please select file having less than 5MB size.');
        return;
    }

    // upload file
    var form_data = new FormData();

    // append selected file to the formData object
    form_data.append('image', document.querySelector('#photo').files[0]);
    form_data.append('type', 'posts');

    var request = new XMLHttpRequest();
    request.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    // Response
        var IMAGE = this.responseText;
        uploadPostText(IMAGE)
    }
    };
    request.open('post', '../upload/uploadFile.php'); 

    // send POST request to server
    request.send(form_data);

}

//working with the emojis
    //load the emojis file
    let element = ''
    let includedCategories = []
    let includedCategoriesNumber = []

    function showEmojiModal(emojiContent,content,target){
        for (let i = 0; i < emojis.length; i++) {
            if(!includedCategories.includes(emojis[i].category)){
                element += '<button onclick="addEmojis(this,\''+target+'\')">'+emojis[i].html+'</button>'
                includedCategories.push(emojis[i].category)
            }
        }
        let E = document.getElementById(emojiContent)
            E.innerHTML = element
        var x = document.getElementById(content);
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else { 
            x.className = x.className.replace(" w3-show", "");
        }
        }

    function addEmojis(emoji,targetElement) {
        document.getElementById(targetElement).value += emoji.innerText
    }
    </script>
</body>
</html>