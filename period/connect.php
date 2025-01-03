<?php

$con = mysqli_connect("localhost","root","","timetable");
$em="nothing";

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}

?>