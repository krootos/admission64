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
    } else {}

    if ($_SESSION["EDITE"][1] == "1") {
/* เริ่มต้น พิมพ์รายละเอียด */

        $pdf->SetFont('angsa', '', 14);
        $n1 = substr($_SESSION["EDITE"][0], 0, 1);
        $n2 = substr($_SESSION["EDITE"][0], 1, 4);
        $n3 = substr($_SESSION["EDITE"][0], 5, 5);
        $n4 = substr($_SESSION["EDITE"][0], 10, 2);
        $n5 = substr($_SESSION["EDITE"][0], 12, 12);


        date_default_timezone_set('Asia/Bangkok');
        $year = date("Y") + 543;
        $createdate = date("d / m") . " / " . $year;

        //$pdf->Text(4, 44.5, iconv('UTF-8', 'TIS-620', "วันที่สมัครสอบ : " . $_SESSION["EDITE"][43]));
        $pdf->Text(170, 10.5, iconv('UTF-8', 'TIS-620', "วันที่พิมพ์ : " . $createdate)); //วันที่พิมพ์        
        $pdf->Text(98, 49.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][44] . " / 03 / " . $year));

        $pdf->Text(70, 56.5, $n1 . " - " . $n2 . " - " . $n3 . " - " . $n4 . " - " . $n5); //แนวตั้งแกน X , Y //เลข ปชช
        //$pdf->Text(160,49, $_SESSION["EDITE"][41]);
        //$pdf->Text(143, 56.5, $_SESSION["CODE"]); //ชื่อเข้าระบบ //เลขที่ผู้สมัคร

        $pdf->Text(143, 56.5, $_SESSION["EX"][1]);

//$pdf->Text(63,97.5,iconv( 'UTF-8','TIS-620', $mount));
        $pdf->Text(25, 67.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][8] . " " . $_SESSION["EDITE"][9])); //ชื่อ
        $pdf->Text(100, 67.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][10]));   //สกุล
        $pdf->Text(150, 67.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][12]));   //เพศ
        $pdf->Text(180, 67.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][13]));   //ศาสนา

//27/03/2543
        $b1 = substr($_SESSION["EDITE"][11], 0, 2);
        $b2 = substr($_SESSION["EDITE"][11], 3, 2);
        $b3 = substr($_SESSION["EDITE"][11], 6, 4);

        if ($b2 == "01") {$mount = "มกราคม";} elseif ($b2 == "02") {$mount = "กุมภาพันธ์";} elseif ($b2 == "03") {$mount = "มีนาคม";} elseif ($b2 == "04") {$mount = "เมษายน";} elseif ($b2 == "05") {$mount = "พฤษภาคม";} elseif ($b2 == "06") {$mount = "มิถุนายน";} elseif ($b2 == "07") {$mount = "กรกฎาคม";} elseif ($b2 == "08") {$mount = "สิงหาคม";} elseif ($b2 == "09") {$mount = "กันยายน";} elseif ($b2 == "10") {$mount = "ตุลาคม";} elseif ($b2 == "11") {$mount = "พฤศจิกายน";} else { $mount = "ธันวาคม";}
        $pdf->Text(35, 72.5, $b1); //วัน
        $pdf->Text(59, 72.5, iconv('UTF-8', 'TIS-620', $mount)); //เดือน
        $pdf->Text(102, 72.5, $b3); //ปี
        $pdf->Text(155, 72.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][14])); //เชื้อชาติ

        $pdf->Text(32, 78, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][15]));  //สัญชาติ
        $noblood = "NO";
        if (strcmp($_SESSION["EDITE"][16], $noblood) == 0) {
            $showblood = "ไม่ทราบ";
            $pdf->Text(115, 78, iconv('UTF-8', 'TIS-620', $showblood));
        } else {
            $pdf->Text(115, 78, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][16]));
        }

        $pdf->Text(67, 83.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][17])); //แต่ละแถวต่างกัน 6   //บ้านเลขที่
        $pdf->Text(99, 83.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][18])); //หมู่
        $pdf->Text(125, 83.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][19])); //ซอย
        $pdf->Text(170, 83.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][42])); //ถนน

        $pdf->Text(22, 89, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][37])); //แต่ละแถวต่างกัน 6     //ตำบล
        $pdf->Text(72, 89, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][39])); //อำเภอ
        $pdf->Text(125, 89, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][40]));//จังหวัด
        $pdf->Text(180, 89, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][38]));//รหัสไปรษณีย์

        $hmo1 = substr($_SESSION["EDITE"][23], 0, 2);
        $hmo2 = substr($_SESSION["EDITE"][23], 2, 4);
        $hmo3 = substr($_SESSION["EDITE"][23], 6, 4);
        $pdf->Text(50, 94.5, iconv('UTF-8', 'TIS-620', " - ")); //โทรศัพท์บ้าน
        $pdf->Text(125, 94.5, iconv('UTF-8', 'TIS-620', $hmo1 . " - " . $hmo2 . " - " . $hmo3)); //โทรศัพท์มือถือ

        $oldsc = $_SESSION["EDITE"][26];
        $pdf->Text(32, 107, iconv('UTF-8', 'TIS-620', $oldsc)); //โรงเรียน
        $pdf->Text(110, 107, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][45])); //จังหวัด
        $pdf->Text(168, 107, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][27])); //เกรดเฉลี่ย
        $pdf->Text(175, 107, iconv('UTF-8', 'TIS-620', "คะแนน O-NET ".$_SESSION["EDITE"][55])); //O-NET

        $pdf->Text(32, 114, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][28] . " " . $_SESSION["EDITE"][29] . " " . $_SESSION["EDITE"][30])); //บิดา
        $pdf->Text(110, 114, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][46])); //อาชีพบิดา
        $hmofa1 = substr($_SESSION["EDITE"][31], 0, 2);
        $hmofa2 = substr($_SESSION["EDITE"][31], 2, 4);
        $hmofa3 = substr($_SESSION["EDITE"][31], 6, 4);
        $pdf->Text(167, 114, iconv('UTF-8', 'TIS-620', $hmofa1 . " - " . $hmofa2 . " - " . $hmofa3)); //เบอร์โทรบิดา
