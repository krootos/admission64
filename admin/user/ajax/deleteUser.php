<?php
// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // include Database connection file
    include("db_connection.php");

    // get user id
   // $user_id = $_POST['id'];
    $user_id = $_POST['id'];

    // delete User
    $query = "DELETE FROM sas_register WHERE RegisID = '$user_id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}
?>