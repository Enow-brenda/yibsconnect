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

    <title>Timetable CRUD</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php // include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Timetable Details
                            <a href="create.php" class="btn btn-primary float-end">New timetable</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Level</th>
                                    <th>Department Code</th>
                                    <th>Session</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM timetable.data";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $timetable)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $timetable['id']; ?></td>
                                                <td><?= $timetable['level']; ?></td>
                                                <td><?= $timetable['departmentcode']; ?></td>
                                                <td><?= $timetable['session']; ?></td>
                                                <td><?= $timetable['description']; ?></td>
                                                <td>
                                                    <a href="view.php?id=<?= $timetable['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="edit.php?id=<?= $timetable['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="php_op.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete" value="<?= $timetable['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Timetable Found </h5>";
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