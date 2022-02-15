<div class="caption-full">
<h3 class="text-center">
   
    <?php // if (isset($_SESSION['SAS2'][2]) && $_SESSION['SAS2'][2] == "ดนตรีสากล") {echo "checked";}?>
    <?php  if (isset($_SESSION['SAS2'][2]) && $_SESSION['SAS2'][2] == "ดนตรีสากล") {?> 
    <p>
        <span class="glyphicon glyphicon-share"></span>
           4-2. คุณสมบัติเฉพาะด้านดนตรีสากล
        </p>
    <?php }else{ ?>
        <p>
        <span class="glyphicon glyphicon-share"></span>
           4-2. คุณสมบัติเฉพาะด้านดนตรีไทย
        </p>
    <?php } ?>
    </h3>

    <?php if(!isset($_GET["edite"])){ ?>
    <form class="form-horizontal" name="form1" method="post" action="index.php">
    <?php }else{ 
       
        ?>
    <form class="form-horizontal" name="form1" method="post" action="index.php?edite=true">
    <?php }  ?>

    <?php  if (isset($_SESSION['SAS2'][2]) && $_SESSION['SAS2'][2] == "ดนตรีสากล") {?> 
        <div class="form-group form-group-lg">
            <label class="col-sm-4 control-label" for="formGroupInputLarge">
                ด้านดนตรีสากล
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-8">
                
            <select class="form-control input-lg" name="lbMore" required="" autofocus="">
                
                 <option value="">-- กรุณาเลือก --</option>
                 <option value="เครื่องสาย-กีตาร์ไฟฟ้า"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][4] == "เครื่องสาย-กีตาร์ไฟฟ้า"){  echo"selected"; }}?>
                 >เครื่องสาย-กีตาร์ไฟฟ้า</option>

                 <option value="เครื่องสาย-เบสไฟฟ้า"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][4] == "เครื่องสาย-เบสไฟฟ้า"){  echo"selected"; }}?>
                 >เครื่องสาย-เบสไฟฟ้า</option>
                 <option value="เครื่องเป่า-ฟลุต"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][4] == "เครื่องเป่า-ฟลุต"){  echo"selected"; }}?>
                 >เครื่องเป่า-ฟลุต</option>
                 <option value="เครื่องเป่า-คลาริเน็ต"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][4] == "เครื่องเป่า-คลาริเน็ต"){  echo"selected"; }}?>
                 >เครื่องเป่า-คลาริเน็ต</option>
                 <option value="เครื่องเป่า-แซกโซโฟน"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][4] == "เครื่องเป่า-แซกโซโฟน"){  echo"selected"; }}?>
                 >เครื่องเป่า-แซกโซโฟน</option>
                 <option value="เครื่องเป่า-ทรัมเป็ต"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][4] == "เครื่องเป่า-ทรัมเป็ต"){  echo"selected"; }}?>
                 >เครื่องเป่า-ทรัมเป็ต</option>
                 <option value="เครื่องเป่า-ทรอมโบน"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][4] == "เครื่องเป่า-ทรอมโบน"){  echo"selected"; }}?>
                 >เครื่องเป่า-ทรอมโบน</option>
                 <option value="เครื่องเป่า-ทูบา"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][4] == "เครื่องเป่า-ทูบา"){  echo"selected"; }}?>
                 >เครื่องเป่า-ทูบา</option>
                 <option value="เครื่องกระทบ-กลองสแนร์"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][4] == "เครื่องกระทบ-กลองสแนร์"){  echo"selected"; }}?>
                 >เครื่องกระทบ-กลองสแนร์</option>
                 <option value="เครื่องกระทบ-กลองใหญ่"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][4] == "เครื่องกระทบ-กลองใหญ่"){  echo"selected"; }}?>
                 >เครื่องกระทบ-กลองใหญ่</option>
                 <option value="เครื่องกระทบ-กลองชุด"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][4] == "เครื่องกระทบ-กลองชุด"){  echo"selected"; }}?>
                 >เครื่องกระทบ-กลองชุด</option>
                 <option value="เครื่องคีย์บอร์ด-เปียโน"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][4] == "เครื่องคีย์บอร์ด-เปียโน"){  echo"selected"; }}?>
                 >เครื่องคีย์บอร์ด-เปียโน</option>
                 <option value="เครื่องคีย์บอร์ด-คีย์บอร์ดไฟฟ้า"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][4] == "เครื่องคีย์บอร์ด-คีย์บอร์ดไฟฟ้า"){  echo"selected"; }}?>
                 >เครื่องคีย์บอร์ด-คีย์บอร์ดไฟฟ้า</option>
                 <option value="ขับร้อง-เพลงสากล"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][4] == "ขับร้อง-เพลงสากล"){  echo"selected"; }}?>
                 >ขับร้อง-เพลงสากล</option>
                 <option value="ขับร้อง-เพลงไทยสากล"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][4] == "ขับร้อง-เพลงไทยสากล"){  echo"selected"; }}?>
                 >ขับร้อง-เพลงไทยสากล</option>
                 <option value="ขับร้อง-เพลงไทยลูกทุ่ง"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][4] == "ขับร้อง-เพลงไทยลูกทุ่ง"){  echo"selected"; }}?>
                 >ขับร้อง-เพลงไทยลูกทุ่ง</option>
                 
                 
                 
                </select>

            </div>
        </div>

        <?php }else{ //ส่วนดนตรีไทย 
                    if (isset($_SESSION['SAS2'][2]) && $_SESSION['SAS2'][2] == "ดนตรีไทย") {
            ?>
            <div class="form-group form-group-lg">
            <label class="col-sm-4 control-label" for="formGroupInputLarge">
            ด้านดนตรีไทย
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-8">
               
           
                
            <select class="form-control input-lg" name="lbMore" required="" autofocus="">
                
                 <option value="">-- กรุณาเลือก --</option>
                 <option value="เครื่องดีด-จะเข้"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][4] == "เครื่องดีด-จะเข้"){  echo"selected"; }}?>
                 >เครื่องดีด-จะเข้</option>
                 <option value="เครื่องสี-ซอด้วง"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][4] == "เครื่องสี-ซอด้วง"){  echo"selected"; }}?>
                 >เครื่องสี-ซอด้วง</option>
                 <option value="เครื่องสี-ซออู้"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][4] == "เครื่องสี-ซออู้"){  echo"selected"; }}?>
                 >เครื่องสี-ซออู้</option>
                 <option value="เครื่องตี-ระนาดเอก"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][4] == "เครื่องตี-ระนาดเอก"){  echo"selected"; }}?>
                 >เครื่องตี-ระนาดเอก</option>
                 <option value="เครื่องตี-ระนาดทุ้ม"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][4] == "เครื่องตี-ระนาดทุ้ม"){  echo"selected"; }}?>
                 >เครื่องตี-ระนาดทุ้ม</option>
                 <option value="เครื่องตี-ฆ้องวงใหญ่"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][4] == "เครื่องตี-ฆ้องวงใหญ่"){  echo"selected"; }}?>
                 >เครื่องตี-ฆ้องวงใหญ่</option>
                 <option value="เครื่องตี-ฆ้องวงเล็ก"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][4] == "เครื่องตี-ฆ้องวงเล็ก"){  echo"selected"; }}?>
                 >เครื่องตี-ฆ้องวงเล็ก</option>
                 <option value="เครื่องตี-เครื่องหนัง-โทนรำมะนา-กลองแขก"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][4] == "เครื่องตี-เครื่องหนัง-โทนรำมะนา-กลองแขก"){  echo"selected"; }}?>
                 >เครื่องตี-เครื่องหนัง-โทนรำมะนา-กลองแขก</option>
                 <option value="เครื่องเป่า-ขลุยเพียงออ"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][4] == "เครื่องเป่า-ขลุยเพียงออ"){  echo"selected"; }}?>
                 >เครื่องเป่า-ขลุยเพียงออ</option>
                 <option value="ขับร้อง-เพลงไทย"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][4] == "ขับร้อง-เพลงไทย"){  echo"selected"; }}?>
                 >ขับร้อง-เพลงไทย</option>
                 
                </select>

            </div>
        </div>

            <?php }} ?>

            <?php if (!isset($_GET["edite"])) {?>
        <div class="form-group">
            <div class="col-sm-offset-8 col-sm-4 text-center">
                <button class="btn btn-info btn-lg btn-block" name="btnNext4-2" type="submit"
                value="Login">
                    ถัดไป   <span class="glyphicon glyphicon-random" aria-hidden="true"></span>
                </button>
            </div>
        </div>
        <?php } else {?>
        <div class="form-group">
            <div class="col-sm-offset-8 col-sm-4 text-center">
                <button class="btn btn-success btn-lg btn-block" name="btnEdite4-2" type="submit"
                value="Login"
                onclick="if(confirm('ยืนยันการแก้ไขส่วนที่4-2')) return true; else return false;">
                    แก้ไขส่วนที่ 4-2   <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                </button>
            </div>
        </div>
        <?php }?>
    </form>
</div>