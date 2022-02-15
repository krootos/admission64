<?php
	if(isset($_POST['regisno']) && isset($_POST['regispwd']) && isset($_POST['regisnaid']))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$regisno = $_POST['regisno'];
		$regispwd = $_POST['regispwd'];
		$regisnaid = $_POST['regisnaid'];

		//$query = "INSERT INTO users(first_name, last_name, email) VALUES('$first_name', '$last_name', '$email')";
		    $sql = "INSERT INTO sas_register";
    		$sql .= "(RegisNO, RegisPWD, RegisNaID)";
    		$sql .= "VALUES ";
    		$sql .= "('" . $regisno . "','" . $regispwd . "','" . $regisnaid . "')";

		if (!$result = mysql_query($sql)) {
	        exit(mysql_error());
	    }
	    echo "1 Record Added!";
	}
?>