//$pdf->Text(170,111.5, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][31]));

        $ma1 = $_SESSION["EDITE"][32];
        $ma2 = $_SESSION["EDITE"][33];
        $ma3 = $_SESSION["EDITE"][34];
        $pdf->Text(32, 120.5, iconv('UTF-8', 'TIS-620', $ma1 . " " . $ma2 . " " . $ma3)); //มารดา
        $pdf->Text(110, 120.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][47])); //อาชีพมารดา
        $hmoma1 = substr($_SESSION["EDITE"][35], 0, 2);
        $hmoma2 = substr($_SESSION["EDITE"][35], 2, 4);
        $hmoma3 = substr($_SESSION["EDITE"][35], 6, 4);
        $pdf->Text(167, 120.5, iconv('UTF-8', 'TIS-620', $hmoma1 . " - " . $hmoma2 . " - " . $hmoma3)); //เบอร์โทรมารดา

        $pdf->Text(55, 126.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][36])); //สถานะ


     
        //ข้อมูลผู้ปกครอง
        $pdf->Text(55, 134, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][48] . "  " . $_SESSION["EDITE"][49])); //ชื่อ
        $pdf->Text(120, 134, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][50])); //สกุล
        $pdf->Text(165, 134, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][52])); //อาชีพ

        $hmomaa1 = substr($_SESSION["EDITE"][51], 0, 2);
        $hmomaa2 = substr($_SESSION["EDITE"][51], 2, 4);
        $hmomaa3 = substr($_SESSION["EDITE"][51], 6, 4);
        $pdf->Text(40, 141, iconv('UTF-8', 'TIS-620', $hmomaa1 . " - " . $hmomaa2 . " - " . $hmomaa3)); //โทรศัพท์

        $relations = $_SESSION["EDITE"][53];

        $pdf->Text(161, 141, iconv('UTF-8', 'TIS-620', $relations)); //ควมสัมพันธ์  

        //$pdf->Text(140, 162.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][5]));
        //$pdf->Text(140, 168.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][6]));
        //$pdf->Text(140, 174.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][7]));

        //ประสงค์สมัครเข้าเรียน
        $pdf->Text(25, 158, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][2]));
        if (strcmp($_SESSION["EDITE"][2], "นักเรียนที่มีความสามารถพิเศษ") == 0) {
            $pdf->SetFont('angsa', '', 11);
            $pdf->Text(55, 162, iconv('UTF-8', 'TIS-620', "(" . $_SESSION["EDITE"][3] . " " . $_SESSION["EDITE"][4] . ")"));
            $pdf->SetFont('angsa', '', 14);
        }
        $pdf->Text(40, 202.5, date(" d              m")."                 ".$year); //วันที่
        
        //แผนการเรียน
        $pdf->Text(135, 162, iconv('UTF-8', 'TIS-620', "ไม่มีแผนการเรียน")); //ม.1 ไม่มีแผนการเรียน
        $pdf->Text(135, 190, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][8] . " " . $_SESSION["EDITE"][9] . "   " . $_SESSION["EDITE"][10]));     
        $pdf->Text(138, 201.5, date(" d              m")."                 ".$year); //วันที่
        
        //บัตรประจำตัวผู้สมัคร (สำหรับโรงเรียน)
        $pdf->Text(60, 224.5, iconv('UTF-8', 'TIS-620', $_SESSION["EX"][1])); //เลขที่ผู้สมัครสอบ
        $pdf->Text(67, 229.5, $n1 . " - " . $n2 . " - " . $n3 . " - " . $n4 . " - " . $n5); //เลข ปชช
        $pdf->Text(50, 235, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][8] . " " . $_SESSION["EDITE"][9] . "   " . $_SESSION["EDITE"][10])); //ชื่อ นร.
        $pdf->Text(57, 240, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][2])); //ประเภท
        if (strcmp($_SESSION["EDITE"][2], "นักเรียนที่มีความสามารถพิเศษ") == 0) {
            $pdf->SetFont('angsa', '', 10);
            $pdf->Text(66, 244, iconv('UTF-8', 'TIS-620', "(" . $_SESSION["EDITE"][3] . " " . $_SESSION["EDITE"][4] . ")"));
            $pdf->SetFont('angsa', '', 14);
        }
        $pdf->Text(45, 250, iconv('UTF-8', 'TIS-620', "ไม่มีแผนการเรียน")); //ม.1 ไม่มีแผนการเรียน
        $pdf->Text(47, 265.5, iconv('UTF-8', 'TIS-620', $_SESSION["EX"][3])); //อาคารสอบ1
        $pdf->Text(85, 265.5, iconv('UTF-8', 'TIS-620', $_SESSION["EX"][4])); //ห้องสอบ

        $pdf->Text(56, 285.5, date(" d        m")."          ".$year); //วันที่


        //บัตรประจำตัวผู้สมัคร (นักเรียน)
        $pdf->Text(161, 224, iconv('UTF-8', 'TIS-620', $_SESSION["EX"][1]));
        $pdf->Text(167, 229.5, $n1 . " - " . $n2 . " - " . $n3 . " - " . $n4 . " - " . $n5);
        $pdf->Text(150, 234.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][8] . " " . $_SESSION["EDITE"][9] . "   " . $_SESSION["EDITE"][10]));
        $pdf->Text(160, 240, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][2]));
        if (strcmp($_SESSION["EDITE"][2], "นักเรียนที่มีความสามารถพิเศษ") == 0) {
            $pdf->SetFont('angsa', '', 10);
            $pdf->Text(168, 244, iconv('UTF-8', 'TIS-620', "(" . $_SESSION["EDITE"][3] . " " . $_SESSION["EDITE"][4] . ")"));

            $pdf->SetFont('angsa', '', 14);
        }    
        $pdf->Text(145, 250, iconv('UTF-8', 'TIS-620', "ไม่มีแผนการเรียน")); //ม.1 ไม่มีแผนการเรียน
        $pdf->Text(153, 265.5, iconv('UTF-8', 'TIS-620', $_SESSION["EX"][3])); //อาคารสอบ1
        $pdf->Text(185, 265.5, iconv('UTF-8', 'TIS-620', $_SESSION["EX"][4])); //ห้องสอบ

        $pdf->Text(155, 285.5, date("d        m")."          ".$year); //วันที่

        $a = $_SESSION["EDITE"][0] . ".pdf";
        $pdf_file = "Thatnaraiwittaya-" . $a;

        $pdf->Output("fpdf/MyPDF/" . $pdf_file, "F");

    } 
    //end ม.1
    // start ม.4
    else {

        $pdf->SetFont('angsa', '', 14);
        $n1 = substr($_SESSION["EDITE"][0], 0, 1);
        $n2 = substr($_SESSION["EDITE"][0], 1, 4);
        $n3 = substr($_SESSION["EDITE"][0], 5, 5);
        $n4 = substr($_SESSION["EDITE"][0], 10, 2);
        $n5 = substr($_SESSION["EDITE"][0], 12, 12);


        date_default_timezone_set('Asia/Bangkok');
        $year = date("Y") + 543;
        $createdate = date("d / m") . " / " . $year;

        //$pdf->Text(5, 10.5, iconv('UTF-8', 'TIS-620', "วันที่สมัครสอบ : " . $_SESSION["EDITE"][43])); //วันที่สมัคร
        $pdf->Text(170, 10.5, iconv('UTF-8', 'TIS-620', "วันที่พิมพ์ : " . $createdate)); //วันที่พิมพ์
        $pdf->Text(98, 49.5, date("d / m")." / ".$year); //วันยื่นใบสมัคร
       
        //$pdf->Text(98, 43.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][44] . " / 03 / " . $year));

        $pdf->Text(70, 56.5, $n1 . " - " . $n2 . " - " . $n3 . " - " . $n4 . " - " . $n5); //แนวตั้งแกน X , Y //เลข ปชช
        //$pdf->Text(160,50.5, $_SESSION["EDITE"][41]);
        //$pdf->Text(145, 56.5, $_SESSION["CODE"]); //ชื่อเข้าระบบ //เลขที่ผู้สมัคร
        $pdf->Text(143, 56.5, $_SESSION["EX"][1]);
//$pdf->Text(63,97.5,iconv( 'UTF-8','TIS-620', $mount));

        $pdf->Text(25, 67.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][8] . " " . $_SESSION["EDITE"][9])); //ชื่อ
        $pdf->Text(100, 67.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][10]));   //สกุล
        $pdf->Text(150, 67.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][12]));   //เพศ
        $pdf->Text(180, 67.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][13]));   //ศาสนา

