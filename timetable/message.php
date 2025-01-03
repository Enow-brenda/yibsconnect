<?php
require 'connect.php';
if (isset($_POST['create'])){
    if(isset($_POST['level']) && isset($_POST['depcode']) && isset($_POST['session']) && isset($_POST['timedes'])){
        $level=$_POST['level'];
        $depcode=$_POST['depcode'];
        $session=$_POST['session'];
        $des=$_POST['timedes'];
        $query = "SELECT * FROM `data`";
        $result = mysqli_query($con, $query);
        while($row=$result->fetch_assoc()){
            if($level==$row['level'] && $depcode==$row['departmentcode'] && $session==$row['session']){
                $_SESSION['redundance']="Time table detail already exists";
			    header("location:create.php");
            }else{
                header("location:create_timetable.php");
            }
                
            
        }
    }
}
?>