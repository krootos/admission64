<script src="http://code.jquery.com/jquery-latest.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
        $('#SelectionReset').click(function(){$(".uniqueSelection option").show();});

        $(".uniqueSelection").change(function(){
            var indx = $(".uniqueSelection").index(this);
            var currentVal = $("option:selected",this).val();
            
            $(".uniqueSelection").each(function(index,val){
                if(indx != index){
                    $(this).find("option[value='"+currentVal+"']").hide();
                }
            });
        });
    });
  </script>
<?php 
//include "fn.php";
list($d25,$d26,$d27,$d28,$M25,$M26,$M27,$M28) = selectcomeschool();

//echo $_SESSION['SAS1'][1];
//echo $_SESSION["EDITE"][5]."<br>";
//echo $_SESSION["EDITE"][6]."<br>";
//echo $_SESSION["EDITE"][7]."<br>";
                /*echo "----------------<br>";
                echo   $d27."<br>";
                echo   $d28."<br>";
                echo   $d29."<br>";
                echo   $d30."<br>";
                echo "----------------<br>";
                echo   $M27."<br>";
                echo   $M28."<br>";
                echo   $M29."<br>";
                echo   $M30."<br>"; */

?>
<div class="caption-full">

    <h3 class="text-center">
         <p>
                                    <span class="glyphicon glyphicon-share"></span>
           5. แผนการเรียนและวันยื่นใบสมัคร
        </p>
    </h3>
   <br>  
   
    <?php if(!isset($_GET["edite"])){ ?>
    <form class="form-horizontal" name="form1" method="post" action="index.php">
    <?php }else{ ?>
    <form class="form-horizontal" name="form1" method="post" action="index.php?edite=true">
    <?php }  ?>

        <?php if((isset($_SESSION['SAS1'])) && ($_SESSION['SAS1'][1] == "1")) { // เช็คว่าค่าที่รับมา ม.1 หรือไม่

          if(!isset($_GET["edite"])){ // เช็คว่ามีแก้ไขมาไหม
        ?> 
       <div class="form-group form-group-lg">
            <label class="col-sm-3 control-label" for="formGroupInputLarge">
                ระบุวันที่มายื่นใบสมัคร
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-9">
                <?php if(isset($_GET["edite"])){ ?>
            <select class="form-control input-lg" name="lbCome" required="" autofocus="">
                <?php }else{ ?>
            <select class="form-control input-lg" name="lbCome" required="" autofocus="">
                <?php } ?>
                 <option value="">-- กรุณาเลือก --</option>

                  <?php if($d25 <= 330){ ?>
                 <option value="25"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][44] == "25"){  echo"selected"; }}?>
                 >25 มีนาคม 2561 </option>
                  <?php } ?>

                <?php if($d28 <= 330){ ?>
                 <option value="26"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "26"){ echo"selected";}}?>
                 >26 มีนาคม 2561</option>
                <?php } ?>


                    <?php   
                            

                            if(isset($_SESSION['SAS2'])){ 
                            $checktalent = "นักเรียนความสามารถพิเศษ";
                            if(strcmp($_SESSION['SAS2'][1],$checktalent) != 0){
                    ?>

                <?php if($d27 <= 330){ ?>
                  <option value="27"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "27"){ echo"selected";}}?>
                 >27 มีนาคม 2561</option>
                <?php } ?>

                <?php if($d28 <= 330){ ?>
                 <option value="28"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "28"){ echo"selected";}}?>
                 >28 มีนาคม 2561</option>
                 <?php } ?>
                    
                    <?php   }
                            } ?>
                </select>

            </div>
        </div>
        <?php }} // เช็ค ม.1 ?>


