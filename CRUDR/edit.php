<?php

function edit($table_name,$id){
    include("db_connection.php");
    $errorMessage ="Sorry an error occured";
    $successMessage = "updated correctly";
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        // GET method: Show the data of hte client

        if (!isset($_GET["id"]) ) {
            $result['error'] = $errorMessage;
            return $result;
        }
        $id = $_GET["id"];

        // read the row of the selected client from database table
        $sql = "SELECT * FROM $table_name WHERE id=$id";
        $result = $connection->query($sql);
        $row = $result->fetch_all();

        if (!$row){
            $re['error'] = $errorMessage;
            return $re;
        }
        return $row;        

    }
    else if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $columns=""; //hold all the columns of the table

        $successMessage = "Entry added sucessfully in ".$table_name;
        $errorMessage = "Sorry an error occured";
            $counter = 0;
            foreach ($_POST as $key => $value) {
                if($key == "action" or $key == "table_name"){
                    //
                }else{
                    if ($counter == 0) {
                        $columns = "$columns $key = '$value'";
                    }else{
                        $columns = "$columns , $key = '$value'";
                    }
                    $counter += 1;
                }

            }
            
            do {
                foreach ($_POST as $key => $value) {
                    if (empty($_POST[$key])){
                        $errorMesssage = "All the fields are required";
                        break;
                    }
                }
            
             $sql = "UPDATE $table_name SET $columns WHERE id = $id";
            
            $result = $connection->query($sql);
            
            if (!$result) {
                $errorMessage = "Invalid query: " . $connection->error;
                break;
            }    
            //header("location: /".$path_name."/index.php");
            $re['success'] = $successMessage;
            return $re;
            exit;
            
            } while (false);

            //include('create.php')
            $re['error'] = $errorMessage;
            return $re;
    }

}
    
?>