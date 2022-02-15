<div class="caption-full">


    <h3 class="text-center">
        <p>
            <span class="glyphicon glyphicon-share"></span>
            4. ประเภทนักเรียน
        </p>
    </h3>
    <?php 
            if ($_SESSION['SAS1'][1] != "4") {?>
                <div class="alert alert-danger text-center" role="alert">
                    <i><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> ส่วนนี้ให้ท่านตรวจสอบให้ถูกต้อง
                        อ่านข้อความข้างต้น ก่อนทำการเลือก </i>
                </div>
                <div class="alert alert-success text-left" role="alert">
                    <p><span class="glyphicon glyphicon-indent-right" aria-hidden="true"></span> นักเรียนนอกเขตพื้นที่บริการ คือ
                        นักเรียนที่มีรายชื่อในทะเบียนบ้าน ที่ไม่อยู่ในเขต 5 ตำบล ได้แก่ ธาตุเชิงชุม ธาตุนาเวง พังขว้าง ฮางโฮง เชียงเครือ</p>
                    <p> หรือ นักเรียนที่มีรายชื่อในทะเบียนบ้าน ที่อยู่ในเขตพื้นที่บริการ หลังวันที่ 16 พฤษภาคม 2561 </p>
                    <p><span class="glyphicon glyphicon-indent-left" aria-hidden="true"></span> นักเรียนในเขตพื้นที่บริการ คือ
                        นักเรียนที่มีรายชื่อในทะเบียนบ้าน ที่อยู่ในเขตพื้นที่บริการ 5 ตำบล ได้แก่ ธาตุเชิงชุม ธาตุนาเวง พังขว้าง ฮางโฮง เชียงเครือ 
                        ก่อนวันที่ 16 พฤษภาคม 2561</p>
                </div>
                <?php 
            } 
            else{?>
                <div class="alert alert-danger text-center" role="alert">
                    <i><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> นักเรียนชั้น ม.4 ไม่ต้องเลือกประเภทนักเรียน </i>
                </div>
                <?php
            }       
    
    ?>


    <?php     
            if (!isset($_GET["edite"])) {?>
                    <form class="form-horizontal" name="Formnext2" id="Formnext2" method="post" action="index.php"
                        style="padding-left: 10%">
                <?php 
            } 
            else {?>
                    <form class="form-horizontal" name="Formnext2" id="Formnext2" method="post" action="index.php?edite=true"
                        style="padding-left: 10%">
                <?php 
            }?>
            if(){
            <div class="radio">
                <h4>
                    <label>
                        <input type="radio" name="raOption" id="option1" value="นักเรียนทั่วไป"
                            onclick="javascript:chickCheckbox();" required="" 
                            <?php 
                                if (isset($_SESSION["EDITE"]) && $_SESSION["EDITE"][2] == "นักเรียนทั่วไป") {echo "checked";} 
                                else {

                                    if (isset($_SESSION['SAS1'])) {

                                        if ($_SESSION['SAS1'][1] == "4") {

                                        // echo "checked";
                                        }
                                    }
                                }
                        ?>>

                        นักเรียนทั่วไป

                    </label>
                </h4>
            </div>
            }

            <?php
