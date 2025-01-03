
<?php
function search($key_word, $column, $table){
	include("db_connection.php");
	$sql = "SELECT * FROM post JOIN users ON post.MEMBERID=users.id WHERE `TEXT` LIKE '%$key_word%' ORDER BY post.created_at DESC";
		$result = $connection->query($sql); 
		$result = $result->fetch_all();
		return $result;
}


?>








