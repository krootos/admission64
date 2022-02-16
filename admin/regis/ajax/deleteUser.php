<?php

// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
// include Database connection file
include("db_connection.php");
    // get values
    $id = $_POST['id'];



    // Updaste User details
    $query = "UPDATE sas_register SET RegisStatus = 0, Daypush = '0' WHERE  RegisID = '$id'";
    if (!$result = mysqli_query($mysqli, $query)) {
        exit(mysqli_error($mysqli));
    }
}

?>