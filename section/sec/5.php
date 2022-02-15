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


list($d21,$d22,$d23,$d24,$d25,$M21,$M22,$M23,$M24,$M25) = selectcomeschool2562();

?>
<div class="caption-full">
    <?php //if($_SESSION['SAS2'][1]){}
        //$_SESSION['SAS2'][1]
  ?>
    <h3 class="text-center">
         <p>
                                    <span class="glyphicon glyphicon-share"></span>
           5. แผนการเรียน
        </p>
    </h3>
   <br>  
   
    <?php 
        if(!isset($_GET["edite"])){ ?>

            <form class="form-horizontal" name="form1" method="post" action="index.php">

            <?php 
        }else{ ?>
            <form class="form-horizontal" name="form1" method="post" action="index.php?edite=true">
            <?php 
        }  
        ?>
                <?php             
                if((isset($_SESSION['SAS1'])) && ($_SESSION['SAS1'][1] == "1")) { // เช็คว่าค่าที่รับมา ม.1 หรือไม่

                    if(!isset($_GET["edite"])){ // เช็คว่ามีแก้ไขมาไหม ?> 

                        <div class="form-group form-group-lg" >
                        </div>
                        <div class="alert alert-danger text-center" role="alert">          
                            <p>
                                <h5>
                                <span class="glyphicon glyphicon-indent-right text-center" aria-hidden="true"></span> 
                                    นักเรียนชั้นมัธยมศึกษาปีที่ 1 ไม่ต้องเลือกแผนการเรียน 
                                    <p></br>
                                    คลิกปุ่ม => <B>ถัดไป</B>
                                    </p>
                                </h5>
                            </p>         
                        </div>

                        <div class="form-group form-group-lg" >
                        </div>

                        <div class="form-group form-group-lg" >
                            <!-- <label class="col-sm-3 control-label" for="formGroupInputLarge">
                                ระบุวันที่มายื่นใบสมัคร
                            </label> -->
                            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->

                            
                            

                        <div class="col-sm-9" style="display:none">
                            <?php 
                            if(isset($_GET["edite"])){ ?>
                                    <select class="form-control input-lg" name="lbCome" required="" autofocus="">
                                <?php 
                            }
                            else{ ?>
                                <select class="form-control input-lg" name="lbCome" required="" autofocus="">
                                <?php 
                            } 
                            ?>
                                <option value="3 มิถุนายน 2563">3 มิถุนายน 2563</option>

                                <?php 
                                if($d21 <= 200){ ?>
                                    <option value="21"
                                        <?php 
                                        if(isset($_SESSION["EDITE"])){
                                            if($_SESSION["EDITE"][44] == "21"){  
                                                 echo"selected"; 
                                            }
                                        }
                                        ?>
                                    >3 มิถุนายน 2563                                     
                                    </option>
                                    <?php 
                                } 
                                ?>

                            <?php if($d22 <= 200){ ?>
                            <option value="22"
                            <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "22"){ echo"selected";}}?>
                            >4 มิถุนายน 2563</option>
                            <?php } ?>


                                <?php   
                                        

                                        if(isset($_SESSION['SAS2'])){ 
                                        $checktalent = "นักเรียนความสามารถพิเศษ";
                                        if(strcmp($_SESSION['SAS2'][1],$checktalent) != 0){
                                ?>

                            <?php if($d23 <= 200){ ?>
                            <option value="23"
                            <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "23"){ echo"selected";}}?>
                            >5 มิถุนายน 2563</option>
                            <?php } ?>

                            <?php if($d24 <= 200){ ?>
                            <option value="24"
                            <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "24"){ echo"selected";}}?>
                            >6 มิถุนายน 2563</option>
                            <?php } ?>

                            <?php if($d25 <= 200){ ?>
                            <option value="25"
                            <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "25"){ echo"selected";}}?>
                            >7 มิถุนายน 2563</option>
                            <?php } ?>
                                
                                <?php   }
                                        } ?>
                            </select>

                            </div>
                        </div>
                        <?php 
                    } 

                                       
                } // เช็ค ม.1 ?>



