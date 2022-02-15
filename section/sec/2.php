<?php
//include "fn.php";
list($d27, $d28, $d29, $d30, $M27, $M28, $M29, $M30) = selectcomeschool();
/*
echo $_SESSION['SAS1'][1];

echo "----------------<br>";
echo   $d27."<br>";
echo   $d28."<br>";
echo   $d29."<br>";
echo   $d30."<br>";
echo "----------------<br>";
echo   $M27."<br>";
echo   $M28."<br>";
echo   $M29."<br>";
echo   $M30."<br>";
 */
?>
<div class="caption-full">

    <h3 class="text-center">
        <p>
            <span class="glyphicon glyphicon-share"></span>
            2. ข้อมูลพื้นฐาน
        </p>
    </h3>
    <br>


    <?php if (!isset($_GET["edite"])) {?>
    <form class="form-horizontal" name="form1" method="post" action="index.php">
        <?php } else {?>
        <form class="form-horizontal" name="form1" method="post" action="index.php?edite=true">
            <?php }?>





            <div class="form-group form-group-lg">
                <label class="col-sm-3 control-label" for="formGroupInputLarge">
                    คำนำหน้าชื่อ :
                </label>
                <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
                <div class="col-sm-9">

                    <select class="form-control input-lg" name="lbSname" required="">
                        <option value="">-- กรุณาเลือก --</option>
                        <option value="เด็กชาย"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][8] == "เด็กชาย") {echo "selected";}}?>>
                            เด็กชาย
                        </option>

                        <option value="เด็กหญิง"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][8] == "เด็กหญิง") {echo "selected";}}?>>
                            เด็กหญิง
                        </option>
                        <option value="นาย"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][8] == "นาย") {echo "selected";}}?>>
                            นาย
                        </option>
                        <option value="นางสาว"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][8] == "นางสาว") {echo "selected";}}?>>
                            นางสาว
                        </option>
                    </select>
                </div>
            </div>
            <div class="form-group form-group-lg">
                <label class="col-sm-3 control-label" for="formGroupInputLarge">
                    ชื่อ
                </label>
                <div class="col-sm-9">
                    <input name="txtFname" class="form-control input-lg" id="fname"
                        placeholder="ชื่อ ไม่ต้องระบุคำนำหน้าชื่อ" type="text" required="" autofocus=""
                        value="<?php if (isset($_SESSION["EDITE"])) {echo $_SESSION["EDITE"][9];}?>">

                    </input>
                </div>
            </div>
            <div class="form-group form-group-lg">
                <label class="col-sm-3 control-label" for="formGroupInputLarge">
                    นามสกุล
                </label>
                <div class="col-sm-9">
                    <input name="txtLname" class="form-control input-lg" id="lname" placeholder="" type="text"
                        required="" autofocus=""
                        value="<?php if (isset($_SESSION["EDITE"])) {echo $_SESSION["EDITE"][10];}?>">

                    </input>
                </div>
            </div>



            <div class="form-group form-group-lg ">

                <label class=" col-sm-3 control-label" for="formGroupInputLarge"> วัน/เดือน/ปีเกิด </label>

                <div class="col-sm-6">

                    <input class="form-control input-lg datepicker" type="text" name="txtBirthday" data-provide="datepicker"
                        data-date-language="th-th" 
                        <?php
                            if (isset($_SESSION["EDITE"])) {?> 
                                value="<?php echo $_SESSION["EDITE"][11]; ?>" <?php
                            } 
                            else {
                                if (isset($_SESSION['SAS1'][1]) && ($_SESSION['SAS1'][1] == 1)) {
                                    echo "value=\"01/01/2550\"";
                                } 
                                else {
                                    echo "value=\"01/01/2547\"";
                                }
                            }
                        ?>
                    >

                </div>

                <div class="col-sm-3"> </div>

            </div>

            <div class="form-group form-group-lg">

                <label class="col-sm-3 control-label" for="formGroupInputLarge">  เพศ </label>
                
                <div class="col-sm-3">
                    <select class="form-control input-lg" name="lbSex" required="">
                        <option value="">-- กรุณาเลือก --</option>
                        <option value="ชาย"
                            <?php 
                                if (isset($_SESSION["EDITE"])) {
                                    if ($_SESSION["EDITE"][12] == "ชาย") {
                                        echo "selected";
                                    }
                                }
                            ?>
                        >
                            ชาย
                        </option>                        
                        <option value="หญิง"
                            <?php 
                                if (isset($_SESSION["EDITE"])) {
                                    if ($_SESSION["EDITE"][12] == "หญิง") {
                                        echo "selected";
                                    }
                                }
                            ?>
                        >
                            หญิง
                        </option>
                    </select>
                </div>

                <label class="col-sm-1 control-label" for="formGroupInputLarge">
                    ศาสนา
                </label>
                
                <div class="col-sm-3">
                    <select class="form-control input-lg" name="lbReli" required="">
                        <option value="">-- กรุณาเลือก --</option>
                        <option value="พุทธ"
                            <?php 
                                if (isset($_SESSION["EDITE"])) {
                                    if ($_SESSION["EDITE"][13] == "พุทธ") {
                                        echo "selected";
                                    }
                                }
                            ?>
                        >
                            พุทธ
                        </option>
                        <option value="อิสลาม"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][13] == "อิสลาม") {echo "selected";}}?>>
                            อิสลาม</option>
                        <option value="คริสต์"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][13] == "คริสต์") {echo "selected";}}?>>
                            คริสต์</option>
                        <option value="ซิกส์"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][13] == "ซิกส์") {echo "selected";}}?>>
                            ซิกส์</option>
                        <option value="พราหมณ์/ฮินดู"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][13] == "พราหมณ์/ฮินดู") {echo "selected";}}?>>
                            พราหมณ์/ฮินดู</option>
                        <option value="อื่นๆ"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][13] == "อื่นๆ") {echo "selected";}}?>>
                            อื่นๆ</option>
                    </select>
                </div>
                <div class="col-sm-2"></div>
            </div>

            <div class="form-group form-group-lg">
                <label class="col-sm-3 control-label" for="formGroupInputLarge">
                    เชื้อชาติ
                </label>
                <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
                <div class="col-sm-3">
                    <input name="txtReginal" class="form-control input-lg" id="reginal" type="text" required=""
                        autofocus=""
                        value="<?php if (isset($_SESSION["EDITE"])) {echo $_SESSION["EDITE"][14];} else {?>ไทย<?php }?>">
                    </input>
                </div>
                <label class="col-sm-1 control-label" for="formGroupInputLarge">
                    สัญชาติ
                </label>
                <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
                <div class="col-sm-3">
                    <select class="form-control input-lg" name="lbReginality">
                        <option value="ไทย"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][15] == "ไทย") {echo "selected";}}?>>
                            ไทย</option>
                        <option value="กัมพูชา"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][15] == "กัมพูชา") {echo "selected";}}?>>
                            กัมพูชา</option>
                        <option value="เกาหลีใต้"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][15] == "เกาหลีใต้") {echo "selected";}}?>>
                            เกาหลีใต้</option>
                        <option value="จีน"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][15] == "จีน") {echo "selected";}}?>>
                            จีน</option>
                        <option value="ซาอุดิอาระเบีย"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][15] == "ซาอุดิอาระเบีย") {echo "selected";}}?>>
                            ซาอุดิอาระเบีย</option>
                        <option value="ญี่ปุ่น"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][15] == "ญี่ปุ่น") {echo "selected";}}?>>
                            ญี่ปุ่น</option>
                        <option value="เนปาล"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][15] == "เนปาล") {echo "selected";}}?>>
                            เนปาล</option>
                        <option value="พม่า"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][15] == "พม่า") {echo "selected";}}?>>
                            พม่า</option>
                        <option value="ฟิลิปปิน"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][15] == "ฟิลิปปิน") {echo "selected";}}?>>
                            ฟิลิปปิน</option>
                        <option value="มาเลเซีย"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][15] == "มาเลเซีย") {echo "selected";}}?>>
                            มาเลเซีย</option>
                        <option value="ลาว"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][15] == "ลาว") {echo "selected";}}?>>
                            ลาว</option>
                        <option value="เวียดนาม"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][15] == "เวียดนาม") {echo "selected";}}?>>
                            เวียดนาม</option>
                        <option value="ศรีลังกา"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][15] == "ศรีลังกา") {echo "selected";}}?>>
                            ศรีลังกา</option>
                        <option value="สิงคโปร์"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][15] == "สิงคโปร์") {echo "selected";}}?>>
                            สิงคโปร์</option>
                        <option value="อินเดีย"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][15] == "อินเดีย") {echo "selected";}}?>>
                            อินเดีย</option>
                        <option value="อินโดนิเซีย"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][15] == "อินโดนิเซีย") {echo "selected";}}?>>
                            อินโดนิเซีย</option>
                        <option value="ไม่ปรากฏสัญชาติ"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][15] == "ไม่ปรากฏสัญชาติ") {echo "selected";}}?>>
                            ไม่ปรากฏสัญชาติ</option>
                        <option value="อื่นๆ"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][15] == "อื่นๆ") {echo "selected";}}?>>
                            อื่นๆ</option>

                    </select>
                </div>
                <div class="col-sm-2"></div>
            </div>

            <div class="form-group form-group-lg">
                <label class="col-sm-3 control-label" for="formGroupInputLarge">
                    หมู่โลหิต
                </label>

                <div class="col-sm-3">
                    <select class="form-control input-lg" name="lbGroupblood" required="">
                        <option value="">-- กรุณาเลือก --</option>
                        <option value="A"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][16] == "A") {echo "selected";}}?>>
                            A</option>
                        <option value="B"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][16] == "B") {echo "selected";}}?>>
                            B</option>
                        <option value="AB"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][16] == "AB") {echo "selected";}}?>>
                            AB</option>
                        <option value="O"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][16] == "O") {echo "selected";}}?>>
                            O</option>
                        <option value="NO"
                            <?php if (isset($_SESSION["EDITE"])) {if ($_SESSION["EDITE"][16] == "NO") {echo "selected";}}?>>
                            ไม่ทราบ</option>
                    </select>
                </div>

                <div class="col-sm-6"></div>
            </div>


            <?php 
                if (isset($_SESSION['SAS1'])) {
                    if ($_SESSION['SAS1'][1] == "4") {?>
                        <br>
                        <!-- <h3 class="text-center">
                        
                            <span class="glyphicon glyphicon-share"></span>
                                2.1 สำหรับนักเรียนที่จบ ม.3 ณ ร.ร.บางละมุง
                        </h3> -->

                         <div class="alert alert-danger text-center" role="alert">
                            <i><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                ส่วนนี้เฉพาะนักเรียนศิษย์เก่า ที่จบ ม.3 โรงเรียนธาตุนารายณ์วิทยาเท่านั้น ถ้าไม่ใช่โปรดข้ามส่วนนี้
                            </i>
                        </div> 
                        
                        
                        <div class="form-group form-group-lg ">

                             <label class=" col-sm-5 control-label" for="formGroupInputLarge"> กรอกรหัสนักเรียนเดิม</br>โรงเรียนธาตุนารายณ์วิทยา </label> 
                            </br>
                            <div class="col-sm-5" >
                                <input name="txtstuIDold" class="form-control input-lg" id="txtstuIDold"
                                    OnKeyPress="return chkNumber(this)" maxlength="5" placeholder="กรอกรหัสนักเรียนโรงเรียนธาตุนารายณ์วิทยา ม.ต้น"
                                    type="text" value="<?php if (isset($_SESSION["EDITE"])) {echo $_SESSION["EDITE"][56];}?>">
                            </div>

                            <div class="col-sm-2"> </div>
                        </div>

                    <?php 
                    }
                }
            ?>


            <?php if (!isset($_GET["edite"])) {?>
            <div class="form-group">
                <div class="col-sm-offset-8 col-sm-4 text-center">
                    <button class="btn btn-info btn-lg btn-block" name="btnNext2" type="submit" value="Login">
                        ถัดไป <span class="glyphicon glyphicon-random" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
            <?php } else {?>
            <div class="form-group">
                <div class="col-sm-offset-8 col-sm-4 text-center">
                    <button class="btn btn-success btn-lg btn-block" name="btnEdite2" type="submit" value="Login"
                        onclick="if(confirm('ยืนยันการแก้ไขส่วนที่2')) return true; else return false;">
                        บันทึกการแก้ไขส่วนที่ 2 <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
            <?php }?>
        </form>

</div>

<SCRIPT language="javascript">
     $(document).ready(function(){
            $(".datepicker").datepicker().on('show', function(e){
            $('.prev').text('<<<');
                $('.next').text(">>>");
            });
        });

</script>