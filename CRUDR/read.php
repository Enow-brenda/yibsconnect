<?php
function read($table){
include("db_connection.php");
//read all row from database table
        if ($table == 'post') {
            $sql = "SELECT * FROM post JOIN users ON post.MEMBERID=users.id ORDER BY post.created_at DESC";
        }else if($table == 'comments'){
            $sql = "SELECT * FROM comments JOIN users ON comments.senderid=users.id WHERE(comments.postid ='".$_GET['postid']."') ORDER BY comments.created_at DESC";
        }else if($table == 'stories'){
            $sql = "SELECT * FROM stories ORDER BY created_at DESC";
        }else {
            $sql = "SELECT * FROM $table";
        }
        
            $result = $connection->query($sql); 
            if (!$result) {
                $result['error'] = 'error';
                return $result;
            }else{
                $result = $result->fetch_all();
                if ($table == 'comments') {
                    $element = '';
                    foreach ($result as $key => $value) {
                        $element .= '<p>' .$value[4].' '.$value[7].': '.$value[1] .'</p><br>';
                    }
                    $result = $element ;
                }
                return $result;
            }
        }  


    ?>
               