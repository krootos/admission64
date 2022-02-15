 <div class="form-group form-group-lg">
        
        <div class="col-sm-4">
            <div class="radio" style="float: left;">
                <h4>
                    <label>
                        <input type="radio" name="raOption" id="option4" value="นักเรียนความสามารถพิเศษ" 
                        onclick="javascript:chickCheckbox();" <?php if(isset($_SESSION["EDITE"]) && $_SESSION["EDITE"][2] == "นักเรียนความสามารถพิเศษ"){ echo "checked"; } ?>>
                        นักเรียนความสามารถพิเศษ
                    </label>
                </h4>
            </div>
        </div>
        <label class="col-sm-2 control-label text-left">
                ด้าน
        </label>
         <div class="col-sm-6 text-left">
                
                <?php 
           if(isset($_SESSION["EDITE"])){ ?>
    <select class="form-control input-lg" name="lbSpecial" id="lbSpecial" disabled="disabled">
            <?php }else{ ?>

    <select class="form-control input-lg" name="lbSpecial" id="lbSpecial" disabled="disabled" required="">

              <?php  } ?>
                <option value="">กรุณาเลือกความสามารถพิเศษ</option>
                 <option value="1"
        <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][3] == "1"){  echo"selected"; }}?>
                 >ดนตรี</option>
                 <option value="2"
        <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][3] == "2"){  echo"selected"; }}?>
                 >กีฬา</option>
                 <option value="3"
        <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][3] == "3"){  echo"selected"; }}?>
                 >ศิลปะ</option>
                 
                </select>
            </div>   
    </div>

    <label>
                อธิบายความสามารถเพิ่มเติม/รางวัลดีเด่นพอสังเขป
    </label>
   
        <textarea class="form-control" name="txtaMore" rows="3" autofocus="">
        <?php if(isset($_SESSION["EDITE"])){ echo $_SESSION["EDITE"][4];}?>
        </textarea>
 
<br>