<?php if((isset($_SESSION['SAS1'])) && ($_SESSION['SAS1'][1] == "4")) { 

       if(!isset($_GET["edite"])){ // เช็คว่ามีแก้ไขมาไหม  
// เช็คว่าค่าที่รับมา ม.1 หรือไม่?>
       <div class="form-group form-group-lg">
            <!-- <label class="col-sm-3 control-label" for="formGroupInputLarge">
                ระบุวันที่มายื่นใบสมัคร
            </label> -->
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-9" style="display:none;">
                <?php if(isset($_GET["edite"])){ ?>
            <select class="form-control input-lg" name="lbCome" required="" autofocus="" >
                <?php }else{ ?>
            <select class="form-control input-lg" name="lbCome" required="" autofocus="">
                <?php } ?>
                 <option value="3 มิถุนายน 2563">3 มิถุนายน 2563</option>

                  <?php if($M21 <= 200){ ?>
                 <option value="21"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][44] == "21"){  echo"selected"; }}?>
                 >3 มิถุนายน 2563 </option>
                  <?php } ?>

                <?php if($M22 <= 200){ ?>
                 <option value="22"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "22"){ echo"selected";}}?>
                 >4 มิถุนายน 2563</option>
                <?php } ?>

                    <?php   if(isset($_SESSION['SAS2'])){ 
                            $checktalent = "นักเรียนความสามารถพิเศษ";
                            if(strcmp($_SESSION['SAS2'][1],$checktalent) != 0){
                    ?>
                <?php if($M23 <= 200){ ?>
                  <option value="23"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "23"){ echo"selected";}}?>
                 >5 มิถุนายน 2563</option>
                <?php } ?>

                <?php if($M24 <= 200){ ?>
                 <option value="24"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "24"){ echo"selected";}}?>
                 >6 มิถุนายน 2563</option>
                 <?php } ?>

                 <?php if($M25 <= 500){ ?>
                 <option value="25"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "25"){ echo"selected";}}?>
                 >7 มิถุนายน 2563</option>
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
            <!-- <label class="col-sm-3 control-label" for="formGroupInputLarge">
                ระบุวันที่มายื่นใบสมัคร แก้ไขตรงนี้นะ                
            </label> -->

            
              
                <div class="alert alert-danger text-center" role="alert" 
                    <?php if (isset($_SESSION["EDITE"]) && $_SESSION["EDITE"][1] == "4") {echo "style='display:none'";}?>
                >          
                    <p>
                        <h5>
                        <span class="glyphicon glyphicon-indent-right text-center" aria-hidden="true"></span> 
                            นักเรียนชั้นมัธยมศึกษาปีที่ 1 ไม่ต้องเลือกแผนการเรียน 
                            <p>
                        </h5>
                    </p>         
                </div>

           

            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-9" style="display:none;">
              
                <select class="form-control input-lg" name="lbCome" required="" autofocus="">
            
            
                    <option value="3 มิถุนายน 2563">3 มิถุนายน 2563</option>

                    
                    <option value="21"
                    <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][44] == "21"){  echo"selected"; }}?>
                    >3 มิถุนายน 2563</option>
                

                
                    <option value="22"
                    <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "22"){ echo"selected";}}?>
                    >4 มิถุนายน 2563</option>
                
                    
                    <option value="23"
                    <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "23"){ echo"selected";}}?>
                    >5 มิถุนายน 2563</option>
                

                    
                    <option value="24"
                    <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "24"){ echo"selected";}}?>
                    >6 มิถุนายน 2563</option>

                    <option value="25"
                    <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "25"){ echo"selected";}}?>
                    >7 มิถุนายน 2563</option>
                    
                </select>

            </div>
        </div>
        <?php } // โชว์แก้ไข?>


