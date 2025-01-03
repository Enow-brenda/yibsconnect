<?php
include 'db_connect.php';
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * FROM domain where id={$_GET['id']}")->fetch_array();
	foreach($qry as $k => $v){
		$$k = $v;
	}
}
?>
<div class="container-fluid">
	<form action="" id="manage-dep">
		<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
		<div id="msg" class="form-group"></div>
		<div class="form-group">
			<label for="level" class="control-label">Department Name</label>
			<input type="text" class="form-control form-control-sm" name="depname" id="depname" value="<?php echo isset($depname) ? $depname : '' ?>">
		</div>
		<div class="form-group">
			<label for="section" class="control-label">Description</label>
			<input type="text" class="form-control form-control-sm" name="des" id="des" value="<?php echo isset($des) ? $des : '' ?>">
		</div>
	</form>
</div>
<script>
	$(document).ready(function(){
		$('#manage-dep').submit(function(e){
			e.preventDefault();
			start_load()
			$('#msg').html('')
			$.ajax({
				url:'ajax.php?action=save_dep',
				method:'POST',
				data:$(this).serialize(),
				success:function(resp){
					console.log(resp)
					if(resp == 1){
						alert_toast("Data successfully saved.","success");
						setTimeout(function(){
							location.reload()	
						},1750)
					}else if(resp == 2){
						$('#msg').html('<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Class already exist.</div>')
						end_load()
					}
				}
			})
		})
	})

</script>