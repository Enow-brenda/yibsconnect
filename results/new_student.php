

<?php if(!isset($conn)){ include 'db_connect.php'; } ?>

<div class="col-lg-12">
  <div class="form-group text-dark">
      <button type="button" class="btn btn-primary" id='uploadPhoto' class="modal-dialog w3-container w3-white w3-col s6 w3-display-middle">Upload Photo</button>
  </div>
  <?php if(isset($_POST['image_encoding'])){ ?>
    <div class="card card-outline card-primary">
      <div class="card-body">
      
        <form action="" id="manage-student">
          <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
          <div class="row">
            <div class="col-md-6">
              <div id="msg" class=""></div>
              <div class="form-group text-dark">
                <div class="form-group">
                  <label for="" class="control-label">First Name</label>
                  <input type="text" class="form-control form-control-sm" name="firstname" value="<?php echo isset($firstname) ? $firstname : '' ?>" required>
                </div>
              </div>
              <div class="form-group text-dark">
                <div class="form-group">
                  <label for="" class="control-label">Middle Name</label>
                  <input type="text" class="form-control form-control-sm" name="middlename" value="<?php echo isset($middlename) ? $middlename : '' ?>">
                </div>
              </div>
              <div class="form-group text-dark">
                <div class="form-group">
                  <label for="" class="control-label">Last Name</label>
                  <input type="text" class="form-control form-control-sm" name="lastname" value="<?php echo isset($lastname) ? $lastname : '' ?>" required>
                </div>
              </div>
              <div class="form-group text-dark">
                <div class="form-group">
                  <label for="" class="control-label">Email</label>
                  <input type="email" class="form-control form-control-sm" name="email" value="<?php echo isset($email) ? $email : '' ?>" required>
                </div>
              </div>
              <div class="form-group text-dark">
                <div class="form-group">
                  <label for="" class="control-label">Phone</label>
                  <input type="phone" class="form-control form-control-sm" name="phone" value="<?php echo isset($phone) ? $phone : '' ?>" required>
                </div>
              </div>
              <div class="form-group text-dark">
                <div class="form-group">
                  <label for="" class="control-label">Student Pass</label>
                  <input type="text" class="form-control form-control-sm" name="student_password" value="<?php echo isset($student_password) ? $student_password : '' ?>" required>
                </div>
                <div class="form-group text-dark">
                
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="" class="control-label">Gender</label>
                <select name="gender" id="" class="custom-select custom-select-sm" required>
                  <option>Female</option>
                  <option>Male</option>
                </select>
              </div>
              
              <div class="form-group text-dark">
                <div class="form-group">
                  <label for="" class="control-label">Class</label>
                  <select name="class_id" id="" class="form-control select2 select2-sm" required>
                    <option></option> 
                    <?php 
        
                          $classes = $conn->query("SELECT * FROM classes order by level asc,section asc ");
                          while($row = $classes->fetch_array()):
                    ?>
                          <option value="<?php echo $row['id'] ?>" <?php echo isset($class_id) && $class_id == $row['id'] ? "selected" : '' ?>><?php echo ucwords($row['level'].'-'.$row['section']) ?></option>
                    <?php endwhile; ?>
                  </select>
                </div>
              </div>
              <div class="form-group text-dark">
                <div class="form-group">
                  <label for="" class="control-label">Campus</label>
                  <select name="campus" id="" class="form-control select2 select2-sm" required>
                    <option value="A">A</option> 
                    <option value="B">B</option> 
                  </select>
                  </select>
                </div>
              </div>
              <div class="form-group text-dark">
                <div class="form-group">
                  <label for="" class="control-label">Session</label>
                  <select name="session" id="" class="form-control select2 select2-sm" required>
                    <option value="DAY">Day</option> 
                    <option value="EVENING">Evening</option> 
                  </select>
                </div>
              </div>
              <div class="form-group text-dark">
                <div class="form-group">
                  <label for="" class="control-label">Photo</label>
                  <input type="file" class="form-control form-control-sm" id="photoToBeUploaded" name="image" value="<?php echo isset($photo) ? $photo : '' ?> <?php echo isset($_POST['photo']) ? $_POST['photo']: '' ?>" required accept="image/*" >
                  <input type="hidden" name="type" value="photos\students">
                </div>
              </div>
              <div class="form-group text-dark">
                <div class="form-group">
                  <label for="" class="control-label">Address</label>
                  <textarea name="address" id="address" cols="30" rows="2" class="form-control"><?php echo isset($address) ? $address : '' ?></textarea>
                  <input type='text' name="image_encoding" id="photoEncoding" class="form-control" value="<?php echo isset($_POST['image_encoding']) ? $_POST['image_encoding']: '' ?> "/>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="card-footer border-top border-info">
        <div class="d-flex w-100 justify-content-center align-items-center">
          <button class="btn btn-flat  bg-gradient-primary mx-2" form="manage-student">Save</button>
          <a class="btn btn-flat bg-gradient-secondary mx-2" href="./index.php?page=student_list">Cancel</a>
        </div>
      </div>
    </div>
  <?php } ?>
</div>


<script>
//Ajax script to collect image encoding
function getPhotoEncoding(){
        photoFile = document.getElementById('photo')
        let formData = new FormData()
        formData.append("file",photoFile)
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "http://127.0.0.1:3000/getFaces", true); 
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Response
            var response = this.responseText;
            alert(response)
            document.getElementById('photoEncoding').value = response
            document.getElementById('photoToBeUploaded').value = photoFile
            
        }else{
                console.log(response)
            }
        };
        var data = {
                photo: photoFile
            };
        xhttp.send(formData)
} 
// Get the button that opens the modal
var btn = document.getElementById("uploadPhoto");

// When the user clicks the button, open the modal 
btn.onclick = function() {
  const myWin = window.location.assign('getEncodings.php');
  
}

	$('#manage-student').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_student',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
        console.log(resp);
				if(resp == 1){
					alert_toast('Data successfully saved',"success");
					setTimeout(function(){
              location.href = 'index.php?page=student_list'
					},2000)
				}else if(resp == 2){
          $('#msg').html('<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Student Code already exist.</div>')
          end_load()
        }
			},
      error: function (error)
      {
      // error alert message
      console.log(error);
      }
		})
	})
  function displayImgCover(input,_this) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
            $('#cover').attr('src', e.target.result);
          }

          reader.readAsDataURL(input.files[0]);
      }
  }


</script>