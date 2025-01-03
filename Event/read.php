<?php
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

    <title>View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>View Details 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $event_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM event WHERE id='$event_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $event = mysqli_fetch_array($query_run);
                                ?>
                                    <div class="mb-3">
                                        <label>date_time</label>
                                        <p class="form-control">
                                            <?=$event['datetime'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>title</label>
                                        <p class="form-control">
                                            <?=$event['title'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Place</label>
                                        <p class="form-control">
                                            <?=$event['place'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>description</label>
                                        <p class="form-control">
                                            <?=$event['description'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>venue</label>
                                        <p class="form-control">
                                            <?=$event['venue'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>image</label>
                                        <p class="form-control">
                                            <?=$event['image'];?>
                                        </p>
                                    </div>
                                    

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