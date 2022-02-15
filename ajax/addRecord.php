<?php
    if(isset($_POST['nid'],$_POST['hid'],$_POST['faid'],$_POST['maid'],$_POST['paid'],$_POST['ename'],$_POST['esurname'],$_POST['enickname'],$_POST['birthpro'],$_POST['bro'],$_POST['broblm'],$_POST['visit'],$_POST['direct'],$_POST['pay'],$_POST['weight'],$_POST['height'],$_POST['healthy'],
    $_POST['fareligion'],$_POST['fajobprovince'],$_POST['fablood'],$_POST['faincome'],$_POST['mareligion'],$_POST['majobprovince'],$_POST['mablood'],$_POST['maincome'],$_POST['pareligion'],$_POST['pajobprovince'],$_POST['pablood'],$_POST['paincome'],$_POST['enicknameth']))
		
	{
		// include Database connection file 
		include("../conn.php");

		// get values 
		$nid = $_POST['nid'];
        $hid = $_POST['hid'];
        $faid = $_POST['faid'];
        $maid = $_POST['maid'];
        $paid = $_POST['paid'];
        $ename = $_POST['ename'];
        $esurname = $_POST['esurname'];
        $enickname = $_POST['enickname'];
        $birthpro = $_POST['birthpro'];
        $bro = $_POST['bro'];
        $broblm = $_POST['broblm'];
        $visit = $_POST['visit'];
        $direct = $_POST['direct'];
        $pay = $_POST['pay'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];
        $healthy = $_POST['healthy'];
        $fareligion = $_POST['fareligion'];
        $fajobprovince = $_POST['fajobprovince'];
        $fablood = $_POST['fablood'];
        $faincome = $_POST['faincome'];
        $mareligion = $_POST['mareligion'];
        $majobprovince = $_POST['majobprovince'];
        $mablood = $_POST['mablood'];
        $maincome = $_POST['maincome'];
        $pareligion = $_POST['pareligion'];
        $pajobprovince = $_POST['pajobprovince'];
        $pablood = $_POST['pablood'];
        $paincome = $_POST['paincome'];
        $enicknameth = $_POST['enicknameth'];

		//$query = "INSERT INTO users(first_name, last_name, email) VALUES('$first_name', '$last_name', '$email')";
		 echo   $sql = "INSERT INTO sas_other";
  $sql .= "(NID, HID, FAID, MAID, PAID, ENAME, ESURNAME, ENICKNAME, BIRTHPRO, BRO, BROBLM, VISIT, DIRECT, PAY, WEIGHT, HEIGHT, HEALTHY, FARELIGION, FAJOBPROVINCE, FABLOOD, FAINCOME, MARELIGION, MAJOBPROVINCE, MABLOOD, MAINCOME, PARELIGION, PAJOBPROVINCE, PABLOOD, PAINCOME, NICKNAMETH)";
  $sql .= "VALUES ";
  $sql .= "('" . $nid . "','" . $hid . "','" . $faid . "','" . $maid . "','" . $paid . "','" . $ename . "','" . $esurname . "','" . $enickname . "','" . $birthpro . "','" . $bro . "','" . $broblm . "','" . $visit . "','" . $direct . "','" . $pay . "','" . $weight . "','" . $height . "','" . $healthy . "','" . $fareligion . "','" . $fajobprovince . "','" . $fablood. "','" . $faincome . "','" . $mareligion. "','" . $majobprovince . "','" . $mablood . "','" . $maincome . "','" . $pareligion . "','" . $pajobprovince . "','" . $pablood . "','" . $paincome . "','" . $enicknameth . "')";

		if (!$result = mysql_query($sql)) {
	        exit(mysql_error());
	    }
	    echo "1 Record Added!";
	}
?>