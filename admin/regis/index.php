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

                 

//echo $_SESSION["cat"];
//echo "<br>".$_SESSION["Search"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ผู้ดูแลระบบ: หน้าระบบยืนยันการมายื่นเอกสาร</title>

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
                            <a class="navbar-nav" href="../user" target="_self">
                                <span class="glyphicon glyphicon-globe">
                                </span>
                                <font color="#ffffff">ระบบแก้ไขข้อมูลสำหรับ Admin</font>
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
        <br/> <br/>

<!-- Content Section -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><img src="../../img/register1.png" width="80px;"> ผู้ดูแลระบบ: หน้าระบบยืนยันการมายื่นเอกสารของผู้เรียน</h1>
        </div>
    </div>
    <!--div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Add New Record</button>
            </div>
        </div>
    </div-->
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
          <option value="RegisStatus"<?php if(isset($_REQUEST["cat"])){ if($_REQUEST["cat"] == "RegisStatus"){  echo"selected"; }} ?>
     >สถานะการยืนยัน</option>


    <option value="TYPE"<?php if(isset($_REQUEST["cat"])){ if($_REQUEST["cat"] == "TYPE"){  echo"selected"; }} ?>
     >ระดับชั้น</option>
<option value="TYPESuccess"<?php if(isset($_REQUEST["cat"])){ if($_REQUEST["cat"] == "TYPESuccess"){  echo"selected"; }} ?>
     >ระดับชั้นที่สมัครเสร็จสิ้น</option>
<option value="TYPE21"<?php if(isset($_REQUEST["cat"])){ if($_REQUEST["cat"] == "TYPE22"){  echo"selected"; }} ?>
     >22 : ระดับชั้นที่สมัครเสร็จสิ้น</option>
<option value="TYPE22"<?php if(isset($_REQUEST["cat"])){ if($_REQUEST["cat"] == "TYPE23"){  echo"selected"; }} ?>
     >23 : ระดับชั้นที่สมัครเสร็จสิ้น</option>
<option value="TYPE23"<?php if(isset($_REQUEST["cat"])){ if($_REQUEST["cat"] == "TYPE25"){  echo"selected"; }} ?>
     >25 : ระดับชั้นที่สมัครเสร็จสิ้น</option>
<option value="TYPE24"<?php if(isset($_REQUEST["cat"])){ if($_REQUEST["cat"] == "TYPE26"){  echo"selected"; }} ?>
     >26 : ระดับชั้นที่สมัครเสร็จสิ้น</option>
<option value="TYPE25"<?php if(isset($_REQUEST["cat"])){ if($_REQUEST["cat"] == "TYPE27"){  echo"selected"; }} ?>
     >27 : ระดับชั้นที่สมัครเสร็จสิ้น</option>
     <option value="DAYCOME"<?php if(isset($_REQUEST["cat"])){ if($_REQUEST["cat"] == "DAYCOME"){  echo"selected"; }} ?>
     >วันที่มายื่นเอกสาร</option>

</select>
</div>
</td>
<td width="64%">

     <input name="Search" type="text" class="input-sm"
     value="<?php if(isset($_REQUEST["Search"])) echo $_REQUEST["Search"]; ?>">
     <button class="btn btn-info" name="btnSearch" id="btnSearch" type="submit" value="btnSearch">Search</button>
      ตามรหัสผู้ใช้งาน, รหัสผ่าน, เลขบัตรประชาชน
      <a class="btn btn-default" 
      <?php if(isset($_SESSION["cat"])){ echo "href=\"index.php?btnAll=yes\""; }else{
        echo "href=\"\"";
      }
       ?>>ทั้งหมด</a>
<br><br>
<a class="btn btn-default" href="index.php?le=6"> ม.1 ทั้งหมด</a>
        <a class="btn btn-default" href="index.php?le=1&op=นักเรียนในเขตพื้นที่บริการ"> ม.1 ในเขตฯ</a>
        <a class="btn btn-default" href="index.php?le=1&op=นักเรียนนอกเขตพื้นที่บริการ"> ม.1 นอกเขตฯ</a>
        <!-- <a class="btn btn-default" href="index.php?le=1&op=นักเรียนที่มีเงื่อนไขพิเศษ"> ม.1 เงื่อนไขพิเศษ</a>
        <a class="btn btn-default" href="index.php?le=1&op=นักเรียนที่มีความสามารถพิเศษ"> ม.1 ความสามารถพิเศษ</a> -->
        
        <br/>

        <!-- <a class="btn btn-default" href="index.php?le=4&op=นักเรียนทั่วไป"> ม.4 ทั่วไป</a>
        <a class="btn btn-default" href="index.php?le=4&op=นักเรียนที่มีเงื่อนไขพิเศษ"> ม.4 เงื่อนไขพิเศษ</a>
        <a class="btn btn-default" href="index.php?le=4&op=นักเรียนที่มีความสามารถพิเศษ"> ม.4 ความสามารถพิเศษ</a> -->
        <br/>
        <a class="btn btn-default" href="index.php?le=4"> ม.4 ทั้งหมด</a>
