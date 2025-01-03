<?php

include("create.php");
include("delete.php");
include("edit.php");
include("read.php");


//DB.php?action=read&table_name=clients
//DB.php?action=edit&table_name=clients&id=3

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $action = $_GET["action"];
    $table_name = $_GET["table_name"];
    if ($action == 'read') {
        //read
        $results = read($table_name);
    } elseif($action == 'edit') {
        //edit
        $id = $_GET["id"];
        $results = edit($table_name,$id);
    } elseif($action == 'delete') {
        //delete
        $id = $_GET["id"];
        $results = delete($table_name,$id);
    } else{
        die("Incorrect Action ");
    }
    
}

else if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['action'])) {
        $action = $_POST['action'];
        $table_name = $_POST["table_name"];
    }else {
        $data = json_decode(file_get_contents("php://input"));
        $action = $data->action;
        $table_name = $data->table_name;
    }

   
    if ($action == 'create') {
        if($table_name=='lecturer' or $table_name=='event'){
            include("../upload/uploadFile.php");
        }
        //create
        $results = create($table_name);
    } else if($action == 'edit') {
        $id = $_POST['id'];
        $results =edit($table_name,$id);
        //edit
    }
    
}

else{
    die('Error');
}

print_r($results);
