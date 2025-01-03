<!DOCTYPE html>
<?php
	session_start();
	//require_once 'valid.php';

?>	
<html lang = "eng">
	<head>
		<title>Online Library</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/jquery.dataTables.css" />
		<link rel="stylesheet" href="../front/assets/css/w3.css">
        <link rel="stylesheet" href="../front/assets/css/st.css">
		<link rel="stylesheet" href="../front/assets/css/style.css">

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



		<div class = "container-fluid">
			<div class = "col-lg-2 well" style = "margin-top:60px;">
				<div class = "container-fluid" style = "word-wrap:break-word;">
					<img src = "images/user.png" width = "50px" height = "50px"/>
					<br />
					<br />
					<label class = "text-muted"><?php require'account.php'; echo $name;?></label>
				</div>
				<hr style = "border:1px dotted #d3d3d3;"/>
				<ul id = "menu" class = "nav menu">
					<li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "book.php"><i class = "glyphicon glyphicon-book"></i> Books</a></li>
				</ul>
			</div>
			<div class = "col-lg-1"></div>
			<div class = "col-lg-9 well" style = "margin-top:60px;">
				<div class = "alert alert-info">Book</div>
					<button id = "add_book" type = "button" class = "btn btn-primary"><span class = "glyphicon glyphicon-plus"></span> Add new</button>
					<button id = "show_book" type = "button" style = "display:none;" class = "btn btn-success"><span class = "glyphicon glyphicon-circle-arrow-left"></span> Back</button>
					<br />
					<br />
					<div id = "book_table">
						<table id = "table" class = "table table-bordered">
							<thead class = "alert-success">
								<tr>
									<th>Book Title</th>
									<th>Category</th>
									<th>Author</th>
									<th>Book</th>
									<th>Date Published</th>
									<th>Available</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$qbook = $conn->query("SELECT * FROM `book`");
									while($fbook = $qbook->fetch_array()){
										
								?>
								<tr>
									<td><?php echo $fbook['book_title']?></td>
									<td><?php echo $fbook['book_category']?></td>
									<td><?php echo $fbook['book_author']?></td>
									<td><?php echo $fbook['book']?></td>
									<td><?php echo date("m-d-Y", strtotime($fbook['date_publish']))?></td>
									<td><?php echo $fbook['qty']?></td>
									<td>
										<a class = "btn btn-danger delbook_id" value = "<?php echo $fbook['book_id']?>"><span class = "glyphicon glyphicon-remove"></span> Delete</a> 
										<a value = "<?php echo $fbook['book_id']?>" class = "btn btn-warning ebook_id"><span class = "glyphicon glyphicon-edit"></span> Edit</a> 
										<a value="<?php echo $fbook['book_id']?>"><button class="btn btn-primary"><span class="glyphicon glyphicon-download"></span> Download</button></a>

								</tr>
								<?php
									}
								?>
							</tbody>
							<img src="" alt="">
						</table>
					</div>
					<div id = "edit_form"></div>
					<div id = "book_form" style = "display:none;">
						<div class = "col-lg-3"></div>
						<div class = "col-lg-6">
							<form method = "POST" action = "save_book_query.php" enctype = "multipart/form-data">
								<div class = "form-group">
									<label>Book Title:</label>
									<input type = "text" name = "book_title" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Book Description:</label>
									<input type = "text" name = "book_desc" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Book Category:</label>
									<input type = "text" name = "book_category" class = "form-control" required = "required"/>
								</div>
								<div class = "form-group">
									<label>Book Author:</label>
									<input type = "text" name = "book_author" class = "form-control" required = "required" />
								</div>
								<div class = "form-group">
									<label>Date Published:</label>
									<input type = "date" name = "date_publish" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Quantity:</label>
									<input type = "number" min = "0" name = "qty" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Upload Book:</label>
									<input type = "file" min = "0" name = "" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<button name = "save_book" class = "btn btn-primary"><span class = "glyphicon glyphicon-save"></span> Submit</button>
								</div>
							</form>		
						</div>	
					</div>
			</div>
		</div>
		<br />
		<br />
		<br />
		
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/login.js"></script>
	<script src = "js/sidebar.js"></script>
	<script src = "js/jquery.dataTables.js"></script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('#table').DataTable();
		});
	</script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('#add_book').click(function(){
				$(this).hide();
				$('#show_book').show();
				$('#book_table').slideUp();
				$('#book_form').slideDown();
				$('#show_book').click(function(){
					$(this).hide();
					$('#add_book').show();
					$('#book_table').slideDown();
					$('#book_form').slideUp();
				});
			});
		});
	</script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$result = $('<center><label>Deleting...</label></center>');
			$('.delbook_id').click(function(){
				$book_id = $(this).attr('value');
				$(this).parents('td').empty().append($result);
				$('.delbook_id').attr('disabled', 'disabled');
				$('.ebook_id').attr('disabled', 'disabled');
				setTimeout(function(){
					window.location = 'delete_book.php?book_id=' + $book_id;
				}, 1000);
			});
			$('.ebook_id').click(function(){
				$book_id = $(this).attr('value');
				$('#show_book').show();
				$('#show_book').click(function(){
					$(this).hide();
					$('#edit_form').empty();
					$('#book_table').show();
					$('#book_admin').show();
				});
				$('#book_table').fadeOut();
				$('#add_book').hide();
				$('#edit_form').load('load_book.php?book_id=' + $book_id);
			});
		});
	</script>
</html>