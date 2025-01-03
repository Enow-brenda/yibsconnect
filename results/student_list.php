<?php include'db_connect.php' ?>
<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-header">
			<div class="card-tools">
				<a class="btn btn-block btn-sm btn-default btn-flat border-primary " href="./index.php?page=new_student"><i class="fa fa-plus"></i> Add New</a>
			</div>
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-bordered" id="list">
				<colgroup>
					<col width="5%">
					<col width="15%">
					<col width="25%">
					<col width="25%">
					<col width="15%">
				</colgroup>
				<thead>
					<tr>
						<th>Photo</th>
						<th>Name</th>
						<th>Phone</th>
						<th>Department</th>
						<th>Campus</th>
						<th>Session</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					$qry = $conn->query("SELECT s.*,concat(c.level,'-',c.section) as class,concat(firstname,' ',middlename,' ',lastname) as name FROM students s inner join classes c on c.id = s.class_id order by concat(firstname,' ',middlename,' ',lastname) asc  ");
					while($row= $qry->fetch_assoc()):
					?>
					<tr>
						<td style="width:80px">
							<a href="../upload/uploads/photos/students/<?php echo ($row['photo'])?>" target="__blank">
								<img style='width:100%' src="../upload/uploads/photos/students/<?php echo ($row['photo'])?>" alt="<?php echo ucwords($row['name']) ?>">
							</a>
						</td>
						<td><b><?php echo ucwords($row['name']) ?></b></td>
						<td><b><?php echo ucwords($row['phone']) ?></b></td>
						<td><b><?php echo ucwords($row['class']) ?></b></td>
						<td><b><?php echo ucwords($row['campus']) ?></b></td>
						<td><b><?php echo ucwords($row['session']) ?></b></td>
						<td class="text-center">
		                    <div class="btn-group">
		                        <a href="index.php?page=edit_student&id=<?php echo $row['id'] ?>" class="btn btn-primary btn-flat ">
		                          <i class="fas fa-edit"></i>
		                        </a>
		                        <button type="button" class="btn btn-danger btn-flat delete_student" data-id="<?php echo $row['id'] ?>">
		                          <i class="fas fa-trash"></i>
		                        </button>
	                      </div>
						</td>
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<style>
	table td{
		vertical-align: middle !important;
	}
</style>
<script>
	$(document).ready(function(){
		$('#list').dataTable()
		$('.view_student').click(function(){
			uni_modal("Student's Details","view_student.php?id="+$(this).attr('data-id'),"large")
		})
	$('.delete_student').click(function(){
	_conf("Are you sure to delete this Student?","delete_student",[$(this).attr('data-id')])
	})
	})
	function delete_student($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_student',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>