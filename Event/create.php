<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>lecture</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>event Update 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="../../project/tests/project - Copy/CRUDR/DB.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="action" value="create">
                            <input type="hidden" name="table_name" value="event">
                            <div class="mb-3">
                                <label>date_time</label>
                                <input type="datetime-local" name="datetime" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>place</label>
                                <input type="text" name="Place" class="form-control">
                            </div>
                            <div class="mb-3">
                                        <label>description</label>
                                        <input type="text" name="description"  class="form-control">
                                    </div>
                            <div class="mb-3">
                                <label>venue</label>
                                <input type="text" name="venue" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>image</label>
                                    <input type="file" name="image" class="front-control" accept="image/*">
                                <input type="hidden" name="type" class="form-control" value="photos/events" >

                            </div>
                            
                             <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save Event</button>
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
