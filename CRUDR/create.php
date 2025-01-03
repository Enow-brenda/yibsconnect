<?php
function create($table_name){
    include("db_connection.php");
    /*param 
            past object
            table name 
            path name
        return an array result['success'] or result['error']
        */
        if (isset($_POST['action'])) {
            $data = $_POST;
        }else{
            $data = json_decode(file_get_contents("php://input"));
        }

        $columns="("; //hold all the columns of the table
        $values="("; //hold all the columns of the table

        $successMessage = "True";
        $errorMessage = "Sorry an error occured";

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            
            $counter = 0;
            foreach ($data as $key => $value) {
                if($key == "action" or $key == "table_name" or $key == "type"){
                    //
                }else{
                    if ($counter == 0) {
                        $columns = $columns.$key;
                        $values = "$values '$value'";
                    }else{
    
                        $columns = $columns.",".$key;
                        $values = "$values ,'$value' ";
                    }
                    $counter += 1;
                }
                

            }

            $columns = $columns.")";
            $values = $values.")";
            
            do {
                foreach ($data as $key => $value) {
                    if (empty($columns[$key])){
                        $errorMesssage = "All the fields are required";
                        break;
                    }
                }
            
            // add new client to database 
            $sql = "INSERT INTO $table_name $columns VALUES $values";
            
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

            }
            //include('create.php')
            $re['error'] = $errorMessage;
            return $re;

    }
 ?>
