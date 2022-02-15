<?php

if(isset($_GET["keypdf"])){ 
include("../../conn.php");
$nid = $_GET["keypdf"];
 $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, Role, 
            sd.NID, sd.TYPE, sd.OPTIONS, sd.OPTIONSPECIAL, sd.MORE, sd.PLAN1, sd.PLAN2, sd.PLAN3, 
            sd.SNAME, sd.FNAME, sd.LNAME, sd.BIRTHDAY, sd.SEX, sd.RELI, sd.REGINAL, sd.REGINALITY, 
            sd.GROUPBLOOD, sd.HADDRESS, sd.MOO, sd.SOI, sd.ROAD,  sd.PROVINCE_ID, sd.DISTRICT_ID, 
            sd.AMPHUR_ID, sd.TEL, sd.EMAIL, sd.GRADUATE, sd.LSCHOOL, sd.GPA, sd.SNAMEFA, sd.FNAMEFA, 
            sd.LNAMEFA, sd.TELFA, sd.SNAMEMA, sd.FNAMEMA, sd.LNAMEMA, sd.TELMA, sd.FAMILYSTATUS, 
            dt.DISTRICT_NAME , ap.POSTCODE, ap.AMPHUR_NAME, pv.PROVINCE_NAME, sd.CREATEDATE, sd.DAYCOME, 
            sd.ID_PROVINCE_SC, sd.OC_FA, sd.OC_MA, sd.TYPEPARENT, sd.SNAMEPA, sd.FNAMEPA, sd.LNAMEPA, 
            sd.TELPA, sd.OC_PA, sd.RELATION,sd.stuIDold, ot.HID, ot.FAID, ot.MAID, ot.PAID, ot.ENAME, 
            ot.ESURNAME, ot.ENICKNAME, ot.BIRTHPRO, ot.BRO, ot.BROBLM, ot.VISIT, ot.DIRECT, ot.PAY, ot.WEIGHT, ot.HEIGHT, ot.HEALTHY,
            ot.FARELIGION, ot.FAJOBPROVINCE, ot.FABLOOD, ot.FAINCOME, ot.MARELIGION, ot.MAJOBPROVINCE, ot.MABLOOD, ot.MAINCOME, 
            ot.PARELIGION, ot.PAJOBPROVINCE, ot.PABLOOD, ot.PAINCOME, ot.NICKNAMETH
                FROM sas_register as sr
                LEFT JOIN sas_studentdata as sd
                ON sr.RegisNaID = sd.NID
                INNER JOIN district as dt
                ON sd.DISTRICT_ID = dt.DISTRICT_ID 
                INNER JOIN amphur as ap
                ON dt. AMPHUR_ID = ap. AMPHUR_ID
                INNER JOIN province as pv
                ON ap. PROVINCE_ID = pv. PROVINCE_ID
                LEFT JOIN sas_other as ot
                ON sd.NID = ot.NID
                WHERE sd.NID = '".$nid."'";
                 
    //$query = "SELECT * FROM sas_register";
   // $result = mysql_query($query);
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
    $row = mysql_fetch_array($result);

require('../../fpdf/fpdf.php');
define('FPDF_FONTPATH','../../fpdf/font/'); 
//$pdf=new FPDF( 'L' , 'mm' ,'A4');   เอกสารแนวนอน
/* เริ่มต้น พิมพ์รายละเอียด */
//$pdf->SetXY(10,0);  
$pdf=new FPDF('P' , 'mm' ,'A4');
	$pdf->AddPage();

$pdf->Image('../../img/Moptuastudent60.jpg',0,0,210,0,'','');
$pdf->AddFont('angsa','','angsa.php');
$pdf->SetFont('angsa','',13);

if(strcmp($row['TYPE'], "4") == 0){
	$a = "9";
	$b = "เมษายน";
	$c = "2562";
}else{
	$a = "8";
	$b = "เมษายน";
	$c = "2562";
}

$pdf->Text(82,47, iconv( 'UTF-8','TIS-620', $a));
$pdf->Text(100,47, iconv( 'UTF-8','TIS-620', $b));
$pdf->Text(132,47, iconv( 'UTF-8','TIS-620', $c));

$pdf->Text(184,63, iconv( 'UTF-8','TIS-620',$row['stuIDold'])); //รหัสนักเรียน

$pdf->Text(108,55.5, iconv( 'UTF-8','TIS-620',$row['TYPE'])); //ระดับชั้น


$n1 = substr($row['RegisNaID'], 0,1);
$n2 = substr($row['RegisNaID'], 1, 4);
$n3 = substr($row['RegisNaID'], 5, 5);
$n4 = substr($row['RegisNaID'], 10, 2);
$n5 = substr($row['RegisNaID'], 12,12);
$pdf->Text(55,85, iconv( 'UTF-8','TIS-620', $n1." - ".$n2." - ".$n3." - ".$n4." - ".$n5));

$h1 = substr($row["HID"], 0,4);
$h2 = substr($row["HID"], 4, 6);
$h3 = substr($row["HID"], 10, 1);
$pdf->Text(130,85, iconv( 'UTF-8','TIS-620', $h1." - ".$h2." - ".$h3));


$pdf->Text(30,90.5, iconv( 'UTF-8','TIS-620', $row['SNAME']." ".$row['FNAME']));

$pdf->Text(110,90.5, iconv( 'UTF-8','TIS-620', $row['LNAME']));

$pdf->Text(175,90.5, iconv( 'UTF-8','TIS-620', $row['NICKNAMETH'])); //ชื่อเล่นไทย


$pdf->Text(175,96, iconv( 'UTF-8','TIS-620', $row['ENICKNAME'])); // NicknameTH



//$pdf->Text(160,82, $get1["nname_en"] );

$pdf->Text(26,96, $row['ENAME']);

$pdf->Text(100,96, $row['ESURNAME']);

//$pdf->Text(174,91.5, $get1["nname_en"]);



//27/03/2543
$b1 = substr($row['BIRTHDAY'], 0,2);
$b2 = substr($row['BIRTHDAY'], 3, 2);
$b3 = substr($row['BIRTHDAY'], 6, 4);

if( $b2 == "01"){ $mount = "มกราคม";  }
elseif( $b2 == "02"){ $mount = "กุมภาพันธ์";  }	
elseif( $b2 == "03"){ $mount = "มีนาคม";  }	
elseif( $b2 == "04"){ $mount = "เมษายน";  }	
elseif( $b2 == "05"){ $mount = "พฤษภาคม";  }	
elseif( $b2 == "06"){ $mount = "มิถุนายน";  }	
elseif( $b2 == "07"){ $mount = "กรกฎาคม";  }	
elseif( $b2 == "08"){ $mount = "สิงหาคม";  }	
elseif( $b2 == "09"){ $mount = "กันยายน";  }	
elseif( $b2 == "10"){ $mount = "ตุลาคม";  }	
elseif( $b2 == "11"){ $mount = "พฤษจิกายน";  }	
else{ $mount = "ธันวาคม";  }	
$pdf->Text(36,101.5,iconv( 'UTF-8','TIS-620',$b1));
$pdf->Text(63,101.5,iconv( 'UTF-8','TIS-620', $mount));
$pdf->Text(110,101.5, iconv( 'UTF-8','TIS-620', $b3 ));

$pdf->Text(162,101.5, iconv( 'UTF-8','TIS-620', $row['BIRTHPRO'] )); // จังหวัดที่เกิด


//$pdf->Text(37,95, $get1["fname_en"]); // E-mail
if(strcmp($row['GROUPBLOOD'], "NO") == 0){
	$Gb ="ไม่ทราบ";
	}else{
	$Gb = $row['GROUPBLOOD'];	
	}
$pdf->Text(115,107.5, iconv( 'UTF-8','TIS-620', $Gb));
$pdf->Text(162,108, iconv( 'UTF-8','TIS-620', $row['REGINAL'])); // เชื้อชาติ

$pdf->Text(114,113, iconv( 'UTF-8','TIS-620',$row['RELI'])); //ศาสนา
$pdf->Text(30,113, iconv( 'UTF-8','TIS-620',$row['REGINALITY'])); //สัญชาติ
$pdf->Text(179,113, iconv( 'UTF-8','TIS-620',"ภาษาไทย")); //สัญชาติ
$pdf->Text(25,107.5, iconv( 'UTF-8','TIS-620',$row['EMAIL']));

$pdf->Text(50,118.5, 	iconv( 'UTF-8','TIS-620',$row['LSCHOOL']));
$pdf->Text(115,118.5, iconv( 'UTF-8','TIS-620',$row['GPA']));

$pdf->Text(82.5,149, 	iconv( 'UTF-8','TIS-620',$row['HADDRESS']));
$pdf->Text(103,149, iconv( 'UTF-8','TIS-620',$row['MOO']));
$pdf->Text(125,149, iconv( 'UTF-8','TIS-620',$row['SOI']));
$pdf->Text(172,149, iconv( 'UTF-8','TIS-620',$row['ROAD']));

$pdf->Text(27,154.5, iconv( 'UTF-8','TIS-620',$row['DISTRICT_NAME']));
$pdf->Text(76,154.5, iconv( 'UTF-8','TIS-620',$row['AMPHUR_NAME']));
$pdf->Text(128,154.5, iconv( 'UTF-8','TIS-620',$row['PROVINCE_NAME']));
$pdf->Text(186,154.5, iconv( 'UTF-8','TIS-620',$row['POSTCODE']));


$htel1 = substr($row['TEL'], 0,2);
$htel2 = substr($row['TEL'], 2, 4);
$htel3 = substr($row['TEL'], 6, 4);
$pdf->Text(125,160.5, iconv( 'UTF-8','TIS-620', $htel1." - ".$htel2." - ".$htel3)); //โทรศัพท์แก้ไข


//$htel1 = substr($row['TEL'], 0,3);
//$htel2 = substr($row['TEL'], 3, 6);
 //$pdf->Text(33,155, $htel1." - ".$htel2);


$pdf->Text(155,118.5, iconv( 'UTF-8','TIS-620', $htel1." - ".$htel2." - ".$htel3));

$pdf->Text(70,124, iconv( 'UTF-8','TIS-620', $row['BRO']));
$pdf->Text(189,124, iconv( 'UTF-8','TIS-620', $row['BROBLM']));
$pdf->Text(50,129.5, iconv( 'UTF-8','TIS-620',$row['VISIT']));
$pdf->Text(128,129.5, iconv( 'UTF-8','TIS-620',$row['DIRECT']));
$pdf->Text(184,129.5, iconv( 'UTF-8','TIS-620',$row['PAY']));
$pdf->Text(30,135.5, iconv( 'UTF-8','TIS-620',$row['WEIGHT']));
$pdf->Text(75,135.5, iconv( 'UTF-8','TIS-620',$row['HEIGHT']));
$pdf->Text(130,135.5, iconv( 'UTF-8','TIS-620',$row['HEALTHY'])); //โรคประจำตัว

$hh1 = substr($row['HID'], 0,4);
$hh2 = substr($row['HID'], 4, 6);
$hh3 = substr($row['HID'], 10, 1);
$pdf->Text(33,149, iconv( 'UTF-8','TIS-620', $hh1." - ".$hh2." - ".$hh3));

// ส่วนสุดท้ายส่วนที่ 3
$pdf->Text(53,173, iconv( 'UTF-8','TIS-620', $row['FAMILYSTATUS']));


$pdf->Text(57,178.5, iconv( 'UTF-8','TIS-620', $row['SNAMEFA']." ".$row['FNAMEFA']));
$pdf->Text(123,178.5, iconv( 'UTF-8','TIS-620',$row['LNAMEFA']));
$pdf->Text(165,178.5, iconv( 'UTF-8','TIS-620',$row['OC_FA']));


//fid
$fn1 = substr($row["FAID"], 0,1);
$fn2 = substr($row["FAID"], 1, 4);
$fn3 = substr($row["FAID"], 5, 5);
$fn4 = substr($row["FAID"], 10, 2);
$fn5 = substr($row["FAID"], 12,12);
$pdf->Text(53,184, iconv( 'UTF-8','TIS-620', $fn1." - ".$fn2." - ".$fn3." - ".$fn4." - ".$fn5 ));

$pdf->Text(120,184, iconv( 'UTF-8','TIS-620', $row['FARELIGION'])); //ศาสนาบิดา

$pdf->Text(176,184, iconv( 'UTF-8','TIS-620', $row['FAJOBPROVINCE'])); //จังหวัดที่บิดาทำงา
//$pdf->Text(121,179, $get3["faregilion"] );
//$pdf->Text(176,179, $get3["fabusiness_country"] );

//$pdf->Text(29,184.5, iconv( 'UTF-8','TIS-620',$get3["fblood"] ));
//$pdf->Text(75,184.5, iconv( 'UTF-8','TIS-620',$get3["famoney"] ));

$tmo1 = substr($row["TELFA"], 0,2);
$tmo2 = substr($row["TELFA"], 2, 4);
$tmo3 = substr($row["TELFA"], 6, 4);
$pdf->Text(150,189.5, iconv( 'UTF-8','TIS-620',$tmo1." - ".$tmo2." - ".$tmo3 ));

$pdf->Text(30,189.5, iconv( 'UTF-8','TIS-620', $row['FABLOOD'])); //หมู่โลหิตบิดา

$pdf->Text(70,189.5, iconv( 'UTF-8','TIS-620', $row['FAINCOME'])); //รายได้บิดา


$pdf->Text(57,195, iconv( 'UTF-8','TIS-620', $row['SNAMEMA']." ".$row['FNAMEMA']));
$pdf->Text(123,195, iconv( 'UTF-8','TIS-620',$row["LNAMEMA"] ));
$pdf->Text(165,195, iconv( 'UTF-8','TIS-620',$row["OC_MA"] ));

//mid
$mn1 = substr($row["MAID"], 0,1);
$mn2 = substr($row["MAID"], 1, 4);
$mn3 = substr($row["MAID"], 5, 5);
$mn4 = substr($row["MAID"], 10, 2);
$mn5 = substr($row["MAID"], 12,12);
$pdf->Text(53,201, iconv( 'UTF-8','TIS-620',$mn1." - ".$mn2." - ".$mn3." - ".$mn4." - ".$mn5 ));


$pdf->Text(120,201, iconv( 'UTF-8','TIS-620', $row['MARELIGION'])); //ศาสนามารดา

$pdf->Text(176,201, iconv( 'UTF-8','TIS-620', $row['MAJOBPROVINCE'])); //จังหวัดที่มารดาทำงา


$mmo1 = substr($row["TELMA"], 0,2);
$mmo2 = substr($row["TELMA"], 2, 4);
$mmo3 = substr($row["TELMA"], 6, 4);
$pdf->Text(150,206.5, iconv( 'UTF-8','TIS-620',$mmo1." - ".$mmo2." - ".$mmo3));

$pdf->Text(30,206.5, iconv( 'UTF-8','TIS-620', $row['MABLOOD'])); //หมู่โลหิตมารดา

$pdf->Text(70,206.5, iconv( 'UTF-8','TIS-620', $row['MAINCOME'])); //รายได้มารดา

//17
$pn1 = substr($row["PAID"], 0,1);
$pn2 = substr($row["PAID"], 1, 4);
$pn3 = substr($row["PAID"], 5, 5);
$pn4 = substr($row["PAID"], 10, 2);
$pn5 = substr($row["PAID"], 12,12);
$pdf->Text(53,221, iconv( 'UTF-8','TIS-620',$pn1." - ".$pn2." - ".$pn3." - ".$pn4." - ".$pn5 ));

$pdf->Text(103,221.5, iconv( 'UTF-8','TIS-620', $row['PARELIGION'])); //ศาสนาผู้ปกครอง
$pdf->Text(136,221.5, iconv( 'UTF-8','TIS-620', $row['PABLOOD'])); //หมู่โลหิตผู้ปกครอง
$pdf->Text(172,221.5, iconv( 'UTF-8','TIS-620', $row['PAINCOME'])); //รายได้ผู้ปกครอง

$pdf->Text(57,214, iconv( 'UTF-8','TIS-620', $row['SNAMEPA']." ".$row['FNAMEPA']));
$pdf->Text(123,214, iconv( 'UTF-8','TIS-620',$row["LNAMEPA"] ));
$pdf->Text(165,214, iconv( 'UTF-8','TIS-620',$row["OC_PA"]));
$bmo1 = substr($row["TELPA"], 0,2);
$bmo2 = substr($row["TELPA"], 2, 4);
$bmo3 = substr($row["TELPA"], 6, 4);
$pdf->Text(33,226.5, iconv( 'UTF-8','TIS-620',$bmo1." - ".$bmo2." - ".$bmo3));

$pdf->Text(110,226.5, iconv( 'UTF-8','TIS-620', $row['PAJOBPROVINCE'])); //จังหวัดผู้ปกครอง

$pdf->Text(181,226.5, iconv( 'UTF-8','TIS-620',$row["RELATION"]));



$pdf->Text(39,236, iconv( 'UTF-8','TIS-620',$row["SNAME"]." ".$row["FNAME"]."  ".$row["LNAME"] ));



$a= $row["RegisNaID"].".pdf";
$pdf_file = "TNWWelcome-".$a;

$pdf->Output("../../fpdf/MyPDF/".$pdf_file,"F");
//$pdf->Output("MyPDF/MyPDF.pdf","F");  */



?>
<center>

<a href="../../fpdf/MyPDF/<?php echo $pdf_file; ?>" target="_blank"><img src="../../img/D9435886-20.gif" title="โหลดใบมอบตัว" border="0"></a><br>
<h3>คลิกที่รูป 1 ครั้งเพื่อดาวน์โหลด </h3>
หากมีปัญหาในการดาวน์โหลดเอกสารใบมอบตัว ให้ทำการ รีเฟรช หน้าเอกสาร PDF หรือ กด F5 ที่คีย์บอร์ด<br>
</center>

<?php   } // end ifisset?>