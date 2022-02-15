<div class="caption-full">


    <h3 class="text-center">
         <p>
                                    <span class="glyphicon glyphicon-share"></span>
           4. ประเภทนักเรียน
        </p>
    </h3>
    
    
    <form class="form-horizontal" name="Formnext2" id="Formnext2" method="post" action="index.php" style="padding-left: 10%">
       
    
            <div class="radio">
                <h4><label>
                    <input type="radio" name="raOption" id="option1" value="นักเรียนทั่วไป"
                    onclick="javascript:chickCheckbox();" required="">
                        นักเรียนทั่วไป
                    </label>
                </h4>
            </div>
        
          
            <div class="radio">
                <h4>
                    <label>
                        <input type="radio" name="raOption" id="option2"  value="นักเรียนในเขตพื้นที่บริการ"
                        onclick="javascript:chickCheckbox();">
                        นักเรียนในเขตพื้นที่บริการ
                    </label>
                </h4>
            </div>
            <div class="radio">
                <h4>
                    <label>
                        <input type="radio" name="raOption" id="option3" value="นักเรียนเงื่อนไขพิเศษ"
                        onclick="javascript:chickCheckbox();">
                        นักเรียนเงื่อนไขพิเศษ
                    </label>
                </h4>
            </div>
    <div class="form-group form-group-lg">
        
        <div class="col-sm-4">
            <div class="radio" style="float: left;">
                <h4>
                    <label>
                        <input type="radio" name="raOption" id="option4" value="นักเรียนความสามารถพิเศษ" 
                        onclick="javascript:chickCheckbox();">
                        นักเรียนความสามารถพิเศษ
                    </label>
                </h4>
            </div>
        </div>
        <label class="col-sm-2 control-label text-left">
                ด้าน
        </label>
         <div class="col-sm-6 text-left">
                
                <select class="form-control input-lg" name="lbSpecial" id="lbSpecial" disabled="disabled" required="">
                <option value="">กรุณาเลือกความสามารถพิเศษ</option>
                 <option value="1">ดนตรี</option>
                 <option value="2">กีฬา</option>
                 <option value="3">นาฏศิลป์</option>
                 <option value="4">การงานอาชีพและเทคโนโลยี</option>
                 
                </select>
            </div>   
    </div>

    <label>
                อธิบายความสามารถเพิ่มเติม/รางวัลดีเด่นพอสังเขป
    </label>
   
        <textarea class="form-control" name="txtaMore" rows="3" autofocus=""></textarea>
 
<br>
<!--div class="col-sm-offset-2 col-sm-10 text-center"-->
        <div class="form-group">
            <div class="col-sm-offset-8 col-sm-4 text-center">
                <button class="btn btn-info btn-lg btn-block" name="btnNext4" type="submit" 
                value="Login">
                    ถัดไป   <span class="glyphicon glyphicon-random" aria-hidden="true"></span> 
                </button>
            </div>
        </div>
    </form>
</div>
