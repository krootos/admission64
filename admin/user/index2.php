<?php 
session_start();



if(isset($_REQUEST["cat"], $_REQUEST["Search"])){

 
    $_SESSION["cat"] = $_REQUEST["cat"]; // ตัวแปรค้นหา LB
    $_SESSION["Search"] = $_REQUEST["Search"]; // ตัวแปรค้นหา Search
            if(isset($_POST["btnSearch"])){
                echo "<script type=\"text/javascript\">";
                echo "window.location=\"index.php?cat=".$_SESSION["cat"]."&Search=".$_SESSION["Search"]."\"";
                echo "</script>";   
            } 
}
if(isset($_GET["btnAll"]) || isset($_GET["add"])){
    unset($_SESSION["cat"]);
    unset($_SESSION["Search"]);
                echo "<script type=\"text/javascript\">";
                echo "window.location=\"index.php\"";
                echo "</script>";   
}



   

    if(isset($_GET["req"]) && isset($_GET["le"])){
        echo "<script type=\"text/javascript\">";
        echo "window.location=\"index.php?le=".$_GET["le"]."\"";
        echo "</script>"; 

   
    

    }
                  

//echo $_SESSION["cat"];
//echo "<br>".$_SESSION["Search"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ผู้ดูแลระบบ: หน้าระบบจัดการ USER</title>

    <!-- Bootstrap CSS File  -->
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.5-dist/css/bootstrap.css"/>
    <link href="https://fonts.googleapis.com/css?family=Pattaya|Pridi|Prompt|Sriracha" rel="stylesheet">
