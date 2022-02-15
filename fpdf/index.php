<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>โหลดเอกสารใบมอบตัว</title>
</head>

<body>

<?php
	/*require('fpdf.php');

	define('FPDF_FONTPATH','font/');

	$pdf=new FPDF();
	$pdf->AddPage();
	$pdf->AddFont('angsa','','angsa.php');
	$pdf->SetFont('angsa','',36);
	$pdf->Cell(0,20,iconv( 'UTF-8','TIS-620','สวัสดี พ่อใหญ่ อัครพงษ์ ติงสะ'),0,1,"C");
	$pdf->Output("MyPDF/MyPDF.pdf","F");  */
?>
	<!--PDF Created Click <a href="MyPDF/MyPDF.pdf">here</a> to Download !-->




<?php
//echo $_SESSION["EDITE"][13];
if(isset($_SESSION["EDITE"])){

//require_once("../link.php");
require('fpdf.php');
define('FPDF_FONTPATH','font/'); 
//$pdf=new FPDF( 'L' , 'mm' ,'A4');   เอกสารแนวนอน

$pdf=new FPDF('P' , 'mm' ,'A4');
	$pdf->AddPage();
//$pdf->AddFont('angsana','B','angsanab.php');  
//$pdf->AddFont('angsana','','angsana.php');  
$pdf->AddFont('angsa','','angsa.php');




		/*Edite Data*/
		
if(isset($_SESSION["EDITE"])){
		if($_SESSION["EDITE"][1] == "1"){
		$pdf->Image('../img/M-1.jpg',0,0,207,0,'','');
		}
		else{
		$pdf->Image('../img/M-4.jpg',0,0,207,0,'','');
		}		 
}
		else {}  



/* เริ่มต้น พิมพ์รายละเอียด */
;  
$pdf->SetFont('angsa','',14);
$n1 = substr($_SESSION["EDITE"][0], 0,1);
$n2 = substr($_SESSION["EDITE"][0], 1, 4);
$n3 = substr($_SESSION["EDITE"][0], 5, 5);
$n4 = substr($_SESSION["EDITE"][0], 10, 2);
$n5 = substr($_SESSION["EDITE"][0], 12,12);

$pdf->Text(60,50.5, $n1." - ".$n2." - ".$n3." - ".$n4." - ".$n5 ); //แนวตั้งแกน X , Y
$pdf->Text(160,50.5, $_SESSION["EDITE"][41]);
//$pdf->Text(63,97.5,iconv( 'UTF-8','TIS-620', $mount));
$pdf->Text(25,61.5, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][9]));
$pdf->Text(100,61.5, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][10]));
$pdf->Text(150,61.5, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][12]));
$pdf->Text(180,61.5, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][13]));

//27/03/2543
$b1 = substr($_SESSION["EDITE"][11], 0,2);
$b2 = substr($_SESSION["EDITE"][11], 3, 2);
$b3 = substr($_SESSION["EDITE"][11], 6, 4);

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
$pdf->Text(33,67.5, $b1);
$pdf->Text(59,67.5,iconv( 'UTF-8','TIS-620', $mount));
$pdf->Text(100,67.5, $b3 );
$pdf->Text(155,67.5,iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][14]));

$pdf->Text(32,73, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][15]));
$pdf->Text(115,73, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][16]));

$pdf->Text(62,79,iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][17])); //แต่ละแถวต่างกัน 6
$pdf->Text(95,79, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][18]));
$pdf->Text(125,79, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][19]));
$pdf->Text(170,79, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][42]));

$pdf->Text(22,85,iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][37])); //แต่ละแถวต่างกัน 6
$pdf->Text(72,85, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][39]));
$pdf->Text(125,85, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][40]));
$pdf->Text(180,85, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][38]));

$hmo1 = substr($_SESSION["EDITE"][23], 0,2);
$hmo2 = substr($_SESSION["EDITE"][23], 2, 4);
$hmo3 = substr($_SESSION["EDITE"][23], 6, 4);
$pdf->Text(125,91, iconv( 'UTF-8','TIS-620', $hmo1." - ".$hmo2." - ".$hmo3));