<?php 
           if(isset($_SESSION['SAS1'])){ 
                    $checkm1 = "1";
                    if(strcmp($_SESSION['SAS1'][1], $checkm1) == 0){ ?>

    <!--div class="form-group form-group-lg">
            <label class=" col-sm-4 control-label" style="color: #23527c;"> มัธยมศึกษาปีที่ 1  </label>
            <div class="col-sm-8"></div>
            
    </div-->
            <?php } else{ ?>

            <div >           
            
                <label class=" col-sm-10 control-label" style="color: #23527c;">  
                    <span style="color: #b51515;">*หมายเหตุ แผนการเรียนวิทยาศาสตร์-คณิตศาสตร์ เกรดเฉลี่ย 2.50 ขึ้นไป</span>
                </label> 
                      
            </div>     
            <div class="form-group"></div>        


            <div class="form-group">
                <div class="col-sm-offset-8 col-sm-4 text-center">
                    <button style="background-color:#fa9d00" class="btn btn-info btn-lg btn-block" name="btnNext5" 
                    type="button" value = "Refresh" onclick="history.go(0)">
                        เลือกแผนการเรียนใหม่   <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> 
                    </button>
                </div>
            </div>

            


      <?php            }
          }else{ 
                $checkeditemmm1 = "1";
                        if(strcmp($_SESSION["EDITE"][1], $checkeditemmm1) == 0){ ?>
                    
            <!--div class="form-group form-group-lg">
            <label class=" col-sm-4 control-label" style="color: #23527c;"> มัธยมศึกษาปีที่ 1  </label>
            <div class="col-sm-8"></div>
             </div-->

     <?php              }else{  ?>
        <div >           
            
                <label class=" col-sm-10 control-label" style="color: #23527c;">  
                    <span style="color: #b51515;">*หมายเหตุ แผนการเรียนวิทยาศาสตร์-คณิตศาสตร์ เกรดเฉลี่ย 2.50 ขึ้นไป</span>
                </label> 
                      
            </div>     
            <div class="form-group"></div>


        <div class="form-group">
            <div class="col-sm-offset-8 col-sm-4 text-center">
                <button style="background-color:#fa9d00" class="btn btn-info btn-lg btn-block" name="btnNext5" 
                type="button" value = "Refresh" onclick="history.go(0)">
                    เลือกแผนการเรียนใหม่   <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> 
                </button>
            </div>
        </div>

    <?php                   }
             }
      ?>

            <?php 
                if((isset($_SESSION['SAS1'])) && ($_SESSION['SAS1'][1] == "4")) { // เช็คว่าค่าที่รับมา ม.4 หรือไม่

                 ?>
        <div class="form-group form-group-lg">
            
            

            <label class="col-sm-4 control-label" for="formGroupInputLarge">
                อันดับที่ 1 :
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-8">


               

                <select class="form-control input-lg uniqueSelection" name="lbPlan1"  required=""  autofocus="">
                 <option value="">-- กรุณาเลือก --</option>
                 <option value="วิทยาศาสตร์-คณิตศาสตร์" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "วิทยาศาสตร์-คณิตศาสตร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คณิตศาสตร์</option>
                 <option value="วิทยาศาสตร์-คอมพิวเตอร์"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "วิทยาศาสตร์-คอมพิวเตอร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คอมพิวเตอร์</option>
                 <option value="อังกฤษ-จีน"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-จีน"){  echo"selected"; }}?>
                 >อังกฤษ-จีน</option>
                 <option value="อังกฤษ-ญี่ปุ่น"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-ญี่ปุ่น"){  echo"selected"; }}?>
                 >อังกฤษ-ญี่ปุ่น</option>
                 <option value="อังกฤษ-เวียดนาม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-เวียดนาม"){  echo"selected"; }}?>
                 >อังกฤษ-เวียดนาม</option>
                 <option value="อังกฤษ-เกาหลี"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-เกาหลี"){  echo"selected"; }}?>
                 >อังกฤษ-เกาหลี</option>
                 <option value="ไทย-สังคม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "ไทย-สังคม"){  echo"selected"; }}?>
                 >ไทย-สังคม</option>

