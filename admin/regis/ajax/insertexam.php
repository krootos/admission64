<?php

// check request
if(isset($_POST['examno'],$_POST['examid'],$_POST['nid']))
{
// include Database connection file
include("db_connection.php");
    // get values
    $examno = $_POST['examno'];
    $examid = $_POST['examid'];
    $nid    = $_POST['nid'];

         echo   $queryex     = "INSERT INTO sas_examno";
            $queryex    .= "(ExamStuNo, ExamNID, ExamID)";
            $queryex    .= "VALUES ";
            $queryex    .= "('" . $examno . "','" . $nid . "','" . $examid . "')";

   if (!$result = mysql_query($queryex)) {
            exit(mysql_error());
        }
        echo "1 Record Added!";

   
}

?>