<?php
include 'db_connect.php';
$qry = $conn->query("SELECT r.*,concat(s.firstname,' ',s.middlename,' ',s.lastname) as name,s.student_code,concat(c.level,'-',c.section) as class,s.gender FROM results r inner join classes c on c.id = r.class_id inner join students s on s.id = r.student_id where r.id = ".$_GET['id'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
?>
<div class="container-fluid" id="printable">
	<?php include_once('transcript.php');?>
</div>
<div class="modal-footer display p-0 m-0">
        <button type="button" class="btn btn-success" id="print"><i class="fa fa-print"></i> Print</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
<style>
	#uni_modal .modal-footer{
		display: none
	}
	#uni_modal .modal-footer.display{
		display: flex
	}
</style>
<noscript>
	<style>
		table.table{
			width:100%;
			border-collapse: collapse;
		}
		table.table tr,table.table th, table.table td{
			border:1px solid;
		}
		.text-cnter{
			text-align: center;
		}
	</style>
</noscript>
<script>
	$('#print').click(function(){
		start_load()
		var ns = $('noscript').clone()
		var content = $('#printable').clone()
		ns.append(content)
		var nw = window.open('','','height=700,width=900')
		nw.document.write(ns.html())
		nw.document.close()
		nw.print()
		setTimeout(function(){
			nw.close()
			end_load()
		},750)

	})
</script>