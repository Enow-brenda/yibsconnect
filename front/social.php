<?php
include_once('../auth/auth.php');
include_once('../CRUDR/collect_data.php');
if (isset($_POST['search_input']) and $_POST['search_input'] != NULL) {
    include_once('../CRUDR/search.php');
    $posts = search($_POST['search_input'], 'TEXT', 'post');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YIBS Connect</title>
    <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/az
        prG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/w3.css">
        <link rel="stylesheet" href="assets/css/st.css">

</head>

<body>
    
    <nav>
        <div class="nav-left">
            <a href="./">
                <img src="images/YIBS logo.png" class="logo">
            </a>
            <ul>
                <li><a href="http://127.0.0.1:5000/"><img src="images/chatbot.png" title="Chatbot"></a>
                </a></li>
                <li><a href="Messages.php"><img src="images/messaging1.png" title="Messages"></a>
                </a></li>
                <li><a href="../results/index.php"><img src="images/Results1.png" title="Result"class="study-icon"></a>
                </a></li>
                <li><a href="http://localhost:3030"><img src="images/Live1.png" title="Lives"></a>
                </a></li>
                <li><a href="../library/book.php"><img src="images/Library .png" title="Library"></a>
                </a></li>
                <li><a href="./About/index.html"><img src="images/About.png" title="About Us"></a>
                </a></li>
            </ul>
        
        <div class="nav-right">
            <div method="post">
                <a href="Search.php"></a>
                <form action="#" method="post">
                    <input type="text" placeholder="Search Posts" name='search_input' style="border-radius: 8px;
    margin: auto;">
                    <button class="btn btn-dark btn-sm" name="submit" style="border-radius: 7px; color: #2913e5 ">
                        <img src="images/search.png"  style="    width: 15px; height: 17px;">
                        Search
                    </button> 
                </form>
            </div>
            <div class="nav-user-icon online" onclick="settingsMenuToggle()"> 
                <img src="images/photoo4.jpeg">
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
                    <img src="images/course.jpg">
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
                    <a href="../auth/logout.php">Logout <img src="images/arrow.png" width="10px"></a>
                </div>

            </div>
           

        </div>
`
    </nav>
    <div class="container">
        <!---------- left-sidebar ---------->
        <div class="left-sidebar">
            <div class="imp-links">
                <a href="#"><img src="images/news.png">Latest News</a>
                <a href="#"><img src="images/friends.png">Friends</a>
                <a href="#"><img src="images/group.png">Group</a>
                <a href="#"><img src="images/marketplace.png">YIBS Community</a>
                <a href="#"><img src="images/watch.png">Watch</a>
                <a href="#">See More</a>
            </div>
            <div class="shortcut-links">
                <p>Your Shortcuts</p>
                <a href="#"><img src="images/shortcut-1.png"> Software Engineering Department</a>
                <a href="#"><img src="images/shortcut-2.png"> Accountancy Department</a>
                <a href="#"><img src="images/shortcut-3.png"> Network and Security Department</a>
                <a href="#"><img src="images/shortcut-4.png"> Human Resource Management Department</a>
        </div>
        </div>
          <!---------- main content ---------->
          <div class="main-content">
          <div class="stories-container">
        <div class="content">
            <div class="previous-btn">
                
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                  </svg>
            </div>


          <div class="stories" style="max-width: 600px;">
          <div class="story1">
                    <img src="images/upload.png" onclick="document.getElementById('storyForm').style.display='block'">
                <p>Post a story</p>
            </div>
          <?php foreach ($stories as $key => $story) { 
                ?>
            <div class="story1">
                <a href="../upload/uploads/stories/<?php echo($story[2])?>">
                <img src="../upload/uploads/stories/<?php echo($story[2])?>"></a>
                <p><?php echo($story[1]) ?></p>
            </div>
            <?php } ?>
            </div>

            <div class="next-btn">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </div>
        </div>
    </div>
              
            <div class="write-post-container">
               <div class="user-profile">
                   <img src="images/Alumni.jpg">
                   <div>
                       <p><?php echo($_SESSION['user_name'])?></p>
                       <small>Public <i class="fas fa-caret-down"></i></small>
                   </div>
               </div>
               <div class="post-input-container">
                
                   <textarea id='postText' rows="3" placeholder="what's on your mind, <?php echo($_SESSION['user_name'])?>?"></textarea>
                   
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
            <?php foreach ($posts as $key => $post) { 
                ?>

                <div class="post-container">
               <div class="post-row"> 
               <div class="user-profile">
                   <img src="images/photoo4.jpeg">
                   <div>
                       <p><?php echo($post[7]) ?></p>
                      <span><?php echo($post[4]) ?></span>
                   </div>
               </div>
               <a href="#"><i class="fas fa-ellispsis-v"></i></a>
            </div>
            <p class="post-text"><?php echo($post[2]) ?></p>
               <img src="../upload/uploads/posts/<?php echo($post[3]) ?>" alt='' class="post-img">
               <div class="post-row">
                   <div class="activity-icons">
                       <div><img src="images/like-blue.png">120</div>
                       <div><img src="images/comments.png" onclick="commentFunction('<?php echo($post[0]) ?>')">45</div>
                       
                       <div id='id<?php echo($post[0]) ?>'  class="w3-dropdown-content w3-border" style="display:none;width: 550px;border: solid black;border-radius: 15px;">
                            <div id="comment-sectionid<?php echo($post[0]) ?>">
                                
                            </div>
                            <textarea cols='48' name="comment_text" id="comment_text<?php echo($post[0]) ?>" placeholder="comment"></textarea>
                            <input class="w3-button w3-blue" type="submit" value="send" id="send" onclick="postCommentText('<?php echo($post[0]) ?>')">
                        </div>
                       <div><img src="images/share.png">20</div>
                   </div>
                   <div class="post-profile-icon">
                       <img src="images/photoo4.jpeg"> <i class="fas fa-caret-down"></i>
                   </div>
               </div>

           </div>
            <?php } ?>

           

           <button type="button" class="load-more-btn">Load More</button>

       </div>
       <!---------- right-sidebar ---------->
       <div class="right-sidebar">

        <div class="sidebar-title">
         <h4>Events</h4>
         <a href="#">See All</a>
        </div>

     <?php 

     for ($i=sizeof($event)-1; $i >= 0; $i--) { 
        $date = strtotime($event[$i][1]);
        $date = getDate($date);
        ?>
        <div class="event">
        <div class="left-event">
         <h3 style="margin-top: -10px"><?php echo($date['mday'])?></h3>
         <a href="event.php"><span><?php echo($date['month']);?></span></a>
        </div>
        <div class="right-event">
          <h4><?php echo ($event[$i][2])?></h4>
          <p><i class="fas fa-map-marker-alt"></i><?php echo ($event[$i][3])?></p>
          <a href="event.php">More Info</a>
        </div>
     </div> 
     <?php
     }
        ?>
      <div class="sidebar-title">
         <h4>Advertisement </h4>
         <a href="#">Close</a>
        </div>
        <img src="images/course.jpg" class="sidebar-ads">

        <div class="sidebar-title">
         <h4>Conversation </h4>
         <a href="#">Hide Chat</a>
        </div>

        <div class="online-list">
         <div class="online">
             <img src="images/Alumni.jpg">
         </div>
         <p>Alison Mina</p>
        </div>
        
        <div class="online-list">
         <div class="online">
             <img src="images/Code-of-ethics.jpg">
         </div>
         <p>Jackson Aston</p>
        </div>
        <div class="online-list">
         <div class="online">
             <img src="images/photoo4.jpeg">
         </div>
         <p>Samona Rose</p>
        </div>

     </div>

        
    </div>



    <!--modal forms-->
    <!-- 1 status upload  modal forms-->
    <div id="storyForm" class="w3-modal" id="Contact-modal" role="dialog w3-row" >
        <div class="modal-dialog w3-container w3-white w3-col s6 w3-display-middle">
            <div class="modal-content">
                <div class="modal-header">
                    <span onclick="document.getElementById('storyForm').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
                    <h3>Upload to your Story</h3>
                </div>
                    <input type="hidden" name="action" value="create">
                    <input type="hidden" name="table_name" value="STORY">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name"></label>
                            <textarea name="TEXT" id="TEXT" cols="50" rows="5"> </textarea>
                        </div>
                        <div class="form-group">
                            <input type="file" name="IMAGE" id="IMAGE" class="form-control">
                            <button onclick='showEmojiModal("emoji-content","emojis","TEXT")'>
                                <img src="images/feeling.png">
                            </button>
                        </div>
                        <div id="emojis" class="w3-dropdown-content w3-bar-block w3-border" role="dialog w3-row" >
                                    <div id="emoji-content"></div>
                        </div>
                        <div class="moda-footer">
                            <input type="button" onclick='postStory()' class="w3-button w3-blue w3-right" id="submit" value="Post">
                        </div>
                    </div>
            </div>
        </div>
    </div>

    



<script src="assets/js/script.js"></script>

<!--to dropdown comments-->
<script>
    function commentFunction(postId) {
      var x = document.getElementById('id'+postId);
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        getCommentText(postId)
      } else { 
        x.className = x.className.replace(" w3-show", "");
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




    //ajax to send stories
    function postStory() {
            // predefined file types for validation
        var mime_types = [ 'image/jpeg', 'image/png' ];
        
        //var submit_button = document.querySelector('#submit_button');
            
        //submit_button.addEventListener('click', function() {
        
        // check if user has selected file OR not
        var selected_file = document.querySelector('#IMAGE');
        if(selected_file.files.length == 0) {
            //alert('Please select file to upload.');
            uploadText('NO IMAGE')
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
        form_data.append('image', document.querySelector('#IMAGE').files[0]);
        form_data.append('type', 'stories');
    
        var request = new XMLHttpRequest();
        request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        // Response
            var IMAGE = this.responseText;
            uploadText(IMAGE)
        }
        };
        request.open('post', '../upload/uploadFile.php'); 
    
        // send POST request to server
        request.send(form_data);

}

    function uploadText(IMAGE){
        TEXT = document.getElementById('TEXT').value
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "../CRUDR/DB.php", true); 
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Response
            var response = this.responseText;
            
                document.getElementById('storyForm').style.display='none'
                document.getElementById('TEXT').value = ''
                document.getElementById('IMAGE').value = ''

                alert('Story Updated');
            
        }else{
                console.log(response)
            }
        };
        var data = {action:'create',table_name:'STORIES',TEXT:TEXT,IMAGE:IMAGE,MEMBERID:<?php echo($_SESSION['user_id'])?>};
        xhttp.send(JSON.stringify(data))
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

    function uploadPostText(IMAGE){
        TEXT = document.getElementById('postText').value
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "../CRUDR/DB.php", true); 
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Response
            var response = this.responseText;
           
                alert('Post Updated');
                document.getElementById('postText').value = ''
                document.getElementById('photo').value=''
            
        }else{
                console.log(response)
            }
        };
        var data = {action:'create',table_name:'POST',TEXT:TEXT,IMAGE:IMAGE,MEMBERID:<?php echo($_SESSION['user_id'])?>};
        xhttp.send(JSON.stringify(data))
    }

    function getCommentText(postId){
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", "../CRUDR/DB.php?action=read&table_name=comments&postid="+postId, true); 
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Response
            var response = this.responseText;
            document.getElementById('comment-sectionid'+postId).innerHTML = response
            //document.write(response)
            
        }else{
                console.log(response)
            }
        };
        xhttp.send()
    }


    //ajax for comments
    function postCommentText(postId){
        textmsg = document.getElementById('comment_text'+postId).value
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "../CRUDR/DB.php", true); 
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Response
            var response = this.responseText;
            document.getElementById('comment_text'+postId).value = ''
            alert('Comment Updated');
            //alert(response);
            
        }else{
                console.log(response)
            }
        };
        var data = {
                action:'create',
                table_name:'comments',
                postid:postId,
                senderid:<?php echo($_SESSION['user_id'])?>,
                textMessage: textmsg
            };
        xhttp.send(JSON.stringify(data))
    }

   
</script>


<script src='assets/emojis.js'></script>
<script>
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

                             