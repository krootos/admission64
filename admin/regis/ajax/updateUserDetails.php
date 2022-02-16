<?php

// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
// include Database connection file
include("db_connection.php");
    // get values
    $id = $_POST['id'];



    // Updaste User details
   // $mount = "มีนาคม"
    //$day =  date("d")." ".$mount;
    $day =  date("d");
    $query = "UPDATE sas_register SET RegisStatus = 1, 	Daypush = '".$day."' WHERE  RegisID = '$id'";
    if (!$result = mysqli_query($mysqli,$query)) {
        exit(mysqli_error($mysqli));
    }
}

?>