<?php

require 'connect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Create Period</title>
    <style>
        select{
            margin-right: 30px;
        }#alert{
            width:100%;
            background:#dc3545;
            color:white;
            padding:10px;
            margin-bottom: 10px;
            
}
    
    </style>
</head>
<body>
  
    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Update Period Details
                            <a href="home.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                   
                    <div class="card-body">
                    <?php if(isset($_GET["error"])){?>
                             <div id="alert"><?php echo $_GET["error"]?></div>
                    <?php }?>
                    <?php
                    if(isset($_GET['id']))
                {
                    $period_id = mysqli_real_escape_string($con, $_GET['id']);
                    $result=$con->query("SELECT * FROM `period` where id=$period_id") or die($sqli->error);
                      $row=$result->fetch_assoc() ;
                      $start=$row['start time'];  
                      $end= $row['end time'];
                      $des=$row['description']; 
                }
                ?>
                        <form action="php_op.php" method="POST">
                            <div class="mb-3">
                            <label>Start Time</label>
                            <input type="time"  name="start" value="<?php echo $start?>"required>
                            </div>
                            <div class="mb-3">
                            <label>End Time:</label>
                            <input type ="time" name="end" value="<?php echo $end?>" required><br>
                            </div>
                            <div class="mb-3">
                            <label>Description:</label><br>
                            <input type ="text" name="des" class="form-control" value="<?php echo $des?>" required><br>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $period_id?>">
                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary" name="update" value="Update Period">
                            </div>
                           
                            </form><br><br>
                            

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
