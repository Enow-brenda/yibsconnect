<?php
   require 'connect.php';
   
if(isset($_POST['save'])){
    if(isset($_POST['level']) && isset($_POST['depcode']) && isset($_POST['session']) && isset($_POST['timedes'])){
        $level=$_POST['level'];
        $depcode=$_POST['depcode'];
        $session=$_POST['session'];
        $des=$_POST['timedes'];
        $sql="INSERT INTO `data`(`level`,`departmentcode`,`session`,`description`) VALUES('$level','$depcode','$session','$des')";
        $query=mysqli_query($con,$sql);
        $result=$con->query("SELECT id FROM data WHERE level='$level' && departmentcode='$depcode' && session='$session' && description='$des'") or die($sqli->error);
        $row=$result->fetch_assoc();
        $id=$row['id'];
        
        for($i=1;$i<=18;$i++){ 
         $subject=$_POST[$i];
            $sql="INSERT INTO `time table data`(`coursename`,`periodid`,`timetable id`) VALUES('$subject','$i','$id')";
            $query=mysqli_query($con,$sql);
            header("Location: home.php");
        
            
    }
}
}if(isset($_POST['delete'])){
    $id=$_POST['delete'];
    $sql="DELETE FROM `time table data` WHERE `timetable id`=$id";
    $query=mysqli_query($con,$sql);
    $dem="DELETE FROM `data` WHERE id=$id";
    $result=mysqli_query($con,$dem);
    header("Location: home.php");


}if(isset($_POST['update'])){
    if(isset($_POST['id']) ){
        $id=$_POST['id'];
        for($i=1;$i<=18;$i++){ 
            $subject=$_POST[$i];
            echo $subject;
               $sql="UPDATE `time table data` SET coursename='$subject',periodid='$i' WHERE `timetable id`=$id && periodid=$i";
               $query=mysqli_query($con,$sql);
               header("Location: home.php");
 
 
        }
    }
}else{
    echo 'bad';
}
?>