<br><br>
        <!-- <a class="btn btn-primary" href="exam.php?le=1&op=นักเรียนในเขตพื้นที่บริการ&sh=yes">ผังสอบ ม.1 ในเขต</a>
        <a class="btn btn-primary" href="exam.php?le=1&op=นักเรียนทั่วไป&sh=yes">ผังสอบ ม.1 ทั่วไป</a>
        <a class="btn btn-primary" href="exam.php?le=4&op=นักเรียนทั่วไป&sh=yes">ผังสอบ ม.4 ทั้งหมด</a> -->
   
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
                            <th><h4>เลขบัตรฯ</h4></th>
                            <th><h4>ชื่อ - สกุล</h4></th>
                            <th><h4>ระดับชั้น</h4></th>
                            <th><h4>ประเภทนักเรียน</h4></th>
                            <th><h4>แผนการเรียน</h4></th>
                            <th><h4>วันที่ยืนยัน</h4></th>
                            <th><h4>สถานะการยืนยัน</h4></th>
        
                            <th><h4>ออกเลขที่นั่งสอบ</h4></th>
                        </tr>';

      include "query_data.php";

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

            //Query มาดู 

        

                $querycheck = " SELECT ExamStuNo, ExamNID, ExamID, exam.ExamBuilding, exam.ExamRoomNO 
                FROM sas_examno as examno
                INNER JOIN sas_exam as exam
                ON examno.ExamID = exam.id
                WHERE examno.ExamNID ='".$row['RegisNaID']. "'";

                if (!$resultcheck = mysql_query($querycheck)) {
                exit(mysql_error());
                }
                    $rowcheck = mysql_num_rows($resultcheck);
                    if($rowcheck > 0){
                        $room = mysql_fetch_assoc($resultcheck);
          
                      $abcde = 'เลขที่นั่งสอบ: '.$room['ExamStuNo'].' <br> ห้องสอบที่: '.$room['ExamID'].' <br> อาคารสอบ: '.$room['ExamBuilding'].' <br>  เลขที่ห้องสอบ: '.$room['ExamRoomNO'].' <br><button onclick="UnconfirmExamtest('.$room['ExamStuNo'].')" class="btn btn-danger">ยกเลิก</button>';
                }else{
                    $abcde  = '<a class="btn btn-warning" href="exam.php?nid='.$row['RegisNaID'].'&fname='.$row['FNAME'].'&lname='.$row['LNAME'].'&op='.$row['OPTIONS'].'&le='.$row['TYPE'].'">ออกเลขที่นั่ง</a>';

                    }

                if($row['RegisStatus']==1){
                   $statusDisabled =' <span class="text-success">ยืนยัน<span>';
                   

                }else{
                    
                    $statusDisabled =' <button onclick="ConfirmUser('.$row['RegisID'].')" class="btn btn-success">ยืนยัน</button>';

                    // <button onclick="UnconfirmUser('.$row['RegisID'].')" class="btn btn-danger">ยกเลิก</button>'
                }
                $dateCf = $row['RegisConfirm'];
                $year = substr($dateCf, 0, 4)+543;
                $month = substr($dateCf, 8, 2);
                $day = substr($dateCf, 8, 2);
                $time = substr($dateCf, 10, 6);

                if($day==00){
                    $date = '';
                }else{
                    $date = $day.'/'.$month.'/'.$year.' : '.$time.' น.';
                }
                

                 $data .= '<tr>
                <td>'.$number.'</td>
                <td>'.$row['RegisNaID'].'</td>
                <td>'.$row['FNAME'].' '.$row['LNAME'].'</td>
                 <td> ม.'.$row['TYPE'].'</td>
                <td>'.$row['OPTIONS'].'</td>
                <td>'.$row['PLAN1'].'</td>
                <td>'.$date.' </td>
                <td>'.$row['RegisStatus'].$statusDisabled.'
                

                </td>
                <td>
                '.$abcde.'
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
        $data .= '<tr><td colspan="9">Records not found!</td></tr>';
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
                    <input type="text" id="update_regisno" maxlength="6" placeholder="รหัสเข้าใช้งานตามระเบียบการ" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_last_name">รหัสผ่าน</label>
                    <input type="text" id="update_regispwd" maxlength="12" placeholder="รหัสผ่าน" class="form-control"/>
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
                                Copyright © งานพัฒนาระบบเทคโนโลยีสารสนเทศ โรงเรียนบางละมุง
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
<?php }
} ?>
</body>
</html>
<?php ?>