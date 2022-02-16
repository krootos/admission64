<?php

//echo $_SESSION["EDITE"][13];
if (isset($_SESSION["EDITE"])) {

    //require_once("../link.php");
    require 'fpdf/fpdf.php';
    define('FPDF_FONTPATH', 'font/');
    //$pdf=new FPDF( 'L' , 'mm' ,'A4');   เอกสารแนวนอน

    $pdf = new FPDF('P', 'mm', 'A4');
    $pdf->AddPage();
    //$pdf->AddFont('angsana','B','angsanab.php');
    //$pdf->AddFont('angsana','','angsana.php');
    $pdf->AddFont('angsa', '', 'angsa.php');

    $pdf->SetFont('angsa', '', 14);

    /*Edite Data*/

    if (isset($_SESSION["EDITE"])) {
        if ($_SESSION["EDITE"][1] == "1") {
            $pdf->Image('./img/M-1.jpg', 0, 0, 207, 0, '', '');
        } else {
            if ($_SESSION["Special_StudentLG"] == 1) {
                $pdf->Image('./img/M-4.jpg', 0, 0, 207, 0, '', '');
            } else {
                $pdf->Image('./img/M-4.jpg', 0, 0, 207, 0, '', '');
            }
        }
    } else {
    }

   

} // isset keypdf
