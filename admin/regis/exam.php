<?php 
session_start();
include("../../conn.php");
        if(isset($_GET['nid'])){

            $nid    = $_GET['nid'];
            $fname  = $_GET['fname'];
            $lname = $_GET['lname'];
            $op     = $_GET['op'];
            $le     = $_GET['le'];
        }else{
            $op     = $_GET['op'];
            $le     = $_GET['le'];
            $sh     = $_GET['sh'];
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ผู้ดูแลระบบ: หน้าระบบออกเลขที่นั่งสอบ</title>

    <!-- Bootstrap CSS File  -->
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.5-dist/css/bootstrap.css"/>
    <link href="https://fonts.googleapis.com/css?family=Pattaya|Pridi|Prompt|Sriracha" rel="stylesheet">
</head>
<style type="text/css"> 
body {
    padding-top: 20px;
    
    font-family: 'Pridi', serif;
   /* font-family: 'Sriracha', cursive;*/
    /*font-family: 'Pattaya', sans-serif;*/
    /*font-family: 'Prompt', sans-serif;*/
}
</style>
<body>
<?php if(isset($_SESSION["Role"])){
     if($_SESSION["Role"] == 1){ ?>
 <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="border-bottom:#CCCCCC 2px solid; background:#339966;">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button class="navbar-toggle" data-target="#bs-example-navbar-collapse-1" 
                    data-toggle="collapse" type="button">
                        <span class="sr-only">
                            Toggle navigation
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                    </button>
                    <a class="navbar-brand navbar-nav" href="../../index.php">
                        <span class="glyphicon glyphicon-fire">
                        </span>
                        <font color="#ffffff">Student Admission System</font>
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="navbar-nav" href="../regis" target="_self">
                                <span class="glyphicon glyphicon-globe">
                                </span>
                                <font color="#ffffff">ระบบยืนยันนักเรียนมายื่นเอกสารและออกเลขที่นั่งสอบ</font>
                            </a>
                        </li>
                        
                    </ul>
                    <?php if(isset($_SESSION["RegisNO"])) { ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                        <a class="navbar-nav" href="../../index.php?ses=destroy" 
                        onclick="if(confirm('ยืนยันการ Logout & Reset')) return true; else return false;">
                        เลขที่ใบสมัคร : <?php echo $_SESSION["RegisNO"]; ?>
                              <span class="glyphicon glyphicon-remove-sign">
                                </span> Logout & Reset
                        </a>  
                        </li>
                    </ul>
                    <?php } 
                            if(isset($_GET["ses"]) && $_GET["ses"] == "destroy" ){
                                echo "<script type=\"text/javascript\">";
                               echo "window.location=\"../../index.php\" ";
                               echo "</script>";       
                                session_destroy();
                            }
                    ?>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- Page Content -->
        <br/> <br/>


<!-- Content Section -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><img src="../../img/examico.png" width="80px;"> ผู้ดูแลระบบ: หน้าระบบออกผังการสอบให้แก่นักเรียน</h1>
        </div>
    </div>


<div class="row">
        <div class="col-md-12">

          <?php  
              if(isset($_GET['nid'],$_GET['fname'],$_GET['lname'])){ 
            ?>
         <h3>ท่านกำลังออกผังการสอบ</h3>
            <h4>ชื่อผู้เรียน : <?php if(isset($_REQUEST["fname"],$_REQUEST["lname"],$_REQUEST["nid"])){ echo $_REQUEST["fname"]." ".$_REQUEST["lname"]." เลขบัตร ".$_REQUEST["nid"]." ประเภท ".$_REQUEST["op"]." ระดับชั้น ม.".$_REQUEST["le"]; } ?></h4>
            
            
         <?php }else{


          ?>

         <h3>ท่านกำลังดู-ข้อมูลผังการสอบ</h3>
            <h4>
               <?php echo "ระดับชั้น ม.".$_REQUEST["le"]." ประเภท ".$_REQUEST["op"]; ?>
            </h4>
        

       <?php  } ?>
<div class="records_content">
                
<form name="formsearch" id="formsearch" method="post" action="index.php">
<table class="table table-bordered table-striped" >
<tr align="center">
<td>
<div align="right">เลือกห้องสอบ :
    <?php  if(isset($_GET['nid'],$_GET['fname'],$_GET['lname'])){ ?>
    <select name="catex" class="input-sm" onchange="window.location='exam.php?catex='+this.value+'&nid=<?=$nid?>&fname=<?=$fname?>&lname=<?=$lname?>&op=<?=$op?>&le=<?=$le?>'">
    
    <?php }else{ ?>
    <select name="catex" class="input-sm" onchange="window.location='exam.php?catex='+this.value+'&op=<?=$op?>&le=<?=$le?>'">
        <?php  } ?>
        <option value="0">กรุณาเลือกผังห้องสอบ</option>
<?php 
            $op     = $_GET['op'];
            $opcheck = "นักเรียนในเขตพื้นที่บริการ";
            $lecheck = "1";

    $querylt = " SELECT *
                FROM sas_exam ";

    if(strcmp($le, $lecheck) == 0){  //เช็คว่า ม.1 ไหม
            if(strcmp($op, $opcheck) == 0){
                 $querylt .= "WHERE  ExamType='ในเขต' ";
                }else{
                 $querylt .= "WHERE  ExamType='ทั่วไป' ";   
                }
    }
              $querylt .=  "ORDER BY id ASC";
            if (!$result = mysql_query($querylt)) {
                exit(mysql_error());
            }
            $totalrowlt = mysql_num_rows($result);
            if($totalrowlt > 0)
            {
                $countex = 1;
     
                    while($rowlt = mysql_fetch_assoc($result))
                    {         


                    ?>
                      <option value="<?php echo $rowlt['id']; ?>"<?php if(isset($_REQUEST["catex"])){ if($_REQUEST["catex"] == $rowlt['id']){  echo"selected"; }} ?>
                        ><?php echo "ห้องสอบ ".$rowlt['id']." อาคารสอบ ".$rowlt['ExamBuilding']." เลขที่ห้องสอบ ".$rowlt['ExamRoomNO']; ?></option>   
                 $countex++;
        <?php       }
            }

?>

</select>
</div>
</td>

</tr>
</table>
<?php if(isset($_GET['catex'])){  ?>

<h5 align="center">ผังเลขที่นั่งสอบ</h5>
<h5 align="center">สนามสอบโรงเรียนบางละมุง  อำเภอบางละมุง จังหวัดชลบุรี</h5>
<h5 align="center">ชั้นมัธยมศึกษาปีที่ <?php echo $_GET['le'];  ?>
<?php if(isset($_GET['op'])){ echo "ประเภท ".$_GET['op'];}   ?>

 <?php } ?>       
    <!--/h5>
<h5 align="center"><?php //if(isset($_GET['catex'])){ echo "ห้องสอบที่ ".$_GET['catex']."  "."อาคารสอบที่ ";}   ?></h5-->
<br/><br/>
<table class="table table-bordered table-striped" > 
    <?php if(isset($_GET['catex'])){ ?>
    <tr>
       <?php
        
                $queryshow = " SELECT *
                FROM sas_exam 
                WHERE id ='".$_GET['catex']. "'";                
     

         if (!$result2 = mysql_query($queryshow)) {
                exit(mysql_error());
            }

            $aresult=mysql_fetch_assoc($result2);
        ?>

        <td colspan="5">ห้องสอบที่ <?php echo $_GET['catex']; ?> อาคารสอบ <?php echo $aresult['ExamBuilding']; ?>
        เลขที่ห้องสอบ <?php echo $aresult['ExamRoomNO']; ?></td>
    </tr>


<tr>
        <td>แถวที่ 1</td><td>แถวที่ 2</td><td>แถวที่ 3</td><td>แถวที่ 4</td><td>แถวที่ 5</td>
        
</tr>
<?php 

include('data_tab.php');



for($x = 0; $x < 8; $x++) { 

        $c1=$a+$x;
        $c2=$b-$x;
        $c3=$c+$x;
        $c4=$d-$x;
        $c5=$e+$x;

        include('select_check.php');


    ?>

         <tr align="center">
            <td>
                 <button <?php echo $disbt1; ?>  onclick="ConfirmExamtest(<?php echo $c1;?>, <?php echo $_GET['catex']; ?>, <?php echo $nid; ?>)" class="<?php echo $colourbt1; ?>"><?php echo $ch1; ?></button>
            </td>
            <td>
                <button <?php echo $disbt2; ?>  onclick="ConfirmExamtest(<?php echo $c2;?>, <?php echo $_GET['catex']; ?>, <?php echo $nid; ?>)" class="<?php echo $colourbt2; ?>"><?php echo $ch2; ?></button>
            </td>
            <td>
                <button <?php echo $disbt3; ?>  onclick="ConfirmExamtest(<?php echo $c3;?>, <?php echo $_GET['catex']; ?>, <?php echo $nid; ?>)" class="<?php echo $colourbt3; ?>"><?php echo $ch3; ?></button>
            </td>
            <td>
                <button <?php echo $disbt4; ?>  onclick="ConfirmExamtest(<?php echo $c4;?>, <?php echo $_GET['catex']; ?>, <?php echo $nid; ?>)" class="<?php echo $colourbt4; ?>"><?php echo $ch4; ?></button>
            </td>
            <td>
                <button <?php echo $disbt5; ?>  onclick="ConfirmExamtest(<?php echo $c5;?>, <?php echo $_GET['catex']; ?>, <?php echo $nid; ?>)" class="<?php echo $colourbt5; ?>"><?php echo $ch5; ?></button>
            </td>
          
         </tr>

<?php } ?>

<?php } ?>

</table>

</form>
<br>





   </div> <!-- ตารางข้อมูล -->

    


        </div>
    </div>
</div>
<!-- /Content Section -->



<!-- Jquery JS file -->
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

<!-- Bootstrap JS file -->
<script type="text/javascript" src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

<!-- Custom JS file -->
<script type="text/javascript" src="js/script.js"></script>
<?php }} ?>
</body>
</html>