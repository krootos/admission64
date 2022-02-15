<?php
// include Database connection file
include("../conn.php");

// check request
if(isset($_POST['id']))
{
    // get values
        $id = $_POST['id'];
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


    // Updaste User details
//NID, HID, ENAME, ESURNAME, ENICKNAME, BIRTHPRO, BRO, BROBLM, VISIT, DIRECT, PAY, WEIGHT, HEIGHT, HEALTHY
//FARELIGION, FAJOBPROVINCE, FABLOOD, FAINCOME, MARELIGION, MAJOBPROVINCE, MABLOOD, MAINCOME, PARELIGION, PAJOBPROVINCE, PABLOOD, PAREINCOME, NICKNAMETH
    $query = "UPDATE sas_other SET ";
    $query .="HID = '".$hid."' ";
    $query .=",FAID = '".$faid."' ";
    $query .=",MAID = '".$maid."' ";
    $query .=",PAID = '".$paid."' ";
    $query .=",ENAME = '".$ename."' ";
    $query .=",ESURNAME = '".$esurname."' ";
    $query .=",ENICKNAME = '".$enickname."' ";
    $query .=",BIRTHPRO = '".$birthpro."' ";
    $query .=",BRO = '".$bro."' ";
    $query .=",BROBLM = '".$broblm."' ";
    $query .=",VISIT = '".$visit."' ";
    $query .=",DIRECT = '".$direct."' ";
    $query .=",PAY = '".$pay."' ";
    $query .=",WEIGHT = '".$weight."' ";
    $query .=",HEIGHT = '".$height."' ";
    $query .=",HEALTHY = '".$healthy."' ";
    $query .=",FARELIGION = '".$fareligion."' ";
    $query .=",FAJOBPROVINCE = '".$fajobprovince."' ";
    $query .=",FABLOOD = '".$fablood."' ";
    $query .=",FAINCOME = '".$faincome."' ";
    $query .=",MARELIGION = '".$mareligion."' ";
    $query .=",MAJOBPROVINCE = '".$majobprovince."' ";
    $query .=",MABLOOD = '".$mablood."' ";
    $query .=",MAINCOME = '".$maincome."' ";
    $query .=",PARELIGION = '".$pareligion."' ";
    $query .=",PAJOBPROVINCE = '".$pajobprovince."' ";
    $query .=",PABLOOD = '".$pablood."' ";
    $query .=",PAINCOME = '".$paincome."' ";
    $query .=",NICKNAMETH = '".$enicknameth."' ";
    $query .="WHERE NID = '".$id."' ";

    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}