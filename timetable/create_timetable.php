<?php
session_start();
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
                $error="Data already exist";
			    header("location:create.php?error=$error");
            }
        }
      
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timetable</title>
    <link rel="stylesheet" href="assets/style.css">
    <script src="assets/drag.js" defer></script>
    <style>
        .course_list > .subjectDrag{
            width: 80%;
            background-color: #ff7b007d;
            border: 1px solid rgb(62 69 168);
            border-radius: 5px;
            margin: 4px;
            padding: 5px;
        }
    </style>
</head>
<body>  
        <div class="content">
            <h1> MY SCHOOL TIME TABLE </h1>
            <div class="subject course_list" style="width:20%; float: left;">
                <h2>
                    <mark>List of courses</mark>
                </h2>
                <?php 
                 $result=$con->query("SELECT * FROM course where depcode='$depcode'&& level='$level'") or die($sqli->error);
                 while($row=$result->fetch_assoc()){
                 ?>
                    <div class="subjectDrag" draggable="true">
                        <?php echo $row['description']?>
                    </div>
                    <?php }?>
                   
            </div>
            
            <div class="tab" id="table" style="width:80%;float:left">
                <table  border="0"
                    cellspacing=""
                    cellpadding="25px">
                    <tr>
                        <th class="day" style="background-color: rgb(111, 123, 252);">HOURS</th>
                        <th class="day" style="background-color: rgb(111, 123, 252);">MONDAY</th>
                        <th class="day" style="background-color: rgb(111, 123, 252);">TUESDAY</th>
                        <th class="day" style="background-color: rgb(111, 123, 252);">WEDNESDAY</th>
                        <th class="day" style="background-color: rgb(111, 123, 252);">THURSDAY</th>
                        <th class="day" style="background-color: rgb(111, 123, 252);">FRIDAY</th>
                        <th class="day" style="background-color: rgb(111, 123, 252);">SATURDAY</th>      
                    </tr>
                    <tr>
                    <?php 
                        $result=$con->query("SELECT `Time-range` FROM period ") or die($sqli->error);
                        $i=1;
                        while($row=$result->fetch_array()){
                            $arr[]= $row;
                        }
                 ?>
                    <td class="subject box"  id="p1" style="background-color: rgb(119, 122, 167);"><b>08:00 - 10:00</b></td>
                    
                    
                        
                        <td id="1" class="subject box"     style="background-color: rgb(116, 219, 240);">
                            
                        </td>
                        <td id="4" class="subject box" style="background-color: rgb(94, 249, 223);">
                            
                        </td>
                        
                        <td id="7" class="subject box" style="background-color:rgb(248, 181, 157);">
                            
                        </td>
                        <td id="10" class="subject box" style="background-color:rgb(239, 239, 125);">
                            
                        </td>
                        <td id="13" class="subject box" style="background-color:rgb(221, 191, 247);">
                        </td>
                        <td id="16" class="subject box" style="background-color:rgb(210, 193, 243);">
                        </td>
                    </tr>
                    <tr>
                       
                        <td  class="subject box"  id="p2"style="background-color: rgb(119, 122, 167);"> <b>10:00 - 12:00</b> </td>
                        <td id="2" class="subject box" style="background-color: rgb(149, 146, 146);" >
                        </td>
                        <td id="5" class="subject box" style="background-color: rgb(240, 186, 230);" >
                            
                        </td>
                        <td id="8" class="subject box" style="background-color:rgb(240, 205, 118);" >
                            
                        </td>
                        <td id="11" class="subject box" style="background-color:bisque;" >
                            
                        </td>
                        <td id="14" class="subject box" style="background-color:rgb(156, 235, 156)" >
                            
                        </td>
                        <td id="17" class="subject box" style="background-color: rgb(149, 146, 146);" >
                            
                        </td>        
                    </tr>       
                    <tr>
                        
                        <td  class="subject box" id="p3" style="background-color: rgb(119, 122, 167);"> <b>12:00 - 13:00</b> </td>
                        <td  class="" style="background-color: rgb(159, 159, 133);">Break</td>
                        <td  class="" style="background-color: rgb(159, 159, 133);">Break</td>
                        <td  class="" style="background-color: rgb(159, 159, 133);">Break</td>
                        <td  class="" style="background-color: rgb(159, 159, 133);">Break</td>
                        <td  class="" style="background-color: rgb(159, 159, 133);">Break</td>
                        <td  class="" style="background-color: rgb(159, 159, 133);">Break</td>
                    </tr>
                    <tr>
                        
                        <td  class="subject box" id="p4" style="background-color: rgb(119, 122, 167);"><b>13:00 - 15:00</b></td>
                        <td id="3" class="subject box" style="background-color:rgb(240, 122, 145);">
                            
                        </td>
                        <td id="6" class="subject box" style="background-color:rgb(240, 143, 240);">
                            
                        </td>
                        <td id="9" class="subject box" style="background-color:rgb(247, 174, 122);">
                            
                        </td>
                        <td id="12" class="subject box" style="background-color:rgb(218, 248, 159);">
                    
                        </td>
                        <td id="15" class="subject box" style="background-color:rgb(247, 133, 133);">
                            
                        </td>
                        <td id="18" class="subject box" style="background-color:rgb(149, 146, 146);">
                            
                        </td> 
                    </tr>
                    
                    
                </table>
                
            </div>
        </div>
        </div>
      

        <form action="php_op.php" method="post" id="timTableForm">
            <input type="hidden" name="level" value="<?php echo $level?>">
            <input type="hidden" name="depcode" value="<?php echo $depcode?>">
            <input type="hidden" name="session" value="<?php echo $session?>">
            <input type="hidden" name="timedes" value="<?php echo $des?>">
            <input type="hidden" id="1" name="period1">
            <input type="hidden" id="2" name="period2">
            <input type="hidden" id="3" name="period3">
            <input type="hidden" id="4" name="period4">
            <input type="hidden" id="period1" name="1">
            <input type="hidden" id="period2" name="2">
            <input type="hidden" id="period3" name="3">
            <input type="hidden" id="period4" name="4">
            <input type="hidden" id="period5" name="5">
            <input type="hidden" id="period6" name="6">
            <input type="hidden" id="period7" name="7">
            <input type="hidden" id="period8" name="8">
            <input type="hidden" id="period9" name="9">
            <input type="hidden" id="period10" name="10">
            <input type="hidden" id="period11" name="11">
            <input type="hidden" id="period12" name="12">
            <input type="hidden" id="period13" name="13">
            <input type="hidden" id="period14" name="14">
            <input type="hidden" id="period15" name="15">
            <input type="hidden" id="period16" name="16">
            <input type="hidden" id="period17" name="17">
            <input type="hidden" id="period18" name="18">
            <input type="submit" value="Save" onclick="saveTimeTable()" name="save" class="b" >
        </form>

        <script>
            
            function saveTimeTable() {
                var count=1;
                for(count=1;count<19;count++){
                var rem=document.getElementById(count).innerText;
                if(rem==""){
                    document.getElementById("period"+count).value="Free Period";  
                }else{
              document.getElementById("period"+count).value=rem;
                }

                } 
                
            }

            
                
            </script>
    </body>
</html>
    