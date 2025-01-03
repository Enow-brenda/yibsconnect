<?php
	$conn = new mysqli('localhost', 'root', '', 'yibs_connect') or die(mysqli_error());
	if(!$conn){
		die("Fatal Error: Connection Failed!");
	}