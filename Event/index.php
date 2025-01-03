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

    <title>Event CRUD</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> details
                            <a href="create.php" class="btn btn-primary float-end">create event</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>date_time</th>
                                    <th>title</th>
                                    <th>place</th>
                                    <th>description</th>
                                    <th>venue</th>
                                    <th>image</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM yibs_connect.event";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $event)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $event['datetime']; ?></td>
                                                <td><?= $event['title']; ?></td>
                                                <td><?= $event['place']; ?></td>
                                                <td><?= $event['description']; ?></td>
                                                <td><?= $event['venue']; ?></td>
                                                <td><?= $event['image']; ?></td>
                                                
                                                <td>
                                                    <a href="read.php?id=<?= $event['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="edit.php?id=<?= $event['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_event" value="<?=$event['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
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