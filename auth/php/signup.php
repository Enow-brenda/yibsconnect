<?php

if(isset($_POST['fname']) &&
   isset($_POST['USERNAME']) &&
   isset($_POST['PASSWORD'])){
   include "../db_conn.php";

    $fname = $_POST['fname'];
    $USERNAME = $_POST['USERNAME'];
    $PASSWORD = $_POST['PASSWORD'];

    $data = "$fname=".$fname."&USERNAME=".$USERNAME;
    
    if (empty($fname))  {
        $em = "Full name is required";
        header("Location: ../index.php?error=$em&$data");
        exit;
    }else if(empty($USERNAME)){
        $em = "User name is required";
        header("Location: ../index.php?error=$em&$data");
        exit;
    }else if(empty($PASSWORD)){
        $em = "PASSWORDword is required";
        header("Location: ../index.php?error=$em&$data");
        exit;
    }else {

        // hashing the PASSWORDword
        $PASSWORD = Password_hash($PASSWORD, PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO users(fname, username, PASSWORD)
                VALUES(?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$fname, $USERNAME, $PASSWORD]);

        header("Location: ../index.php?success=Your account has been created succefully");
        exit;
    }    

}else {
    header("Location: ../index.php?error=error");
    exit;
}
