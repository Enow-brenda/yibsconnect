<?php
 $servername = "Localhost";
 $username  = "root";
 $password  = "";
 $database  = "yibs_connect";
 $path_name ="connect";
//Create connection
$connection = new mysqli($servername,  $username, $password, $database);

// Check connection
if ($connection->connect_error){
    die("Connection failed: " .$connection->connect_error );
}
        
?>