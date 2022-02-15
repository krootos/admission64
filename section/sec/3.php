 
<div class="caption-full">

    <!--h4 class="pull-right">$24.99</h4-->
    <h3 class="text-center">
         <p><span class="glyphicon glyphicon-share"></span>3. ข้อมูลที่อยู่ที่ติดต่อได้</p>
    </h3>
   <br>

   <?php if(!isset($_GET["edite"])){ ?>
    <form class="form-horizontal" name="form1" method="post" action="index.php">
  <?php }
      else{ ?>
    <form class="form-horizontal" name="form1" method="post" action="index.php?edite=true">
    <?php } ?>
        <div class="form-group form-group-lg ">
            <label class=" col-sm-3 control-label" for="formGroupInputLarge"> บ้านเลขที่ </label>
            <div class="col-sm-3">
                   
                    <input name="txtHaddress" type="text" class="form-control input-lg" 
                 id="haddress" placeholder="เลขที่" autofocus="" required=""
                value="<?php if(isset($_SESSION["EDITE"])){ echo $_SESSION["EDITE"][17];}?>">
                 
            </div>
                    <label class=" col-sm-1 control-label" for="formGroupInputLarge"> หมู่ </label>
            <div class="col-sm-3"> 
                    <input name="txtMoo" type="text" class="form-control input-lg" 
                 id="hmoo" placeholder="ถ้าไม่มีให้พิมพ์ -" required=""
              value="<?php if(isset($_SESSION["EDITE"])){ echo $_SESSION["EDITE"][18];}?>">
                 
            </div>
           <div class="col-sm-2"></div>
        </div>
        <div class="form-group form-group-lg ">
            <label class=" col-sm-3 control-label" for="formGroupInputLarge"> ตรอก/ซอย </label>
            <div class="col-sm-3">
                 <input name="txtSoi" class="form-control input-lg" id="soi" 
                    placeholder="ถ้าไม่มีให้พิมพ์ -" type="text" required=""
                    value="<?php if(isset($_SESSION["EDITE"])){ echo $_SESSION["EDITE"][19];}?>">
                    
            </div>
            <label class=" col-sm-1 control-label" for="formGroupInputLarge"> ถนน </label>
             <div class="col-sm-3">
                 <input name="txtRoad" class="form-control input-lg" id="road" 
                    placeholder="ถ้าไม่มีให้พิมพ์ - " type="text" required=""
                    value="<?php if(isset($_SESSION["EDITE"])){ echo $_SESSION["EDITE"][42];}?>">
                    
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

            <label class=" col-sm-1 control-label" for="formGroupInputLarge">
            <a href="index.php?Refresh=refresh">
            <span class="glyphicon glyphicon-refresh">Refresh
             </span> 
            </a>
             </label>

      </div>
  
        <div class="form-group form-group-lg">
            <label class="col-sm-3 control-label" for="formGroupInputLarge">
                อำเภอ
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-3">
                <?php 
                if(isset($_SESSION["EDITE"])){
                echo "อำเภอ : ". $_SESSION["EDITE"][39]; 
                }
                ?>
            
                <span id="amphur">
                <?php if((isset($_POST["btnEdite3"])) || (isset($_GET["edite"]))){ ?>
                  <select class="form-control input-lg" >
                <?php } else{ ?> 
                <select class="form-control input-lg" required="">
                
                <?php } ?>
                 <option value="">- เลือกอำเภอ -</option>

                </select>
                </span>
              
            </div>
            <label class="col-sm-1 control-label" for="formGroupInputLarge">
                ตำบล
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-3">
            <?php 
                if(isset($_SESSION["EDITE"])){
                echo "ตำบล : ". $_SESSION["EDITE"][37]; 
                }
            ?>
                <span id="district">
                 <?php if((isset($_POST["btnEdite3"])) || (isset($_GET["edite"]))){ ?>
                 <select class="form-control input-lg">
                <?php }else{ ?>
               <select class="form-control input-lg" required="">
                <?php } ?>
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
                    placeholder="โทรศัพท์มือถือ" type="text" required="" OnKeyPress="return chkNumber(this)" 
                    maxlength="10"
                    value="<?php if(isset($_SESSION["EDITE"])){ echo $_SESSION["EDITE"][23];}?>"
                    >
            </div>

            <div class="col-sm-2"> </div>
 
        </div>
         
        <div class="form-group form-group-lg ">
            <label class=" col-sm-3 control-label" for="formGroupInputLarge"> Email </label>
            <div class="col-sm-7">
                   
                 <input name="txtEmail" type="text" class="form-control input-lg" 
                 id="exampleInputEmail2" placeholder="jane.doe@example.com หรือไม่มีใส่-" required=""
                  value="<?php if(isset($_SESSION["EDITE"])){ echo $_SESSION["EDITE"][24];}?>"
                  >
                 
            </div>

            <div class="col-sm-2"> </div>
 
        </div>
        <?php if(!isset($_GET["edite"])){ ?>
        <div class="form-group">
            <div class="col-sm-offset-8 col-sm-4 text-center">
                <button class="btn btn-info btn-lg btn-block" name="btnNext3" 
                type="submit" value="Login">
                    ถัดไป   <span class="glyphicon glyphicon-random" aria-hidden="true"></span>
                </button>
            </div>
        </div>
        <?php }else{ ?>
        <div class="form-group">
            <div class="col-sm-offset-8 col-sm-4 text-center">
                <button class="btn btn-success btn-lg btn-block" name="btnEdite3" 
                type="submit" value="Login"
                onclick="if(confirm('ยืนยันการแก้ไขส่วนที่3')) return true; else return false;"
                >
                    บันทึกการแก้ไขส่วนที่ 3   <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                </button>
            </div>
        </div>
        <?php } ?>
        </form>

</div>