//27/03/2543 
        $b1 = substr($_SESSION["EDITE"][11], 0, 2); 
        $b2 = substr($_SESSION["EDITE"][11], 3, 2);
        $b3 = substr($_SESSION["EDITE"][11], 6, 4);

        if ($b2 == "01") {$mount = "มกราคม";} elseif ($b2 == "02") {$mount = "กุมภาพันธ์";} 
        elseif ($b2 == "03") {$mount = "มีนาคม";} elseif ($b2 == "04") {$mount = "เมษายน";} 
        elseif ($b2 == "05") {$mount = "พฤษภาคม";} elseif ($b2 == "06") {$mount = "มิถุนายน";} 
        elseif ($b2 == "07") {$mount = "กรกฎาคม";} elseif ($b2 == "08") {$mount = "สิงหาคม";} 
        elseif ($b2 == "09") {$mount = "กันยายน";} elseif ($b2 == "10") {$mount = "ตุลาคม";} 
        elseif ($b2 == "11") {$mount = "พฤศจิกายน";} else { $mount = "ธันวาคม";}

        //วัน เดือน ปีเกิด
        $pdf->Text(36, 72.5, $b1); //วัน
        $pdf->Text(61, 72.5, iconv('UTF-8', 'TIS-620', $mount)); //เดือน
        $pdf->Text(107, 72.5, $b3); //ปี
        $pdf->Text(160, 72.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][14])); //เชื้อชาติ

        $pdf->Text(32, 78, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][15]));  //สัญชาติ
