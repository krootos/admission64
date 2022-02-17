<form class="form-horizontal" method="post" action="index.php"
                                name="formregister" id="formregister" data-toggle="validator">
                                    <div class="form-group form-group-lg">
                                        <label class="col-sm-4 control-label" for="formGroupInputLarge"
                                        style="color: #23527c;">
                                            รหัสเข้าใช้งาน
                                        </label>
                                        <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
                                        <div class="col-sm-8">
                                            
                                        <input name="txtRegisno"  class="form-control input-lg" id="txtRegisno" 
                                            placeholder="เลขประจำตัวประชาชน 13 หลัก" type="text" required="" maxlength="13"
                                            OnKeyPress="return chkNumber(this)"
                                            onkeyup="javascript:remainLength();" autofocus=""
                                            value="<?php if(isset($_POST["txtRegisno"])){ echo $_POST["txtRegisno"]; }?>"
                                        >
                                             
                                          
                                            </input>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-lg">
                                        <label class="col-sm-4 control-label" for="formGroupInputLarge"
                                        style="color: #23527c;">
                                            รหัสผ่าน
                                        </label>
                                        <!--label for="inputPassword3" class="col-sm-2 control-label">รหัสผ่าน</label-->
                                        <div class="col-sm-4">

                                            <input name="txtPwd" class="form-control input-lg" 
                                            id="inputPassword" placeholder="กำหนดเองหรือเหมือนช่องบน" type="password" required="">
                                            </input>
                                        </div>
                                         <div class="col-sm-4">

                                            <input name="txtconPwd" class="form-control input-lg" id="inputPassword3" placeholder="ยืนยันรหัสผ่าน" type="password" data-match="#inputPassword" 
                                            data-match-error="รหัสผ่านไม่ตรงกัน"  required="">
                                            </input>
                                        </div>
                                    </div>

                                     

                                     <div class="form-group">
                                     <div class="col-sm-4" id="verify_math" style="padding-left: 10%">
    <span class="digital" style="background-position:<?php echo ($_SESSION['num_to_check'][0] * -30); ?>px 0px;"></span>
  <span>+</span>
    <span class="digital" style="background-position:<?php echo ($_SESSION['num_to_check'][1] * -30); ?>px 0px;"></span>
  <span>=</span>

                                    </div>

                                        <div class="col-sm-8" >
                                            <input name="i_verify" type="text" maxlength="2" class="form-control"
                                            required="" placeholder="เลข 2 จำนวนบวกกัน"/>
                                        </div>
                                     </div>

                                     <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10 text-center">
                                            <button name="register" class="btn btn-info btn-lg"
                                            disabled="disabled"
                                            type="submit" value="Register" id="gen_button" >
                                                ลงทะเบียน
                                            </button>
                                        </div>
                                    </div>

                                     <div class="form-group form-group-lg">
                                        <!-- <label class="col-sm-4 control-label" for="formGroupInputLarge"
                                        style="color: #23527c;">
                                            รหัสบัตรประจำตัวประชาชน
                                        </label>  -->
                                    
                                        <div class="col-sm-8">

                                             <input name="txtIDCard" type="hidden" class="form-control input-lg"
                                            id="txtIDCard"  placeholder="เลขประจำตัวประชนชน 13 หลัก" type="text"  maxlength="0"
                                            OnKeyPress="return chkNumber(this)"
                                            onkeyup="javascript:remainLength();" value="0000000000000"
                                            >                                          
                                            </input>
                                        </div>
                                    </div>

                                   
</form>