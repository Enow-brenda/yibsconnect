<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_event']))
{
    $eventid = mysqli_real_escape_string($con, $_POST['delete_event']);

    $query = "DELETE FROM event WHERE id='$eventid' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Event Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Eventt Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_event']))
{

    $Description = mysqli_real_escape_string($con, $_POST['description']);

    $Datetime = mysqli_real_escape_string($con, $_POST['date_time']);

    $Venue = mysqli_real_escape_string($con, $_POST['venue']);

    $Place = mysqli_real_escape_string($con, $_POST['place']);

    $query = "UPDATE event SET  description='', date_time='', venue='',place='' WHERE id='' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Event Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "event Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_event']))
{
    $eventid = mysqli_real_escape_string($con, $_POST['lecturerid']);
    $courseid = mysqli_real_escape_string($con, $_POST['eventid']);

    $query = "INSERT INTO lecture (lecturerid,eventid) VALUES ('$lecturerid','$eventid')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "event Created Successfully";
        header("Location: event-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "event Not Created";
        header("Location: event-create.php");
        exit(0);
    }
}

?>
