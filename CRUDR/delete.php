<?php
function delete($table_name,$id){
    include("db_connection.php");
    $errorMessage ="Sorry an error occured";
    $successMessage = "Deleted successfully";
    if ( isset($_GET["id"]) ) {
        $sql = "DELETE FROM $table_name WHERE id=$id";
        $connection->query($sql);
        $result['success'] = $successMessage;
        return $result;
    }
    $result['error'] = $errorMessage;
    return $result;
}
?>