$pdf->Text(42,104.5, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][26]));
$pdf->Text(170,104.5, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][27]));

$pdf->Text(42,111.5, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][29]." ".$_SESSION["EDITE"][30]));
$hmofa1 = substr($_SESSION["EDITE"][31], 0,2);
$hmofa2 = substr($_SESSION["EDITE"][31], 2, 4);
$hmofa3 = substr($_SESSION["EDITE"][31], 6, 4);
$pdf->Text(170,111.5, iconv( 'UTF-8','TIS-620', $hmofa1." - ".$hmofa2." - ".$hmofa3));
//$pdf->Text(170,111.5, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][31]));

$pdf->Text(42,118.5, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][33]." ".$_SESSION["EDITE"][34]));
$hmoma1 = substr($_SESSION["EDITE"][35], 0,2);
$hmoma2 = substr($_SESSION["EDITE"][35], 2, 4);
$hmoma3 = substr($_SESSION["EDITE"][35], 6, 4);
$pdf->Text(170,118.5, iconv( 'UTF-8','TIS-620', $hmoma1." - ".$hmoma2." - ".$hmoma3));

$pdf->Text(55,125.5, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][36]));

$pdf->Text(23,158.5, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][2]));

$pdf->Text(140,162.5, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][5]));
$pdf->Text(140,168.5, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][6]));
$pdf->Text(140,174.5, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][7]));

$pdf->Text(133,194, iconv( 'UTF-8','TIS-620', 
							$_SESSION["EDITE"][8]." ".$_SESSION["EDITE"][9]." ".$_SESSION["EDITE"][10]));
//$pdf->Text(23,158.5, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][2]));

$pdf->Text(51,232.5, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][41]));
$pdf->Text(59,238, $n1." - ".$n2." - ".$n3." - ".$n4." - ".$n5 );
$pdf->Text(47,243, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][8]." ".$_SESSION["EDITE"][9]." ".$_SESSION["EDITE"][10]));
$pdf->Text(48,249, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][2]));
$pdf->Text(59,254.5, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][5]));
$pdf->Text(59,260, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][6]));
$pdf->Text(59,265.5, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][7]));

$pdf->Text(151,231.5, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][41]));
$pdf->Text(159,237, $n1." - ".$n2." - ".$n3." - ".$n4." - ".$n5 );
$pdf->Text(147,242, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][8]." ".$_SESSION["EDITE"][9]." ".$_SESSION["EDITE"][10]));
$pdf->Text(148,247.5, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][2]));
$pdf->Text(159,253, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][5]));
$pdf->Text(159,259, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][6]));
$pdf->Text(159,264.5, iconv( 'UTF-8','TIS-620', $_SESSION["EDITE"][7]));


$a= $_SESSION["EDITE"][0].".pdf";
$pdf_file = "Thatnaraiwittay-".$a;

$pdf->Output("fpdf/MyPDF/".$pdf_file,"F");
//$pdf->Output("MyPDF/MyPDF.pdf","F");  */


} // isset keypdf
?>
<center>

<a href="fpdf/MyPDF/<?=$pdf_file?>" target="_blank"><img src="../tab/images/D9435886-20.gif" title="โหลดเกียรติบัตร" border="0"></a><br>
<h3>คลิกที่รูป 1 ครั้งเพื่อดาวน์โหลด </h3>
หากมีปัญหาในการดาวน์โหลดเอกสารใบมอบตัว ให้ทำการ รีเฟรช หน้าเอกสาร PDF หรือ กด F5 ที่คีย์บอร์ด<br>
หลังจากโหลดเอกสารเกียรติบัตรได้แล้ว กรุณา บันทึกเก็บไว้ที่เครื่องคอมพิวเตอร์ของท่านด้วย
</center>

</body>
</html>