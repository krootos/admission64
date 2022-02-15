
<div class="caption-full">
    
             <h3 class="text-center">
         <p>
                                    <span class="glyphicon glyphicon-share"></span>
           4-1. นักเรียนที่มีความสามารถพิเศษ
        </p>
    </h3>
    <br>
    <?php if (!isset($_GET["edite"])) { ?>
    <form class="form-horizontal" name="form1" method="post" action="index.php">
    <?php } else { ?>
    <form class="form-horizontal" name="form1" method="post" action="index.php?edite=true">
    <?php }?>

    <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> นักเรียนที่มีความสามารถพิเศษด้านศิลปะ</h4>
       
        <div class="radio">
                <h4>
                    <label>
                        <input type="radio" name="raOptionspe" id="option1"  value="ทัศนศิลป์"
                        onclick="javascript:chickCheckbox();"  required=""
<?php if (isset($_SESSION["EDITE"]) && $_SESSION["EDITE"][3] == "ทัศนศิลป์") {echo "checked";}?>>

ทัศนศิลป์
                    </label>
                </h4>

            </div>
           
            <div class="radio">
                <h4>
                    <label>
                        <input type="radio" name="raOptionspe" id="option2"  value="ดนตรีสากล"
                        onclick="javascript:chickCheckbox();"
<?php if (isset($_SESSION["EDITE"]) && $_SESSION["EDITE"][3] == "ดนตรีสากล") {echo "checked";}?>>

ดนตรีสากล
                    </label>
                </h4>

            </div>

            <div class="radio">
                <h4>
                    <label>
                        <input type="radio" name="raOptionspe" id="option3"  value="ดนตรีไทย"
                        onclick="javascript:chickCheckbox();"
<?php if (isset($_SESSION["EDITE"]) && $_SESSION["EDITE"][3] == "ดนตรีไทย") {echo "checked";}?>>

ดนตรีไทย
                    </label>
                </h4>

            </div>

            <div class="radio">
                <h4>
                    <label>
                        <input type="radio" name="raOptionspe" id="option4"  value="นาฏศิลป์"
                        onclick="javascript:chickCheckbox();"
<?php if (isset($_SESSION["EDITE"]) && $_SESSION["EDITE"][3] == "นาฏศิลป์") {echo "checked";}?>>

นาฏศิลป์
                    </label>
                </h4>

            </div>


      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> นักเรียนที่มีความสามารถพิเศษด้านกีฬา</h4>
       
<?php   if (isset($_SESSION['SAS1'])) {
    $checkm4 = "4";
    if (strcmp($_SESSION['SAS1'][1], $checkm4) != 0) {?>
        <div class="radio">
                <h4>
                    <label>
                        <input type="radio" name="raOptionspe" id="option5"  value="เทควันโด"
                        onclick="javascript:chickCheckbox();"
<?php if (isset($_SESSION["EDITE"]) && $_SESSION["EDITE"][3] == "เทควันโด") {echo "checked";}?>>

เทควันโด
                    </label>
                </h4>

            </div>

    <?php }} ?>

            <div class="radio">
                <h4>
                    <label>
                        <input type="radio" name="raOptionspe" id="option6"  value="วอลเล่ย์บอล"
                        onclick="javascript:chickCheckbox();"
<?php if (isset($_SESSION["EDITE"]) && $_SESSION["EDITE"][3] == "วอลเล่ย์บอล") {echo "checked";}?>>

วอลเล่ย์บอล
                    </label>
                </h4>

            </div>


      </div>
    </div>
  </div>
</div>




        

       


            <?php if (!isset($_GET["edite"])) {?>
        <div class="form-group">
            <div class="col-sm-offset-8 col-sm-4 text-center">
                <button class="btn btn-info btn-lg btn-block" name="btnNext4-1" type="submit"
                value="Login">
                    ถัดไป   <span class="glyphicon glyphicon-random" aria-hidden="true"></span>
                </button>
            </div>
        </div>
        <?php } else {?>
        <div class="form-group">
            <div class="col-sm-offset-8 col-sm-4 text-center">
                <button class="btn btn-success btn-lg btn-block" name="btnEdite4-1" type="submit"
                value="Login"
                onclick="if(confirm('ยืนยันการแก้ไขส่วนที่4-1')) return true; else return false;">
                    แก้ไขส่วนที่ 4-1   <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                </button>
            </div>
        </div>
        <?php }?>


    </form>

</div>
