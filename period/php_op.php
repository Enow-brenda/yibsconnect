<?php
require 'connect.php';
if(isset($_POST['create'])){
    if(isset($_POST['start']) && isset($_POST['end']) && isset($_POST['des'])){
        $start=$_POST['start'];
        $end=$_POST['end'];
        $des=$_POST['des'];
        $com=$start." - ".$end;
        $sql="INSERT INTO  `period`(`start time`,`end time`,`description`,`Time-range`) VALUES('$start','$end','$des','$com')";
         $query=mysqli_query($con,$sql);
         header("Location: home.php");
    }
}if(isset($_POST['delete'])){
    $id=$_POST['delete'];
    $sql="DELETE FROM `period` WHERE `id`=$id";
    $query=mysqli_query($con,$sql);
    header("Location: home.php");
}if(isset($_POST['update'])){
    if(isset($_POST['id']) ){
        $id=$_POST['id'];
        $start=$_POST['start'];
        $end=$_POST['end'];
        $des=$_POST['des'];
        $com=$start." - ".$end;
        $sql="UPDATE `period` SET `start time`='$start',`end time`='$end',`description`='$des',`Time-range`='$com' WHERE `id`='$id'";
        $query=mysqli_query($con,$sql);
         header("Location: home.php");
    }
}
?>