<?php if((isset($_SESSION['SAS1'])) && ($_SESSION['SAS1'][1] == "4")) { 

       if(!isset($_GET["edite"])){ // เช็คว่ามีแก้ไขมาไหม  
// เช็คว่าค่าที่รับมา ม.1 หรือไม่?>
       <div class="form-group form-group-lg">
            <label class="col-sm-3 control-label" for="formGroupInputLarge">
                ระบุวันที่มายื่นใบสมัคร
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-9">
                <?php if(isset($_GET["edite"])){ ?>
            <select class="form-control input-lg" name="lbCome" required="" autofocus="" >
                <?php }else{ ?>
            <select class="form-control input-lg" name="lbCome" required="" autofocus="">
                <?php } ?>
                 <option value="">-- ณ โรงเรียนบางละมุง --</option>

                  <?php if($M25 <= 330){ ?>
                 <option value="25"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][44] == "25"){  echo"selected"; }}?>
                 >25 มีนาคม 2561 </option>
                  <?php } ?>

                <?php if($M26 <= 330){ ?>
                 <option value="26"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "26"){ echo"selected";}}?>
                 >26 มีนาคม 2561</option>
                <?php } ?>

                    <?php   if(isset($_SESSION['SAS2'])){ 
                            $checktalent = "นักเรียนความสามารถพิเศษ";
                            if(strcmp($_SESSION['SAS2'][1],$checktalent) != 0){
                    ?>
                <?php if($M27 <= 330){ ?>
                  <option value="27"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "27"){ echo"selected";}}?>
                 >27 มีนาคม 2561</option>
                <?php } ?>

                <?php if($M28 <= 330){ ?>
                 <option value="28"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "28"){ echo"selected";}}?>
                 >28 มีนาคม 2561</option>
                 <?php } ?>
                    
                <?php }
                      }
                 ?>
                </select>

            </div>
        </div>
        <?php } } // เช็ค ม.4 ?>


      <?php if(isset($_GET["edite"])){ // เช็คว่ามีแก้ไขมาไหม  ?> 
       <div class="form-group form-group-lg">
            <label class="col-sm-3 control-label" for="formGroupInputLarge">
                ระบุวันที่มายื่นใบสมัคร
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-9">
              
            <select class="form-control input-lg" name="lbCome" required="" autofocus="">
         
           
                 <option value="">-- ณ โรงเรียนบางละมุง --</option>

                 
                 <option value="25"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][44] == "25"){  echo"selected"; }}?>
                 >25 มีนาคม 2561</option>
            

               
                 <option value="26"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "26"){ echo"selected";}}?>
                 >26 มีนาคม 2561</option>
              
                
                  <option value="27"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "27"){ echo"selected";}}?>
                 >27 มีนาคม 2561</option>
               

                
                 <option value="28"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "28"){ echo"selected";}}?>
                 >28 มีนาคม 2561</option>
                
                </select>

            </div>
        </div>
        <?php } // เโชว์แก้ไข?>


<?php 
           if(isset($_SESSION['SAS1'])){ 
                    $checkm1 = "1";
                    if(strcmp($_SESSION['SAS1'][1], $checkm1) == 0){ ?>

    <div class="form-group form-group-lg">
            <label class=" col-sm-4 control-label" style="color: #23527c;"> มัธยมศึกษาปีที่ 1  </label>
            <div class="col-sm-8"></div>
            
    </div>
            <?php } else{ ?>

            <div class="form-group form-group-lg">
            <label class=" col-sm-4 control-label" style="color: #23527c;"> มัธยมศึกษาปีที่ 4  </label>
            <div class="col-sm-8"></div>   
    </div> 
      <?php            }
          }else{ 
                $checkeditemmm1 = "1";
                        if(strcmp($_SESSION["EDITE"][1], $checkeditemmm1) == 0){ ?>
                    
            <div class="form-group form-group-lg">
            <label class=" col-sm-4 control-label" style="color: #23527c;"> มัธยมศึกษาปีที่ 1  </label>
            <div class="col-sm-8"></div>
             </div>

     <?php              }else{  ?>
             <div class="form-group form-group-lg">
            <label class=" col-sm-4 control-label" style="color: #23527c;"> มัธยมศึกษาปีที่ 4  </label>
            <div class="col-sm-8"></div>
             </div>

    <?php                   }
             }
      ?>


        <div class="form-group form-group-lg">
            <label class="col-sm-4 control-label" for="formGroupInputLarge">
                อันดับที่ 1 :
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-8">
                
                <select class="form-control input-lg uniqueSelection" name="lbPlan1" required="" autofocus="">
                 <option value="">-- กรุณาเลือก --</option>
                 <option value="วิทยาศาสตร์ - คณิตศาสตร์" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "วิทยาศาสตร์ - คณิตศาสตร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์ - คณิตศาสตร์</option>
                 <option value="คณิตศาสตร์ - ภาษาฯ"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "คณิตศาสตร์ - ภาษาฯ"){  echo"selected"; }}?>
                 >คณิตศาสตร์ - ภาษาฯ</option>
