<?php 
//include "fn.php";
list($d27,$d28,$d29,$d30,$M27,$M28,$M29,$M30) = selectcomeschool();;
                echo "----------------<br>";
                echo   $d27."<br>";
                echo   $d28."<br>";
                echo   $d29."<br>";
                echo   $d30."<br>";
echo "----------------<br>";
                echo   $M27."<br>";
                echo   $M28."<br>";
                echo   $M29."<br>";
                echo   $M30."<br>";

?>
<div class="caption-full">

    <!--h4 class="pull-right">$24.99</h4-->
    <h3 class="text-center">
         <p>
                                    <span class="glyphicon glyphicon-share"></span>
           1.1 เลือกวันที่มายืนใบสมัคร ณ โรงเรียนบางละมุง
        </p>
    </h3>
   <br>
 
 <?php if(!isset($_GET["edite"])){ ?>
    <form class="form-horizontal" name="form1" method="post" action="index.php">
  <?php }
      else{ ?>
    <form class="form-horizontal" name="form1" method="post" action="index.php?edite=true">
    <?php } ?>
            
       
         <div class="form-group form-group-lg">
            <label class="col-sm-4 control-label" for="formGroupInputLarge">
                ระบุวันที่มายื่นใบสมัคร
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-8">
                <?php if(isset($_GET["edite"])){ ?>
            <select class="form-control input-lg" name="lbCome" required="" autofocus="" disabled="true">
                <?php }else{ ?>
            <select class="form-control input-lg" name="lbCome" required="" autofocus="">
                <?php } ?>
                 <option value="">-- ณ โรงเรียนบางละมุง --</option>

                  <?php if($d27 <= 250  $M27 <= 200 ){ ?>
                 <option value="27"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][44] == "27"){  echo"selected"; }}?>
                 >27 มีนาคม </option>
                  <?php } ?>

                <?php if($d28 <= 200){ ?>
                 <option value="28"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "28"){ echo"selected";}}?>
                 >28 มีนาคม</option>
                <?php } ?>
                <?php if($d29 <= 200){ ?>
                  <option value="29"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "29"){ echo"selected";}}?>
                 >29 มีนาคม</option>
                <?php } ?>

                <?php if($d30 <= 200){ ?>
                 <option value="30"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "30"){ echo"selected";}}?>
                 >30 มีนาคม</option>
                 <?php } ?>
                </select>

            </div>
        </div>



        <?php if(!isset($_GET["edite"])){ ?>
        <div class="form-group">
            <div class="col-sm-offset-8 col-sm-4 text-center">
                <button class="btn btn-info btn-lg btn-block" name="btnNext1" type="submit" 
                value="Login">
                    ถัดไป   <span class="glyphicon glyphicon-random" aria-hidden="true"></span> 
                </button>
            </div>
        </div>
        <?php }else{ ?>
        <!--div class="form-group">
            <div class="col-sm-offset-8 col-sm-4 text-center">
                <button class="btn btn-success btn-lg btn-block" name="btnEdite1" type="submit" 
                value="Login" 
                onclick="if(confirm('ยืนยันการแก้ไขส่วนที่1')) return true; else return false;"
                >
                    แก้ไขส่วนที่ 1   <span class="glyphicon glyphicon-check" aria-hidden="true"></span> 
                </button>
            </div>
        </div-->
    
        <?php } ?>
    </form>
    
</div>