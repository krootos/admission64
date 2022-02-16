<?php

// Connection variables
$host = "localhost"; // MySQL host name eg. localhost
$user = "root"; // MySQL user. eg. root ( if your on localserver)
$password = ""; // MySQL user password  (if password is not set for your root user then keep it empty )
$database = "admission_web"; // MySQL Database name 

/*$host = "127.0.0.1:3306";
$user = "root";
$password = "12345678";
$database = "student";*/

// Connect to MySQL Database
$mysqli = mysqli_connect($host, $user, $password) or die("Could not connect to database");

// Select MySQL Database
mysqli_select_db($mysqli, $database);
mysqli_query($mysqli, "SET character_set_results=utf8");
mysqli_query($mysqli, "SET character_set_client=utf8");
mysqli_query($mysqli, "SET character_set_connection=utf8");
