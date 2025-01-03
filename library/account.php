<?php
	require_once 'connect.php';
	$qadmin = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = 1") or die(mysqli_error());
	$fadmin = $qadmin->fetch_array();
	$name = $fadmin['firstname']." ".$fadmin['lastname'];