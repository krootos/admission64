 
<div class="caption-full">

    <!--h4 class="pull-right">$24.99</h4-->
    <h3 class="text-center">
         <p><span class="glyphicon glyphicon-share"></span>5. ข้อมูลที่อยู่ที่ติดต่อได้</p>
    </h3>
   <br>

    <form class="form-horizontal" name="form1" method="post" action="index.php">
        <div class="form-group form-group-lg ">
            <label class=" col-sm-3 control-label" for="formGroupInputLarge"> บ้านเลขที่ </label>
            <div class="col-sm-3">
                   
                    <input name="txtHaddress" type="text" class="form-control input-lg" 
                 id="haddress" placeholder="เลขที่" autofocus="" required="">
            </div>
                    <label class=" col-sm-1 control-label" for="formGroupInputLarge"> หมู่ </label>
            <div class="col-sm-3"> 
                    <input name="txtMoo" type="text" class="form-control input-lg" 
                 id="haddress" placeholder="ถ้าไม่มีให้พิมพ์ -" required="">
            </div>
            <div class="col-sm-2"></div>
        </div>         
        
        <div class="form-group form-group-lg ">
            <label class=" col-sm-3 control-label" for="formGroupInputLarge"> ถนน/ตรอก/ซอย </label>
            <div class="col-sm-7">
                   
                 <input name="txtSoi" class="form-control input-lg" id="soi" 
                    placeholder="ถ้าไม่มีให้พิมพ์ -" type="text" required="">
            </div>

            <div class="col-sm-2"></div>
      </div>

      <div class="form-group form-group-lg ">
            <label class=" col-sm-3 control-label" for="formGroupInputLarge"> จังหวัด </label>
            <div class="col-sm-7">
                 <span id="province">
                 <select class="form-control input-lg" required="">
                 <option value="">- เลือกจังหวัด -</option>
                </select>
                </span>
            </div>

            <div class="col-sm-2"> </div>

      </div>

        <div class="form-group form-group-lg">
            <label class="col-sm-3 control-label" for="formGroupInputLarge">
                อำเภอ
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-3">
                <span id="amphur">
                <select class="form-control input-lg" required="">
                 <option value="">- เลือกอำเภอ -</option>
                </select>
                </span>
            </div>
            <label class="col-sm-1 control-label" for="formGroupInputLarge">
                ตำบล
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-3">
                <span id="district">
                <select class="form-control input-lg" required="">
                  <option value="">- เลือกตำบล -</option>
                </select>
                </span>
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div class="form-group form-group-lg ">
              <label class=" col-sm-3 control-label" for="formGroupInputLarge"> โทรศัพท์ </label>
            <div class="col-sm-7">
                   
                 <input name="txtTel" class="form-control input-lg" id="tel" 
                    placeholder="" type="text" required="" OnKeyPress="return chkNumber(this)" 
                    maxlength="10">
            </div>

            <div class="col-sm-2"> </div>
 
        </div>
         
        <div class="form-group form-group-lg ">
            <label class=" col-sm-3 control-label" for="formGroupInputLarge"> Email </label>
            <div class="col-sm-7">
                   
                 <input name="txtEmail" type="text" class="form-control input-lg" 
                 id="exampleInputEmail2" placeholder="jane.doe@example.com หรือไม่มีใส่-" required="">
            </div>

            <div class="col-sm-2"> </div>
 
        </div>

        <div class="form-group">
            <div class="col-sm-offset-8 col-sm-4 text-center">
                <button class="btn btn-info btn-lg btn-block" name="btnNext5" 
                type="submit" value="Login"
                onclick="if(confirm('ยืนยันการแก้ไขส่วนที่5')) return true; else return false;"
                >
                    ถัดไป   <span class="glyphicon glyphicon-random" aria-hidden="true"></span>
                </button>
            </div>
        </div>

        </form>

</div>
