<div class="caption-full">

    <!--h4 class="pull-right">$24.99</h4-->
    <h3 class="text-center">
         <p>
                                    <span class="glyphicon glyphicon-share"></span>
           4. ข้อมูลพื้นฐาน
        </p>
    </h3>
   <br>


    <form class="form-horizontal" name="form1" method="post" action="index.php">
        <div class="form-group form-group-lg">
            <label class="col-sm-3 control-label" for="formGroupInputLarge">
                คำนำหน้าชื่อ :
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-9">
                
                <select class="form-control input-lg" name="lbSname" required="">
                 <option value="">-- กรุณาเลือก --</option>
                 <option value="เด็กชาย">เด็กชาย</option>
                 <option value="เด็กหญิง">เด็กหญิง</option>
                 <option value="นาย<">นาย</option>
                 <option value="นางสาว">นางสาว</option>
                </select>
            </div>
        </div>
        <div class="form-group form-group-lg">
                <label class="col-sm-3 control-label" for="formGroupInputLarge">
                    ชื่อ
                </label>
                <div class="col-sm-9">
                    <input name="txtFname" class="form-control input-lg" id="fname" 
                    placeholder="ชื่อ ไม่ต้องระบุคำนำหน้าชื่อ" type="text" required="" autofocus="">
                    </input>
                </div>
        </div>
         <div class="form-group form-group-lg">
                <label class="col-sm-3 control-label" for="formGroupInputLarge">
                    นามสกุล
                </label>
                <div class="col-sm-9">
                    <input name="txtLname" class="form-control input-lg" id="lname" 
                    placeholder="" type="text" required="" autofocus="">
                    </input>
                </div>
        </div>

    <!--div class="input-group date">
              <label>th-th</label>
              <input class="input-medium form-control" type="text" 
                data-provide="datepicker" data-date-language="th-th" value="01/01/2548">
              <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
        </div-->

    <div class="form-group form-group-lg ">
            <label class=" col-sm-3 control-label" for="formGroupInputLarge"> วัน/เดือน/ปีเกิด  </label>
            <div class="col-sm-6">
                   
                <input class="form-control input-lg" type="text" name="txtBirthday" 
                data-provide="datepicker" data-date-language="th-th" 
                <?php if(isset($_SESSION['SAS1'][1]) && ($_SESSION['SAS1'][1] == 1)){  
                  echo "value=\"01/01/2548\"";} else{ echo "value=\"01/01/2544\"";} ?>
                >        
            </div>
            <div class="col-sm-3"> </div>
            
           

    </div>

        <div class="form-group form-group-lg">
            <label class="col-sm-3 control-label" for="formGroupInputLarge">
                เพศ
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-3">
                <select class="form-control input-lg" name="lbSex" required="">
                 <option value="">-- กรุณาเลือก --</option>
                 <option value="ชาย">ชาย</option>
                 <option value="หญิง">หญิง</option>
                </select>
            </div>
            <label class="col-sm-1 control-label" for="formGroupInputLarge">
                ศาสนา
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-3">
                <select class="form-control input-lg" name="lbReli" required="">
                  <option value="">-- กรุณาเลือก --</option>
                  <option value="พุทธ">พุทธ</option>
                  <option value="อิสลาม">อิสลาม</option>
                  <option value="คริสต์">คริสต์</option>
                  <option value="ซิกส์">ซิกส์</option>
                  <option value="พราหมณ์/ฮินดู">พราหมณ์/ฮินดู</option>
                  <option value="อื่นๆ">อื่นๆ</option>
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
                    <input name="txtReginal" class="form-control input-lg" id="reginal" 
                     type="text" required="" autofocus="" value="ไทย">
                    </input>
            </div>
            <label class="col-sm-1 control-label" for="formGroupInputLarge">
                สัญชาติ
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-3">
                <select class="form-control input-lg" name="lbReginality">
                  <option value="ไทย">ไทย</option>
                  <option value="กัมพูชา">กัมพูชา</option>
                  <option value="เกาหลีใต้">เกาหลีใต้</option>
                  <option value="จีน">จีน</option>
                  <option value="ซาอุดิอาระเบีย">ซาอุดิอาระเบีย</option>
                  <option value="ญี่ปุ่น">ญี่ปุ่น</option>
                  <option value="เนปาล">เนปาล</option>
                  <option value="พม่า">พม่า</option>
                  <option value="ฟิลิปปิน">ฟิลิปปิน</option>
                  <option value="มาเลเซีย">มาเลเซีย</option>
                  <option value="ลาว">ลาว</option>
                  <option value="เวียดนาม">เวียดนาม</option>
                  <option value="ศรีลังกา">ศรีลังกา</option>
                  <option value="สิงคโปร์">สิงคโปร์</option>
                  <option value="อินเดีย">อินเดีย</option>
                  <option value="อินโดนิเซีย">อินโดนิเซีย</option>
                  <option value="ไม่ปรากฏสัญชาติ">ไม่ปรากฏสัญชาติ</option>
                  <option value="อื่นๆ">อื่นๆ</option>

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
                 <option value="A">A</option>
                 <option value="B">B</option>
                 <option value="AB">AB</option>
                 <option value="O">O</option>
                 <option value="NO">ไม่ทราบ</option>
                </select>
            </div>
           
            <div class="col-sm-6"></div>
        </div> 




        <div class="form-group">
            <div class="col-sm-offset-8 col-sm-4 text-center">
                <button class="btn btn-info btn-lg btn-block" name="btnNext4" 
                type="submit" value="Login">
                    ถัดไป   <span class="glyphicon glyphicon-random" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </form>
</div>