<?php 
                    if(isset($_SESSION['SAS1'])){ 
                    $checkm1 = "1";
                    if(strcmp($_SESSION['SAS1'][1], $checkm1) == 0){ ?>
                 <!--option value="ทั่วไป"
<?php //if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "ทั่วไป"){  echo"selected"; }}?>
                 >ทั่วไป</option-->
                    <?php }else{ ?>

               


                   <?php }

                          }else {  // ถ้ามีตัวแปรแก้ไข

                            if (isset($_SESSION["EDITE"])){ 
                                
                                         $checkeditingm1 = "1";
                                         if(strcmp($_SESSION["EDITE"][1], $checkeditingm1) == 0){    ?>
                                          <!--option value="ทั่วไป"
                                         <?php //if(isset($_SESSION["EDITE"])){ 
                                                //if($_SESSION["EDITE"][5] == "ทั่วไป"){  echo"selected"; }}?>
                                                >ทั่วไป</option-->
                                        <?php } else{   ?>

                                            <option value="วิทยาศาสตร์-คณิตศาสตร์" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "วิทยาศาสตร์-คณิตศาสตร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คณิตศาสตร์</option>
                 <option value="วิทยาศาสตร์-คอมพิวเตอร์"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "วิทยาศาสตร์-คอมพิวเตอร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คอมพิวเตอร์</option>
                 <option value="อังกฤษ-จีน"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-จีน"){  echo"selected"; }}?>
                 >อังกฤษ-จีน</option>
                 <option value="อังกฤษ-ญี่ปุ่น"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-ญี่ปุ่น"){  echo"selected"; }}?>
                 >อังกฤษ-ญี่ปุ่น</option>
                 <option value="อังกฤษ-เวียดนาม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-เวียดนาม"){  echo"selected"; }}?>
                 >อังกฤษ-เวียดนาม</option>
                 <option value="อังกฤษ-เกาหลี"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-เกาหลี"){  echo"selected"; }}?>
                 >อังกฤษ-เกาหลี</option>
                 <option value="ไทย-สังคม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "ไทย-สังคม"){  echo"selected"; }}?>
                 >ไทย-สังคม</option>


                                              <?php  } ?>  
                           <?php } ?>


            <?php } ?>
                </select>

          

            </div>
        </div>
        <?php } //  if((isset($_SESSION['SAS1'])) && ($_SESSION['SAS1'][1] == "4")) {?>  


                 
            <?php    if((isset($_SESSION['SAS1'])) && ($_SESSION['SAS1'][1] == "4")) { // เช็คว่าค่าที่รับมา ม.4 หรือไม่

?>

         <div class="form-group form-group-lg">
            <label class="col-sm-4 control-label" for="formGroupInputLarge" style="color: #666464;">
                อันดับที่ 2 :
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-8">
       

                <select class="form-control input-lg uniqueSelection" name="lbPlan2" required="">
                 <option value="">-- กรุณาเลือก --</option>
                 <option value="วิทยาศาสตร์-คณิตศาสตร์" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "วิทยาศาสตร์-คณิตศาสตร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คณิตศาสตร์</option>
                 <option value="วิทยาศาสตร์-คอมพิวเตอร์"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "วิทยาศาสตร์-คอมพิวเตอร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คอมพิวเตอร์</option>
                 <option value="อังกฤษ-จีน"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "อังกฤษ-จีน"){  echo"selected"; }}?>
                 >อังกฤษ-จีน</option>
                 <option value="อังกฤษ-ญี่ปุ่น"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "อังกฤษ-ญี่ปุ่น"){  echo"selected"; }}?>
                 >อังกฤษ-ญี่ปุ่น</option>
                 <option value="อังกฤษ-เวียดนาม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "อังกฤษ-เวียดนาม"){  echo"selected"; }}?>
                 >อังกฤษ-เวียดนาม</option>
                 <option value="อังกฤษ-เกาหลี"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "อังกฤษ-เกาหลี"){  echo"selected"; }}?>
                 >อังกฤษ-เกาหลี</option>
                 <option value="ไทย-สังคม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "ไทย-สังคม"){  echo"selected"; }}?>
                 >ไทย-สังคม</option>

                <?php 
                    if(isset($_SESSION['SAS1'])){ 
                    $checkm1 = "1";
                    if(strcmp($_SESSION['SAS1'][1], $checkm1) == 0){ ?>
                 <!--option value="ทั่วไป"
<?php //if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "ทั่วไป"){  echo"selected"; }}?>
                 >ทั่วไป</option-->
 <?php }else{ ?>

                   

                   <?php }

                          }else {  // ถ้ามีตัวแปรแก้ไข

                            if(isset($_SESSION["EDITE"])){ 
                                
                                         $checkeditingm1 = "1";
                                         if(strcmp($_SESSION["EDITE"][1], $checkeditingm1) == 0){    ?>
                                          <!--option value="ทั่วไป"
                                         <?php //if(isset($_SESSION["EDITE"])){ 
                                                //if($_SESSION["EDITE"][6] == "ทั่วไป"){  echo"selected"; }}?>
                                                >ทั่วไป</option-->
                                        <?php } else{   ?>

                                            <option value="วิทยาศาสตร์-คณิตศาสตร์" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "วิทยาศาสตร์-คณิตศาสตร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คณิตศาสตร์</option>
                 <option value="วิทยาศาสตร์-คอมพิวเตอร์"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "วิทยาศาสตร์-คอมพิวเตอร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คอมพิวเตอร์</option>
                 <option value="อังกฤษ-จีน"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "อังกฤษ-จีน"){  echo"selected"; }}?>
                 >อังกฤษ-จีน</option>
                 <option value="อังกฤษ-ญี่ปุ่น"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "อังกฤษ-ญี่ปุ่น"){  echo"selected"; }}?>
                 >อังกฤษ-ญี่ปุ่น</option>
                 <option value="อังกฤษ-เวียดนาม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "อังกฤษ-เวียดนาม"){  echo"selected"; }}?>
                 >อังกฤษ-เวียดนาม</option>
                 <option value="อังกฤษ-เกาหลี"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "อังกฤษ-เกาหลี"){  echo"selected"; }}?>
                 >อังกฤษ-เกาหลี</option>
                 <option value="ไทย-สังคม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "ไทย-สังคม"){  echo"selected"; }}?>
                 >ไทย-สังคม</option>
                                              

                                              <?php  } ?>  
                           <?php } ?>


            <?php } ?>


                </select>

                  

            </div>
        </div>


        <?php } //  if((isset($_SESSION['SAS1'])) && ($_SESSION['SAS1'][1] == "4")) {?>


 








            <?php    if((isset($_SESSION['SAS1'])) && ($_SESSION['SAS1'][1] == "4")) { // เช็คว่าค่าที่รับมา ม.4 หรือไม่

?>

         <div class="form-group form-group-lg">
            <label class="col-sm-4 control-label" for="formGroupInputLarge" style="color: #666464;">
                อันดับที่ 3 :
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-8">
       

                <select class="form-control input-lg uniqueSelection" name="lbPlan3" required="">
                 <option value="">-- กรุณาเลือก --</option>
                 <option value="วิทยาศาสตร์-คณิตศาสตร์" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "วิทยาศาสตร์-คณิตศาสตร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คณิตศาสตร์</option>
                 <option value="วิทยาศาสตร์-คอมพิวเตอร์"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "วิทยาศาสตร์-คอมพิวเตอร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คอมพิวเตอร์</option>
                 <option value="อังกฤษ-จีน"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "อังกฤษ-จีน"){  echo"selected"; }}?>
                 >อังกฤษ-จีน</option>
                 <option value="อังกฤษ-ญี่ปุ่น"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "อังกฤษ-ญี่ปุ่น"){  echo"selected"; }}?>
                 >อังกฤษ-ญี่ปุ่น</option>
                 <option value="อังกฤษ-เวียดนาม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "อังกฤษ-เวียดนาม"){  echo"selected"; }}?>
                 >อังกฤษ-เวียดนาม</option>
                 <option value="อังกฤษ-เกาหลี"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "อังกฤษ-เกาหลี"){  echo"selected"; }}?>
                 >อังกฤษ-เกาหลี</option>
                 <option value="ไทย-สังคม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "ไทย-สังคม"){  echo"selected"; }}?>
                 >ไทย-สังคม</option>

                <?php 
                    if(isset($_SESSION['SAS1'])){ 
                    $checkm1 = "1";
                    if(strcmp($_SESSION['SAS1'][1], $checkm1) == 0){ ?>
                 <!--option value="ทั่วไป"
<?php //if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "ทั่วไป"){  echo"selected"; }}?>
                 >ทั่วไป</option-->
 <?php }else{ ?>

                   

                   <?php }

                          }else {  // ถ้ามีตัวแปรแก้ไข

                            if(isset($_SESSION["EDITE"])){ 
                                
                                         $checkeditingm1 = "1";
                                         if(strcmp($_SESSION["EDITE"][1], $checkeditingm1) == 0){    ?>
                                          <!--option value="ทั่วไป"
                                         <?php //if(isset($_SESSION["EDITE"])){ 
                                                //if($_SESSION["EDITE"][6] == "ทั่วไป"){  echo"selected"; }}?>
                                                >ทั่วไป</option-->
                                        <?php } else{   ?>

                                            <option value="วิทยาศาสตร์-คณิตศาสตร์" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "วิทยาศาสตร์-คณิตศาสตร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คณิตศาสตร์</option>
                 <option value="วิทยาศาสตร์-คอมพิวเตอร์"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "วิทยาศาสตร์-คอมพิวเตอร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คอมพิวเตอร์</option>
                 <option value="อังกฤษ-จีน"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "อังกฤษ-จีน"){  echo"selected"; }}?>
                 >อังกฤษ-จีน</option>
                 <option value="อังกฤษ-ญี่ปุ่น"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "อังกฤษ-ญี่ปุ่น"){  echo"selected"; }}?>
                 >อังกฤษ-ญี่ปุ่น</option>
                 <option value="อังกฤษ-เวียดนาม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "อังกฤษ-เวียดนาม"){  echo"selected"; }}?>
                 >อังกฤษ-เวียดนาม</option>
                 <option value="อังกฤษ-เกาหลี"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "อังกฤษ-เกาหลี"){  echo"selected"; }}?>
                 >อังกฤษ-เกาหลี</option>
                 <option value="ไทย-สังคม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "ไทย-สังคม"){  echo"selected"; }}?>
                 >ไทย-สังคม</option>
                                              

                                              <?php  } ?>  
                           <?php } ?>


            <?php } ?>


                </select>

                  

            </div>
        </div>


        <?php } //  if((isset($_SESSION['SAS1'])) && ($_SESSION['SAS1'][1] == "4")) {?>







            <?php    if((isset($_SESSION['SAS1'])) && ($_SESSION['SAS1'][1] == "4")) { // เช็คว่าค่าที่รับมา ม.4 หรือไม่

?>

         <div class="form-group form-group-lg">
            <!-- <label class="col-sm-4 control-label" for="formGroupInputLarge" style="color: #666464;" >
                อันดับที่ 4 :
            </label> -->
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-8" style="display:none;>
       

                <select class="form-control input-lg uniqueSelection" name="lbPlan4" required="">
                 <option value="อังกฤษ-เวียดนาม">อังกฤษ-เวียดนาม</option>
                 <option value="วิทยาศาสตร์-คณิตศาสตร์" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][57] == "วิทยาศาสตร์-คณิตศาสตร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คณิตศาสตร์</option>
                 <option value="วิทยาศาสตร์-คอมพิวเตอร์"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][57] == "วิทยาศาสตร์-คอมพิวเตอร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คอมพิวเตอร์</option>
                 <option value="อังกฤษ-จีน"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][57] == "อังกฤษ-จีน"){  echo"selected"; }}?>
                 >อังกฤษ-จีน</option>
                 <option value="อังกฤษ-ญี่ปุ่น"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][57] == "อังกฤษ-ญี่ปุ่น"){  echo"selected"; }}?>
                 >อังกฤษ-ญี่ปุ่น</option>
                 <option value="อังกฤษ-เวียดนาม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][57] == "อังกฤษ-เวียดนาม"){  echo"selected"; }}?>
                 >อังกฤษ-เวียดนาม</option>
                 <option value="อังกฤษ-เกาหลี"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][57] == "อังกฤษ-เวียดนาม"){  echo"selected"; }}?>
                 >อังกฤษ-เกาหลี</option>
                 <option value="ไทย-สังคม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][57] == "ไทย-สังคม"){  echo"selected"; }}?>
                 >ไทย-สังคม</option>

                <?php 
                    if(isset($_SESSION['SAS1'])){ 
                    $checkm1 = "1";
                    if(strcmp($_SESSION['SAS1'][1], $checkm1) == 0){ ?>
                 <!--option value="ทั่วไป"
<?php //if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "ทั่วไป"){  echo"selected"; }}?>
                 >ทั่วไป</option-->
 <?php }else{ ?>

                   

                   <?php }

                          }else {  // ถ้ามีตัวแปรแก้ไข

                            if(isset($_SESSION["EDITE"])){ 
                                
                                         $checkeditingm1 = "1";
                                         if(strcmp($_SESSION["EDITE"][1], $checkeditingm1) == 0){    ?>
                                          <!--option value="ทั่วไป"
                                         <?php //if(isset($_SESSION["EDITE"])){ 
                                                //if($_SESSION["EDITE"][6] == "ทั่วไป"){  echo"selected"; }}?>
                                                >ทั่วไป</option-->
                                        <?php } else{   ?>

                                            <option value="วิทยาศาสตร์-คณิตศาสตร์" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][57] == "วิทยาศาสตร์-คณิตศาสตร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คณิตศาสตร์</option>
                 <option value="วิทยาศาสตร์-คอมพิวเตอร์"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][57] == "วิทยาศาสตร์-คอมพิวเตอร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คอมพิวเตอร์</option>
                 <option value="อังกฤษ-จีน"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][57] == "อังกฤษ-จีน"){  echo"selected"; }}?>
                 >อังกฤษ-จีน</option>
                 <option value="อังกฤษ-ญี่ปุ่น"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][57] == "อังกฤษ-ญี่ปุ่น"){  echo"selected"; }}?>
                 >อังกฤษ-ญี่ปุ่น</option>
                 <option value="อังกฤษ-เวียดนาม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][57] == "อังกฤษ-เวียดนาม"){  echo"selected"; }}?>
                 >อังกฤษ-เวียดนาม</option>
                 <option value="อังกฤษ-เกาหลี"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][57] == "อังกฤษ-เกาหลี"){  echo"selected"; }}?>
                 >อังกฤษ-เวียดนาม</option>
                 <option value="ไทย-สังคม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][57] == "ไทย-สังคม"){  echo"selected"; }}?>
                 >ไทย-สังคม</option>
                                              

                                              <?php  } ?>  
                           <?php } ?>


            <?php } ?>


                </select>

                  

            </div>
        </div>


        <?php } //  if((isset($_SESSION['SAS1'])) && ($_SESSION['SAS1'][1] == "4")) {?>








            <?php    if((isset($_SESSION['SAS1'])) && ($_SESSION['SAS1'][1] == "4")) { // เช็คว่าค่าที่รับมา ม.4 หรือไม่

?>

         <div class="form-group form-group-lg" >
            <!-- <label class="col-sm-4 control-label" for="formGroupInputLarge" style="color: #666464;">
                อันดับที่ 5 :
            </label> -->
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-8" style="display:none;>
       

                <select class="form-control input-lg uniqueSelection" name="lbPlan5" required="">
                 <option value="ภาษาจีน">ภาษาจีน</option>
                 <option value="วิทย์-คณิต" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][58] == "วิทย์-คณิต"){  echo"selected"; }}?>
                 >วิทย์-คณิต</option>
                 <option value="ศิลป์-คำนวณ"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][58] == "ศิลป์-คำนวณ"){  echo"selected"; }}?>
                 >ศิลป์-คำนวณ</option>
                 <option value="ศิลป์-ภาษา"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][58] == "ศิลป์-ภาษา"){  echo"selected"; }}?>
                 >ศิลป์-ภาษา</option>
                 <option value="ภาษาจีน"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][58] == "ภาษาจีน"){  echo"selected"; }}?>
                 >ภาษาจีน</option>
                 <option value="ภาษาญี่ปุ่น"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][58] == "ภาษาญี่ปุ่น"){  echo"selected"; }}?>
                 >ภาษาญี่ปุ่น</option>

                <?php 
                    if(isset($_SESSION['SAS1'])){ 
                    $checkm1 = "1";
                    if(strcmp($_SESSION['SAS1'][1], $checkm1) == 0){ ?>
                 <!--option value="ทั่วไป"
<?php //if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "ทั่วไป"){  echo"selected"; }}?>
                 >ทั่วไป</option-->
 <?php }else{ ?>

                   

                   <?php }

                          }else {  // ถ้ามีตัวแปรแก้ไข

                            if(isset($_SESSION["EDITE"])){ 
                                
                                         $checkeditingm1 = "1";
                                         if(strcmp($_SESSION["EDITE"][1], $checkeditingm1) == 0){    ?>
                                          <!--option value="ทั่วไป"
                                         <?php //if(isset($_SESSION["EDITE"])){ 
                                                //if($_SESSION["EDITE"][6] == "ทั่วไป"){  echo"selected"; }}?>
                                                >ทั่วไป</option-->
                                        <?php } else{   ?>

                                            <option value="วิทย์-คณิต" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][58] == "วิทย์-คณิต"){  echo"selected"; }}?>
                 >วิทย์-คณิต</option>
                 <option value="ศิลป์-คำนวณ"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][58] == "ศิลป์-คำนวณ"){  echo"selected"; }}?>
                 >ศิลป์-คำนวณ</option>
                 <option value="ศิลป์-ภาษา"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][58] == "ศิลป์-ภาษา"){  echo"selected"; }}?>
                 >ศิลป์-ภาษา</option>
                 <option value="ภาษาจีน"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][58] == "ภาษาจีน"){  echo"selected"; }}?>
                 >ภาษาจีน</option>
                 <option value="ภาษาญี่ปุ่น"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][58] == "ภาษาญี่ปุ่น"){  echo"selected"; }}?>
                 >ภาษาญี่ปุ่น</option>
                                              

                                              <?php  } ?>  
                           <?php } ?>


            <?php } ?>


                </select>

                  

            </div>
        </div>


        <?php } //  if((isset($_SESSION['SAS1'])) && ($_SESSION['SAS1'][1] == "4")) {?>











