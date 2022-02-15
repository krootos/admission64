
<div class="caption-full">

    <!--h4 class="pull-right">$24.99</h4-->
    <h3 class="text-center">
         <p>
                                    <span class="glyphicon glyphicon-share"></span>
           1. ระดับชั้นที่ต้องการสมัคร
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
                เลือกระดับชั้น
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-8">
                <?php if(isset($_GET["edite"])){ ?>
            <select class="form-control input-lg" name="lbClass" required="" autofocus="" disabled="true">
                <?php }else{ ?>
            <select class="form-control input-lg" name="lbClass" required="" autofocus="">
                <?php } ?>
                 <option value="">-- กรุณาเลือก --</option>
                 <option value="1"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][1] == "1"){  echo"selected"; }}?>
                 >มัธยมศึกษาปีที่ 1</option>

                 <option value="4"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][1] == "4"){ echo"selected";}}?>
                 >มัธยมศึกษาปีที่ 4</option>
                 
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