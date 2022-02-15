<?php

// Connection variables
$host = "localhost"; // MySQL host name eg. localhost
$user = "admission_web"; // MySQL user. eg. root ( if your on localserver)
$password = "MldwSCiq"; // MySQL user password  (if password is not set for your root user then keep it empty )
$database = "admission_web"; // MySQL Database name 

/*$host = "127.0.0.1:3306"; // MySQL host name eg. localhost
$user = "root"; // MySQL user. eg. root ( if your on localserver)
$password = "12345678"; // MySQL user password  (if password is not set for your root user then keep it empty )
$database = "student"; // MySQL Database name*/

// Connect to MySQL Database
$db = mysql_connect($host, $user, $password) or die("Could not connect to database");

// Select MySQL Database
mysql_select_db($database, $db);
mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