<?php 
           if(isset($_SESSION["EDITE"])){ 
                    $checkpageff5 = "4";
                    if(strcmp($_SESSION["EDITE"][1], $checkpageff5) == 0){ ?>

<div class="form-group form-group-lg">
            <label class="col-sm-4 control-label" for="formGroupInputLarge" style="color: #666464;">
                อันดับที่ 1 :
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-8">            
                 <select class="form-control input-lg uniqueSelection" name="lbPlan1" required="">
                 <option value="">-- กรุณาเลือก --</option>
                 <option value="วิทยาศาสตร์-คณิตศาสตร์" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "วิทยาศาสตร์-คณิตศาสตร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คณิตศาสตร์</option>
                 <option value="วิทยาศาสตร์-คอมพิวเตอร์" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "วิทยาศาสตร์-คอมพิวเตอร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คอมพิวเตอร์</option>
                 <option value="อังกฤษ-จีน" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-จีน"){  echo"selected"; }}?>
                 >อังกฤษ-จีน</option>
                 <option value="อังกฤษ-ญี่ปุ่น"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-ญี่ปุ่น"){  echo"selected"; }}?>
                 >อังกฤษ-ญี่ปุ่น</option>
                 <option value="อังกฤษ-เวียดนาม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-เวียดนาม"){  echo"selected"; }}?>
                 >อังกฤษ-เวียดนาม</option>
                 <option value="อังกฤษ-เกาหลี"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-เกาหลี"){  echo"selected"; }}?>
                 >อังกฤษ-เกาหลี</option>
                 <option value="ไทย-สังคม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "ไทย-สังคม"){  echo"selected"; }}?>
                 >ไทย-สังคม</option>
                
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
                 <option value="วิทยาศาสตร์-คณิตศาสตร์" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "วิทยาศาสตร์-คณิตศาสตร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คณิตศาสตร์</option>
                 <option value="วิทยาศาสตร์-คอมพิวเตอร์" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "วิทยาศาสตร์-คอมพิวเตอร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คอมพิวเตอร์</option>
                 <option value="อังกฤษ-จีน" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "อังกฤษ-จีน"){  echo"selected"; }}?>
                 >อังกฤษ-จีน</option>
                 <option value="อังกฤษ-ญี่ปุ่น"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "อังกฤษ-ญี่ปุ่น"){  echo"selected"; }}?>
                 >อังกฤษ-ญี่ปุ่น</option>
                 <option value="อังกฤษ-เวียดนาม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "อังกฤษ-เวียดนาม"){  echo"selected"; }}?>
                 >อังกฤษ-เวียดนาม</option>
                 <option value="อังกฤษ-เกาหลี"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "อังกฤษ-เกาหลี"){  echo"selected"; }}?>
                 >อังกฤษ-เกาหลี</option>
                 <option value="ไทย-สังคม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "ไทย-สังคม"){  echo"selected"; }}?>
                 >ไทย-สังคม</option>
                
                </select>
            </div>
        </div>



            <div class="form-group form-group-lg">
            <label class="col-sm-4 control-label" for="formGroupInputLarge" style="color: #666464;">
                อันดับที่ 3 :
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-8">            
                 <select class="form-control input-lg uniqueSelection" name="lbPlan3" required="">
                 <option value="">-- กรุณาเลือก --</option>
                 <option value="วิทยาศาสตร์-คณิตศาสตร์" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "วิทยาศาสตร์-คณิตศาสตร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คณิตศาสตร์</option>
                 <option value="วิทยาศาสตร์-คอมพิวเตอร์" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "วิทยาศาสตร์-คอมพิวเตอร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คอมพิวเตอร์</option>
                 <option value="อังกฤษ-จีน" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "อังกฤษ-จีน"){  echo"selected"; }}?>
                 >อังกฤษ-จีน</option>
                 <option value="อังกฤษ-ญี่ปุ่น"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "อังกฤษ-ญี่ปุ่น"){  echo"selected"; }}?>
                 >อังกฤษ-ญี่ปุ่น</option>
                 <option value="อังกฤษ-เวียดนาม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "อังกฤษ-เวียดนาม"){  echo"selected"; }}?>
                 >อังกฤษ-เวียดนาม</option>
                 <option value="อังกฤษ-เกาหลี"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "อังกฤษ-เกาหลี"){  echo"selected"; }}?>
                 >อังกฤษ-เกาหลี</option>
                 <option value="ไทย-สังคม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "ไทย-สังคม"){  echo"selected"; }}?>
                 >ไทย-สังคม</option>
                
                </select>
            </div>
        </div>

              
        <div class="form-group form-group-lg" style="display:none">
            <label class="col-sm-4 control-label" for="formGroupInputLarge" style="color: #666464;">
                อันดับที่ 4 :
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-8">            
                 <select class="form-control input-lg uniqueSelection" name="lbPlan4" required="">
                 <option value="วิทย์-คณิต">-- กรุณาเลือก --</option>
                 <option value="วิทย์-คณิต" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][57] == "วิทย์-คณิต"){  echo"selected"; }}?>
                 >วิทย์-คณิต</option>
                 <option value="ศิลป์-คำนวณ"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][57] == "ศิลป์-คำนวณ"){  echo"selected"; }}?>
                 >ศิลป์-คำนวณ</option>
                 <option value="ศิลป์-ภาษา"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][57] == "ศิลป์-ภาษา"){  echo"selected"; }}?>
                 >ศิลป์-ภาษา</option>
                 <option value="ภาษาจีน"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][57] == "ภาษาจีน"){  echo"selected"; }}?>
                 >ภาษาจีน</option>
                 <option value="ภาษาญี่ปุ่น"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][57] == "ภาษาญี่ปุ่น"){  echo"selected"; }}?>
                 >ภาษาญี่ปุ่น</option>
                
                </select>
            </div>
        </div>


        <div class="form-group form-group-lg" style="display:none">
            <label class="col-sm-4 control-label" for="formGroupInputLarge" style="color: #666464;">
                อันดับที่ 5 :
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-8">            
                 <select class="form-control input-lg uniqueSelection" name="lbPlan5" required="">
                 <option value="วิทย์-คณิต">-- กรุณาเลือก --</option>
                 <option value="วิทย์-คณิต" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][58] == "วิทย์-คณิต"){  echo"selected"; }}?>
                 >วิทย์-คณิต</option>
                 <option value="ศิลป์-คำนวณ"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][58] == "ศิลป์-คำนวณ"){  echo"selected"; }}?>
                 >ศิลป์-คำนวณ</option>
                 <option value="ศิลป์-ภาษา"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][58] == "ศิลป์-ภาษา"){  echo"selected"; }}?>
                 >ศิลป์-ภาษา</option>
                 <option value="ภาษาจีน"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][58] == "ภาษาจีน"){  echo"selected"; }}?>
                 >ภาษาจีน</option>
                 <option value="ภาษาญี่ปุ่น"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][58] == "ภาษาญี่ปุ่น"){  echo"selected"; }}?>
                 >ภาษาญี่ปุ่น</option>
                
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
                    บันทึกการแก้ไขส่วนที่ 5   <span class="glyphicon glyphicon-check" aria-hidden="true"></span> 
                </button>
            </div>
        </div>
        <?php } ?>
    </form>
</div>
