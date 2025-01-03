<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Event Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>event Edit 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $eventid = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM yibs_connect.event WHERE id='$eventid' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $event = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="event" value="<?= $event['id']; ?>">
                                    <div class="mb-3">
                                        <label>date time</label>
                                        <input type="datetime_local" name="datetime" value="<?=$event['datetime'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>title</label>
                                        <input type="text" name="title" value="<?=$event['title'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Place</label>
                                        <input type="text" name="place" value="<?=$event['place'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>description</label>
                                        <input type="text" name="description" value="<?=$event['description'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>venue</label>
                                        <input type="text" name="venue" value="<?=$event['venue'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>image</label>
                                    <input type="file" name="image" value="<?=$event['image'];?>" class="form-control">
                                    </div>
                                
                                        <button type="submit" name="create_event" class="btn btn-primary">
                                            Create event
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
