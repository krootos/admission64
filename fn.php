<?php
//echo $_SESSION["NaID"];
function insertregister($data)
{
    include 'conn.php';
    $sql = "INSERT INTO sas_register";
    $sql .= "(RegisNO, RegisPWD, RegisNaID)";
    $sql .= "VALUES ";
    $sql .= "('" . $data[0] . "','" . $data[1] . "','" . $data[0] . "')";

    $result_register = mysqli_query($mysqli, $sql);

    // if ($rowsnew > $rowsold) {
    if ($result_register) {
        $sql_selectnew = "SELECT * from sas_register WHERE RegisNaID = '" . $data[2] . "'";
        $anew = mysqli_query($mysqli, $sql_selectnew);
        if ($anew) {
            $user = mysqli_fetch_array($anew);
            $_SESSION["SUCCESS_REGISTER"] = 1; //สร้างตัวแปรเพื่เช็คว่ามีการ ลงทะเบียนข้อมูลไว้หรือยัง
            $_SESSION["REGISNO"] = $user["RegisNO"];
            $_SESSION["REGISPWD"] = $user["RegisPWD"];
            $_SESSION["REGISNAID"] = $user["RegisNaID"];
        }
?>
        <div class="alert alert-success text-center" role="alert">
            <p style="font-size: 20px;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> ลงทะเบียนเรียบร้อยแล้ว
            </p>
            <p style="font-size: 20px;"><a href="index.php?regisdone=done">คลิกเข้าสู่ระบบผู้สมัครสอบ
                </a></p>
        </div>

        <div class="caption-full">
            <div class="table-responsive">
                <h3 style="color: #c7254e;"><span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                    ข้อมูลการลงทะเบียน</h3>
                <!--p>The .table-condensed class makes a table more compact by cutting cell padding in half:</p-->
                <table class="table table-hover">
                    <thead>
                        <tr>

                            <th>รหัสเข้าใช้งาน</th>
                            <th>รหัสผ่าน</th>
                            <th>รหัสบัตรประจำตัวประชาชน</th>

                            <th>เปลี่ยนแปลงข้อมูลรหัสผ่าน</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td><?php echo "$data[0]"; ?></td>
                            <td><?php echo "$data[1]"; ?></td>
                            <td><?php echo "$data[0]"; ?></td>

                            <td><?php echo "<a href=\"\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span> เปลี่ยนแปลงข้อมูลติดต่อผู้ดูแลระบบ</a>"; ?>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    <?php
    } else { ?>

        <div class="alert alert-danger text-center" role="alert">
            <i><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> ล้มเหลว
                ข้อมูลนี้ได้ลงทะเบียนไว้แล้ว
            </i>
        </div>

<?php
    }
    mysqli_close($mysqli);
}
?>

<?php
if (isset($_SESSION["NaID"])) {
    $nid = $_SESSION["NaID"];
}
if (isset($_SESSION["SAS1"])) {
    $data1 = $_SESSION["SAS1"];
}
if (isset($_SESSION["SAS2"])) {
    $data2 = $_SESSION["SAS2"];
}
if (isset($_SESSION["SAS3"])) {
    $data3 = $_SESSION["SAS3"];
}
if (isset($_SESSION["SAS4"])) {
    $data4 = $_SESSION["SAS4"];
}
if (isset($_SESSION["SAS5"])) {
    $data5 = $_SESSION["SAS5"];
}
if (isset($_SESSION["SAS6"])) {
    $data6 = $_SESSION["SAS6"];
}
//if(isset($_SESSION["SAS7"])){ $data7 = $_SESSION["SAS7"]; }

function insertstudentdata($data1, $data2, $data3, $data4, $data5, $data6, $data7, $nid)
{
    include "conn.php";
    //Query ???????? 1
    // $sql_select = "SELECT * from sas_studentdata";
    // $a          = mysql_query($sql_select);
    //$rowsold    = mysql_num_rows($a);

    //Query ???????? 2
    date_default_timezone_set('Asia/Bangkok');
    $year = date("Y") + 543;
    //$createdate =  date("d/m")."/".$year;
    $createdate = date("d / m") . " / " . $year;

    /* if($data1[1] == "1"){
    $data4[10] = "";
     */

    if ($data7[12] == 1) {
        $d = "บิดา";

        $sql = "INSERT INTO sas_studentdata";
        $sql .= "(NID, TYPE, OPTIONS, OPTIONSPECIAL, MORE, PLAN1, PLAN2, PLAN3, PLAN4, PLAN5, SNAME, FNAME, LNAME, BIRTHDAY, SEX, RELI, REGINAL, REGINALITY, GROUPBLOOD, HADDRESS, MOO, SOI, ROAD, PROVINCE_ID, DISTRICT_ID, AMPHUR_ID, TEL, EMAIL, GRADUATE, LSCHOOL, GPA, SNAMEFA, FNAMEFA,  LNAMEFA, TELFA, SNAMEMA, FNAMEMA, LNAMEMA, TELMA, FAMILYSTATUS, CREATEDATE, DAYCOME, ID_PROVINCE_SC, OC_FA, OC_MA, TYPEPARENT, SNAMEPA, FNAMEPA, LNAMEPA, TELPA, OC_PA, RELATION, schoolsecond, stuIDold)";
        $sql .= "VALUES ";
        $sql .= "('" . $nid . "','" . $data1[1] . "','" . $data2[1] . "','" . $data2[1] . "','" . $data2[1] . "','" . $data3[1] . "','" . $data3[2] . "','" . $data3[3] . "','" . $data3[5] . "','" . $data3[6] . "','" . $data4[1] . "','" . $data4[2] . "','" . $data4[3] . "','" . $data4[4] . "'";
        $sql .= ",'" . $data4[5] . "','" . $data4[6] . "','" . $data4[7] . "','" . $data4[8] . "','" . $data4[9] . "'";
        $sql .= ",'" . $data5[1] . "','" . $data5[2] . "','" . $data5[3] . "','" . $data5[9] . "','" . $data5[4] . "','" . $data5[6] . "'";
        $sql .= ",'" . $data5[5] . "','" . $data5[7] . "','" . $data5[8] . "','" . $data6[1] . "','" . $data6[2] . "'";
        $sql .= ",'" . $data6[3] . "','" . $data7[1] . "','" . $data7[2] . "','" . $data7[3] . "','" . $data7[4] . "'";
        $sql .= ",'" . $data7[5] . "','" . $data7[6] . "','" . $data7[7] . "','" . $data7[8] . "','" . $data7[9] . "','" . $createdate . "', '" . $data3[4] . "','" . $data6[4] . "','" . $data7[10] . "','" . $data7[11] . "','" . $data7[12] . "','" . $data7[1] . "','" . $data7[2] . "','" . $data7[3] . "','" . $data7[4] . "','" . $data7[10] . "','" . $d . "','" . $data6[5] . "','" . $data4[10] . "')";
    } elseif ($data7[12] == 2) {
        $sql = "INSERT INTO sas_studentdata";
        $sql .= "(NID, TYPE, OPTIONS, OPTIONSPECIAL, MORE, PLAN1, PLAN2, PLAN3, PLAN4, PLAN5, SNAME, FNAME, LNAME, BIRTHDAY, SEX, RELI, REGINAL, REGINALITY, GROUPBLOOD, HADDRESS, MOO, SOI, ROAD, PROVINCE_ID, DISTRICT_ID, AMPHUR_ID, TEL, EMAIL, GRADUATE, LSCHOOL, GPA, SNAMEFA, FNAMEFA,  LNAMEFA, TELFA, SNAMEMA, FNAMEMA, LNAMEMA, TELMA, FAMILYSTATUS, CREATEDATE, DAYCOME, ID_PROVINCE_SC, OC_FA, OC_MA, TYPEPARENT, SNAMEPA, FNAMEPA, LNAMEPA, TELPA, OC_PA, RELATION, schoolsecond, stuIDold)";
        $sql .= "VALUES ";
        $sql .= "('" . $nid . "','" . $data1[1] . "','" . $data2[1] . "','" . $data2[2] . "','" . $data2[3] . "','" . $data3[1] . "','" . $data3[2] . "','" . $data3[3] . "','" . $data3[5] . "','" . $data3[6] . "','" . $data4[1] . "','" . $data4[2] . "','" . $data4[3] . "','" . $data4[4] . "'";
        $sql .= ",'" . $data4[5] . "','" . $data4[6] . "','" . $data4[7] . "','" . $data4[8] . "','" . $data4[9] . "'";
        $sql .= ",'" . $data5[1] . "','" . $data5[2] . "','" . $data5[3] . "','" . $data5[9] . "','" . $data5[4] . "','" . $data5[6] . "'";
        $sql .= ",'" . $data5[5] . "','" . $data5[7] . "','" . $data5[8] . "','" . $data6[1] . "','" . $data6[2] . "'";
        $sql .= ",'" . $data6[3] . "','" . $data7[1] . "','" . $data7[2] . "','" . $data7[3] . "','" . $data7[4] . "'";
        $sql .= ",'" . $data7[5] . "','" . $data7[6] . "','" . $data7[7] . "','" . $data7[8] . "','" . $data7[9] . "','" . $createdate . "', '" . $data3[4] . "','" . $data6[4] . "','" . $data7[10] . "','" . $data7[11] . "','" . $data7[12] . "','" . $data7[5] . "','" . $data7[6] . "','" . $data7[7] . "','" . $data7[8] . "','" . $data7[11] . "','" . $d . "','" . $data6[5] . "','" . $data4[10] . "')";
    } else {
        $sql = "INSERT INTO sas_studentdata";
        $sql .= "(NID, TYPE, OPTIONS, OPTIONSPECIAL, MORE, PLAN1, PLAN2, PLAN3, PLAN4, PLAN5, SNAME, FNAME, LNAME, BIRTHDAY, SEX, RELI, REGINAL, REGINALITY, GROUPBLOOD, HADDRESS, MOO, SOI, ROAD, PROVINCE_ID, DISTRICT_ID, AMPHUR_ID, TEL, EMAIL, GRADUATE, LSCHOOL, GPA, SNAMEFA, FNAMEFA,  LNAMEFA, TELFA, SNAMEMA, FNAMEMA, LNAMEMA, TELMA, FAMILYSTATUS, CREATEDATE, DAYCOME, ID_PROVINCE_SC, OC_FA, OC_MA, TYPEPARENT, SNAMEPA, FNAMEPA, LNAMEPA, TELPA, OC_PA, RELATION, schoolsecond, stuIDold)";
        $sql .= "VALUES ";
        $sql .= "('" . $nid . "','" . $data1[1] . "','" . $data2[1] . "','" . $data2[2] . "','" . $data2[3] . "','" . $data3[1] . "','" . $data3[2] . "','" . $data3[3] . "','" . $data3[5] . "','" . $data3[6] . "','" . $data4[1] . "','" . $data4[2] . "','" . $data4[3] . "','" . $data4[4] . "'";
        $sql .= ",'" . $data4[5] . "','" . $data4[6] . "','" . $data4[7] . "','" . $data4[8] . "','" . $data4[9] . "'";
        $sql .= ",'" . $data5[1] . "','" . $data5[2] . "','" . $data5[3] . "','" . $data5[9] . "','" . $data5[4] . "','" . $data5[6] . "'";
        $sql .= ",'" . $data5[5] . "','" . $data5[7] . "','" . $data5[8] . "','" . $data6[1] . "','" . $data6[2] . "'";
        $sql .= ",'" . $data6[3] . "','" . $data7[1] . "','" . $data7[2] . "','" . $data7[3] . "','" . $data7[4] . "'";
        $sql .= ",'" . $data7[5] . "','" . $data7[6] . "','" . $data7[7] . "','" . $data7[8] . "','" . $data7[9] . "','" . $createdate . "', '" . $data3[4] . "','" . $data6[4] . "','" . $data7[10] . "','" . $data7[11] . "','" . $data7[12] . "','" . $data7[13] . "','" . $data7[14] . "','" . $data7[15] . "','" . $data7[16] . "','" . $data7[17] . "','" . $data7[18] . "','" . $data6[5] . "','" . $data4[10] . "')";
    }

    $success_Query = mysqli_query($mysqli, $sql);
    mysqli_affected_rows($mysqli);
    //Query ???????? 3
    /*$sql_selectnew = "SELECT * from sas_studentdata";
    $anew          = mysql_query($sql_selectnew);
    $rowsnew       = mysql_num_rows($anew);*/

    if ($success_Query) {
        $_SESSION["insertsuccess"] = 1;
        ///////////////
        selectfirst($nid); // เรียกใช้ Function    selectfirst($nid);
?>
        <!--  -->
    <?php
    } else { ?>
        <div class="alert alert-danger text-center" role="alert">
            <i><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> ล้มเหลว โปรดลองเข้าระบบใหม่อีกครั้ง
            </i>
        </div>

<?php }
    //mysql_close();
} ?>