if (isset($_SESSION['SAS1'])) {
    $checkm4 = "4";
    if (strcmp($_SESSION['SAS1'][1], $checkm4) != 0) {?>
            <div class="radio">
                <h4>
                    <label>
                        <input type="radio" name="raOption" id="option2" value="นักเรียนในเขตพื้นที่บริการ"
                            onclick="javascript:chickCheckbox();"
                            <?php if (isset($_SESSION["EDITE"]) && $_SESSION["EDITE"][2] == "นักเรียนในเขตพื้นที่บริการ") {echo "checked";}?>>

                        นักเรียนในเขตพื้นที่บริการ
                    </label>
                </h4>
                <h5>
                    <label>
                        ( นักเรียนในเขตพื้นที่บริการ คือ นักเรียนต้องมีชื่อในทะเบียนบ้าน อ.บางละมุง ไม่ต่ำกว่า 2 ปี
                        คือเข้ามาอยู่ก่อนวันที่ 16 พ.ค. 61)
                    </label>
                </h5>
            </div>






            <?php }  ?>

            <div class="radio">
                <!-- <h4>
                    <label>
                        <input type="radio" name="raOption" id="option3" value="นักเรียนที่มีเงื่อนไขพิเศษ"
                            onclick="javascript:chickCheckbox();"
                            <?php if (isset($_SESSION["EDITE"]) && $_SESSION["EDITE"][2] == "นักเรียนที่มีเงื่อนไขพิเศษ") {echo "checked";}?>>

                        นักเรียนที่มีเงื่อนไขพิเศษ
                    </label>
                </h4> -->

            </div>

            <div class="radio">
                <!-- <h4>
                    <label>
                        <input type="radio" name="raOption" id="option4" value="นักเรียนที่มีความสามารถพิเศษ"
                            onclick="javascript:chickCheckbox();"
                            <?php if (isset($_SESSION["EDITE"]) && $_SESSION["EDITE"][2] == "นักเรียนที่มีความสามารถพิเศษ") {echo "checked";}?>>

                        นักเรียนที่มีความสามารถพิเศษ
                    </label>
                </h4> -->

            </div>


            <?php }else { //เมื่อ !isset($_SESSION['SAS1'])     

    if (isset($_SESSION["EDITE"])) {
        $checkeditm4 = "4";
        if (strcmp($_SESSION["EDITE"][1], $checkeditm4) != 0) {?>
            <div class="radio">
                <h4>
                    <label>
                        <input type="radio" name="raOption" id="option2" value="นักเรียนในเขตพื้นที่บริการ"
                            onclick="javascript:chickCheckbox();"
                            <?php if (isset($_SESSION["EDITE"]) && $_SESSION["EDITE"][2] == "นักเรียนในเขตพื้นที่บริการ") {echo "checked";}?>>

                        นักเรียนในเขตพื้นที่บริการ
                    </label>
                </h4>

                <h5>
                    <label>
                        ( นักเรียนในเขตพื้นที่บริการ คือ นักเรียนต้องมีชื่อในทะเบียนบ้าน อ.บางละมุง ไม่ต่ำกว่า 2 ปี
                        คือเข้ามาอยู่ก่อนวันที่ 16 พ.ค. 61)
                    </label>
                </h5>
            </div>






            <?php } ?>

            <div class="radio">
                <h4>
                    <label>
                        <input type="radio" name="raOption" id="option3" value="นักเรียนที่มีเงื่อนไขพิเศษ"
                            onclick="javascript:chickCheckbox();"
                            <?php if (isset($_SESSION["EDITE"]) && $_SESSION["EDITE"][2] == "นักเรียนที่มีเงื่อนไขพิเศษ") {echo "checked";}?>>

                        นักเรียนที่มีเงื่อนไขพิเศษ
                    </label>
                </h4>

            </div>

            <div class="radio">
                <h4>
                    <label>
                        <input type="radio" name="raOption" id="option4" value="นักเรียนที่มีความสามารถพิเศษ"
                            onclick="javascript:chickCheckbox();"
                            <?php if (isset($_SESSION["EDITE"]) && $_SESSION["EDITE"][2] == "นักเรียนที่มีความสามารถพิเศษ") {echo "checked";}?>>

                        นักเรียนที่มีความสามารถพิเศษ
                    </label>
                </h4>

            </div>

            <?php }}?>






            <!--div class="radio">
                <h4>
                    <label>
                        <input type="radio" name="raOption" id="option3" value="นักเรียนเงื่อนไขพิเศษ"
                        onclick="javascript:chickCheckbox();"
                        <?php //if(isset($_SESSION["EDITE"]) && $_SESSION["EDITE"][2] == "นักเรียนเงื่อนไขพิเศษ"){ echo "checked"; } ?>>
                        นักเรียนเงื่อนไขพิเศษ
                    </label>
                </h4>
            </div-->


            <!--โค้ดที่หายไปอยู่ที่ไฟล์bak4.php!-->


            <!--div class="col-sm-offset-2 col-sm-10 text-center"-->
            <?php if (!isset($_GET["edite"])) {?>
            <div class="form-group">
                <div class="col-sm-offset-8 col-sm-4 text-center">
                    <button class="btn btn-info btn-lg btn-block" name="btnNext4" type="submit" value="Login">
                        ถัดไป <span class="glyphicon glyphicon-random" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
            <?php } else {?>
            <div class="form-group">
                <div class="col-sm-offset-8 col-sm-4 text-center">
                    <button class="btn btn-success btn-lg btn-block" name="btnEdite4" type="submit" value="Login"
                        onclick="if(confirm('ยืนยันการแก้ไขส่วนที่4')) return true; else return false;">
                        แก้ไขส่วนที่ 4 <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
            <?php }?>

        </form>
</div>