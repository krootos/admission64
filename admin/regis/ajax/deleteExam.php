<?php

// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
// include Database connection file
include("db_connection.php");
    // get values
    $id = $_POST['id'];



    // Updaste User details
    $query = "DELETE FROM sas_examno WHERE  ExamStuNo = '$id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}

?>