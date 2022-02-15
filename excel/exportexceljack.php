


<?php
//if(isset($_POST["excel"],$_POST["download"])){
if (isset($_POST["lbexcel"], $_POST["btexcel"])) {
/**
 * PHPExcel
 *
 * Copyright (C) 2006 - 2011 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2011 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt    LGPL
 * @version    1.7.6, 2011-02-27
 */

/** Error reporting */
    error_reporting(E_ALL);

    date_default_timezone_set('Asia/Bangkok');

/** PHPExcel */
//require_once '../Classes/PHPExcel.php';
    require_once './excel/Classes/PHPExcel.php';

// Create new PHPExcel object
    //echo date('H:i:s') . " Create new PHPExcel object\n";
    $objPHPExcel = new PHPExcel();

// Set properties
    //echo date('H:i:s') . " Set properties\n";
    $objPHPExcel->getProperties()->setCreator("Kittisak Sangtong")
        ->setLastModifiedBy("Kittisak Sangtong")
        ->setTitle("Office 2007 XLSX Test Document")
        ->setSubject("Office 2007 XLSX Test Document")
        ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
        ->setKeywords("office 2007 openxml php")
        ->setCategory("Test result file");

    $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('P')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('R')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('S')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('T')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('U')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('V')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('W')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('X')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AA')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AB')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AC')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AD')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AE')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AF')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AG')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AH')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AI')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AJ')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AK')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AL')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AM')->setAutoSize(true);

// Add some data
    //echo date('H:i:s') . " Add some data\n";

    $objPHPExcel->setActiveSheetIndex(0)
        ->setCellValue('A1', 'เลขที่')
        ->setCellValue('B1', 'รหัสผู้ใช้งาน')
        ->setCellValue('C1', 'เลขบัตรประชาชน')
        ->setCellValue('D1', 'ระดับชั้น')
        ->setCellValue('E1', 'คำนำหน้า')
        ->setCellValue('F1', 'ชื่อ')
        ->setCellValue('G1', 'สกุล')
        ->setCellValue('H1', 'โทรศัพท์')
        ->setCellValue('I1', 'ประเภทนักเรียน')
        ->setCellValue('J1', 'โรงเรียนเดิม')
        ->setCellValue('K1', 'จังหวัด')
        ->setCellValue('L1', 'เกรดเฉลี่ย')
        ->setCellValue('M1', 'O-NET')
        ->setCellValue('N1', 'แผนการเรียน 1')
        ->setCellValue('O1', 'แผนการเรียน 2')
        ->setCellValue('P1', 'แผนการเรียน 3')

        ->setCellValue('Q1', 'ชื่อบิดา')
        ->setCellValue('R1', 'นามสกุลบิดา')
        ->setCellValue('S1', 'โทรศัพท์')
        ->setCellValue('T1', 'ชื่อมารดา')
        ->setCellValue('U1', 'นามสกุลมารดา')
        ->setCellValue('V1', 'โทรศัพท์')

        ->setCellValue('W1', 'ชื่อผู้ปกครอง')
        ->setCellValue('X1', 'นามสกุลผู้ปกครอง')
        ->setCellValue('Y1', 'โทรศัพท์')
        
        ->setCellValue('Z1', 'วันสมัคร')
        ->setCellValue('AA1', 'เลขที่นั่งสอบ')
        ->setCellValue('AB1', 'ห้องสอบที่')
        ->setCellValue('AC1', 'อาคารสอบ')
        ->setCellValue('AD1', 'เลขที่ห้องสอบ')
        ->setCellValue('AE1', 'บ้านเลขที่')
        ->setCellValue('AF1', 'หมู่ที่')
        ->setCellValue('AG1', 'ซอย')
        ->setCellValue('AH1', 'ถนน')
        ->setCellValue('AI1', 'ตำบล')
        ->setCellValue('AJ1', 'อำเภอ')
        ->setCellValue('AK1', 'จังหวัด')
        ->setCellValue('AL1', 'วัน เดือน ปีเกิด')
        ->setCellValue('AM1', 'วันยืนยันการสมัคร');

// Write data from MySQL result

    $servername = "localhost";
    $username = "admission_web";
    $password = "MldwSCiq";
    $dbname = "admission_web";


