<?php
include 'db_connect.php';
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * FROM subjects where id={$_GET['id']}")->fetch_array();
	foreach($qry as $k => $v){
		$$k = $v;
	}
}
?>
<div class="container-fluid">
	<form action="" id="manage-subject">
		<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
		<div id="msg" class="form-group"></div>
		<div class="form-group">
			<label for="code" class="control-label">Course Code</label>
			<input type="text" class="form-control form-control-sm" name="subject_code" id="subject_code" value="<?php echo isset($subject_code) ? $subject_code : '' ?>">
		</div>
		<div class="form-group">
			<label for="subject" class="control-label">Course Name</label>
			<input type="text" class="form-control form-control-sm" name="subject" id="subject" value="<?php echo isset($subject) ? $subject : '' ?>">
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
                  <label for="" class="control-label">Lecturer</label>
                  <select name="class_id" id="" class="form-control select2 select2-sm" required>
                    <option></option> 
                    <?php 
        
                          $classes = $conn->query("SELECT * FROM lecturer order by id  asc ");
                          while($row = $classes->fetch_array()):
                    ?>
                          <option value="<?php echo $row['id'] ?>" <?php echo isset($class_id) && $class_id == $row['id'] ? "selected" : '' ?>><?php echo ucwords($row['level'].'-'.$row['section']) ?></option>
                    <?php endwhile; ?>
                  </select>
                </div>
              </div>
		</div>
		<div class="form-group">
			<label for="description" class="control-label">Description</label>
			<textarea name="description" id="description" cols="30" rows="4" class="form-control"><?php echo isset($description) ? $description : '' ?></textarea>
		</div>
	</form>
</div>
<script>
	$(document).ready(function(){
		$('#manage-subject').submit(function(e){
			e.preventDefault();
			start_load()
			$.ajax({
				url:'ajax.php?action=save_subject',
				method:'POST',
				data:$(this).serialize(),
				success:function(resp){
					if(resp == 1){
						alert_toast("Data successfully saved.","success");
						setTimeout(function(){
							location.reload()	
						},1750)
					}else if(resp == 2){
						$('#msg').html('<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Subject Code already exist.</div>')
						end_load()
					}
				}
			})
		})
	})

</script>