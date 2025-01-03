<?php
   session_start();
   if(isset($_POST['USERNAME']) &&
      isset($_POST['PASSWORD'])){

   include "../db_conn.php";

    $USERNAME = $_POST['USERNAME'];
    $pass = $_POST['PASSWORD'];

    $data = "USERNAME=".$USERNAME;
    
    if(empty($USERNAME)){
        $em = "User name is required";
        header("Location: ../login.php?error=$em&$data");
        exit;
    }else if(empty($pass)){
        $em = "Password is required";
        header("Location: ../login.php?error=$em&$data");
        exit;
    }else {
        
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        
        $stmt->execute([$USERNAME]);

        if($stmt->rowcount() == 1){
            $user = $stmt->fetch();

            $username = $user['username'];
            $password = $user['password'];
            $fname = $user['fname'];
            $id = $user['id'];
            if($username == $USERNAME){
                if(password_verify($pass, $password)){
                    $_SESSION['user_id'] = $id;
                    $_SESSION['user_name'] = $fname;
                    $_SESSION['login_firstname'] = $fname;
                    $_SESSION['login_lastname'] = $sname;
                    $_SESSION['login_avatar'] = $sname;
                    $_SESSION['login_type'] = 1;
                    header("Location: ../../front/");
                }else {
                   $em = "Incorrect user name or password";
                   header("Location: ../login.php?error=$em&$data");
                   exit;
                }

             }else {
                $em = "Incorrect user name or password";
                header("Location: ../login.php?error=$em&$data");
                exit;
           }

        }else {
        $em = "Incorrect user name or password";
        header("Location: ../login.php?error=$em&$data");
        exit;
        }
    }    

}else {
    header("Location: ../login.php?error=error");
    exit;
}
