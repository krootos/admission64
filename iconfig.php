<?php


    $servername = "localhost";
    $username = "admission_web";
    $password = "MldwSCiq";
    $dbname = "admission_web";

    // Create connection
    $connect = mysqli_connect($servername, $username, $password, $dbname);



    mysqli_query($connect,"SET character_set_results=utf8");
    mysqli_query($connect,"SET character_set_client=utf8");
    mysqli_query($connect,"SET character_set_connection=utf8");

?>