//$_SESSION["EDITE"][16]
        $noblood = "NO"; //หมู่เลือด
        if (strcmp($_SESSION["EDITE"][16], $noblood) == 0) {
            $showblood = "ไม่ทราบ";
            $pdf->Text(115, 78, iconv('UTF-8', 'TIS-620', $showblood));
        } else {
            $pdf->Text(115, 78, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][16]));
        }
        $pdf->Text(67, 83.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][17])); //แต่ละแถวต่างกัน 6   //บ้านเลขที่
        $pdf->Text(99, 83.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][18])); //หมู่
        $pdf->Text(127, 83.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][19])); //ซอย
        $pdf->Text(172, 83.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][42])); //ถนน

        $pdf->Text(22, 89, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][37])); //แต่ละแถวต่างกัน 6     //ตำบล
        $pdf->Text(72, 89, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][39])); //อำเภอ
        $pdf->Text(127, 89, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][40]));//จังหวัด
        $pdf->Text(180, 89, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][38]));//รหัสไปรษณีย์

        $hmo1 = substr($_SESSION["EDITE"][23], 0, 2);
        $hmo2 = substr($_SESSION["EDITE"][23], 2, 4);
        $hmo3 = substr($_SESSION["EDITE"][23], 6, 4);
        $pdf->Text(50, 94.5, iconv('UTF-8', 'TIS-620', " - ")); //โทรศัพท์บ้าน
        $pdf->Text(125, 94.5, iconv('UTF-8', 'TIS-620', $hmo1 . " - " . $hmo2 . " - " . $hmo3)); //โทรศัพท์มือถือ

        $oldsc = $_SESSION["EDITE"][26];
        $pdf->Text(32, 107, iconv('UTF-8', 'TIS-620', $oldsc)); //โรงเรียน
        $pdf->Text(110, 107, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][45])); //จังหวัด
        $pdf->Text(168, 107, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][27])); //เกรดเฉลี่ย
        $pdf->Text(175, 107, iconv('UTF-8', 'TIS-620', "คะแนน O-NET ".$_SESSION["EDITE"][55])); //O-NET

        $pdf->Text(32, 114, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][28] . " " . $_SESSION["EDITE"][29] . " " . $_SESSION["EDITE"][30])); //บิดา
        $pdf->Text(110, 114, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][46])); //อาชีพบิดา
        $hmofa1 = substr($_SESSION["EDITE"][31], 0, 2);
        $hmofa2 = substr($_SESSION["EDITE"][31], 2, 4);
        $hmofa3 = substr($_SESSION["EDITE"][31], 6, 4);
        $pdf->Text(167, 114, iconv('UTF-8', 'TIS-620', $hmofa1 . " - " . $hmofa2 . " - " . $hmofa3)); //เบอร์โทรบิดา
    //$pdf->Text(170,111.5, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][31]));

        $ma1 = $_SESSION["EDITE"][32];
        $ma2 = $_SESSION["EDITE"][33];
        $ma3 = $_SESSION["EDITE"][34];
        $pdf->Text(32, 120.5, iconv('UTF-8', 'TIS-620', $ma1 . " " . $ma2 . " " . $ma3)); //มารดา
        $pdf->Text(110, 120.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][47])); //อาชีพมารดา
        $hmoma1 = substr($_SESSION["EDITE"][35], 0, 2);
        $hmoma2 = substr($_SESSION["EDITE"][35], 2, 4);
        $hmoma3 = substr($_SESSION["EDITE"][35], 6, 4);
        $pdf->Text(167, 120.5, iconv('UTF-8', 'TIS-620', $hmoma1 . " - " . $hmoma2 . " - " . $hmoma3)); //เบอร์โทรมารดา

        $pdf->Text(55, 126.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][36])); //สถานะ

    //ข้อมูลผู้ปกครอง
        $pdf->Text(55, 134, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][48] . "  " . $_SESSION["EDITE"][49])); //ชื่อ
        $pdf->Text(120, 134, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][50])); //สกุล
        $pdf->Text(165, 134, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][52])); //อาชีพ
        $hmomaa1 = substr($_SESSION["EDITE"][51], 0, 2);
        $hmomaa2 = substr($_SESSION["EDITE"][51], 2, 4);
        $hmomaa3 = substr($_SESSION["EDITE"][51], 6, 4);
        $pdf->Text(40, 141, iconv('UTF-8', 'TIS-620', $hmomaa1 . " - " . $hmomaa2 . " - " . $hmomaa3)); //โทรศัพท์

        $relations = $_SESSION["EDITE"][53];
        $pdf->Text(161, 141, iconv('UTF-8', 'TIS-620', $relations)); //ควมสัมพันธ์        


    //ประสงค์สมัครเข้าสมัครศึกษาต่อ
        $pdf->Text(23, 158, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][2])); //ประเภทที่สมัคร
        /*if (strcmp($_SESSION["EDITE"][2], "นักเรียนที่มีความสามารถพิเศษ") == 0) {
            $pdf->SetFont('angsa', '', 11);
            $pdf->Text(55, 160, iconv('UTF-8', 'TIS-620', "(" . $_SESSION["EDITE"][3] . " " . $_SESSION["EDITE"][4] . ")"));
            
            $pdf->SetFont('angsa', '', 14);
        }*/

        $pdf->Text(30, 158, iconv('UTF-8', 'TIS-620', "นักเรียนทั่วไป")); 
        $pdf->Text(41, 202.5, date("d               m")."                 ".$year); //วันที่    

    //แผนการเรียน
        $pdf->Text(115, 162.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][5])); //1
        $pdf->Text(115, 168, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][6])); //2
        $pdf->Text(115, 173.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][7])); //3
        //$pdf->Text(157, 162.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][57])); //4
        //$pdf->Text(157, 168, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][58])); //5

        $pdf->Text(137, 190, iconv('UTF-8', 'TIS-620', //ลงชื่อ
            $_SESSION["EDITE"][8] . " " . $_SESSION["EDITE"][9] . "   " . $_SESSION["EDITE"][10]));

        $pdf->Text(138, 201.5, date("d                m")."                 ".$year); //วันที่
       

    //บัตรประจำตัวผู้สมัคร (สำหรับโรงเรียน)
        $pdf->Text(60, 224.5, iconv('UTF-8', 'TIS-620', $_SESSION["EX"][1])); //เลขที่ผู้สมัครสอบ
        $pdf->Text(67, 229.5, $n1 . " - " . $n2 . " - " . $n3 . " - " . $n4 . " - " . $n5); //เลข ปชช
        $pdf->Text(50, 234.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][8] . " " . $_SESSION["EDITE"][9] . "   " . $_SESSION["EDITE"][10])); //ชื่อ นร.
        $pdf->Text(57, 240, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][2])); //ประเภทที่สมัคร
        $pdf->Text(60, 239.5, iconv('UTF-8', 'TIS-620', "นักเรียนทั่วไป")); 
        if (strcmp($_SESSION["EDITE"][2], "นักเรียนที่มีความสามารถพิเศษ") == 0) {
            $pdf->SetFont('angsa', '', 10);
            $pdf->Text(66, 244, iconv('UTF-8', 'TIS-620', "(" . $_SESSION["EDITE"][3] . " " . $_SESSION["EDITE"][4] . ")"));

            $pdf->SetFont('angsa', '', 14);
        }
        $pdf->Text(42, 250, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][5])); //1
        $pdf->Text(42, 255, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][6])); //2
        $pdf->Text(42, 260.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][7])); //3
        //$pdf->Text(73, 250.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][57])); //4
        //$pdf->Text(73, 255.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][58])); //5

        $pdf->Text(45, 265.5, iconv('UTF-8', 'TIS-620', $_SESSION["EX"][3])); //อาคารสอบ
        $pdf->Text(85, 265.5, iconv('UTF-8', 'TIS-620', $_SESSION["EX"][4])); //ห้องสอบ

        $pdf->Text(57, 286, date("d        m")."          ".$year); //วันที่

    //บัตรประจำตัวผู้สมัคร (นักเรียน)
        $pdf->Text(161, 224, iconv('UTF-8', 'TIS-620', $_SESSION["EX"][1]));
        $pdf->Text(167, 229.5, $n1 . " - " . $n2 . " - " . $n3 . " - " . $n4 . " - " . $n5);
        $pdf->Text(150, 234.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][8] . " " . $_SESSION["EDITE"][9] . "   " . $_SESSION["EDITE"][10]));
        $pdf->Text(160, 240, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][2]));
        $pdf->Text(160, 239.5, iconv('UTF-8', 'TIS-620', "นักเรียนทั่วไป")); //ประเภทที่สมัคร
        if (strcmp($_SESSION["EDITE"][2], "นักเรียนที่มีความสามารถพิเศษ") == 0) {
            $pdf->SetFont('angsa', '', 10);
            $pdf->Text(167, 244, iconv('UTF-8', 'TIS-620', "(" . $_SESSION["EDITE"][3] . " " . $_SESSION["EDITE"][4] . ")"));

            $pdf->SetFont('angsa', '', 14);
        }
        $pdf->Text(145, 250, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][5])); //1
        $pdf->Text(145, 255, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][6])); //2
        $pdf->Text(145, 260.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][7])); //3
        //$pdf->Text(174, 250.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][57])); //4
        //$pdf->Text(174, 255.5, iconv('UTF-8', 'TIS-620', $_SESSION["EDITE"][58])); //5

        $pdf->Text(153, 265.5, iconv('UTF-8', 'TIS-620', $_SESSION["EX"][3])); //อาคารสอบ1
        $pdf->Text(185, 265.5, iconv('UTF-8', 'TIS-620', $_SESSION["EX"][4])); //ห้องสอบ

        $pdf->Text(155, 286, date("d        m")."          ".$year); //วันที่

        $a = $_SESSION["EDITE"][0] . ".pdf";
        $pdf_file = "Thatnaraiwittaya-" . $a;

        $pdf->Output("fpdf/MyPDF/" . $pdf_file, "F");
//$pdf->Output("MyPDF/MyPDF.pdf","F");  */
        // } //end มอบตัว
    } // end ม.4

} // isset keypdf