// Create connection
    $objConnect = @mysql_connect($servername, $username, $password);
    $objDB = mysql_select_db($dbname);
    mysql_query("SET character_set_results=utf8"); //??????????????????????????????? utf8
    mysql_query("SET character_set_client=utf8"); //?????????????????????????????????????????? utf8
    mysql_query("SET character_set_connection=utf8"); //???????????????????????????????? utf8
    if (isset($_POST["lbexcel"])) {
        $ad = 0;
        if ($_POST["lbexcel"] == "1") {

             $strSQL = "SELECT NID, TYPE, SNAME, FNAME, LNAME, TEL, OPTIONS, LSCHOOL, ID_PROVINCE_SC, GPA, BIRTHDAY, 
                                schoolsecond, PLAN1, PLAN2, PLAN3, 
                                SNAMEFA, FNAMEFA, LNAMEFA, TELFA, 
                                SNAMEMA, FNAMEMA, LNAMEMA, TELMA, 
                                SNAMEPA, FNAMEPA, LNAMEPA, TELPA,
                                HADDRESS, MOO, SOI, ROAD,
                                dt.DISTRICT_NAME, ap.AMPHUR_NAME, pv.PROVINCE_NAME,
                                sr.RegisNO, sr.RegisStatus, sr.RegisLLog, sr.RegisConfirm,
                                exno.ExamStuNo, exno.ExamID
                FROM sas_studentdata as sd
                INNER JOIN district as dt
                ON sd.DISTRICT_ID = dt.DISTRICT_ID
                INNER JOIN amphur as ap
                ON dt. AMPHUR_ID = ap. AMPHUR_ID
                INNER JOIN province as pv
                ON ap. PROVINCE_ID = pv. PROVINCE_ID
                INNER JOIN sas_register as sr
                ON sd.NID = sr.RegisNaID
				LEFT JOIN  sas_examno as exno
                ON sd.NID = exno.ExamNID
				WHERE sd.TYPE = '1' AND sr.RegisStatus='1'   ORDER BY sd.SID ASC";
            $objPHPExcel->getActiveSheet()->setTitle('ม.1 ทั้งหมด');
            $ad = 1;
        } elseif ($_POST["lbexcel"] == "2") {

            $strSQL = "SELECT NID, TYPE, SNAME, FNAME, LNAME, TEL, OPTIONS, LSCHOOL, ID_PROVINCE_SC, GPA, BIRTHDAY,
                               schoolsecond, PLAN1, PLAN2, PLAN3, 
                               SNAMEFA, FNAMEFA, LNAMEFA, TELFA, 
                               SNAMEMA, FNAMEMA, LNAMEMA, TELMA, 
                               SNAMEPA, FNAMEPA, LNAMEPA, TELPA,
                               HADDRESS, MOO, SOI, ROAD,
                               dt.DISTRICT_NAME, ap.AMPHUR_NAME, pv.PROVINCE_NAME,
                               sr.RegisNO, sr.RegisStatus, sr.RegisLLog, sr.RegisConfirm, 
                               exno.ExamStuNo, exno.ExamID
               FROM sas_studentdata as sd
               INNER JOIN district as dt
               ON sd.DISTRICT_ID = dt.DISTRICT_ID
               INNER JOIN amphur as ap
               ON dt. AMPHUR_ID = ap. AMPHUR_ID
               INNER JOIN province as pv
               ON ap. PROVINCE_ID = pv. PROVINCE_ID
               INNER JOIN sas_register as sr
               ON sd.NID = sr.RegisNaID
               LEFT JOIN  sas_examno as exno
               ON sd.NID = exno.ExamNID
               WHERE sd.TYPE = '1' AND sd.OPTIONS = 'นักเรียนในเขตพื้นที่บริการ' AND sr.RegisStatus='1'   ORDER BY sr.RegisConfirm ASC";
           $objPHPExcel->getActiveSheet()->setTitle('ม.1 นักเรียนในเขตพื้นที่บริการ');
           $ad = 2;
       } elseif ($_POST["lbexcel"] == "3") {

        $strSQL = "SELECT NID, TYPE, SNAME, FNAME, LNAME, TEL, OPTIONS, LSCHOOL, ID_PROVINCE_SC, GPA, BIRTHDAY,
                           schoolsecond, PLAN1, PLAN2, PLAN3, 
                           SNAMEFA, FNAMEFA, LNAMEFA, TELFA, 
                           SNAMEMA, FNAMEMA, LNAMEMA, TELMA, 
                           SNAMEPA, FNAMEPA, LNAMEPA, TELPA,
                           HADDRESS, MOO, SOI, ROAD,
                           dt.DISTRICT_NAME, ap.AMPHUR_NAME, pv.PROVINCE_NAME,
                           sr.RegisNO, sr.RegisStatus, sr.RegisLLog, sr.RegisConfirm, 
                           exno.ExamStuNo, exno.ExamID
           FROM sas_studentdata as sd
           INNER JOIN district as dt
           ON sd.DISTRICT_ID = dt.DISTRICT_ID
           INNER JOIN amphur as ap
           ON dt. AMPHUR_ID = ap. AMPHUR_ID
           INNER JOIN province as pv
           ON ap. PROVINCE_ID = pv. PROVINCE_ID
           INNER JOIN sas_register as sr
           ON sd.NID = sr.RegisNaID
           LEFT JOIN  sas_examno as exno
           ON sd.NID = exno.ExamNID
           WHERE sd.TYPE = '1' AND sd.OPTIONS = 'นักเรียนนอกเขตพื้นที่บริการ' AND sr.RegisStatus='1'   ORDER BY sr.RegisConfirm ASC";
       $objPHPExcel->getActiveSheet()->setTitle('ม.1 นักเรียนนอกเขตพื้นที่บริการ');
       $ad = 3;
   }
       
       elseif ($_POST["lbexcel"] == "4") {

             $strSQL = "SELECT NID, TYPE, SNAME, FNAME, LNAME, TEL, OPTIONS, LSCHOOL, ID_PROVINCE_SC, GPA, BIRTHDAY,
                                schoolsecond, PLAN1, PLAN2, PLAN3, 
                                SNAMEFA, FNAMEFA, LNAMEFA, TELFA, 
                                SNAMEMA, FNAMEMA, LNAMEMA, TELMA, 
                                SNAMEPA, FNAMEPA, LNAMEPA, TELPA,
                                HADDRESS, MOO, SOI, ROAD,
                                dt.DISTRICT_NAME, ap.AMPHUR_NAME, pv.PROVINCE_NAME,
                                sr.RegisNO, sr.RegisStatus, sr.RegisLLog, sr.RegisConfirm, 
                                exno.ExamStuNo, exno.ExamID
                FROM sas_studentdata as sd
                INNER JOIN district as dt
                ON sd.DISTRICT_ID = dt.DISTRICT_ID
                INNER JOIN amphur as ap
                ON dt. AMPHUR_ID = ap. AMPHUR_ID
                INNER JOIN province as pv
                ON ap. PROVINCE_ID = pv. PROVINCE_ID
                INNER JOIN sas_register as sr
                ON sd.NID = sr.RegisNaID
				LEFT JOIN  sas_examno as exno
                ON sd.NID = exno.ExamNID
				WHERE sd.TYPE = '4' AND sr.RegisStatus='1'   ORDER BY sd.SID ASC";
            $objPHPExcel->getActiveSheet()->setTitle('ม.4 ทั้งหมด');
            $ad = 4;
        } 

        elseif ($_POST["lbexcel"] == "5") {

            $strSQL = "SELECT NID, TYPE, SNAME, FNAME, LNAME, TEL, OPTIONS, LSCHOOL, ID_PROVINCE_SC, GPA, BIRTHDAY,
                               schoolsecond, PLAN1, PLAN2, PLAN3, 
                               SNAMEFA, FNAMEFA, LNAMEFA, TELFA, 
                               SNAMEMA, FNAMEMA, LNAMEMA, TELMA, 
                               SNAMEPA, FNAMEPA, LNAMEPA, TELPA,
                               HADDRESS, MOO, SOI, ROAD,
                               dt.DISTRICT_NAME, ap.AMPHUR_NAME, pv.PROVINCE_NAME,
                               sr.RegisNO, sr.RegisStatus, sr.RegisLLog, sr.RegisConfirm, 
                               exno.ExamStuNo, exno.ExamID
               FROM sas_studentdata as sd
               INNER JOIN district as dt
               ON sd.DISTRICT_ID = dt.DISTRICT_ID
               INNER JOIN amphur as ap
               ON dt. AMPHUR_ID = ap. AMPHUR_ID
               INNER JOIN province as pv
               ON ap. PROVINCE_ID = pv. PROVINCE_ID
               INNER JOIN sas_register as sr
               ON sd.NID = sr.RegisNaID
               LEFT JOIN  sas_examno as exno
               ON sd.NID = exno.ExamNID
               WHERE sd.TYPE = '4' AND sd.PLAN1 = 'วิทยาศาสตร์-คณิตศาสตร์' AND sr.RegisStatus='1'   ORDER BY sr.RegisConfirm ASC";
           $objPHPExcel->getActiveSheet()->setTitle('ม.4 วิทยาศาสตร์-คณิตศาสตร์');
           $ad = 5;
       }
       elseif ($_POST["lbexcel"] == "6") {

        $strSQL = "SELECT NID, TYPE, SNAME, FNAME, LNAME, TEL, OPTIONS, LSCHOOL, ID_PROVINCE_SC, GPA, BIRTHDAY,
                           schoolsecond, PLAN1, PLAN2, PLAN3, 
                           SNAMEFA, FNAMEFA, LNAMEFA, TELFA, 
                           SNAMEMA, FNAMEMA, LNAMEMA, TELMA, 
                           SNAMEPA, FNAMEPA, LNAMEPA, TELPA,
                           HADDRESS, MOO, SOI, ROAD,
                           dt.DISTRICT_NAME, ap.AMPHUR_NAME, pv.PROVINCE_NAME,
                           sr.RegisNO, sr.RegisStatus, sr.RegisLLog, sr.RegisConfirm, 
                           exno.ExamStuNo, exno.ExamID
           FROM sas_studentdata as sd
           INNER JOIN district as dt
           ON sd.DISTRICT_ID = dt.DISTRICT_ID
           INNER JOIN amphur as ap
           ON dt. AMPHUR_ID = ap. AMPHUR_ID
           INNER JOIN province as pv
           ON ap. PROVINCE_ID = pv. PROVINCE_ID
           INNER JOIN sas_register as sr
           ON sd.NID = sr.RegisNaID
           LEFT JOIN  sas_examno as exno
           ON sd.NID = exno.ExamNID
           WHERE sd.TYPE = '4' AND sd.PLAN1 = 'วิทยาศาสตร์-คอมพิวเตอร์' AND sr.RegisStatus='1'   ORDER BY sr.RegisConfirm ASC";
       $objPHPExcel->getActiveSheet()->setTitle('ม.4 วิทยาศาสตร์-คอมพิวเตอร์');
       $ad = 6;
   }
   elseif ($_POST["lbexcel"] == "7") {

    $strSQL = "SELECT NID, TYPE, SNAME, FNAME, LNAME, TEL, OPTIONS, LSCHOOL, ID_PROVINCE_SC, GPA, BIRTHDAY,
                       schoolsecond, PLAN1, PLAN2, PLAN3, 
                       SNAMEFA, FNAMEFA, LNAMEFA, TELFA, 
                       SNAMEMA, FNAMEMA, LNAMEMA, TELMA, 
                       SNAMEPA, FNAMEPA, LNAMEPA, TELPA,
                       HADDRESS, MOO, SOI, ROAD,
                       dt.DISTRICT_NAME, ap.AMPHUR_NAME, pv.PROVINCE_NAME,
                       sr.RegisNO, sr.RegisStatus, sr.RegisLLog, sr.RegisConfirm, 
                       exno.ExamStuNo, exno.ExamID
       FROM sas_studentdata as sd
       INNER JOIN district as dt
       ON sd.DISTRICT_ID = dt.DISTRICT_ID
       INNER JOIN amphur as ap
       ON dt. AMPHUR_ID = ap. AMPHUR_ID
       INNER JOIN province as pv
       ON ap. PROVINCE_ID = pv. PROVINCE_ID
       INNER JOIN sas_register as sr
       ON sd.NID = sr.RegisNaID
       LEFT JOIN  sas_examno as exno
       ON sd.NID = exno.ExamNID
       WHERE sd.TYPE = '4' AND sd.PLAN1 = 'อังกฤษ-จีน' AND sr.RegisStatus='1'   ORDER BY sr.RegisConfirm ASC";
   $objPHPExcel->getActiveSheet()->setTitle('ม.4 อังกฤษ-จีน');
   $ad = 7;
}
elseif ($_POST["lbexcel"] == "8") {

    $strSQL = "SELECT NID, TYPE, SNAME, FNAME, LNAME, TEL, OPTIONS, LSCHOOL, ID_PROVINCE_SC, GPA, BIRTHDAY,
                       schoolsecond, PLAN1, PLAN2, PLAN3, 
                       SNAMEFA, FNAMEFA, LNAMEFA, TELFA, 
                       SNAMEMA, FNAMEMA, LNAMEMA, TELMA, 
                       SNAMEPA, FNAMEPA, LNAMEPA, TELPA,
                       HADDRESS, MOO, SOI, ROAD,
                       dt.DISTRICT_NAME, ap.AMPHUR_NAME, pv.PROVINCE_NAME,
                       sr.RegisNO, sr.RegisStatus, sr.RegisLLog, sr.RegisConfirm, 
                       exno.ExamStuNo, exno.ExamID
       FROM sas_studentdata as sd
       INNER JOIN district as dt
       ON sd.DISTRICT_ID = dt.DISTRICT_ID
       INNER JOIN amphur as ap
       ON dt. AMPHUR_ID = ap. AMPHUR_ID
       INNER JOIN province as pv
       ON ap. PROVINCE_ID = pv. PROVINCE_ID
       INNER JOIN sas_register as sr
       ON sd.NID = sr.RegisNaID
       LEFT JOIN  sas_examno as exno
       ON sd.NID = exno.ExamNID
       WHERE sd.TYPE = '4' AND sd.PLAN1 = 'อังกฤษ-ญี่ปุ่น' AND sr.RegisStatus='1'   ORDER BY sr.RegisConfirm ASC";
   $objPHPExcel->getActiveSheet()->setTitle('ม.4 อังกฤษ-ญี่ปุ่น');
   $ad = 8;
}
elseif ($_POST["lbexcel"] == "9") {

    $strSQL = "SELECT NID, TYPE, SNAME, FNAME, LNAME, TEL, OPTIONS, LSCHOOL, ID_PROVINCE_SC, GPA, BIRTHDAY,
                       schoolsecond, PLAN1, PLAN2, PLAN3, 
                       SNAMEFA, FNAMEFA, LNAMEFA, TELFA, 
                       SNAMEMA, FNAMEMA, LNAMEMA, TELMA, 
                       SNAMEPA, FNAMEPA, LNAMEPA, TELPA,
                       HADDRESS, MOO, SOI, ROAD,
                       dt.DISTRICT_NAME, ap.AMPHUR_NAME, pv.PROVINCE_NAME,
                       sr.RegisNO, sr.RegisStatus, sr.RegisLLog, sr.RegisConfirm, 
                       exno.ExamStuNo, exno.ExamID
       FROM sas_studentdata as sd
       INNER JOIN district as dt
       ON sd.DISTRICT_ID = dt.DISTRICT_ID
       INNER JOIN amphur as ap
       ON dt. AMPHUR_ID = ap. AMPHUR_ID
       INNER JOIN province as pv
       ON ap. PROVINCE_ID = pv. PROVINCE_ID
       INNER JOIN sas_register as sr
       ON sd.NID = sr.RegisNaID
       LEFT JOIN  sas_examno as exno
       ON sd.NID = exno.ExamNID
       WHERE sd.TYPE = '4' AND sd.PLAN1 = 'อังกฤษ-เวียดนาม' AND sr.RegisStatus='1'   ORDER BY sr.RegisConfirm ASC";
   $objPHPExcel->getActiveSheet()->setTitle('ม.4 อังกฤษ-เวียดนาม');
   $ad = 9;
}

elseif ($_POST["lbexcel"] == "10") {

    $strSQL = "SELECT NID, TYPE, SNAME, FNAME, LNAME, TEL, OPTIONS, LSCHOOL, ID_PROVINCE_SC, GPA, BIRTHDAY,
                       schoolsecond, PLAN1, PLAN2, PLAN3, 
                       SNAMEFA, FNAMEFA, LNAMEFA, TELFA, 
                       SNAMEMA, FNAMEMA, LNAMEMA, TELMA, 
                       SNAMEPA, FNAMEPA, LNAMEPA, TELPA,
                       HADDRESS, MOO, SOI, ROAD,
                       dt.DISTRICT_NAME, ap.AMPHUR_NAME, pv.PROVINCE_NAME,
                       sr.RegisNO, sr.RegisStatus, sr.RegisLLog, sr.RegisConfirm, 
                       exno.ExamStuNo, exno.ExamID
       FROM sas_studentdata as sd
       INNER JOIN district as dt
       ON sd.DISTRICT_ID = dt.DISTRICT_ID
       INNER JOIN amphur as ap
       ON dt. AMPHUR_ID = ap. AMPHUR_ID
       INNER JOIN province as pv
       ON ap. PROVINCE_ID = pv. PROVINCE_ID
       INNER JOIN sas_register as sr
       ON sd.NID = sr.RegisNaID
       LEFT JOIN  sas_examno as exno
       ON sd.NID = exno.ExamNID
       WHERE sd.TYPE = '4' AND sd.PLAN1 = 'อังกฤษ-เกาหลี' AND sr.RegisStatus='1'   ORDER BY sr.RegisConfirm DESC";
   $objPHPExcel->getActiveSheet()->setTitle('ม.4 อังกฤษ-เกาหลี');
   $ad = 10;
}
elseif ($_POST["lbexcel"] == "11") {

    $strSQL = "SELECT NID, TYPE, SNAME, FNAME, LNAME, TEL, OPTIONS, LSCHOOL, ID_PROVINCE_SC, GPA, BIRTHDAY,
                       schoolsecond, PLAN1, PLAN2, PLAN3, 
                       SNAMEFA, FNAMEFA, LNAMEFA, TELFA, 
                       SNAMEMA, FNAMEMA, LNAMEMA, TELMA, 
                       SNAMEPA, FNAMEPA, LNAMEPA, TELPA,
                       HADDRESS, MOO, SOI, ROAD,
                       dt.DISTRICT_NAME, ap.AMPHUR_NAME, pv.PROVINCE_NAME,
                       sr.RegisNO, sr.RegisStatus, sr.RegisLLog, sr.RegisConfirm, 
                       exno.ExamStuNo, exno.ExamID
       FROM sas_studentdata as sd
       INNER JOIN district as dt
       ON sd.DISTRICT_ID = dt.DISTRICT_ID
       INNER JOIN amphur as ap
       ON dt. AMPHUR_ID = ap. AMPHUR_ID
       INNER JOIN province as pv
       ON ap. PROVINCE_ID = pv. PROVINCE_ID
       INNER JOIN sas_register as sr
       ON sd.NID = sr.RegisNaID
       LEFT JOIN  sas_examno as exno
       ON sd.NID = exno.ExamNID
       WHERE sd.TYPE = '4' AND sd.PLAN1 = 'ไทย-สังคม' AND sr.RegisStatus='1'   ORDER BY sr.RegisConfirm ASC";
   $objPHPExcel->getActiveSheet()->setTitle('ม.4 ไทย-สังคม');
   $ad = 11;
}

elseif ($_POST["lbexcel"] == "12") {

    $strSQL = "SELECT NID, TYPE, SNAME, FNAME, LNAME, TEL, OPTIONS, LSCHOOL, ID_PROVINCE_SC, GPA, BIRTHDAY,
                       schoolsecond, PLAN1, PLAN2, PLAN3, 
                       SNAMEFA, FNAMEFA, LNAMEFA, TELFA, 
                       SNAMEMA, FNAMEMA, LNAMEMA, TELMA, 
                       SNAMEPA, FNAMEPA, LNAMEPA, TELPA,
                       HADDRESS, MOO, SOI, ROAD,
                       dt.DISTRICT_NAME, ap.AMPHUR_NAME, pv.PROVINCE_NAME,
                       sr.RegisNO, sr.RegisStatus, sr.RegisLLog, sr.RegisConfirm, 
                       exno.ExamStuNo, exno.ExamID
       FROM sas_studentdata as sd
       INNER JOIN district as dt
       ON sd.DISTRICT_ID = dt.DISTRICT_ID
       INNER JOIN amphur as ap
       ON dt. AMPHUR_ID = ap. AMPHUR_ID
       INNER JOIN province as pv
       ON ap. PROVINCE_ID = pv. PROVINCE_ID
       INNER JOIN sas_register as sr
       ON sd.NID = sr.RegisNaID
       LEFT JOIN  sas_examno as exno
       ON sd.NID = exno.ExamNID
       WHERE sd.TYPE = '1' AND sr.RegisStatus='0'   ORDER BY sr.RegisConfirm ASC";
   $objPHPExcel->getActiveSheet()->setTitle('ม.1 (ยังไม่ยืนยัน)');
   $ad = 12;
}

elseif ($_POST["lbexcel"] == "13") {

    $strSQL = "SELECT NID, TYPE, SNAME, FNAME, LNAME, TEL, OPTIONS, LSCHOOL, ID_PROVINCE_SC, GPA, BIRTHDAY,
                       schoolsecond, PLAN1, PLAN2, PLAN3, 
                       SNAMEFA, FNAMEFA, LNAMEFA, TELFA, 
                       SNAMEMA, FNAMEMA, LNAMEMA, TELMA, 
                       SNAMEPA, FNAMEPA, LNAMEPA, TELPA,
                       HADDRESS, MOO, SOI, ROAD,
                       dt.DISTRICT_NAME, ap.AMPHUR_NAME, pv.PROVINCE_NAME,
                       sr.RegisNO, sr.RegisStatus, sr.RegisLLog, sr.RegisConfirm, 
                       exno.ExamStuNo, exno.ExamID
       FROM sas_studentdata as sd
       INNER JOIN district as dt
       ON sd.DISTRICT_ID = dt.DISTRICT_ID
       INNER JOIN amphur as ap
       ON dt. AMPHUR_ID = ap. AMPHUR_ID
       INNER JOIN province as pv
       ON ap. PROVINCE_ID = pv. PROVINCE_ID
       INNER JOIN sas_register as sr
       ON sd.NID = sr.RegisNaID
       LEFT JOIN  sas_examno as exno
       ON sd.NID = exno.ExamNID
       WHERE sd.TYPE = '1' AND OPTIONS = 'นักเรียนในเขตพื้นที่บริการ' AND sr.RegisStatus='0'   ORDER BY sr.RegisConfirm ASC";
   $objPHPExcel->getActiveSheet()->setTitle('ม.1 ในเขตฯ (ยังไม่ยืนยัน)');
   $ad = 13;
}

elseif ($_POST["lbexcel"] == "14") {

    $strSQL = "SELECT NID, TYPE, SNAME, FNAME, LNAME, TEL, OPTIONS, LSCHOOL, ID_PROVINCE_SC, GPA, BIRTHDAY,
                       schoolsecond, PLAN1, PLAN2, PLAN3, 
                       SNAMEFA, FNAMEFA, LNAMEFA, TELFA, 
                       SNAMEMA, FNAMEMA, LNAMEMA, TELMA, 
                       SNAMEPA, FNAMEPA, LNAMEPA, TELPA,
                       HADDRESS, MOO, SOI, ROAD,
                       dt.DISTRICT_NAME, ap.AMPHUR_NAME, pv.PROVINCE_NAME,
                       sr.RegisNO, sr.RegisStatus, sr.RegisLLog, sr.RegisConfirm, 
                       exno.ExamStuNo, exno.ExamID
       FROM sas_studentdata as sd
       INNER JOIN district as dt
       ON sd.DISTRICT_ID = dt.DISTRICT_ID
       INNER JOIN amphur as ap
       ON dt. AMPHUR_ID = ap. AMPHUR_ID
       INNER JOIN province as pv
       ON ap. PROVINCE_ID = pv. PROVINCE_ID
       INNER JOIN sas_register as sr
       ON sd.NID = sr.RegisNaID
       LEFT JOIN  sas_examno as exno
       ON sd.NID = exno.ExamNID
       WHERE sd.TYPE = '1' AND OPTIONS = 'นักเรียนนอกเขตพื้นที่บริการ' AND sr.RegisStatus='0'   ORDER BY sr.RegisConfirm ASC";
   $objPHPExcel->getActiveSheet()->setTitle('ม.1 นอกเขตฯ ยังไม่ยืนยัน');
   $ad = 14;
}

elseif ($_POST["lbexcel"] == "15") {

    $strSQL = "SELECT NID, TYPE, SNAME, FNAME, LNAME, TEL, OPTIONS, LSCHOOL, ID_PROVINCE_SC, GPA, BIRTHDAY,
                       schoolsecond, PLAN1, PLAN2, PLAN3, 
                       SNAMEFA, FNAMEFA, LNAMEFA, TELFA, 
                       SNAMEMA, FNAMEMA, LNAMEMA, TELMA, 
                       SNAMEPA, FNAMEPA, LNAMEPA, TELPA,
                       HADDRESS, MOO, SOI, ROAD,
                       dt.DISTRICT_NAME, ap.AMPHUR_NAME, pv.PROVINCE_NAME,
                       sr.RegisNO, sr.RegisStatus, sr.RegisLLog, sr.RegisConfirm, 
                       exno.ExamStuNo, exno.ExamID
       FROM sas_studentdata as sd
       INNER JOIN district as dt
       ON sd.DISTRICT_ID = dt.DISTRICT_ID
       INNER JOIN amphur as ap
       ON dt. AMPHUR_ID = ap. AMPHUR_ID
       INNER JOIN province as pv
       ON ap. PROVINCE_ID = pv. PROVINCE_ID
       INNER JOIN sas_register as sr
       ON sd.NID = sr.RegisNaID
       LEFT JOIN  sas_examno as exno
       ON sd.NID = exno.ExamNID
       WHERE sd.TYPE = '4'  AND sr.RegisStatus='0'   ORDER BY sr.RegisConfirm ASC";
   $objPHPExcel->getActiveSheet()->setTitle('ม.4 ยังไม่ยืนยัน');
   $ad = 15;
}
        
        else {

        }
    }

    $objQuery = mysql_query($strSQL);
    $i = 2;
    $num = 1;
    while ($objResult = mysql_fetch_array($objQuery)) {
        if ($objResult['ExamID'] != "") {
            $querycel = "SELECT * FROM sas_exam
		 				 WHERE id='" . $objResult['ExamID'] . "'";

            if (!$result2 = mysql_query($querycel)) {
                exit(mysql_error());
            }
            $aresult = mysql_fetch_assoc($result2);

            $a1 = $aresult["id"];
            $a2 = $aresult["ExamBuilding"];
            $a3 = $aresult["ExamRoomNO"];
        } else {
            $a1 = "";
            $a2 = "";
            $a3 = "";

        }

        $objPHPExcel->getActiveSheet()->setCellValue('A' . $i, $num);
        $objPHPExcel->getActiveSheet()->setCellValueExplicit('B' . $i, $objResult["RegisNO"], PHPExcel_Cell_DataType::TYPE_STRING);
        $objPHPExcel->getActiveSheet()->setCellValueExplicit('C' . $i, $objResult["NID"], PHPExcel_Cell_DataType::TYPE_STRING);

        $type = "ม." . $objResult["TYPE"];
        $tel = "0" .$objResult["TEL"];
        $objPHPExcel->getActiveSheet()->setCellValue('D' . $i, $type);
        $objPHPExcel->getActiveSheet()->setCellValue('E' . $i, $objResult["SNAME"]);
        $objPHPExcel->getActiveSheet()->setCellValue('F' . $i, $objResult["FNAME"]);
        $objPHPExcel->getActiveSheet()->setCellValue('G' . $i, $objResult["LNAME"]);
        $objPHPExcel->getActiveSheet()->setCellValueExplicit('H' . $i, $objResult["TEL"], PHPExcel_Cell_DataType::TYPE_STRING);
        $objPHPExcel->getActiveSheet()->setCellValue('I' . $i, $objResult["OPTIONS"]);
        $objPHPExcel->getActiveSheet()->setCellValue('J' . $i, $objResult["LSCHOOL"]);
        $objPHPExcel->getActiveSheet()->setCellValue('K' . $i, $objResult["ID_PROVINCE_SC"]);
        $objPHPExcel->getActiveSheet()->setCellValue('L' . $i, $objResult["GPA"]);
        $objPHPExcel->getActiveSheet()->setCellValue('M' . $i, $objResult["schoolsecond"]);
        $objPHPExcel->getActiveSheet()->setCellValue('N' . $i, $objResult["PLAN1"]);
        $objPHPExcel->getActiveSheet()->setCellValue('O' . $i, $objResult["PLAN2"]);
        $objPHPExcel->getActiveSheet()->setCellValue('P' . $i, $objResult["PLAN3"]);

        $objPHPExcel->getActiveSheet()->setCellValue('Q' . $i, $objResult["SNAMEFA"].$objResult["FNAMEFA"]);
        $objPHPExcel->getActiveSheet()->setCellValue('R' . $i, $objResult["LNAMEFA"]);
        $objPHPExcel->getActiveSheet()->setCellValueExplicit('S' . $i, $objResult["TEL"], PHPExcel_Cell_DataType::TYPE_STRING);

        $objPHPExcel->getActiveSheet()->setCellValue('T' . $i, $objResult["SNAMEMA"].$objResult["FNAMEMA"]);
        $objPHPExcel->getActiveSheet()->setCellValue('U' . $i, $objResult["LNAMEMA"]);
        $objPHPExcel->getActiveSheet()->setCellValueExplicit('V' . $i, $objResult["TEL"], PHPExcel_Cell_DataType::TYPE_STRING);

        $objPHPExcel->getActiveSheet()->setCellValue('W' . $i, $objResult["SNAMEPA"].$objResult["FNAMEPA"]);
        $objPHPExcel->getActiveSheet()->setCellValue('X' . $i, $objResult["LNAMEPA"]);
        $objPHPExcel->getActiveSheet()->setCellValueExplicit('Y' . $i, $objResult["TEL"], PHPExcel_Cell_DataType::TYPE_STRING);

        //$objPHPExcel->getActiveSheet()->setCellValueExplicit('R' . $i, $objResult["TEL"], PHPExcel_Cell_DataType::TYPE_STRING);
        //$daycome = $objResult["DAYCOME"] . " มีนาคม 2563";
        //$objPHPExcel->getActiveSheet()->setCellValue('S' . $i, $daycome);
        
        $objPHPExcel->getActiveSheet()->setCellValue('Z' . $i, $objResult["RegisLLog"]);
        $objPHPExcel->getActiveSheet()->setCellValue('AA' . $i, $objResult["ExamStuNo"]);
        $objPHPExcel->getActiveSheet()->setCellValue('AB' . $i, $a1);
        $objPHPExcel->getActiveSheet()->setCellValue('AC' . $i, $a2);
        $objPHPExcel->getActiveSheet()->setCellValue('AD' . $i, $a3);
        $objPHPExcel->getActiveSheet()->setCellValue('AE' . $i, $objResult["HADDRESS"]);
        $objPHPExcel->getActiveSheet()->setCellValue('AF' . $i, $objResult["MOO"]);
        $objPHPExcel->getActiveSheet()->setCellValue('AG' . $i, $objResult["SOI"]);
        $objPHPExcel->getActiveSheet()->setCellValue('AH' . $i, $objResult["ROAD"]);
        $objPHPExcel->getActiveSheet()->setCellValue('AI' . $i, $objResult["DISTRICT_NAME"]);
        $objPHPExcel->getActiveSheet()->setCellValue('AJ' . $i, $objResult["AMPHUR_NAME"]);
        $objPHPExcel->getActiveSheet()->setCellValue('AK' . $i, $objResult["PROVINCE_NAME"]);
        $objPHPExcel->getActiveSheet()->setCellValue('AL' . $i, $objResult["BIRTHDAY"]);
        $objPHPExcel->getActiveSheet()->setCellValue('AM' . $i, $objResult["RegisConfirm"]);
        
        $i++;
        $num++;
    }
    mysql_close($objConnect);

// Rename sheet
    //echo date('H:i:s') . " Rename sheet\n";

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
    $objPHPExcel->setActiveSheetIndex(0);

// Save Excel 2007 file
    //echo date('H:i:s') . " Write to Excel2007 format\n";
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $strFileName = "TNWData.xlsx";
    $objWriter->save($strFileName);

// Echo memory peak usage
    //echo date('H:i:s') . " Peak memory usage: " . (memory_get_peak_usage(true) / 1024 / 1024) . " MB\r\n";

// Echo done
    //echo date('H:i:s') . " Done writing file.\r\n";

    echo '<script>window.open("' . $strFileName . '","_top")</script>';

}

?>