</head>
<style type="text/css"> 
body {
    padding-top: 20px;
    
    font-family: 'Pridi', serif;
   /* font-family: 'Sriracha', cursive;*/
    /*font-family: 'Pattaya', sans-serif;*/
    /*font-family: 'Prompt', sans-serif;*/
}
</style>
<body>
<?php if(isset($_SESSION["Role"])){
     if($_SESSION["Role"] == 1){ ?>
 <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="border-bottom:#fcc6d3 2px solid; background:#c7254e;">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button class="navbar-toggle" data-target="#bs-example-navbar-collapse-1" 
                    data-toggle="collapse" type="button">
                        <span class="sr-only">
                            Toggle navigation
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                    </button>
                    <a class="navbar-brand navbar-nav" href="../../index.php">
                        <span class="glyphicon glyphicon-fire">
                        </span>
                        <font color="#ffffff">Student Admission System</font>
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="navbar-nav" href="../regis" target="_self">
                                <span class="glyphicon glyphicon-globe">
                                </span>
                                <font color="#ffffff">ระบบยืนยันนักเรียนมายื่นเอกสาร</font>
                            </a>
                        </li>
                       
                    </ul>
                    <?php if(isset($_SESSION["RegisNO"])) { ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                        <a class="navbar-nav" href="../../index.php?ses=destroy" 
                        onclick="if(confirm('ยืนยันการ Logout & Reset')) return true; else return false;">
                        เลขที่ใบสมัคร : <?php echo $_SESSION["RegisNO"]; ?>
                              <span class="glyphicon glyphicon-remove-sign">
                                </span> Logout & Reset
                        </a>  
                        </li>
                    </ul>
                    <?php } 
                            if(isset($_GET["ses"]) && $_GET["ses"] == "destroy" ){
                                echo "<script type=\"text/javascript\">";
                               echo "window.location=\"../../index.php\" ";
                               echo "</script>";       
                                session_destroy();
                            }
                    ?>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- Page Content -->
        <br>

<!-- Content Section -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><img src="../../img/user.png" width="80px;"> ผู้ดูแลระบบ: หน้าระบบจัดการข้อมูลผู้สมัคร</h1>
        </div>
    </div>
    <div class="row">
    <div class="col-md-12">
            <div class="pull-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Add New User</button>
            </div>
        </div>
 
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Records: <?php if(isset($_SESSION["countdata"])){ echo $_SESSION["countdata"]." รายการ"; } ?></h3>

<div class="records_content">
                
<form name="formsearch" id="formsearch" method="post" action="index.php">
<table class="table table-bordered table-striped" >
<tr>
<td width="36%">
<div align="right">ค้นหา :
<select name="cat" class="input-sm">
     <option value="RegisNO"<?php if(isset($_REQUEST["cat"])){ if($_REQUEST["cat"] == "RegisNO"){  echo"selected"; }} ?>
     >รหัสผู้ใช้งาน</option>
     <option value="RegisPWD"<?php if(isset($_REQUEST["cat"])){ if($_REQUEST["cat"] == "RegisPWD"){  echo"selected"; }} ?>
     >รหัสผ่าน</option>
     <option value="RegisNaID"<?php if(isset($_REQUEST["cat"])){ if($_REQUEST["cat"] == "RegisNaID"){  echo"selected"; }} ?>
     >เลขบัตรประชาชน</option>
      <option value="OPTIONS"<?php if(isset($_REQUEST["cat"])){ if($_REQUEST["cat"] == "OPTIONS"){  echo"selected"; }} ?>
     >ประเภทนักเรียน</option>
    <option value="TYPE"<?php if(isset($_REQUEST["cat"])){ if($_REQUEST["cat"] == "TYPE"){  echo"selected"; }} ?>
     >ระดับชั้น</option>
</select>
</div>
</td>
<td width="64%">

     <input name="Search" type="text" class="input-sm" required="" 
     value="<?php if(isset($_REQUEST["Search"])) echo $_REQUEST["Search"]; ?>">
     <button class="btn btn-info" name="btnSearch" id="btnSearch" type="submit" value="btnSearch">Search</button>
      ตามรหัสผู้ใช้งาน, รหัสผ่าน, เลขบัตรประชาชน
      <a class="btn btn-default" 
      <?php if(isset($_SESSION["cat"])){ echo "href=\"index.php?btnAll=yes\""; }else{
        echo "href=\"\"";
      }
       ?>>ทั้งหมด</a>

<br><br>
        
        <a class="btn btn-default" href="index.php?le=1&req=ok"> ม.1 ท้งหมด</a>
        <a class="btn btn-default" href="index.php?le=2&req=ok"> ม.1 ในเขตฯ</a>
        <a class="btn btn-default" href="index.php?le=3&req=ok"> ม.1 นอกเขตฯ</a>
        
        
        <a class="btn btn-default" href="index.php?le=4&req=ok"> ม.4 ท้งหมด</a>
        <a class="btn btn-default" href="index.php?le=5&req=ok"> ม.4 วิทย์ฯ-คณิตฯ </a>
        <a class="btn btn-default" href="index.php?le=6&req=ok"> ม.4 วิทย์ฯ-คอมฯ </a>
        <a class="btn btn-default" href="index.php?le=7&req=ok"> ม.4 อังกฤษ-จีน</a>
        <a class="btn btn-default" href="index.php?le=8&req=ok"> ม.4 อังกฤษ-ญี่ปุ่น</a>
        <a class="btn btn-default" href="index.php?le=9&req=ok"> ม.4 อังกฤษ-เวียดนาม</a>
        <a class="btn btn-default" href="index.php?le=10&req=ok"> ม.4 อังกฤษ-เกาหลี</a>
        <a class="btn btn-default" href="index.php?le=11&req=ok"> ม.4 ไทย-สังคม</a>
   
</td>
</tr>
</table>
</form>
<br>
<?php
    // include Database connection file 
    include("../../conn.php");

    // Design initial table header 

    $data = '<table class="table table-bordered table-striped">
                        <tr>
                            <th><h4>No.</h4></th>
                            <th><h4>รหัสเข้าใช้งาน</h4></th>
                            <th><h4>รหัสผ่าน</h4></th>
                            <th><h4>เลขบัตร</h4></th>
                            <th><h4>ชื่อ - สกุล</h4></th>
                            <th><h4>ประเภทนักเรียน</h4></th>
                            <th><h4>แผนการเรียน</h4></th>
                            <th><h4>เอกสาร</h4></th>
                            <th><h4>แก้ไข</h4></th>
                            <th><h4>ลบข้อมูล</h4></th>
                            <th><h4>ใบมอบตัว</h4></th>

                        </tr>';



if(!isset($_GET["le"])){

    if(isset($_REQUEST["Search"]) || isset($_SESSION["cat"], $_SESSION["Search"])){
    //$query = "SELECT * FROM sas_register WHERE ".$_SESSION["cat"]." like '%".$_SESSION["Search"]."%' ORDER BY RegisID DESC "; // คำสั่งค้นหา
            if(strcmp($_SESSION["cat"], "OPTIONS") == 0 || strcmp($_SESSION["cat"], "TYPE") == 0){
                    $category = "sd.".$_SESSION["cat"];
            }else{
                    $category = "sr.".$_SESSION["cat"];
                }
           $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, Role, sd.NID, sd.TYPE, sd.OPTIONS, sd.OPTIONSPECIAL, sd.MORE, sd.PLAN1, sd.PLAN2, sd.PLAN3, sd.SNAME, sd.FNAME, sd.LNAME, sd.BIRTHDAY, sd.SEX, sd.RELI, sd.REGINAL, sd.REGINALITY, sd.GROUPBLOOD, sd.HADDRESS, sd.MOO, sd.SOI, sd.ROAD,  sd.PROVINCE_ID, sd.DISTRICT_ID, sd.AMPHUR_ID, sd.TEL, sd.EMAIL, sd.GRADUATE, sd.LSCHOOL, sd.GPA, sd.SNAMEFA, sd.FNAMEFA, sd.LNAMEFA, sd.TELFA, sd.SNAMEMA, sd.FNAMEMA, sd.LNAMEMA, sd.TELMA, sd.FAMILYSTATUS, dt.DISTRICT_NAME , ap.POSTCODE, ap.AMPHUR_NAME, pv.PROVINCE_NAME, sd.CREATEDATE, sd.DAYCOME, sd.ID_PROVINCE_SC, sd.OC_FA, sd.OC_MA, sd.TYPEPARENT, sd.SNAMEPA, sd.FNAMEPA, sd.LNAMEPA, sd.TELPA, sd.OC_PA, sd.RELATION, ot.HID, ot.FAID, ot.MAID, ot.PAID, ot.ENAME, ot.ESURNAME, ot.ENICKNAME, ot.BIRTHPRO, ot.BRO, ot.BROBLM, ot.VISIT, ot.DIRECT, ot.PAY, ot.WEIGHT, ot.HEIGHT,ot.HEALTHY 
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
                WHERE ".$category." like '%".$_SESSION["Search"]."%' 
                ORDER BY sr.RegisID DESC "; // คำสั่งค้นหา

    }else{
              $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, Role, sd.NID, sd.TYPE, sd.OPTIONS, sd.OPTIONSPECIAL, sd.MORE, sd.PLAN1, sd.PLAN2, sd.PLAN3, sd.SNAME, sd.FNAME, sd.LNAME, sd.BIRTHDAY, sd.SEX, sd.RELI, sd.REGINAL, sd.REGINALITY, sd.GROUPBLOOD, sd.HADDRESS, sd.MOO, sd.SOI, sd.ROAD,  sd.PROVINCE_ID, sd.DISTRICT_ID, sd.AMPHUR_ID, sd.TEL, sd.EMAIL, sd.GRADUATE, sd.LSCHOOL, sd.GPA, sd.SNAMEFA, sd.FNAMEFA, sd.LNAMEFA, sd.TELFA, sd.SNAMEMA, sd.FNAMEMA, sd.LNAMEMA, sd.TELMA, sd.FAMILYSTATUS, dt.DISTRICT_NAME , ap.POSTCODE, ap.AMPHUR_NAME, pv.PROVINCE_NAME, sd.CREATEDATE, sd.DAYCOME, sd.ID_PROVINCE_SC, sd.OC_FA, sd.OC_MA, sd.TYPEPARENT, sd.SNAMEPA, sd.FNAMEPA, sd.LNAMEPA, sd.TELPA, sd.OC_PA, sd.RELATION, ot.HID, ot.FAID, ot.MAID, ot.PAID, ot.ENAME, ot.ESURNAME, ot.ENICKNAME, ot.BIRTHPRO, ot.BRO, ot.BROBLM, ot.VISIT, ot.DIRECT, ot.PAY, ot.WEIGHT, ot.HEIGHT,ot.HEALTHY
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
                ORDER BY sr.RegisID DESC";
    }      


} // end if(!isset($_GET["le"])){
    else{

            if(strcmp($_GET["le"], "1") == 0){ 
                $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, Role, sd.NID, sd.TYPE, sd.OPTIONS, sd.OPTIONSPECIAL, sd.MORE, sd.PLAN1, sd.PLAN2, sd.PLAN3, sd.SNAME, sd.FNAME, sd.LNAME, sd.BIRTHDAY, sd.SEX, sd.RELI, sd.REGINAL, sd.REGINALITY, sd.GROUPBLOOD, sd.HADDRESS, sd.MOO, sd.SOI, sd.ROAD,  sd.PROVINCE_ID, sd.DISTRICT_ID, sd.AMPHUR_ID, sd.TEL, sd.EMAIL, sd.GRADUATE, sd.LSCHOOL, sd.GPA, sd.SNAMEFA, sd.FNAMEFA, sd.LNAMEFA, sd.TELFA, sd.SNAMEMA, sd.FNAMEMA, sd.LNAMEMA, sd.TELMA, sd.FAMILYSTATUS, dt.DISTRICT_NAME , ap.POSTCODE, ap.AMPHUR_NAME, pv.PROVINCE_NAME, sd.CREATEDATE, sd.DAYCOME, sd.ID_PROVINCE_SC, sd.OC_FA, sd.OC_MA, sd.TYPEPARENT, sd.SNAMEPA, sd.FNAMEPA, sd.LNAMEPA, sd.TELPA, sd.OC_PA, sd.RELATION, ot.HID, ot.FAID, ot.MAID, ot.PAID, ot.ENAME, ot.ESURNAME, ot.ENICKNAME, ot.BIRTHPRO, ot.BRO, ot.BROBLM, ot.VISIT, ot.DIRECT, ot.PAY, ot.WEIGHT, ot.HEIGHT,ot.HEALTHY
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
                WHERE sd.TYPE = '1'
                ORDER BY sr.RegisID DESC";
            } 
            elseif(strcmp($_GET["le"], "2") == 0){ 

                $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, Role, sd.NID, sd.TYPE, sd.OPTIONS, sd.OPTIONSPECIAL, sd.MORE, sd.PLAN1, sd.PLAN2, sd.PLAN3, sd.SNAME, sd.FNAME, sd.LNAME, sd.BIRTHDAY, sd.SEX, sd.RELI, sd.REGINAL, sd.REGINALITY, sd.GROUPBLOOD, sd.HADDRESS, sd.MOO, sd.SOI, sd.ROAD,  sd.PROVINCE_ID, sd.DISTRICT_ID, sd.AMPHUR_ID, sd.TEL, sd.EMAIL, sd.GRADUATE, sd.LSCHOOL, sd.GPA, sd.SNAMEFA, sd.FNAMEFA, sd.LNAMEFA, sd.TELFA, sd.SNAMEMA, sd.FNAMEMA, sd.LNAMEMA, sd.TELMA, sd.FAMILYSTATUS, dt.DISTRICT_NAME , ap.POSTCODE, ap.AMPHUR_NAME, pv.PROVINCE_NAME, sd.CREATEDATE, sd.DAYCOME, sd.ID_PROVINCE_SC, sd.OC_FA, sd.OC_MA, sd.TYPEPARENT, sd.SNAMEPA, sd.FNAMEPA, sd.LNAMEPA, sd.TELPA, sd.OC_PA, sd.RELATION, ot.HID, ot.FAID, ot.MAID, ot.PAID, ot.ENAME, ot.ESURNAME, ot.ENICKNAME, ot.BIRTHPRO, ot.BRO, ot.BROBLM, ot.VISIT, ot.DIRECT, ot.PAY, ot.WEIGHT, ot.HEIGHT,ot.HEALTHY
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
                WHERE sd.TYPE = '1' AND  sd.OPTIONS = 'นักเรียนในเขตพื้นที่บริการ'
                ORDER BY sr.RegisID DESC";

            }
            elseif(strcmp($_GET["le"], "3") == 0){ 
                $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, Role, sd.NID, sd.TYPE, sd.OPTIONS, sd.OPTIONSPECIAL, sd.MORE, sd.PLAN1, sd.PLAN2, sd.PLAN3, sd.SNAME, sd.FNAME, sd.LNAME, sd.BIRTHDAY, sd.SEX, sd.RELI, sd.REGINAL, sd.REGINALITY, sd.GROUPBLOOD, sd.HADDRESS, sd.MOO, sd.SOI, sd.ROAD,  sd.PROVINCE_ID, sd.DISTRICT_ID, sd.AMPHUR_ID, sd.TEL, sd.EMAIL, sd.GRADUATE, sd.LSCHOOL, sd.GPA, sd.SNAMEFA, sd.FNAMEFA, sd.LNAMEFA, sd.TELFA, sd.SNAMEMA, sd.FNAMEMA, sd.LNAMEMA, sd.TELMA, sd.FAMILYSTATUS, dt.DISTRICT_NAME , ap.POSTCODE, ap.AMPHUR_NAME, pv.PROVINCE_NAME, sd.CREATEDATE, sd.DAYCOME, sd.ID_PROVINCE_SC, sd.OC_FA, sd.OC_MA, sd.TYPEPARENT, sd.SNAMEPA, sd.FNAMEPA, sd.LNAMEPA, sd.TELPA, sd.OC_PA, sd.RELATION, ot.HID, ot.FAID, ot.MAID, ot.PAID, ot.ENAME, ot.ESURNAME, ot.ENICKNAME, ot.BIRTHPRO, ot.BRO, ot.BROBLM, ot.VISIT, ot.DIRECT, ot.PAY, ot.WEIGHT, ot.HEIGHT,ot.HEALTHY
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
                WHERE sd.TYPE = '1' AND  sd.OPTIONS = 'นักเรียนนอกเขตพื้นที่บริการ'
                ORDER BY sr.RegisID DESC";
            } 
            
            elseif(strcmp($_GET["le"], "4") == 0){ 
                $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, Role, sd.NID, sd.TYPE, sd.OPTIONS, sd.OPTIONSPECIAL, sd.MORE, sd.PLAN1, sd.PLAN2, sd.PLAN3, sd.SNAME, sd.FNAME, sd.LNAME, sd.BIRTHDAY, sd.SEX, sd.RELI, sd.REGINAL, sd.REGINALITY, sd.GROUPBLOOD, sd.HADDRESS, sd.MOO, sd.SOI, sd.ROAD,  sd.PROVINCE_ID, sd.DISTRICT_ID, sd.AMPHUR_ID, sd.TEL, sd.EMAIL, sd.GRADUATE, sd.LSCHOOL, sd.GPA, sd.SNAMEFA, sd.FNAMEFA, sd.LNAMEFA, sd.TELFA, sd.SNAMEMA, sd.FNAMEMA, sd.LNAMEMA, sd.TELMA, sd.FAMILYSTATUS, dt.DISTRICT_NAME , ap.POSTCODE, ap.AMPHUR_NAME, pv.PROVINCE_NAME, sd.CREATEDATE, sd.DAYCOME, sd.ID_PROVINCE_SC, sd.OC_FA, sd.OC_MA, sd.TYPEPARENT, sd.SNAMEPA, sd.FNAMEPA, sd.LNAMEPA, sd.TELPA, sd.OC_PA, sd.RELATION, ot.HID, ot.FAID, ot.MAID, ot.PAID, ot.ENAME, ot.ESURNAME, ot.ENICKNAME, ot.BIRTHPRO, ot.BRO, ot.BROBLM, ot.VISIT, ot.DIRECT, ot.PAY, ot.WEIGHT, ot.HEIGHT,ot.HEALTHY
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
                WHERE sd.TYPE = '4'
                ORDER BY sr.RegisID DESC";
            } 
            elseif(strcmp($_GET["le"], "5") == 0){ 
                $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, Role, sd.NID, sd.TYPE, sd.OPTIONS, sd.OPTIONSPECIAL, sd.MORE, sd.PLAN1, sd.PLAN2, sd.PLAN3, sd.SNAME, sd.FNAME, sd.LNAME, sd.BIRTHDAY, sd.SEX, sd.RELI, sd.REGINAL, sd.REGINALITY, sd.GROUPBLOOD, sd.HADDRESS, sd.MOO, sd.SOI, sd.ROAD,  sd.PROVINCE_ID, sd.DISTRICT_ID, sd.AMPHUR_ID, sd.TEL, sd.EMAIL, sd.GRADUATE, sd.LSCHOOL, sd.GPA, sd.SNAMEFA, sd.FNAMEFA, sd.LNAMEFA, sd.TELFA, sd.SNAMEMA, sd.FNAMEMA, sd.LNAMEMA, sd.TELMA, sd.FAMILYSTATUS, dt.DISTRICT_NAME , ap.POSTCODE, ap.AMPHUR_NAME, pv.PROVINCE_NAME, sd.CREATEDATE, sd.DAYCOME, sd.ID_PROVINCE_SC, sd.OC_FA, sd.OC_MA, sd.TYPEPARENT, sd.SNAMEPA, sd.FNAMEPA, sd.LNAMEPA, sd.TELPA, sd.OC_PA, sd.RELATION, ot.HID, ot.FAID, ot.MAID, ot.PAID, ot.ENAME, ot.ESURNAME, ot.ENICKNAME, ot.BIRTHPRO, ot.BRO, ot.BROBLM, ot.VISIT, ot.DIRECT, ot.PAY, ot.WEIGHT, ot.HEIGHT,ot.HEALTHY
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
                WHERE sd.TYPE = '4' AND  sd.PLAN1 = 'วิทยาศาสตร์-คณิตศาสตร์'
                ORDER BY sr.RegisID DESC";
            }
            elseif(strcmp($_GET["le"], "6") == 0){ 
                $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, Role, sd.NID, sd.TYPE, sd.OPTIONS, sd.OPTIONSPECIAL, sd.MORE, sd.PLAN1, sd.PLAN2, sd.PLAN3, sd.SNAME, sd.FNAME, sd.LNAME, sd.BIRTHDAY, sd.SEX, sd.RELI, sd.REGINAL, sd.REGINALITY, sd.GROUPBLOOD, sd.HADDRESS, sd.MOO, sd.SOI, sd.ROAD,  sd.PROVINCE_ID, sd.DISTRICT_ID, sd.AMPHUR_ID, sd.TEL, sd.EMAIL, sd.GRADUATE, sd.LSCHOOL, sd.GPA, sd.SNAMEFA, sd.FNAMEFA, sd.LNAMEFA, sd.TELFA, sd.SNAMEMA, sd.FNAMEMA, sd.LNAMEMA, sd.TELMA, sd.FAMILYSTATUS, dt.DISTRICT_NAME , ap.POSTCODE, ap.AMPHUR_NAME, pv.PROVINCE_NAME, sd.CREATEDATE, sd.DAYCOME, sd.ID_PROVINCE_SC, sd.OC_FA, sd.OC_MA, sd.TYPEPARENT, sd.SNAMEPA, sd.FNAMEPA, sd.LNAMEPA, sd.TELPA, sd.OC_PA, sd.RELATION, ot.HID, ot.FAID, ot.MAID, ot.PAID, ot.ENAME, ot.ESURNAME, ot.ENICKNAME, ot.BIRTHPRO, ot.BRO, ot.BROBLM, ot.VISIT, ot.DIRECT, ot.PAY, ot.WEIGHT, ot.HEIGHT,ot.HEALTHY
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
                WHERE sd.TYPE = '4' AND  sd.PLAN1 = 'วิทยาศาสตร์-คอมพิวเตอร์'
                ORDER BY sr.RegisID DESC";
            }
            elseif(strcmp($_GET["le"], "7") == 0){ 
                $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, Role, sd.NID, sd.TYPE, sd.OPTIONS, sd.OPTIONSPECIAL, sd.MORE, sd.PLAN1, sd.PLAN2, sd.PLAN3, sd.SNAME, sd.FNAME, sd.LNAME, sd.BIRTHDAY, sd.SEX, sd.RELI, sd.REGINAL, sd.REGINALITY, sd.GROUPBLOOD, sd.HADDRESS, sd.MOO, sd.SOI, sd.ROAD,  sd.PROVINCE_ID, sd.DISTRICT_ID, sd.AMPHUR_ID, sd.TEL, sd.EMAIL, sd.GRADUATE, sd.LSCHOOL, sd.GPA, sd.SNAMEFA, sd.FNAMEFA, sd.LNAMEFA, sd.TELFA, sd.SNAMEMA, sd.FNAMEMA, sd.LNAMEMA, sd.TELMA, sd.FAMILYSTATUS, dt.DISTRICT_NAME , ap.POSTCODE, ap.AMPHUR_NAME, pv.PROVINCE_NAME, sd.CREATEDATE, sd.DAYCOME, sd.ID_PROVINCE_SC, sd.OC_FA, sd.OC_MA, sd.TYPEPARENT, sd.SNAMEPA, sd.FNAMEPA, sd.LNAMEPA, sd.TELPA, sd.OC_PA, sd.RELATION, ot.HID, ot.FAID, ot.MAID, ot.PAID, ot.ENAME, ot.ESURNAME, ot.ENICKNAME, ot.BIRTHPRO, ot.BRO, ot.BROBLM, ot.VISIT, ot.DIRECT, ot.PAY, ot.WEIGHT, ot.HEIGHT,ot.HEALTHY
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
                WHERE sd.TYPE = '4' AND  sd.PLAN1 = 'อังกฤษ-จีน'
                ORDER BY sr.RegisID DESC";
            }
            elseif(strcmp($_GET["le"], "8") == 0){ 
                $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, Role, sd.NID, sd.TYPE, sd.OPTIONS, sd.OPTIONSPECIAL, sd.MORE, sd.PLAN1, sd.PLAN2, sd.PLAN3, sd.SNAME, sd.FNAME, sd.LNAME, sd.BIRTHDAY, sd.SEX, sd.RELI, sd.REGINAL, sd.REGINALITY, sd.GROUPBLOOD, sd.HADDRESS, sd.MOO, sd.SOI, sd.ROAD,  sd.PROVINCE_ID, sd.DISTRICT_ID, sd.AMPHUR_ID, sd.TEL, sd.EMAIL, sd.GRADUATE, sd.LSCHOOL, sd.GPA, sd.SNAMEFA, sd.FNAMEFA, sd.LNAMEFA, sd.TELFA, sd.SNAMEMA, sd.FNAMEMA, sd.LNAMEMA, sd.TELMA, sd.FAMILYSTATUS, dt.DISTRICT_NAME , ap.POSTCODE, ap.AMPHUR_NAME, pv.PROVINCE_NAME, sd.CREATEDATE, sd.DAYCOME, sd.ID_PROVINCE_SC, sd.OC_FA, sd.OC_MA, sd.TYPEPARENT, sd.SNAMEPA, sd.FNAMEPA, sd.LNAMEPA, sd.TELPA, sd.OC_PA, sd.RELATION, ot.HID, ot.FAID, ot.MAID, ot.PAID, ot.ENAME, ot.ESURNAME, ot.ENICKNAME, ot.BIRTHPRO, ot.BRO, ot.BROBLM, ot.VISIT, ot.DIRECT, ot.PAY, ot.WEIGHT, ot.HEIGHT,ot.HEALTHY
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
                WHERE sd.TYPE = '4' AND  sd.PLAN1 = 'อังกฤษ-ญี่ปุ่น'
                ORDER BY sr.RegisID DESC";
            }
            elseif(strcmp($_GET["le"], "9") == 0){ 
                $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, Role, sd.NID, sd.TYPE, sd.OPTIONS, sd.OPTIONSPECIAL, sd.MORE, sd.PLAN1, sd.PLAN2, sd.PLAN3, sd.SNAME, sd.FNAME, sd.LNAME, sd.BIRTHDAY, sd.SEX, sd.RELI, sd.REGINAL, sd.REGINALITY, sd.GROUPBLOOD, sd.HADDRESS, sd.MOO, sd.SOI, sd.ROAD,  sd.PROVINCE_ID, sd.DISTRICT_ID, sd.AMPHUR_ID, sd.TEL, sd.EMAIL, sd.GRADUATE, sd.LSCHOOL, sd.GPA, sd.SNAMEFA, sd.FNAMEFA, sd.LNAMEFA, sd.TELFA, sd.SNAMEMA, sd.FNAMEMA, sd.LNAMEMA, sd.TELMA, sd.FAMILYSTATUS, dt.DISTRICT_NAME , ap.POSTCODE, ap.AMPHUR_NAME, pv.PROVINCE_NAME, sd.CREATEDATE, sd.DAYCOME, sd.ID_PROVINCE_SC, sd.OC_FA, sd.OC_MA, sd.TYPEPARENT, sd.SNAMEPA, sd.FNAMEPA, sd.LNAMEPA, sd.TELPA, sd.OC_PA, sd.RELATION, ot.HID, ot.FAID, ot.MAID, ot.PAID, ot.ENAME, ot.ESURNAME, ot.ENICKNAME, ot.BIRTHPRO, ot.BRO, ot.BROBLM, ot.VISIT, ot.DIRECT, ot.PAY, ot.WEIGHT, ot.HEIGHT,ot.HEALTHY
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
                WHERE sd.TYPE = '4' AND  sd.PLAN1 = 'อังกฤษ-เวียดนาม'
                ORDER BY sr.RegisID DESC";
            } 
            elseif(strcmp($_GET["le"], "10") == 0){ 
                $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, Role, sd.NID, sd.TYPE, sd.OPTIONS, sd.OPTIONSPECIAL, sd.MORE, sd.PLAN1, sd.PLAN2, sd.PLAN3, sd.SNAME, sd.FNAME, sd.LNAME, sd.BIRTHDAY, sd.SEX, sd.RELI, sd.REGINAL, sd.REGINALITY, sd.GROUPBLOOD, sd.HADDRESS, sd.MOO, sd.SOI, sd.ROAD,  sd.PROVINCE_ID, sd.DISTRICT_ID, sd.AMPHUR_ID, sd.TEL, sd.EMAIL, sd.GRADUATE, sd.LSCHOOL, sd.GPA, sd.SNAMEFA, sd.FNAMEFA, sd.LNAMEFA, sd.TELFA, sd.SNAMEMA, sd.FNAMEMA, sd.LNAMEMA, sd.TELMA, sd.FAMILYSTATUS, dt.DISTRICT_NAME , ap.POSTCODE, ap.AMPHUR_NAME, pv.PROVINCE_NAME, sd.CREATEDATE, sd.DAYCOME, sd.ID_PROVINCE_SC, sd.OC_FA, sd.OC_MA, sd.TYPEPARENT, sd.SNAMEPA, sd.FNAMEPA, sd.LNAMEPA, sd.TELPA, sd.OC_PA, sd.RELATION, ot.HID, ot.FAID, ot.MAID, ot.PAID, ot.ENAME, ot.ESURNAME, ot.ENICKNAME, ot.BIRTHPRO, ot.BRO, ot.BROBLM, ot.VISIT, ot.DIRECT, ot.PAY, ot.WEIGHT, ot.HEIGHT,ot.HEALTHY
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
                WHERE sd.TYPE = '4' AND  sd.PLAN1 = 'อังกฤษ-เกาหลี'
                ORDER BY sr.RegisID DESC";
            }    
            elseif(strcmp($_GET["le"], "11") == 0){ 
                $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, Role, sd.NID, sd.TYPE, sd.OPTIONS, sd.OPTIONSPECIAL, sd.MORE, sd.PLAN1, sd.PLAN2, sd.PLAN3, sd.SNAME, sd.FNAME, sd.LNAME, sd.BIRTHDAY, sd.SEX, sd.RELI, sd.REGINAL, sd.REGINALITY, sd.GROUPBLOOD, sd.HADDRESS, sd.MOO, sd.SOI, sd.ROAD,  sd.PROVINCE_ID, sd.DISTRICT_ID, sd.AMPHUR_ID, sd.TEL, sd.EMAIL, sd.GRADUATE, sd.LSCHOOL, sd.GPA, sd.SNAMEFA, sd.FNAMEFA, sd.LNAMEFA, sd.TELFA, sd.SNAMEMA, sd.FNAMEMA, sd.LNAMEMA, sd.TELMA, sd.FAMILYSTATUS, dt.DISTRICT_NAME , ap.POSTCODE, ap.AMPHUR_NAME, pv.PROVINCE_NAME, sd.CREATEDATE, sd.DAYCOME, sd.ID_PROVINCE_SC, sd.OC_FA, sd.OC_MA, sd.TYPEPARENT, sd.SNAMEPA, sd.FNAMEPA, sd.LNAMEPA, sd.TELPA, sd.OC_PA, sd.RELATION, ot.HID, ot.FAID, ot.MAID, ot.PAID, ot.ENAME, ot.ESURNAME, ot.ENICKNAME, ot.BIRTHPRO, ot.BRO, ot.BROBLM, ot.VISIT, ot.DIRECT, ot.PAY, ot.WEIGHT, ot.HEIGHT,ot.HEALTHY
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
                WHERE sd.TYPE = '4' AND  sd.PLAN1 = 'ไทย-สังคม'
                ORDER BY sr.RegisID DESC";
            }               


        } // end else{}





    //$query = "SELECT * FROM sas_register";
   // $result = mysql_query($query);
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }

    // if query results contains rows then featch those rows 
     $totalrow = mysql_num_rows($result);
    if($totalrow > 0)
    {
        $count = 0;
        $number = $totalrow;

        while($row = mysql_fetch_assoc($result))
        {
           
                $crpdf[$row['RegisID']][1] = $row['RegisID'];
                $crpdf[$row['RegisID']][2] = $row['RegisNO'];
                $crpdf[$row['RegisID']][3] = $row['RegisPWD'];
                $crpdf[$row['RegisID']][4] = $row['RegisLLog'];
                $crpdf[$row['RegisID']][5] = $row['RegisNaID'];
                $crpdf[$row['RegisID']][6] = $row['RegisStatus'];
                $crpdf[$row['RegisID']][7] = $row['Role'];
                $crpdf[$row['RegisID']][8] = $row['NID'];
                $crpdf[$row['RegisID']][9] = $row['TYPE'];
                $crpdf[$row['RegisID']][10] = $row['OPTIONS'];
                $crpdf[$row['RegisID']][11] = $row['OPTIONSPECIAL'];
                $crpdf[$row['RegisID']][12] = $row['MORE'];
                $crpdf[$row['RegisID']][13] = $row['PLAN1'];
                $crpdf[$row['RegisID']][14] = $row['PLAN2'];
                $crpdf[$row['RegisID']][15] = $row['PLAN3'];
                $crpdf[$row['RegisID']][78] = $row['PLAN4'];
                $crpdf[$row['RegisID']][79] = $row['PLAN5'];
                $crpdf[$row['RegisID']][16] = $row['SNAME'];
                $crpdf[$row['RegisID']][17] = $row['FNAME'];
                $crpdf[$row['RegisID']][18] = $row['LNAME'];
                $crpdf[$row['RegisID']][19] = $row['BIRTHDAY'];
                $crpdf[$row['RegisID']][20] = $row['SEX'];
                $crpdf[$row['RegisID']][21] = $row['RELI'];
                $crpdf[$row['RegisID']][22] = $row['REGINAL'];
                $crpdf[$row['RegisID']][23] = $row['REGINALITY'];
                $crpdf[$row['RegisID']][24] = $row['GROUPBLOOD'];
                $crpdf[$row['RegisID']][25] = $row['HADDRESS'];
                $crpdf[$row['RegisID']][26] = $row['MOO'];
                $crpdf[$row['RegisID']][27] = $row['SOI'];
                $crpdf[$row['RegisID']][28] = $row['ROAD'];
                $crpdf[$row['RegisID']][29] = $row['PROVINCE_ID'];
                $crpdf[$row['RegisID']][30] = $row['DISTRICT_ID'];
                $crpdf[$row['RegisID']][31] = $row['AMPHUR_ID'];
                $crpdf[$row['RegisID']][32] = $row['TEL'];
                $crpdf[$row['RegisID']][33] = $row['EMAIL'];
                $crpdf[$row['RegisID']][34] = $row['GRADUATE'];
                $crpdf[$row['RegisID']][35] = $row['LSCHOOL'];
                $crpdf[$row['RegisID']][36] = $row['GPA'];
                $crpdf[$row['RegisID']][37] = $row['SNAMEFA'];
                $crpdf[$row['RegisID']][38] = $row['FNAMEFA'];
                $crpdf[$row['RegisID']][39] = $row['LNAMEFA'];
                $crpdf[$row['RegisID']][40] = $row['TELFA'];
                $crpdf[$row['RegisID']][41] = $row['SNAMEMA'];
                $crpdf[$row['RegisID']][42] = $row['FNAMEMA'];
                $crpdf[$row['RegisID']][43] = $row['LNAMEMA'];
                $crpdf[$row['RegisID']][44] = $row['TELMA'];
                $crpdf[$row['RegisID']][45] = $row['FAMILYSTATUS'];
                $crpdf[$row['RegisID']][46] = $row['DISTRICT_NAME'];
                $crpdf[$row['RegisID']][47] = $row['POSTCODE'];
                $crpdf[$row['RegisID']][48] = $row['AMPHUR_NAME'];
                $crpdf[$row['RegisID']][49] = $row['PROVINCE_NAME'];
                $crpdf[$row['RegisID']][50] = $row['CREATEDATE'];
                $crpdf[$row['RegisID']][51] = $row['DAYCOME'];
                $crpdf[$row['RegisID']][52] = $row['ID_PROVINCE_SC'];
                $crpdf[$row['RegisID']][53] = $row['OC_FA'];
                $crpdf[$row['RegisID']][54] = $row['OC_MA'];
                $crpdf[$row['RegisID']][55] = $row['TYPEPARENT'];
                $crpdf[$row['RegisID']][56] = $row['SNAMEPA'];
                $crpdf[$row['RegisID']][57] = $row['FNAMEPA'];
                $crpdf[$row['RegisID']][58] = $row['LNAMEPA'];
                $crpdf[$row['RegisID']][59] = $row['TELPA'];
                $crpdf[$row['RegisID']][60] = $row['OC_PA'];
                $crpdf[$row['RegisID']][61] = $row['RELATION'];
                $crpdf[$row['RegisID']][62] = $row['HID'];
                $crpdf[$row['RegisID']][63] = $row['ENAME'];
                $crpdf[$row['RegisID']][64] = $row['ESURNAME'];
                $crpdf[$row['RegisID']][65] = $row['ENICKNAME'];
                $crpdf[$row['RegisID']][66] = $row['BIRTHPRO'];
                $crpdf[$row['RegisID']][67] = $row['BRO'];
                $crpdf[$row['RegisID']][68] = $row['BROBLM'];
                $crpdf[$row['RegisID']][69] = $row['VISIT'];
                $crpdf[$row['RegisID']][70] = $row['DIRECT'];
                $crpdf[$row['RegisID']][71] = $row['PAY'];
                $crpdf[$row['RegisID']][72] = $row['WEIGHT'];
                $crpdf[$row['RegisID']][73] = $row['HEIGHT'];
                $crpdf[$row['RegisID']][74] = $row['HEALTHY'];
                $crpdf[$row['RegisID']][75] = $row['FAID'];
                $crpdf[$row['RegisID']][76] = $row['MAID'];
                $crpdf[$row['RegisID']][77] = $row['PAID'];
            
            if($row['FNAME'] != ""){
                $btedit = '<a class="btn btn-default" href="../../index.php?edite=true&send=admin&adminID='.$row['RegisNaID'].'" >Data</a>';
                $daycome = $row['PLAN1'];
            }else{
              $btedit = " ";
              $daycome = " "; 
            }
            if($row['Role'] != 1){
                $btdel ='<button onclick="DeleteUser('.$row['RegisID'].')" class="btn btn-danger">Delete</button>';
            }else{
                $btdel ='';
            }
            if($row['HID'] != ""){
                //include('crepdf.php');
                //$btpdf = '<a class="btn btn-success" target="_blank" href="../../fpdf/MyPDF/'.$pdf_file.'" >PDF</a>';
                $btpdf = '<a class="btn btn-success" target="_blank" href="crepdf.php?keypdf='.$row['RegisNaID'].'" >PDF</a>';

            }else{
                $btpdf = 'ยังไม่กรอกข้อมูลเพิ่มเติม';
            }

            $a = $row['RegisNaID'].".pdf";
            $pdf_file = "../../fpdf/MyPDF/Thatnaraiwittaya-" . $a;

            $data .= '<tr>
                <td>'.$number.'</td>
                <td>'.$row['RegisNO'].'</td>
                <td>'.$row['RegisPWD'].'</td>
                <td>'.$row['RegisNaID'].'</td>
                <td><a href="'.$pdf_file.'" target="_blank">'.$row['FNAME'].' '.$row['LNAME'].'</a></td>
                <td>'.$row['OPTIONS'].'</td>
                <td>'.$daycome.'</td>                             
                 <td><a href=".././doc/action.php?id='.$row['RegisNaID'].'" target="_blank">เอกสาร</a></td>


                <td>
                    <button onclick="GetUserDetails('.$row['RegisID'].')" class="btn btn-warning">User</button> 
                    '.$btedit.'

                </td>
                <td>
                   '.$btdel.'
                </td>
                 <td>
                '.$btpdf.'
                </td>
            </tr>';
            $number--;
            $count++;
        }
       
             $_SESSION["countdata"] = $count;
        


    }
    else
    {
        // records now found 
        $data .= '<tr><td colspan="10">Records not found!</td></tr>';
        $_SESSION["countdata"] = 0;
    }

    $data .= '</table>';

    echo $data;

?>




            </div> <!-- ตารางข้อมูล -->

    


        </div>
    </div>
</div>
<!-- /Content Section -->


<!-- Bootstrap Modals -->
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add New Record</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="first_name">รหัสเข้าใช้งาน</label>
                    <input type="text" id="regisno" maxlength="6" placeholder="รหัสเข้าใช้งานตามระเบียบการ" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="last_name">รหัสผ่าน</label>
                    <input type="text" id="regispwd" maxlength="12" placeholder="รหัสผ่าน" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="email">รหัสบัตรประจำตัวประชาชน</label>
                    <input type="text" id="regisnaid" placeholder="จำนวน 13 หลัก" maxlength="13" class="form-control"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="addRecord()">Add Record</button>
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Modal - Update User details -->
<div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Update</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="update_first_name">รหัสเข้าใช้งาน</label>
                    <input type="text" id="update_regisno" maxlength="13" placeholder="เลขประจำตัวประชาชน" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_last_name">รหัสผ่าน</label>
                    <input type="text" id="update_regispwd" maxlength="13" placeholder="เลขประจำตัวประชาชน" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_email">รหัสบัตรประจำตัวประชาชน</label>
                    <input type="text" id="update_regisnaid" maxlength="13" placeholder="จำนวน 13 หลัก" class="form-control"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Save Changes</button>
                <input type="hidden" id="hidden_user_id">
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->


  <div class="container">
            <hr>
                <!-- Footer -->
                <footer>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <p>
                                ระบบรับสมัครนักเรียนโรงเรียนธาตุนารายณ์วิทยา </br>
                                Copyright © ICT Banglamung School
                            </p>
                        </div>
                    </div>
                </footer>
            </hr>
        </div>


<!-- Jquery JS file -->
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

<!-- Bootstrap JS file -->
<script type="text/javascript" src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

<!-- Custom JS file -->
<script type="text/javascript" src="js/script.js"></script>

<!--script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-75591362-1', 'auto');
    ga('send', 'pageview');

</script-->
<?php }} ?>
</body>
</html>
<?php ?>