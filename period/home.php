<?php
    session_start();
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

    <title>Period CRUD</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php // include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Period Details
                            <a href="create_period.php" class="btn btn-primary float-end">New period</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM period";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $period)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $period['id']; ?></td>
                                                <td><?= $period['start time']; ?></td>
                                                <td><?= $period['end time']; ?></td>
                                                <td><?= $period['description']; ?></td>
                                                <td>
                                                    <a href="edit.php?id=<?= $period['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="php_op.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete" value="<?= $period['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Period Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>