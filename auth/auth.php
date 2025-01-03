<?php
session_start();
if(!isset($_SESSION['user_id'])){
    Header('Location:../auth/login.php');
}
?>