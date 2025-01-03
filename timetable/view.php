<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="drag.js" defer></script>
    <style>
        .course_list > .subjectDrag{
            width: 80%;
            background-color: #ff7b007d;
            border: 1px solid rgb(62 69 168);
            border-radius: 5px;
            margin: 4px;
            padding: 5px;
        }a{
            text-decoration: none;
            color:white;
            background-color: rgb(220,53,69);
            font-size: 20px;
            padding:10px;
            border-radius: 10px;
            font-family: monospace;
            float:right;
            margin-right: 100px;
        }
    </style>
    
</head>
<body>
        <div class="content">
       
           <center> <h1>View Timetable
            <a href="home.php" class="btn btn-danger float-end">BACK</a>
        </h1></center>
            <div class="tab" id="table" style="width:80%;margin-left: 15%">
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
                    <?php
                    require 'connect.php';
                        if(isset($_GET['id']))
                        {
                            $timetable_id = mysqli_real_escape_string($con, $_GET['id']);
                              
                        ?>
                   <tr>
                        
                        <td class="" style="background-color: rgb(119, 122, 167);"><b>8:00 - 10:00</b></td>
                        
                        <td id="1" class="subject box"     style="background-color: rgb(116, 219, 240);">
                        <?php
                        $query = "SELECT * FROM `time table data` WHERE `timetable id`=$timetable_id && periodid=1";
                        $result = mysqli_query($con, $query);
                        while($row=$result->fetch_assoc()){
                            echo $row['coursename'];
                         }
                        
                         ?>
                        </td>
                        <td id="4" class="subject box" style="background-color: rgb(94, 249, 223);">
                        <?php
                        $query = "SELECT * FROM `time table data` WHERE `timetable id`=$timetable_id && periodid=4";
                        $result = mysqli_query($con, $query);
                        while($row=$result->fetch_assoc()){
                            echo $row['coursename'];
                         }
                        
                         ?>
                            
                        </td>
                        
                        <td id="7" class="subject box" style="background-color:rgb(248, 181, 157);">
                        <?php
                        $query = "SELECT * FROM `time table data` WHERE `timetable id`=$timetable_id && periodid=7";
                        $result = mysqli_query($con, $query);
                        while($row=$result->fetch_assoc()){
                            echo $row['coursename'];
                         }
                        
                         ?>
                        </td>
                        <td id="10" class="subject box" style="background-color:rgb(239, 239, 125);">
                        <?php
                        $query = "SELECT * FROM `time table data` WHERE `timetable id`=$timetable_id && periodid=10";
                        $result = mysqli_query($con, $query);
                        while($row=$result->fetch_assoc()){
                            echo $row['coursename'];
                         }
                        
                         ?>
                        </td>
                        <td id="13" class="subject box" style="background-color:rgb(221, 191, 247);">
                        <?php
                        $query = "SELECT * FROM `time table data` WHERE `timetable id`=$timetable_id && periodid=13";
                        $result = mysqli_query($con, $query);
                        while($row=$result->fetch_assoc()){
                            echo $row['coursename'];
                         }
                        
                         ?>
                        </td>
                        <td id="16" class="subject box" style="background-color:rgb(210, 193, 243);">
                        <?php
                        $query = "SELECT * FROM `time table data` WHERE `timetable id`=$timetable_id && periodid=16";
                        $result = mysqli_query($con, $query);
                        while($row=$result->fetch_assoc()){
                            echo $row['coursename'];
                         }
                        
                         ?>
                        </td>
                    </tr>
                    <tr>
                       
                        <td  class="" style="background-color: rgb(119, 122, 167);"> <b>10:00 - 12:00</b> </td>
                        <td id="2" class="subject box" style="background-color: rgb(149, 146, 146);" >
                        <?php
                        $query = "SELECT * FROM `time table data` WHERE `timetable id`=$timetable_id && periodid=2";
                        $result = mysqli_query($con, $query);
                        while($row=$result->fetch_assoc()){
                            echo $row['coursename'];
                         }
                        
                         ?>
                        </td>
                        <td id="5" class="subject box" style="background-color: rgb(240, 186, 230);" >
                        <?php
                        $query = "SELECT * FROM `time table data` WHERE `timetable id`=$timetable_id && periodid=5";
                        $result = mysqli_query($con, $query);
                        while($row=$result->fetch_assoc()){
                            echo $row['coursename'];
                         }
                        
                         ?>
                        </td>
                        <td id="8" class="subject box" style="background-color:rgb(240, 205, 118);" >
                        <?php
                        $query = "SELECT * FROM `time table data` WHERE `timetable id`=$timetable_id && periodid=8";
                        $result = mysqli_query($con, $query);
                        while($row=$result->fetch_assoc()){
                            echo $row['coursename'];
                         }
                        
                         ?>
                        </td>
                        <td id="11" class="subject box" style="background-color:bisque;" >
                        <?php
                        $query = "SELECT * FROM `time table data` WHERE `timetable id`=$timetable_id && periodid=11";
                        $result = mysqli_query($con, $query);
                        while($row=$result->fetch_assoc()){
                            echo $row['coursename'];
                         }
                        
                         ?>
                        </td>
                        <td id="14" class="subject box" style="background-color:rgb(156, 235, 156)" >
                        <?php
                        $query = "SELECT * FROM `time table data` WHERE `timetable id`=$timetable_id && periodid=14";
                        $result = mysqli_query($con, $query);
                        while($row=$result->fetch_assoc()){
                            echo $row['coursename'];
                         }
                        
                         ?>
                        </td>
                        <td id="17" class="subject box" style="background-color: rgb(149, 146, 146);" >
                        <?php
                        $query = "SELECT * FROM `time table data` WHERE `timetable id`=$timetable_id && periodid=17";
                        $result = mysqli_query($con, $query);
                        while($row=$result->fetch_assoc()){
                            echo $row['coursename'];
                         }
                        
                         ?>
                        </td>        
                    </tr>       
                    <tr>
                        
                        <td  class="" style="background-color: rgb(119, 122, 167);"> <b>12:00 - 1:00</b> </td>
                        <td  class="" style="background-color: rgb(159, 159, 133);">Break</td>
                        <td  class="" style="background-color: rgb(159, 159, 133);">Break</td>
                        <td  class="" style="background-color: rgb(159, 159, 133);">Break</td>
                        <td  class="" style="background-color: rgb(159, 159, 133);">Break</td>
                        <td  class="" style="background-color: rgb(159, 159, 133);">Break</td>
                        <td  class="" style="background-color: rgb(159, 159, 133);">Break</td>
                    </tr>
                    <tr>
                        
                        <td  class="" style="background-color: rgb(119, 122, 167);"><b>1:00 - 3:00</b></td>
                        <td id="3" class="subject box" style="background-color:rgb(240, 122, 145);">
                        <?php
                        $query = "SELECT * FROM `time table data` WHERE `timetable id`=$timetable_id && periodid=3";
                        $result = mysqli_query($con, $query);
                        while($row=$result->fetch_assoc()){
                            echo $row['coursename'];
                         }
                        
                         ?>
                        </td>
                        <td id="6" class="subject box" style="background-color:rgb(240, 143, 240);">
                        <?php
                        $query = "SELECT * FROM `time table data` WHERE `timetable id`=$timetable_id && periodid=6";
                        $result = mysqli_query($con, $query);
                        while($row=$result->fetch_assoc()){
                            echo $row['coursename'];
                         }
                        
                         ?> 
                        </td>
                        <td id="9" class="subject box" style="background-color:rgb(247, 174, 122);">
                        <?php
                        $query = "SELECT * FROM `time table data` WHERE `timetable id`=$timetable_id && periodid=9";
                        $result = mysqli_query($con, $query);
                        while($row=$result->fetch_assoc()){
                            echo $row['coursename'];
                         }
                        
                         ?>
                        </td>
                        <td id="12" class="subject box" style="background-color:rgb(218, 248, 159);">
                        <?php
                        $query = "SELECT * FROM `time table data` WHERE `timetable id`=$timetable_id && periodid=12";
                        $result = mysqli_query($con, $query);
                        while($row=$result->fetch_assoc()){
                            echo $row['coursename'];
                         }
                        
                         ?>
                        </td>
                        <td id="15" class="subject box" style="background-color:rgb(247, 133, 133);">
                        <?php
                        $query = "SELECT * FROM `time table data` WHERE `timetable id`=$timetable_id && periodid=15";
                        $result = mysqli_query($con, $query);
                        while($row=$result->fetch_assoc()){
                            echo $row['coursename'];
                         }
                        
                         ?>
                        </td>
                        <td id="18" class="subject box" style="background-color:rgb(149, 146, 146);">
                        <?php
                        $query = "SELECT * FROM `time table data` WHERE `timetable id`=$timetable_id && periodid=18";
                        $result = mysqli_query($con, $query);
                        while($row=$result->fetch_assoc()){
                            echo $row['coursename'];
                         }
                        }
                        
                         ?>
                        </td> 
                    </tr>
                </table>
            </div>
        </div>
        </div>
    

        

        
    </body>
</html>
    