<?php 
                    if(isset($_SESSION['SAS1'])){ 
                    $checkm1 = "1";
                    if(strcmp($_SESSION['SAS1'][1], $checkm1) == 0){ ?>
                 <option value="ทั่วไป"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "ทั่วไป"){  echo"selected"; }}?>
                 >ทั่วไป</option>
                    <?php }else{ ?>

                <option value="ภาษาอังกฤษ (IEP)"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "ภาษาอังกฤษ (IEP)"){  echo"selected"; }}?>
                 >ภาษาอังกฤษ (IEP)</option>
                 <option value="ภาษาจีน(ICP) - ญี่ปุ่น(IJP)"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "ภาษาจีน(ICP) - ญี่ปุ่น(IJP)"){  echo"selected"; }}?>
                 >ภาษาจีน(ICP) - ญี่ปุ่น(IJP)</option>


                   <?php }

                          }else {  // ถ้ามีตัวแปรแก้ไข

                            if (isset($_SESSION["EDITE"])){ 
                                
                                         $checkeditingm1 = "1";
                                         if(strcmp($_SESSION["EDITE"][1], $checkeditingm1) == 0){    ?>
                                          <option value="ทั่วไป"
                                         <?php if(isset($_SESSION["EDITE"])){ 
                                                if($_SESSION["EDITE"][5] == "ทั่วไป"){  echo"selected"; }}?>
                                                >ทั่วไป</option>
                                        <?php } else{   ?>

                                                <option value="ภาษาอังกฤษ (IEP)"
                                                <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "ภาษาอังกฤษ (IEP)"){  echo"selected"; }}?>
                                                >ภาษาอังกฤษ (IEP)</option>
                                                 <option value="ภาษาจีน(ICP) - ญี่ปุ่น(IJP)"
                                                <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "ภาษาจีน(ICP) - ญี่ปุ่น(IJP)"){  echo"selected"; }}?>
                                                >ภาษาจีน(ICP) - ญี่ปุ่น(IJP)</option>
                                              

                                              <?php  } ?>  
                           <?php } ?>


            <?php } ?>
                </select>
            </div>
        </div>

         <div class="form-group form-group-lg">
            <label class="col-sm-4 control-label" for="formGroupInputLarge" style="color: #666464;">
                อันดับที่ 2 :
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-8">
                
                <select class="form-control input-lg uniqueSelection" name="lbPlan2" required="">
                 <option value="">-- กรุณาเลือก --</option>
                 <option value="วิทยาศาสตร์ - คณิตศาสตร์"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "วิทยาศาสตร์ - คณิตศาสตร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์ - คณิตศาสตร์</option>
                 <option value="คณิตศาสตร์ - ภาษาฯ"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "คณิตศาสตร์ - ภาษาฯ"){  echo"selected"; }}?>
                 >คณิตศาสตร์ - ภาษาฯ</option>

                <?php 
                    if(isset($_SESSION['SAS1'])){ 
                    $checkm1 = "1";
                    if(strcmp($_SESSION['SAS1'][1], $checkm1) == 0){ ?>
                 <option value="ทั่วไป"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "ทั่วไป"){  echo"selected"; }}?>
                 >ทั่วไป</option>
 <?php }else{ ?>

                    <option value="ภาษาอังกฤษ (IEP)"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "ภาษาอังกฤษ (IEP)"){  echo"selected"; }}?>
                 >ภาษาอังกฤษ (IEP)</option>
               
                 <option value="ภาษาจีน(ICP) - ญี่ปุ่น(IJP)"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "ภาษาจีน(ICP) - ญี่ปุ่น(IJP)"){  echo"selected"; }}?>
                 >ภาษาจีน(ICP) - ญี่ปุ่น(IJP)</option>

                   <?php }

                          }else {  // ถ้ามีตัวแปรแก้ไข

                            if(isset($_SESSION["EDITE"])){ 
                                
                                         $checkeditingm1 = "1";
                                         if(strcmp($_SESSION["EDITE"][1], $checkeditingm1) == 0){    ?>
                                          <option value="ทั่วไป"
                                         <?php if(isset($_SESSION["EDITE"])){ 
                                                if($_SESSION["EDITE"][6] == "ทั่วไป"){  echo"selected"; }}?>
                                                >ทั่วไป</option>
                                        <?php } else{   ?>

                                                <option value="ภาษาอังกฤษ (IEP)"
                                                <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "ภาษาอังกฤษ (IEP)"){  echo"selected"; }}?>
                                                >ภาษาอังกฤษ (IEP)</option>
                                                 <option value="ภาษาจีน(ICP) - ญี่ปุ่น(IJP)"
                                                <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "ภาษาจีน(ICP) - ญี่ปุ่น(IJP)"){  echo"selected"; }}?>
                                                >ภาษาจีน(ICP) - ญี่ปุ่น(IJP)</option>
                                              

                                              <?php  } ?>  
                           <?php } ?>


            <?php } ?>


                </select>
            </div>
        </div>

