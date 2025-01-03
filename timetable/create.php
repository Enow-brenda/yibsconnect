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

    <title>Create Timetable</title>
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
                        <h4>Add Timetable Details
                            <a href="home.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                   
                    <div class="card-body">
                    <?php if(isset($_GET["error"])){?>
                             <div id="alert"><?php echo $_GET["error"]?></div>
                    <?php }?>
                        <form action="create_timetable.php" method="POST">
                            <input type="hidden" name="action" value="create">
                            <input type="hidden" name="table_name" value="attendance">

    
                            
                            <form action="select">
                                <div>
                            <label for="level">Level:</label>
                            <select name="level"  id="level">
                                <option  value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                               
                            </select>
                            <label for="depcode">Department code:</label>
                           
                            <select name="depcode" id="depcode">
                            <?php
                                $result=$con->query("SELECT * FROM department ") or die($sqli->error);
                                while($row=$result->fetch_assoc()){
                                    ?>
                                    <option  value="<?php echo $row['code']?>"><?php echo $row['code']?></option>
                                    <?php }
                                    ?>
                            </select>
                            <label for="depcode">Session:</label>
                            <select name="session" id="depcode">
                                <option value="DAY">DAY</option>
                                <option value="EVENING">EVENING</option>
                            </select>
                            <br><br>
                            <div class="mb-3">
                                <label>Description</label>
                                <input type="text" name="timedes" class="form-control">
                            </div>

                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary" name="create" value="Create Timetable">
                            </div>
                            </form><br><br>
                            

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    window.onload = function()
    {
        timedHide(document.getElementById('alert'), 3);
    }

    function timedHide(element, seconds)
    {
        if (element) {
            setTimeout(function() {
                element.style.display = 'none';
            }, seconds*1000);
        }
    }
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