<?php
function selectfirst($nid)
{
    include "conn.php";

    $sql_ex = "SELECT ExamStuNo, ExamNID, ExamID, b.id, b.ExamBuilding, b.ExamRoomNO
                FROM sas_examno as a
                INNER JOIN sas_exam as b
                ON a.ExamID = b.id
                WHERE a.ExamNID = '" . $nid . "'";
    $sql_user = "SELECT * FROM sas_register WHERE RegisNaID = '" . $nid . "'";
    $sql_studata = "SELECT NID, TYPE, OPTIONS, OPTIONSPECIAL, MORE, PLAN1, PLAN2, PLAN3, PLAN4, PLAN5, SNAME, FNAME, LNAME, 
                    BIRTHDAY, SEX, RELI, REGINAL, REGINALITY, GROUPBLOOD, 
                    HADDRESS, MOO, SOI, ROAD,  sd.PROVINCE_ID, sd.DISTRICT_ID, sd.AMPHUR_ID, 
                    TEL, EMAIL, GRADUATE, LSCHOOL, GPA, SNAMEFA, FNAMEFA,  LNAMEFA, TELFA, SNAMEMA, FNAMEMA, LNAMEMA, TELMA, FAMILYSTATUS, 
                    dt.DISTRICT_NAME , ap.POSTCODE, ap.AMPHUR_NAME, pv.PROVINCE_NAME, CREATEDATE, DAYCOME, ID_PROVINCE_SC, OC_FA, OC_MA, TYPEPARENT, SNAMEPA, FNAMEPA, LNAMEPA, TELPA, OC_PA, RELATION, schoolsecond, stuIDold
                FROM sas_studentdata as sd
                INNER JOIN district as dt
                ON sd.DISTRICT_ID = dt.DISTRICT_ID
                INNER JOIN amphur as ap
                ON dt. AMPHUR_ID = ap. AMPHUR_ID
                INNER JOIN province as pv
                ON ap. PROVINCE_ID = pv. PROVINCE_ID
                WHERE sd.NID = '" . $nid . "'";
    $resultaz = mysqli_query($mysqli, $sql_ex);
    $resultstu = mysqli_query($mysqli, $sql_studata);
    $resultuser = mysqli_query($mysqli, $sql_user);
    //$rows       = mysql_num_rows($resultstu);

    if (mysqli_num_rows($resultaz) > 0) {
        $ex = mysqli_fetch_assoc($resultaz);
        $_SESSION["EX"][1] = $ex["ExamStuNo"];
        $_SESSION["EX"][2] = $ex["ExamID"];
        $_SESSION["EX"][3] = $ex["ExamBuilding"];
        $_SESSION["EX"][4] = $ex["ExamRoomNO"];
    }

    if (mysqli_num_rows($resultuser) > 0) {
        $stuuser = mysqli_fetch_array($resultuser);
        $_SESSION["CODE"] = $stuuser["RegisNO"];
        $_SESSION["ROLE"] = $stuuser["Role"];
    }
    if (mysqli_num_rows($resultstu) > 0) {
        // do while loop
        $studata = mysqli_fetch_array($resultstu);
        //$rows    = mysql_fetch_row($resultstu);
        //echo $rows[1];
        echo ""; //BBBBBBBBBuuuuuuuuuuuuuuuuuuuugggggggggggggggggggggggggg
        $_SESSION["EDITE"][0] = $studata["NID"];
        $_SESSION["EDITE"][1] = $studata["TYPE"];
        $_SESSION["EDITE"][2] = $studata["OPTIONS"];

        $_SESSION["EDITE"][3] = $studata["OPTIONSPECIAL"];
        $_SESSION["EDITE"][4] = $studata["MORE"];
        $_SESSION["EDITE"][5] = $studata["PLAN1"];
        $_SESSION["EDITE"][6] = $studata["PLAN2"];
        $_SESSION["EDITE"][7] = $studata["PLAN3"];
        $_SESSION["EDITE"][57] = $studata["PLAN4"];
        $_SESSION["EDITE"][58] = $studata["PLAN5"];

        $_SESSION["EDITE"][8] = $studata["SNAME"];
        $_SESSION["EDITE"][9] = $studata["FNAME"];
        $_SESSION["EDITE"][10] = $studata["LNAME"];
        $_SESSION["EDITE"][11] = $studata["BIRTHDAY"];
        $_SESSION["EDITE"][12] = $studata["SEX"];
        $_SESSION["EDITE"][13] = $studata["RELI"]; //ศาสนา

        $_SESSION["EDITE"][14] = $studata["REGINAL"];
        $_SESSION["EDITE"][15] = $studata["REGINALITY"];
        $_SESSION["EDITE"][16] = $studata["GROUPBLOOD"];
        $_SESSION["EDITE"][17] = $studata["HADDRESS"];
        $_SESSION["EDITE"][18] = $studata["MOO"];
        $_SESSION["EDITE"][19] = $studata["SOI"];

        $_SESSION["EDITE"][20] = $studata["PROVINCE_ID"];
        $_SESSION["EDITE"][21] = $studata["DISTRICT_ID"];
        $_SESSION["EDITE"][22] = $studata["AMPHUR_ID"];
        $_SESSION["EDITE"][23] = $studata["TEL"];
        $_SESSION["EDITE"][24] = $studata["EMAIL"];
        $_SESSION["EDITE"][25] = $studata["GRADUATE"];

        $_SESSION["EDITE"][26] = $studata["LSCHOOL"];
        $_SESSION["EDITE"][27] = $studata["GPA"];
        $_SESSION["EDITE"][28] = $studata["SNAMEFA"];
        $_SESSION["EDITE"][29] = $studata["FNAMEFA"];
        $_SESSION["EDITE"][30] = $studata["LNAMEFA"];
        $_SESSION["EDITE"][31] = $studata["TELFA"];
        $_SESSION["EDITE"][32] = $studata["SNAMEMA"];
        $_SESSION["EDITE"][33] = $studata["FNAMEMA"];
        $_SESSION["EDITE"][34] = $studata["LNAMEMA"];
        $_SESSION["EDITE"][35] = $studata["TELMA"];
        $_SESSION["EDITE"][36] = $studata["FAMILYSTATUS"];
        $_SESSION["EDITE"][37] = $studata["DISTRICT_NAME"];
        $_SESSION["EDITE"][38] = $studata["POSTCODE"];
        $_SESSION["EDITE"][39] = $studata["AMPHUR_NAME"];
        $_SESSION["EDITE"][40] = $studata["PROVINCE_NAME"];
        if (isset($_SESSION["RegisNO"])) {
            $_SESSION["EDITE"][41] = $_SESSION["RegisNO"];
        }
        $_SESSION["EDITE"][42] = $studata["ROAD"];
        $_SESSION["EDITE"][43] = $studata["CREATEDATE"];
        $_SESSION["EDITE"][44] = $studata["DAYCOME"];
        $_SESSION["EDITE"][45] = $studata["ID_PROVINCE_SC"];

        $_SESSION["EDITE"][46] = $studata["OC_FA"];
        $_SESSION["EDITE"][47] = $studata["OC_MA"];
        $_SESSION["EDITE"][48] = $studata["SNAMEPA"];
        $_SESSION["EDITE"][49] = $studata["FNAMEPA"];
        $_SESSION["EDITE"][50] = $studata["LNAMEPA"];
        $_SESSION["EDITE"][51] = $studata["TELPA"];
        $_SESSION["EDITE"][52] = $studata["OC_PA"];
        $_SESSION["EDITE"][53] = $studata["RELATION"];
        $_SESSION["EDITE"][54] = $studata["TYPEPARENT"];
        $_SESSION["EDITE"][55] = $studata["schoolsecond"];
        $_SESSION["EDITE"][56] = $studata["stuIDold"];
        //$aaa = date_format($studata["CREATEDATE"], '%d/%m/%Y');

        //$strdate = $studata["DATECREATE"]; // 2017-02-28 18:51:33
        //$datecut = $studata["DATECREATE"];
        //$cutdate = explode(" ",$datecut);
        // $ddmm    = explode("-",$$cutdate[0]);
        //$_SESSION["EDITE"][43]  = $ddmm[2]."/".$ddmm[1]."/".$ddmm[0];
        //include "create_pdf.php";

 ?>


        <div class="caption-full">

            <h3 style="color: #3b2b7e;"><span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span>
                อัพโหลดเอกสารเพื่อตรวจสอบคุณสมบัติ <br />(ขนาดรูปภาพที่ใช้อัพโหลดไม่เกิน 1 MB)
            </h3>
            <i style="color: #ff0000;"> ** แนบไฟล์ภาพเอกสารต่อไปนี้ประกอบการสมัคร สำหรับให้เจ้าหน้าที่ตรวจสอบคุณสมบัติ **</i>
            <i style="color: #56004f;">
                <(ใช้ภาพที่ถ่ายด้วยโทรศัพท์มือถือได้)< /i><br />
                    <i style="color: #ff0000;"> 1. ใบรับรองการจบการศึกษา </i><br />
                    <i style="color: #56004f;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.1 ใบ ปพ.1 ด้านหน้า </i><br>
                    <i style="color: #56004f;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.2 ใบ ปพ.1 ด้านหลัง </i><br>
                    <i style="color: #ff0000;"> 2. สำเนาทะเบียนบ้าน </i><br>
                    <br>

                    <div class="table-responsive">

                        <div>
                            <br />
                            <div align="left">
                                <button type="button" name="add" id="add" class="btn btn-success glyphicon glyphicon-cloud-upload"> เพิ่มเอกสาร </button>
                            </div>
                            <br />
                            <div id="image_data">

                            </div>
                        </div>

                        <div id="imageModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">เพิ่มรูปภาพเอกสาร</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form id="image_form" method="post" enctype="multipart/form-data">
                                            <p>

                                                <input type="hidden" size="25" name="txtID" id="ID" OnKeyPress="return chkNumber(this)" required="" maxlength="13" value='<?php echo "" . $studata["NID"] ?>' />
                                            </p>
                                            <label>เลือกภาพเอกสารที่ต้องการแนบ : </label>

                                            <input type="file" name="image" id="image" /></p>
                                            <label>เลือกประเภทเอกสาร: (อัพโหลดให้ครบทั้ง 3 ชนิด) </label><br />

                                            <input type="radio" required size="7px" name="txtDoc" id="ID" value="ปพ.1 ด้านหน้า" required /> <label for="male">ปพ.1 ด้านหน้า</label>
                                            <input type="radio" size="7px" name="txtDoc" id="ID" value="ปพ.1 ด้านหลัง" required /> <label for="male">ปพ.1 ด้านหลัง</label>
                                            <input type="radio" size="7px" name="txtDoc" id="ID" value="ทะเบียนบ้าน" required /> <label for="male">ทะเบียนบ้าน</label>
                                            <input type="hidden" name="action" id="action" value="insert" />
                                            <input type="hidden" name="image_id" id="image_id" />
                                            <!-- <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" /> -->
                                            <br /><br />
                                            <button type="submit" name="insert" id="insert" value="insert" class="btn btn-info">เพิ่มเอกสาร</button>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <script>
                        $(document).ready(function() {

                            fetch_data();

                            function fetch_data() {
                                var action = "fetch";
                                $.ajax({
                                    url: "action.php",
                                    method: "POST",
                                    data: {
                                        action: action
                                    },
                                    success: function(data) {
                                        $('#image_data').html(data);
                                    }
                                })
                            }
                            $('#add').click(function() {
                                $('#imageModal').modal('show');
                                $('#image_form')[0].reset();
                                $('.modal-title').text("เพิ่มรูปภาพเอกสารสำหรับตรวจสอบคุณสมบัติ");
                                $('#image_id').val('');
                                $('#action').val('insert');
                                $('#insert').val("Insert");
                            });
                            $('#image_form').submit(function(event) {
                                event.preventDefault();
                                var image_name = $('#image').val();
                                if (image_name == '') {
                                    alert("กรุณาเลือกรูปภาพ");
                                    return false;
                                } else {
                                    var extension = $('#image').val().split('.').pop().toLowerCase();
                                    if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                                        alert("โปรดเลือกไฟล์ที่เป็นรูปภาพ .jpg หรือ .png เท่านั้น");
                                        $('#image').val('');
                                        return false;
                                    } else {
                                        $.ajax({
                                            url: "action.php",
                                            method: "POST",
                                            data: new FormData(this),
                                            contentType: false,
                                            processData: false,
                                            success: function(data) {
                                                alert(data);
                                                fetch_data();
                                                $('#image_form')[0].reset();
                                                $('#imageModal').modal('hide');
                                            }
                                        });
                                    }
                                }
                            });
                            $(document).on('click', '.update', function() {
                                $('#image_id').val($(this).attr("id"));
                                $('#action').val("update");
                                $('.modal-title').text("Update Image");
                                $('#insert').val("Update");
                                $('#imageModal').modal("show");
                            });
                            $(document).on('click', '.delete', function() {
                                var image_id = $(this).attr("id");
                                var action = "delete";
                                if (confirm("คุณแน่ใจหรือไม่ที่จะลบรูปภาพนี้?")) {
                                    $.ajax({
                                        url: "action.php",
                                        method: "POST",
                                        data: {
                                            image_id: image_id,
                                            action: action
                                        },
                                        success: function(data) {
                                            alert(data);
                                            fetch_data();
                                        }
                                    })
                                } else {
                                    return false;
                                }
                            });
                        });
                    </script>



                    <div class="table-responsive">
                        <h3 style="color: #c7254e;"><span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                            ข้อมูลการสมัครเรียน</h3>
                        <!--p>The .table-condensed class makes a table more compact by cutting cell padding in half:</p-->
                        <table class="table table-hover">
                            <thead>
                                <tr>

                                    <th>ระดับชั้นที่สมัคร</th>
                                    <th>ชื่อ - นามสกุล</th>
                                    <th>ประเภทนักเรียน</th>
                                    <th>แผนการเรียน</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td><?php echo "มัธยมศึกษาปีที่ " . $studata["TYPE"]; ?></td>
                                    <td><?php echo $studata["SNAME"] . "" . $studata["FNAME"] . " " . $studata["LNAME"]; ?></td>
                                    <td><?php
                                        if ($studata["OPTIONS"] == "") {
                                            echo "นักเรียนทั่วไป";
                                        } else {
                                            echo $studata["OPTIONS"];
                                        }
                                        ?></td>
                                    <td><?php
                                        if ($studata["PLAN1"] == "") {
                                            echo "ไม่มีแผนการเรียน";
                                        } else {
                                            echo $studata["PLAN1"];
                                        }
                                        ?></td>


                                </tr>
                            </tbody>
                        </table>

                        <h3 style="color: #0275d8;"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                            แก้ไขข้อมูล ตรวจสอบคุณสมบัติ และพิมพ์ใบสมัคร</h3>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>แก้ไขข้อมูล</th>
                                    <th>การตรวจสอบคุณสมบัติ</th>
                                    <th>พิมพ์ใบสมัคร</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td><?php
                                        if ($stuuser["RegisStatus"] == "0") {
                                            echo "<a href=\"?edite=true\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span> แก้ไข</a>";
                                        } else { ?>

                                            <span style='color:#188407'>ตรวจสอบคุณสมบัติผ่านแล้ว</span>


                                        <?php
                                        }


                                        ?>
                                    </td>

                                    <td><?php
                                        if ($stuuser["RegisStatus"] == "1") { //**ตรวจสอบคุณสมบัติ */ 
                                        ?>

                                            <span style='color:#188407'>ตรวจสอบคุณสมบัติผ่านแล้ว</span>

                                        <?php
                                        } else { ?>



                                            <span style='color:#188407'>รอตรวจสอบคุณสมบัติ</br>

                                            </span>
                                            <span style='color:#ff00a3'>**โปรดบันทึกข้อมูลการมอบตัวนักเรียน</span>


                                        <?php
                                        }


                                        ?>
                                    </td>

                                    <td>
                                        <?php
                                        if (@$ex["ExamStuNo"] == "") {
                                            echo "<span style='color:#ff0000'>รอการออกเลขประจำตัวผู้สมัครสอบ </span>";
                                        } else {
                                            $a = $_SESSION["NaID"] . ".pdf";
                                            $pdf_file = "../../fpdf/MyPDF/Thatnaraiwittaya-" . $a;
                                            
                                            
                                            ?>
                                            <a href="fpdf/MyPDF/<?php echo $pdf_file; ?>" target="_blank">
                                                <span class="glyphicon glyphicon-print" aria-hidden="true"></span> พิมพ์ใบสมัคร
                                             </a>


                                        <?php
                                        }
                                        ?>

                                    </td>

                                </tr>
                            </tbody>
                        </table>


                    </div>
        </div>

        <!-- ส่วนของการมอบตัว-->
        <?php if (!isset($_GET["edite"])) { ?>

            <div class="caption-full">
                <div class="table-responsive">
                    <h3 style="color: #1b8220;"><span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                        ข้อมูลการมอบตัวนักเรียน
                    </h3>

                    <i style="color: #ff0000;">**กรอกข้อมูลเพิ่มเติม เพื่อใช้สำหรับพิมพ์ใบมอบตัว
                        (ส่วนนี้สำหรับกรอกข้อมูลเพิ่มเพื่อพิมพ์ใบมอบตัว)</i>

                    <?php
                    include 'conn.php';
                    $sql_other = "SELECT * FROM sas_other WHERE NID = '" . $nid . "'";
                    $resultother = mysqli_query($mysqli, $sql_other);
                    //$rows       = mysql_num_rows($resultstu);
                    if (mysqli_num_rows($resultother) > 0) {
                        $otdata = mysqli_fetch_array($resultother);

                        $h1 = substr($otdata["HID"], 0, 4);
                        $h2 = substr($otdata["HID"], 4, 6);
                        $h3 = substr($otdata["HID"], 10, 1);
                        $hid = $h1 . " - " . $h2 . " - " . $h3;

                    ?>
                        <table class="table table-hover">
                            <thead>
                                <tr>

                                    <th>รหัสบ้าน</th>
                                    <th>Name - Surname</th>
                                    <th>Nickname</th>
                                    <th>น้ำหนัก</th>
                                    <th>ส่วนสูง</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td><?php echo $hid; ?></td>
                                    <td><?php echo $otdata["ENAME"] . " " . $otdata["ESURNAME"]; ?></td>
                                    <td><?php echo $otdata["ENICKNAME"]; ?></td>
                                    <td><?php echo $otdata["WEIGHT"] . " กก."; ?></td>
                                    <td><?php echo $otdata["HEIGHT"] . " ซม."; ?></td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>แก้ไขข้อมูลเพิ่มเติม</th>
                                    <th>พิมพ์ใบมอบตัว</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>
                                        <?php echo '<button onclick="GetUserDetails(' . $_SESSION["NaID"] . ')" class="btn btn-warning">แก้ไขข้อมูลเพิ่มเติม</button>'; ?>
                                    </td>

                                    <td>
                                        <!--a href="fpdf/MyPDF/<?php //echo $pdf_file; 
                                                                ?>" target="_blank">
                        <span class="glyphicon glyphicon-print" aria-hidden="true"></span-->
                                        ส่วนพิมพ์ใบมอบตัวของเจ้าหน้าที่
                                        <!--/a-->
                                        <?php //echo "<a href=\"\"><span class=\"glyphicon glyphicon-print\" aria-hidden=\"true\"></span> พิมพ์ใบสมัคร</a>"; 
                                        ?>
                                    </td>

                                </tr>
                            </tbody>
                        </table>


                </div>
            </div>



        <?php } //end ของ if (mysql_num_rows($resultother) > 0) {


                    else { //ถ้าไม่มีข้อมูลเพิ่มเติม
        ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>เพิ่มข้อมูลเพิ่มเติม</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <?php echo '<button onclick="GetUserDetailsFa(' . $_SESSION["NaID"] . ')" class="btn btn-success">เพิ่มข้อมูลเพิ่มเติมเพื่อให้เจ้าหน้าที่พิมพ์ใบมอบตัว</button>'; ?>
                            <!--button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">เพิ่มข้อมูลเพิ่มเติมเพื่อให้เจ้าหน้าที่พิมพ์ใบมอบตัว
                                </button-->
                        </td>
                    </tr>
                </tbody>
            </table>





        <?php } ?>

        <div class="caption-full">
        </div>



<?php

        } // ส่วนของ END if(!isset($_GET["edite"])){


    } //end ของ if (mysql_num_rows($resultstu) > 0) {
    else { // ถ้าไม่มีข้อมูล
        if (!isset($_POST['btnNext1'])) {
            if (!isset($_POST['btnNext2'])) {
                if (!isset($_POST['btnNext3'])) {
                    if (!isset($_POST['btnNext4']) && !isset($_POST['btnNext4-1']) && !isset($_POST['btnNext4-2'])) {
                        if (!isset($_POST['btnNext5'])) {
                            if (!isset($_POST['btnNext6'])) {
                                if (!isset($_POST['btnNext7'])) {
                                    if (!isset($_GET['Refresh'])) {
                                        include 'section/breadcrumb.php';
                                        include 'section/1.php';
                                        // include("section/6.php");
                                        // include("section/7.php");
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    mysqli_close($mysqli);
}
?>


<?php
function SelectAfterRegister($nid) // ฟังก์ชั่นหลังจากลงทะเบียนแล้ว

{
    include 'conn.php';

    $sql_selectAfter = "SELECT * from sas_register WHERE RegisNaID = '" . $nid . "'";
    $after = mysqli_query($mysqli, $sql_selectAfter);
    if ($after) {
        $user = mysqli_fetch_array($after);

?>
        <div class="caption-full">
            <div class="table-responsive">
                <h3 style="color: #c7254e;"><span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                    ข้อมูลการลงทะเบียน (กรุณาจดจำข้อมูล)</h3>
                <!--p>The .table-condensed class makes a table more compact by cutting cell padding in half:</p-->
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>รหัสเข้าใช้งาน</th>
                            <th>รหัสผ่าน</th>
                            <th>รหัสบัตรประจำตัวประชาชน</th>
                            <th>เปลี่ยนแปลงข้อมูลรหัสผ่าน</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td><?php echo $user["RegisNO"]; ?></td>
                            <td><?php echo $user["RegisPWD"]; ?></td>
                            <td><?php echo $user["RegisNaID"]; ?></td>

                            <td><?php echo "<a href=\"index.php\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span>เปลี่ยนแปลงข้อมูลติดต่อผู้ดูแลระบบ</a>"; ?>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <?php
    }
}

function updatedatabt1($nid, $data)
{

    include "conn.php";
    $strSQL = "UPDATE sas_studentdata SET ";
    $strSQL .= "TYPE = '" . $data . "' ";
    //$strSQL .=",hid = '".$data[1]."' ";
    $strSQL .= "WHERE NID = '" . $nid . "' ";
    $objQuery = mysqli_query($mysqli, $strSQL);
    //mysql_affected_rows();

    if ($objQuery) { ?>

        <div class="alert alert-success" align="center">
            <strong>แก้ไขข้อมูลสำเร็จ</strong> : ข้อมูลทั่วไปของ ID : <?php echo $nid; ?>
        </div>
        <?php echo "<script type=\"text/javascript\">";
        echo "window.location=\"index.php?edite=true\" ";
        echo "</script>";
        ?>
    <?php
    } else { ?>

        <div class="alert alert-danger" align="center">
            <strong>แก้ไขข้อมูลไม่สำเร็จ</strong> : ข้อมูลทั่วไปของ ID : <?php echo $nid; ?>
        </div>
    <?php
    }

    mysqli_close($mysqli);
}

function updatedatabt2($nid, $data)
{

    include "conn.php";
    $strSQL = "UPDATE sas_studentdata SET ";
    $strSQL .= "SNAME = '" . $data[1] . "' ";
    $strSQL .= ",FNAME = '" . $data[2] . "' ";
    $strSQL .= ",LNAME = '" . $data[3] . "' ";
    $strSQL .= ",BIRTHDAY = '" . $data[4] . "' ";
    $strSQL .= ",SEX= '" . $data[5] . "' ";
    $strSQL .= ",RELI = '" . $data[6] . "' ";
    $strSQL .= ",REGINAL = '" . $data[7] . "' ";
    $strSQL .= ",REGINALITY = '" . $data[8] . "' ";
    $strSQL .= ",GROUPBLOOD = '" . $data[9] . "' ";
    $strSQL .= ",stuIDold = '" . $data[10] . "' ";
    $strSQL .= "WHERE NID = '" . $nid . "' ";
    $objQuery = mysqli_query($mysqli, $strSQL);
    //mysql_affected_rows();

    if ($objQuery) { ?>

        <div class="alert alert-success" align="center">
            <strong>แก้ไขข้อมูลสำเร็จ</strong> : ข้อมูลทั่วไปของ ID : <?php echo $nid; ?>
        </div>
        <?php echo "<script type=\"text/javascript\">";
        echo "window.location=\"index.php?edite=true\" ";
        echo "</script>";
        ?>
    <?php
    } else { ?>

        <div class="alert alert-danger" align="center">
            <strong>แก้ไขข้อมูลไม่สำเร็จ</strong> : ข้อมูลทั่วไปของ ID : <?php echo $nid; ?>
        </div>
    <?php
    }

    mysqli_close($mysqli, $connected);
}

function updatedatabt3($nid, $data)
{

    include "conn.php";
    $strSQL = "UPDATE sas_studentdata SET ";
    $strSQL .= "HADDRESS = '" . $data[1] . "' ";
    $strSQL .= ",MOO = '" . $data[2] . "' ";
    $strSQL .= ",SOI = '" . $data[3] . "' ";
    $strSQL .= ",ROAD = '" . $data[9] . "' ";
    $strSQL .= ",PROVINCE_ID= '" . $data[4] . "' ";
    if ($data[6] != "") {
        $strSQL .= ",DISTRICT_ID = '" . $data[6] . "' ";
    }
    if ($data[5] != "") {
        $strSQL .= ",AMPHUR_ID = '" . $data[5] . "' ";
    }
    $strSQL .= ",TEL = '" . $data[7] . "' ";
    $strSQL .= ",EMAIL = '" . $data[8] . "' ";
    $strSQL .= "WHERE NID = '" . $nid . "' ";
    $objQuery = mysqli_query($mysqli, $strSQL);
    //mysql_affected_rows();

    if ($objQuery) { ?>

        <div class="alert alert-success" align="center">
            <strong>แก้ไขข้อมูลสำเร็จ</strong> : ข้อมูลทั่วไปของ ID : <?php echo $nid; ?>
        </div>
        <?php echo "<script type=\"text/javascript\">";
        echo "window.location=\"index.php?edite=true\" ";
        echo "</script>";
        ?>
    <?php
    } else { ?>

        <div class="alert alert-danger" align="center">
            <strong>แก้ไขข้อมูลไม่สำเร็จ</strong> : ข้อมูลทั่วไปของ ID : <?php echo $nid; ?>
        </div>
    <?php
    }

    mysqli_close($mysqli);
}

function updatedatabt4($nid, $data)
{

    include "conn.php";
    $strSQL = "UPDATE sas_studentdata SET ";
    $strSQL .= "OPTIONS = '" . $data[1] . "' ";
    //if($data[2] != ""){
    $strSQL .= ",OPTIONSPECIAL = '" . $data[2] . "' ";
    //}
    if ($data[3] != "") {
        $strSQL .= ",MORE = '" . $data[3] . "' ";
    }
    $strSQL .= "WHERE NID = '" . $nid . "' ";
    $objQuery = mysqli_query($mysqli, $strSQL);
    //mysql_affected_rows();

    if ($objQuery) { ?>

        <div class="alert alert-success" align="center">
            <strong>แก้ไขข้อมูลสำเร็จ</strong> : ข้อมูลทั่วไปของ ID : <?php echo $nid; ?>
        </div>
        <?php echo "<script type=\"text/javascript\">";
        echo "window.location=\"index.php?edite=true\" ";
        echo "</script>";
        ?>
    <?php
    } else { ?>

        <div class="alert alert-danger" align="center">
            <strong>แก้ไขข้อมูลไม่สำเร็จ</strong> : ข้อมูลทั่วไปของ ID : <?php echo $nid; ?>
        </div>
    <?php
    }

    mysqli_close($mysqli);
}

function updatedatabt41($nid, $data)
{

    include "conn.php";
    $strSQL = "UPDATE sas_studentdata SET ";
    $strSQL .= "OPTIONSPECIAL = '" . $data[1] . "' ";

    $strSQL .= "WHERE NID = '" . $nid . "' ";
    $objQuery = mysqli_query($mysqli, $strSQL);
    //mysql_affected_rows();

    if ($objQuery) { ?>

        <div class="alert alert-success" align="center">
            <strong>แก้ไขข้อมูลสำเร็จ</strong> : ข้อมูลทั่วไปของ ID : <?php echo $nid; ?>
        </div>
        <?php echo "<script type=\"text/javascript\">";
        echo "window.location=\"index.php?edite=true\" ";
        echo "</script>";
        ?>
    <?php
    } else { ?>

        <div class="alert alert-danger" align="center">
            <strong>แก้ไขข้อมูลไม่สำเร็จ</strong> : ข้อมูลทั่วไปของ ID : <?php echo $nid; ?>
        </div>
    <?php
    }

    mysqli_close($mysqli);
}

function updatedatabt42($nid, $data)
{

    include "conn.php";
    $strSQL = "UPDATE sas_studentdata SET ";
    $strSQL .= "MORE = '" . $data[1] . "' ";
    $strSQL .= "WHERE NID = '" . $nid . "' ";
    $objQuery = mysqli_query($mysqli, $strSQL);
    //mysql_affected_rows();

    if ($objQuery) { ?>

        <div class="alert alert-success" align="center">
            <strong>แก้ไขข้อมูลสำเร็จ</strong> : ข้อมูลทั่วไปของ ID : <?php echo $nid; ?>
        </div>
        <?php echo "<script type=\"text/javascript\">";
        echo "window.location=\"index.php?edite=true\" ";
        echo "</script>";
        ?>
    <?php
    } else { ?>

        <div class="alert alert-danger" align="center">
            <strong>แก้ไขข้อมูลไม่สำเร็จ</strong> : ข้อมูลทั่วไปของ ID : <?php echo $nid; ?>
        </div>
    <?php
    }

    mysqli_close($mysqli);
}

function updatedatabt5($nid, $datadd)
{
    //echo $datadd[1]."<br>";
    //echo $datadd[2]."<br>";
    //echo $datadd[3]."<br>";
    include "conn.php";
    $strSQL = "UPDATE sas_studentdata SET ";
    $strSQL .= "PLAN1 = '" . $datadd[1] . "' ";
    $strSQL .= ",PLAN2 = '" . $datadd[2] . "' ";
    if ($datadd[3] != "") {
        $strSQL .= ",PLAN3 = '" . $datadd[3] . "' ";
    }
    $strSQL .= ",DAYCOME = '" . $datadd[4] . "' ";
    $strSQL .= "WHERE NID = '" . $nid . "' ";
    $objQuery = mysqli_query($mysqli, $strSQL);
    //mysql_affected_rows();

    if ($objQuery) { ?>

        <div class="alert alert-success" align="center">
            <strong>แก้ไขข้อมูลสำเร็จ</strong> : ข้อมูลทั่วไปของ ID : <?php echo $nid; ?>
        </div>
        <?php echo "<script type=\"text/javascript\">";
        echo "window.location=\"index.php?edite=true\" ";
        echo "</script>";
        ?>
    <?php
    } else { ?>

        <div class="alert alert-danger" align="center">
            <strong>แก้ไขข้อมูลไม่สำเร็จ</strong> : ข้อมูลทั่วไปของ ID : <?php echo $nid; ?>
        </div>
    <?php
    }

    mysqli_close($mysqli);
}

function updatedatabt6($nid, $data)
{

    include "conn.php";
    $strSQL = "UPDATE sas_studentdata SET ";
    $strSQL .= "LSCHOOL = '" . $data[1] . "' ";
    $strSQL .= ",GPA = '" . $data[2] . "' ";
    $strSQL .= ",ID_PROVINCE_SC = '" . $data[3] . "' ";
    $strSQL .= ",schoolsecond = '" . $data[4] . "' ";
    $strSQL .= "WHERE NID = '" . $nid . "' ";
    $objQuery = mysqli_query($mysqli, $strSQL);
    //mysql_affected_rows();

    if ($objQuery) { ?>

        <div class="alert alert-success" align="center">
            <strong>แก้ไขข้อมูลสำเร็จ</strong> : ข้อมูลทั่วไปของ ID : <?php echo $nid; ?>
        </div>
        <?php echo "<script type=\"text/javascript\">";
        echo "window.location=\"index.php?edite=true\" ";
        echo "</script>";
        ?>
    <?php
    } else { ?>

        <div class="alert alert-danger" align="center">
            <strong>แก้ไขข้อมูลไม่สำเร็จ</strong> : ข้อมูลทั่วไปของ ID : <?php echo $nid; ?>
        </div>
    <?php
    }

    mysqli_close($mysqli);
}

function updatedatabt7($nid, $data)
{

    include "conn.php";
    $strSQL = "UPDATE sas_studentdata SET ";
    $strSQL .= "SNAMEFA = '" . $data[1] . "' ";
    $strSQL .= ",FNAMEFA = '" . $data[2] . "' ";
    $strSQL .= ",LNAMEFA = '" . $data[3] . "' ";
    $strSQL .= ",TELFA = '" . $data[4] . "' ";
    $strSQL .= ",SNAMEMA = '" . $data[5] . "' ";
    $strSQL .= ",FNAMEMA = '" . $data[6] . "' ";
    $strSQL .= ",LNAMEMA = '" . $data[7] . "' ";
    $strSQL .= ",TELMA = '" . $data[8] . "' ";
    $strSQL .= ",FAMILYSTATUS = '" . $data[9] . "' ";
    $strSQL .= ",OC_FA = '" . $data[10] . "' ";
    $strSQL .= ",OC_MA = '" . $data[11] . "' ";
    $strSQL .= ",TYPEPARENT = '" . $data[12] . "' ";

    if ($data[12] == 1) {
        $d = "บิดา";
        $strSQL .= ",SNAMEPA = '" . $data[1] . "' ";
        $strSQL .= ",FNAMEPA = '" . $data[2] . "' ";
        $strSQL .= ",LNAMEPA = '" . $data[3] . "' ";
        $strSQL .= ",TELPA = '" . $data[4] . "' ";
        $strSQL .= ",OC_PA = '" . $data[10] . "' ";
        $strSQL .= ",RELATION = '" . $d . "' ";
    } elseif ($data[12] == 2) {
        $d = "มารดา";
        $strSQL .= ",SNAMEPA = '" . $data[5] . "' ";
        $strSQL .= ",FNAMEPA = '" . $data[6] . "' ";
        $strSQL .= ",LNAMEPA = '" . $data[7] . "' ";
        $strSQL .= ",TELPA = '" . $data[8] . "' ";
        $strSQL .= ",OC_PA = '" . $data[11] . "' ";
        $strSQL .= ",RELATION = '" . $d . "' ";
    } else {
        $strSQL .= ",SNAMEPA = '" . $data[13] . "' ";
        $strSQL .= ",FNAMEPA = '" . $data[14] . "' ";
        $strSQL .= ",LNAMEPA = '" . $data[15] . "' ";
        $strSQL .= ",TELPA = '" . $data[16] . "' ";
        $strSQL .= ",OC_PA = '" . $data[17] . "' ";
        $strSQL .= ",RELATION = '" . $data[18] . "' ";
    }

    $strSQL .= "WHERE NID = '" . $nid . "' ";
    $objQuery = mysqli_query($mysqli, $strSQL);
    //mysql_affected_rows();

    if ($objQuery) { ?>

        <div class="alert alert-success" align="center">
            <strong>แก้ไขข้อมูลสำเร็จ</strong> : ข้อมูลทั่วไปของ ID : <?php echo $nid; ?>
        </div>
        <?php echo "<script type=\"text/javascript\">";
        echo "window.location=\"index.php?edite=true\" ";
        echo "</script>";
        ?>
    <?php
    } else { ?>

        <div class="alert alert-danger" align="center">
            <strong>แก้ไขข้อมูลไม่สำเร็จ</strong> : ข้อมูลทั่วไปของ ID : <?php echo $nid; ?>
        </div>
<?php
    }

    mysqli_close($connected);
}
?>

<?php
function selectcomeschool()
{
    include "conn.php";

    $sql_studata = "SELECT * FROM sas_studentdata";
    $resultstu = mysqli_query($mysqli, $sql_studata);
    $rows = mysqli_num_rows($resultstu);

    // if ($selectdata = mysql_fetch_array($resultstu)) {
    $d22 = 0;
    $d23 = 0;
    $d25 = 0;
    $d26 = 0;
    $d27 = 0;

    $M22 = 0;
    $M23 = 0;
    $M25 = 0;
    $M26 = 0;
    $M27 = 0;

    while ($row = mysqli_fetch_array($resultstu)) {
        //printf("ID: %s  Name: %d", $row["SID"], $row["DAYCOME"]);
        if ($row["DAYCOME"] == 22) {

            if ($row["TYPE"] == "1") {
                $d22++;
            }
            if ($row["TYPE"] == "4") {
                $M22++;
            }
        }
        if ($row["DAYCOME"] == 23) {
            if ($row["TYPE"] == "1") {
                $d23++;
            }
            if ($row["TYPE"] == "4") {
                $M23++;
            }
        }
        if ($row["DAYCOME"] == 25) {
            if ($row["TYPE"] == "1") {
                $d25++;
            }
            if ($row["TYPE"] == "4") {
                $M25++;
            }
        }
        if ($row["DAYCOME"] == 26) {
            if ($row["TYPE"] == "1") {
                $d26++;
            }
            if ($row["TYPE"] == "4") {
                $M26++;
            }
        }
        if ($row["DAYCOME"] == 27) {
            if ($row["TYPE"] == "1") {
                $d27++;
            }
            if ($row["TYPE"] == "4") {
                $M27++;
            }
        }
    }

    // echo   $d27."<br>";
    //echo   $d28."<br>";
    // echo   $d29."<br>";
    // echo   $d30."<br>";

    // mysql_close($connected);

    //return array($d25, $d26, $d27, $d28, $M25, $M26, $M27, $M28);
}
?>

<?php
function selectcomeschool2562()
{
    include "conn.php";

    $sql_studata = "SELECT * FROM sas_studentdata";
    $resultstu = mysqli_query($mysqli, $sql_studata);
    $rows = mysqli_num_rows($resultstu);

    // if ($selectdata = mysql_fetch_array($resultstu)) {
    $d21 = 0;
    $d22 = 0;
    $d23 = 0;
    $d24 = 0;
    $d25 = 0;

    $M21 = 0;
    $M22 = 0;
    $M23 = 0;
    $M24 = 0;
    $M25 = 0;

    while ($row = mysqli_fetch_array($resultstu)) {
        //printf("ID: %s  Name: %d", $row["SID"], $row["DAYCOME"]);
        if ($row["DAYCOME"] == 21) {

            if ($row["TYPE"] == "1") {
                $d21++;
            }
            if ($row["TYPE"] == "4") {
                $M21++;
            }
        }
        if ($row["DAYCOME"] == 22) {
            if ($row["TYPE"] == "1") {
                $d22++;
            }
            if ($row["TYPE"] == "4") {
                $M22++;
            }
        }
        if ($row["DAYCOME"] == 23) {
            if ($row["TYPE"] == "1") {
                $d23++;
            }
            if ($row["TYPE"] == "4") {
                $M23++;
            }
        }
        if ($row["DAYCOME"] == 24) {
            if ($row["TYPE"] == "1") {
                $d24++;
            }
            if ($row["TYPE"] == "4") {
                $M24++;
            }
        }
        if ($row["DAYCOME"] == 25) {
            if ($row["TYPE"] == "1") {
                $d25++;
            }
            if ($row["TYPE"] == "4") {
                $M25++;
            }
        }
    }

    // echo   $d27."<br>";
    //echo   $d28."<br>";
    // echo   $d29."<br>";
    // echo   $d30."<br>";

    // mysql_close($connected);

    return array($d21, $d22, $d23, $d24, $d25, $M21, $M22, $M23, $M24, $M25);
}
?>



<?php
function checktxtRegisno($txtregisno)
{
    include 'conn.php';
    $selectcheck = "SELECT * from sas_checkuser WHERE datacheck = '" . $txtregisno . "'";
    $check_result2 = mysqli_query($mysqli, $selectcheck);
    if (mysqli_num_rows($check_result2) > 0) {
        $checkdataequal = 1;
    } else {
        $checkdataequal = 0;
    }
    return ($checkdataequal);
}
?>

<!-- Bootstrap Modals -->
<!-- Modal - Add New Record/Other -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                    กรอกข้อมูลเพิ่มเติมของผู้เรียน
                </h4><i style="color: #ff0000;"> (** ต้องกรอกข้อมูลให้ครบทุกช่อง
                    ถ้ากรอกไม่ครบระบบจะไม่บันทึกข้อมูล **)</i><br>
                <i style="color: #ff0000;"> (ช่องไหนไม่สามารถกรอกได้ให้กรอก - หรือ 0)</i>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="add_home_id">รหัสบ้านตามสำเนาทะเบียนบ้าน</label>
                    <input type="text" id="hid" maxlength="11" placeholder="รหัสบ้านตามสำเนาทะเบียนบ้าน 11 หลัก" class="form-control" required="" autofocus="" OnKeyPress="return chkNumber(this)" />
                </div>
                <div class="form-group">
                    <label for="add_fa_id">รหัสบัตรประจำตัวประชาชนของบิดา <label id="u1"></label></label>
                    <input type="text" id="faid" maxlength="13" placeholder="รหัสบัตรประจำตัวประชาชนของบิดา  13 หลัก" class="form-control" OnKeyPress="return chkNumber(this)" />
                </div>
                <div class="form-group">
                    <label for="add_fa_religion">ศาสนาของบิดา </label>
                    <input type="text" id="fareligion" maxlength="20" placeholder="ระบุข้อมูลศาสนาของบิดา" class="form-control" />

                </div>
                <div class="form-group">
                    <label for="add_fa_jobprovince">สถานที่ทำงานของบิดา จังหวัด </label>
                    <input type="text" id="fajobprovince" maxlength="20" placeholder="เช่น 'ระยอง' 'ชลบุรี' 'กรุงเทพมหานคร' เป็นต้น" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="add_fa_blood">กรุ๊ปเลือดของบิดา </label>
                    <input type="text" id="fablood" maxlength="3" placeholder="กรอกหมู่โลหิตของบิดา" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="add_fa_income">รายได้ต่อเดือนของบิดา </label>
                    <input type="text" id="faincome" maxlength="6" placeholder="รายได้ต่อเดือนของบิดา (บาท)" class="form-control" OnKeyPress="return chkNumber(this)" />
                </div>

                <div class="form-group">
                    <label for="add_ma_id">รหัสบัตรประจำตัวประชาชนของมารดา <label id="u2"></label></label>
                    <input type="text" id="maid" maxlength="13" placeholder="รหัสบัตรประจำตัวประชาชนของมารดา  13 หลัก" class="form-control" OnKeyPress="return chkNumber(this)" />
                </div>

                <div class="form-group">
                    <label for="add_ma_religion">ศาสนาของมารดา </label>
                    <input type="text" id="mareligion" maxlength="20" placeholder="ระบุข้อมูลศาสนาของมารดา" class="form-control" />

                </div>
                <div class="form-group">
                    <label for="add_ma_jobprovince">สถานที่ทำงานของมารดา จังหวัด</label>
                    <input type="text" id="majobprovince" maxlength="20" placeholder="เช่น 'ระยอง' 'ชลบุรี' 'กรุงเทพมหานคร' เป็นต้น" class="form-control" required="" />
                </div>
                <div class="form-group">
                    <label for="add_ma_blood">กรุ๊ปเลือดของมารดา </label>
                    <input type="text" id="mablood" maxlength="3" placeholder="กรอกหมู่โลหิตของมารดา" class="form-control" required="" />
                </div>
                <div class="form-group">
                    <label for="add_ma_income">รายได้ต่อเดือนของมารดา</label>
                    <input type="text" id="maincome" maxlength="6" placeholder="รายได้ต่อเดือนของมารดา (บาท)" class="form-control" OnKeyPress="return chkNumber(this)" required="" />
                </div>


                <div class="form-group">
                    <label for="add_pa_id">รหัสบัตรประจำตัวประชาชนของผู้ปกครอง <label id="u3"></label></label>
                    <input type="text" id="paid" maxlength="13" placeholder="รหัสบัตรของผู้ปกครอง 13 หลัก" class="form-control" OnKeyPress="return chkNumber(this)" />
                </div>

                <div class="form-group">
                    <label for="add_pa_religion">ศาสนาของผู้ปกครอง </label>
                    <input type="text" id="pareligion" maxlength="20" placeholder="ระบุข้อมูลศาสนาของผู้ปกครอง" class="form-control" required="" />
                </div>
                <div class="form-group">
                    <label for="add_pa_jobprovince">สถานที่ทำงานของผู้ปกครอง จังหวัด </label>
                    <input type="text" id="pajobprovince" maxlength="20" placeholder="เช่น 'ระยอง' 'ชลบุรี' 'กรุงเทพมหานคร' เป็นต้น" class="form-control" required="" />
                </div>
                <div class="form-group">
                    <label for="add_pa_blood">กรุ๊ปเลือดของผู้ปกครอง </label>
                    <input type="text" id="pablood" maxlength="3" placeholder="กรอกหมู่โลหิตของผู้ปกครอง" class="form-control" required="" />
                </div>
                <div class="form-group">
                    <label for="add_pa_income">รายได้ต่อเดือนของผู้ปกครอง</label>
                    <input type="text" id="paincome" required="" maxlength="6" placeholder="รายได้ต่อเดือนของผู้ปกครอง (บาท)" class="form-control" OnKeyPress="return chkNumber(this)" />
                </div>

                <div class="form-group">
                    <label for="add_name">Name</label>
                    <input type="text" id="ename" placeholder="ชื่อนักเรียนภาษาอังกฤษ" class="form-control" required="" />
                </div>

                <div class="form-group">
                    <label for="add_esurname">Surname</label>
                    <input type="text" id="esurname" placeholder="นามสกุลนักเรียนภาษาอังกฤษ" class="form-control" required="" />
                </div>

                <div class="form-group">
                    <label for="add_enicknameth">ชื่อเล่น</label>
                    <input type="text" id="enicknameth" placeholder="ชื่อเล่นนักเรียนภาษาไทย" class="form-control" required="" />
                </div>
                <div class="form-group">
                    <label for="add_enickname">Nickname</label>
                    <input type="text" id="enickname" placeholder="ชื่อเล่นนักเรียนภาษาอังกฤษ" class="form-control" required="" />
                </div>
                <div class="form-group">
                    <label for="add_birthpro">จังหวัดเกิด</label>
                    <input type="text" id="birthpro" placeholder="เช่น 'ระยอง' 'ชลบุรี' 'กรุงเทพมหานคร' เป็นต้น" class="form-control" required="" />
                </div>
                <div class="form-group">
                    <label for="add_bro">จำนวนพี่น้อง</label>
                    <input type="text" id="bro" placeholder="จำนวนพี่น้องทั้งหมด (คน)" class="form-control" required="" OnKeyPress="return chkNumber(this)" maxlength="2" />
                </div>
                <div class="form-group">
                    <label for="add_broblm">จำนวนพี่น้องที่เรียนโรงเรียนธาตุนารายณ์วิทยา</label>
                    <input type="text" id="broblm" placeholder="ที่เรียนโรงเรียนธาตุนารายณ์วิทยา (คน)" class="form-control" required="" OnKeyPress="return chkNumber(this)" maxlength="2" />
                </div>
                <div class="form-group">
                    <label for="add_visit">เดินทางมาโรงเรียน โดย</label>
                    <input type="text" id="visit" placeholder="เช่น รถโดยสารประจำทางหรือ รถยนต์ส่วนบุคคล เป็นต้น" class="form-control" required="" />
                </div>
                <div class="form-group">
                    <label for="add_direct">ระยะทาง</label>
                    <input type="text" id="direct" placeholder="หน่วยเป็นกิโลเมตร" class="form-control" required="" OnKeyPress="return chkNumber(this)" maxlength="4" />
                </div>
                <div class="form-group">
                    <label for="add_pay">ค่าเดินทางไป-กลับ</label>
                    <input type="text" id="pay" placeholder="หน่วยเป็นบาท" class="form-control" required="" OnKeyPress="return chkNumber(this)" maxlength="3" />
                </div>
                <div class="form-group">
                    <label for="add_weight">น้ำหนัก</label>
                    <input type="text" id="weight" placeholder="หน่วยเป็น กิโลกรัม" class="form-control" required="" OnKeyPress="return chkNumber(this)" maxlength="3" />
                </div>
                <div class="form-group">
                    <label for="add_height">ส่วนสูง</label>
                    <input type="text" id="height" placeholder="หน่วยเป็น เซนติเมตร" class="form-control" required="" OnKeyPress="return chkNumber(this)" maxlength="3" />
                </div>
                <div class="form-group">
                    <label for="add_healthy">โรคประจำตัว</label>
                    <input type="text" id="healthy" placeholder="ถ้าไม่มี 'พิมพ์ว่าไม่มีโรคประจำตัว' หรือ '-'" class="form-control" required="" />
                    <input type="hidden" id="nid" value="<?php echo $_SESSION["NaID"]; ?>">
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="addRecord()">เพิ่มข้อมูลเพิ่มเติม</button>
                <input type="hidden" id="hidden_user_fa">
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
                <h4 class="modal-title" id="myModalLabel">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                    แก้ไขข้อมูลเพิ่มเติมของผู้เรียน
                </h4>
            </div>
            <div class="modal-body">


                <div class="form-group">
                    <label for="add_home_id">รหัสบ้านตามสำเนาทะเบียนบ้าน</label>
                    <input type="text" id="ed_hid" maxlength="11" placeholder="รหัสบ้านตามสำเนาทะเบียนบ้าน" class="form-control" required="" autofocus="" OnKeyPress="return chkNumber(this)" />
                </div>
                <div class="form-group">
                    <label for="add_edfa_id">รหัสบัตรประจำตัวประชาชนของบิดา <label id="ed_u1"></label></label>
                    <input type="text" id="ed_faid" maxlength="13" placeholder="รหัสบัตรของบิดา 13 หลัก" class="form-control" required="" autofocus="" OnKeyPress="return chkNumber(this)" />
                </div>
                <div class="form-group">
                    <label for="add_edfa_religion">ศาสนาของบิดา <label id="ed_u4"></label></label>
                    <input type="text" id="ed_fareligion" maxlength="20" placeholder="ระบุข้อมูลศาสนาของบิดา" class="form-control" required="" />
                </div>
                <div class="form-group">
                    <label for="add_edfa_jobprovince">สถานที่ทำงานของบิดา จังหวัด <label id="ed_u5"></label></label>
                    <input type="text" id="ed_fajobprovince" maxlength="20" placeholder="เช่น 'ระยอง' 'ชลบุรี' 'กรุงเทพมหานคร' เป็นต้น" class="form-control" required="" />
                </div>
                <div class="form-group">
                    <label for="add_edfa_blood">กรุ๊ปเลือดของบิดา <label id="ed_u6"></label></label>
                    <input type="text" id="ed_fablood" maxlength="3" placeholder="กรอกหมู่โลหิตของบิดา" class="form-control" required="" />
                </div>
                <div class="form-group">
                    <label for="add_edfa_income">รายได้ต่อเดือนของบิดา <label id="ed_u7"></label></label>
                    <input type="text" id="ed_faincome" maxlength="6" placeholder="รายได้ต่อเดือนของบิดา (บาท)" class="form-control" OnKeyPress="return chkNumber(this)" required="" />
                </div>


                <div class="form-group">
                    <label for="add_edma_id">รหัสบัตรประจำตัวประชาชนของมารดา <label id="ed_u2"></label></label>
                    <input type="text" id="ed_maid" maxlength="13" placeholder="รหัสบัตรของมารดา 13 หลัก" class="form-control" required="" autofocus="" OnKeyPress="return chkNumber(this)" />
                </div>

                <div class="form-group">
                    <label for="add_edma_religion">ศาสนาของมารดา <label id="ed_u8"></label></label>
                    <input type="text" id="ed_mareligion" maxlength="20" placeholder="ระบุข้อมูลศาสนาของมารดา" class="form-control" required="" />
                </div>
                <div class="form-group">
                    <label for="add_edma_jobprovince">สถานที่ทำงานของมารดา จังหวัด<label id="ed_u9"></label></label>
                    <input type="text" id="ed_majobprovince" maxlength="20" placeholder="เช่น 'ระยอง' 'ชลบุรี' 'กรุงเทพมหานคร' เป็นต้น" class="form-control" required="" />
                </div>
                <div class="form-group">
                    <label for="add_edma_blood">กรุ๊ปเลือดของมารดา <label id="ed_u10"></label></label>
                    <input type="text" id="ed_mablood" maxlength="3" placeholder="กรอกหมู่โลหิตของมารดา" class="form-control" required="" />
                </div>
                <div class="form-group">
                    <label for="add_edma_income">รายได้ต่อเดือนของมารดา <label id="ed_u11"></label></label>
                    <input type="text" id="ed_maincome" maxlength="6" placeholder="รายได้ต่อเดือนของมารดา (บาท)" class="form-control" OnKeyPress="return chkNumber(this)" required="" />
                </div>



                <div class="form-group">
                    <label for="add_edpa_id">รหัสบัตรประจำตัวประชาชนของผู้ปกครอง <label id="ed_u3"></label></label>
                    <input type="text" id="ed_paid" maxlength="13" placeholder="รหัสบัตรของผู้ปกครอง 13 หลัก" class="form-control" required="" autofocus="" OnKeyPress="return chkNumber(this)" />
                </div>

                <div class="form-group">
                    <label for="add_edpa_religion">ศาสนาของผู้ปกครอง <label id="ed_u12"></label></label>
                    <input type="text" id="ed_pareligion" maxlength="20" placeholder="ระบุข้อมูลศาสนาของผู้ปกครอง" class="form-control" required="" />
                </div>
                <div class="form-group">
                    <label for="add_edpa_jobprovince">สถานที่ทำงานของผู้ปกครอง จังหวัด <label id="ed_u13"></label></label>
                    <input type="text" id="ed_pajobprovince" maxlength="20" placeholder="เช่น 'ระยอง' 'ชลบุรี' 'กรุงเทพมหานคร' เป็นต้น" class="form-control" required="" />
                </div>
                <div class="form-group">
                    <label for="add_edpa_blood">กรุ๊ปเลือดของผู้ปกครอง <label id="ed_u14"></label></label>
                    <input type="text" id="ed_pablood" maxlength="3" placeholder="กรอกหมู่โลหิตของผู้ปกครอง" class="form-control" required="" />
                </div>
                <div class="form-group">
                    <label for="add_edpa_income">รายได้ต่อเดือนของผู้ปกครอง <label id="ed_u15"></label></label>
                    <input type="text" id="ed_paincome" required="" maxlength="6" placeholder="รายได้ต่อเดือนของผู้ปกครอง (บาท)" class="form-control" OnKeyPress="return chkNumber(this)" />
                </div>


                <div class="form-group">
                    <label for="add_name">Name</label>
                    <input type="text" id="ed_ename" placeholder="ชื่อผู้เรียนภาษาอังกฤษ" class="form-control" required="" />
                </div>

                <div class="form-group">
                    <label for="add_esurname">Surname</label>
                    <input type="text" id="ed_esurname" placeholder="นามสกุลผู้เรียนภาษาอังกฤษ" class="form-control" required="" />
                </div>

                <div class="form-group">
                    <label for="add_enicknameth">ชื่อเล่น</label>
                    <input type="text" id="ed_enicknameth" placeholder="ชื่อเล่นนักเรียนภาษาไทย" class="form-control" required="" />
                </div>
                <div class="form-group">
                    <label for="add_enickname">Nickname</label>
                    <input type="text" id="ed_enickname" placeholder="ชื่อเล่นผู้เรียนภาษาอังกฤษ" class="form-control" required="" />
                </div>
                <div class="form-group">
                    <label for="add_birthpro">จังหวัดเกิด</label>
                    <input type="text" id="ed_birthpro" placeholder="จังหวัดเกิด" class="form-control" required="" />
                </div>
                <div class="form-group">
                    <label for="add_bro">จำนวนพี่น้อง ทั้งหมด (คน)</label>
                    <input type="text" id="ed_bro" class="form-control" required="" OnKeyPress="return chkNumber(this)" maxlength="2" />
                </div>
                <div class="form-group">
                    <label for="add_broblm">จำนวนพี่น้อง ที่เรียนโรงเรียนธาตุนารายณ์วิทยา (คน)</label>
                    <input type="text" id="ed_broblm" class="form-control" required="" OnKeyPress="return chkNumber(this)" maxlength="2" />
                </div>
                <div class="form-group">
                    <label for="add_visit">เดินทางมาโรงเรียน โดย</label>
                    <input type="text" id="ed_visit" class="form-control" required="" />
                </div>
                <div class="form-group">
                    <label for="add_direct">ระยะทาง (กิโลเมตร)</label>
                    <input type="text" id="ed_direct" class="form-control" required="" OnKeyPress="return chkNumber(this)" maxlength="4" />
                </div>
                <div class="form-group">
                    <label for="add_pay">ค่าเดินทางไป-กลับ (บาท)</label>
                    <input type="text" id="ed_pay" class="form-control" required="" OnKeyPress="return chkNumber(this)" maxlength="3" />
                </div>
                <div class="form-group">
                    <label for="add_weight">น้ำหนัก (กิโลกรัม)</label>
                    <input type="text" id="ed_weight" class="form-control" required="" OnKeyPress="return chkNumber(this)" maxlength="3" />
                </div>
                <div class="form-group">
                    <label for="add_height">ส่วนสูง (เซนติเมตร)</label>
                    <input type="text" id="ed_height" class="form-control" required="" OnKeyPress="return chkNumber(this)" maxlength="3" />
                </div>
                <div class="form-group">
                    <label for="add_healthy">โรคประจำตัว</label>
                    <input type="text" id="ed_healthy" class="form-control" required="" />

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()">บันทึก
                    การแก้ไขข้อมูล</button>
                <input type="hidden" id="hidden_user_id">
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->