<?php   if(!isset($_GET['edite'])){ 
           if(isset($_SESSION['SAS1'])){ 
                    $checkpageeeee5 = "4";
                    if(strcmp($_SESSION['SAS1'][1], $checkpageeeee5) == 0){ ?>

         <div class="form-group form-group-lg">
            <label class="col-sm-4 control-label" for="formGroupInputLarge" style="color: #666464;">
                อันดับที่ 3 :
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-8">
                
                <select class="form-control input-lg uniqueSelection" name="lbPlan3" required="">
                 <option value="">-- กรุณาเลือก --</option>
                 <option value="วิทยาศาสตร์ - คณิตศาสตร์"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "วิทยาศาสตร์ - คณิตศาสตร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์ - คณิตศาสตร์</option>
                 <option value="คณิตศาสตร์ - ภาษาฯ"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "คณิตศาสตร์ - ภาษาฯ"){  echo"selected"; }}?>
                 >คณิตศาสตร์ - ภาษาฯ</option>
                 <option value="ภาษาอังกฤษ (IEP)"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "ภาษาอังกฤษ (IEP)"){  echo"selected"; }}?>
                 >ภาษาอังกฤษ (IEP)</option>
                 <option value="ภาษาจีน(ICP) - ญี่ปุ่น(IJP)"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "ภาษาจีน(ICP) - ญี่ปุ่น(IJP)"){  echo"selected"; }}?>
                 >ภาษาจีน(ICP) - ญี่ปุ่น(IJP)</option>
                
                </select>
            </div>
        </div>

        <?php } } } ?>

<?php 
           if(isset($_SESSION["EDITE"])){ 
                    $checkpageff5 = "4";
                    if(strcmp($_SESSION["EDITE"][1], $checkpageff5) == 0){ ?>
            <div class="form-group form-group-lg">
            <label class="col-sm-4 control-label" for="formGroupInputLarge" style="color: #666464;">
                อันดับที่ 3 :
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-8">            
                 <select class="form-control input-lg uniqueSelection" name="lbPlan3" required="">
                 <option value="">-- กรุณาเลือก --</option>
                 <option value="วิทยาศาสตร์ - คณิตศาสตร์"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "วิทยาศาสตร์ - คณิตศาสตร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์ - คณิตศาสตร์
                 </option>
                 <option value="คณิตศาสตร์ - ภาษาฯ"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "คณิตศาสตร์ - ภาษาฯ"){  echo"selected"; }}?>
                 >คณิตศาสตร์ - ภาษาฯ
                 </option>
                 <option value="ภาษาอังกฤษ (IEP)"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "ภาษาอังกฤษ (IEP)"){  echo"selected"; }}?>
                 >ภาษาอังกฤษ (IEP)
                 </option>
                 <option value="ภาษาจีน(ICP) - ญี่ปุ่น(IJP)"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "ภาษาจีน(ICP) - ญี่ปุ่น(IJP)"){  echo"selected"; }}?>
                 >ภาษาจีน(ICP) - ญี่ปุ่น(IJP)</option>
                
                </select>
            </div>
        </div>
        <?php }} ?>

        <?php if(!isset($_GET["edite"])){ ?>
        <div class="form-group">
            <div class="col-sm-offset-8 col-sm-4 text-center">
                <button class="btn btn-info btn-lg btn-block" name="btnNext5" 
                type="submit" value="Login">
                    ถัดไป   <span class="glyphicon glyphicon-random" aria-hidden="true"></span> 
                </button>
            </div>
        </div>
        <?php }else{ ?>
        <div class="form-group">
            <div class="col-sm-offset-8 col-sm-4 text-center">
                <button class="btn btn-success btn-lg btn-block" name="btnEdite5" 
                type="submit" value="Login" 
                onclick="if(confirm('ยืนยันการแก้ไขส่วนที่5')) return true; else return false;"
                >
                    แก้ไขส่วนที่ 5   <span class="glyphicon glyphicon-check" aria-hidden="true"></span> 
                </button>
            </div>
        </div>
        <?php } ?>
    </form>
</div>
