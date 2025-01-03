<style>
    .modal-content{
        width: 1090px;
        margin-left: -100px;
    }
</style>
<?php 
$student = $conn->query("SELECT * FROM students WHERE id=".$_GET['id'] )->fetch_array();
?>
    
    <center>
    <fieldset style="width:max-content;">
        <legend>Transcript: <?php echo $student['student_code'] ?></legend>
        <table  width="800px"  text-align="center" cellspacing="0">
            <tr align ="center">
                <td  border="1px solid black" cellspacing="1px"><font size="5px"><bold>Yaounde International Business School</bold></font></td> 
            </tr align ="center">
            <tr align ="center">
                <td><font size="5px"><img src="../assets/results/images/yibs_logo.png" width="150px"></font></td>
            </tr align ="center">
            <tr align ="center">
                <td><font size="5px">Official <bold>Transcript</bold></font></td>
            </tr>
        </table>
        <br>
        <table>
            <table width="700px" size="8px"cellspacing="0" text-align="center">
                <tr text-align="center">
                    <td><strong>Issued on:</strong><?php echo (date("M d, Y") )?></td>
                    <td><strong>Enrollment Trimester:</strong>Spring 2006</td>
                </tr>
                <tr text-align="center">
                    <td><strong>Student Name:</strong><b><?php echo ucwords($name) ?></td>
                    <td><strong>Gender:</strong><b><?php echo ucwords($gender) ?></td>
                </tr>
                <tr text-align="center">
                    <td><strong>Student ID:</strong> <?php echo $student_code ?></td>
                    <td><strong>Degree Objective:</strong><?php echo $student['class_id'] ?></td>
                </tr>
                <tr >
                    <td><strong>Date of Birth:</strong> <?php echo $student['dob'] ?></td>
                </tr>
            
           <table width="800px" cellspacing="0" text-align="center">
           
            <tr text-align="center">
                <td><strong>Semester</strong></td>
                <td><strong>Course ID</strong></td>
                <td><strong>Course Name</strong></td>
                <td><strong>Credit</strong></td>
                <td><strong>Grade</strong></td>
            </tr>
            <br><hr>
            <?php 
                $items=$conn->query("SELECT r.*,s.subject_code,s.subject FROM result_items r inner join subjects s on s.id = r.subject_id where result_id = $id  order by s.subject_code asc");
                while($row = $items->fetch_assoc()):
            ?>
             <tr>
                <td><strong>Spring 2006</strong></td>
            </tr>
                <tr text-align="center">
                <td></td>
                <td><?php echo ucwords($row['subject_code']) ?></td>
                <td><?php echo ucwords($row['subject']) ?></td>
                <td><?php echo number_format($row['mark']) ?></td>
                <td>
                    <?php
                        if (number_format($row['mark']) >=80 and number_format($row['mark']) <= 100 ) {
                            echo('A');
                        }else if (number_format($row['mark']) >=60 and number_format($row['mark']) < 80 ) {
                            echo('B');
                        }
                        else if (number_format($row['mark']) >=50 and number_format($row['mark']) < 60 ) {
                            echo('C');
                        }
                        else if (number_format($row['mark']) >=30 and number_format($row['mark']) < 50 ) {
                            echo('D');
                        }
                        else if (number_format($row['mark']) >=0 and number_format($row['mark']) < 30 ) {
                            echo('F');
                        }

                    ?>

                </td>
                 </tr>
            </tr>
            <?php endwhile; ?>
</table><br><br><br><br>

<table text-align="center" cellspacing="0" width="1000px" colspan="3px"><hr width="130px" align="left" border="5px solid black">
    <tr text-align="center">
        <th colspan="2">Average</th>
		<th class="text-center"><?php  echo number_format($marks_percentage,2) ?></th>
        <th colspan="2">GPA</th>
		<th class="text-center"><?php  echo number_format($marks_percentage/25,2) ?></th>
    </tr>
</table><br><br>

<table text-align="center" cellspacing="0" width="1000px" colspan="1px">
    <tr>
        <td>HOD:</td>
        <td>Dean of studies:</td>
        <td>Registra:</td>
    </tr>
    
</table>
<br><br>
<br><br>
<br><br>
<table>
<tr text-align="center" style="text-align:center; margin-top:40px">
        <td></td>
        <td>
        Address:YIBS Simbock  <br>
        Phone:690909090 <br>
        Fax:880-2-9125916 <br>
        Web:https://yibs.org</td>  
        <td></td>
    </tr>
</table>


         
        </fieldset>
    </center>