<?php
session_start();
//include "conn.php";
//echo $_SESSION["direct"];
if (isset($_POST["login"], $_POST['txtRegisno'], $_POST['txtPwd'])) {
    include "conn.php";
    //conndb();
    //$_SESSION['UserID'] = $_POST['txtRegisno'];
    //$password           = $_POST['txtPwd'];
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <meta content="width=device-width, initial-scale=1" name="viewport">
                    <meta content="" name="description">
                        <meta content="" name="author">
                            <title>
                                Student Admission System
                            </title>
                            <!-- Bootstrap Core CSS -->
                            <link href="css/bootstrap.min.css" rel="stylesheet">
                                <!-- Custom CSS -->
                                <link href="css/shop-item.css" rel="stylesheet">
                                    <link href="https://fonts.googleapis.com/css?family=Pattaya|Pridi|Prompt|Sriracha" rel="stylesheet">
                                        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                                        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                                        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
                                    </link>
                                </link>
                            </link>
                        </meta>
                    </meta>
                </meta>
            </meta>
        </meta>
        <!--script Datepicker-->
        <link href="datepicker/css/datepicker.css" rel="stylesheet" media="screen">

        <style type="text/css">
#verify_math{
    display:block;
    height:21px;
}
#verify_math span{
    display:block;
    height:21px;
    width:30px;
    position:relative;
    float:left;
    text-align:center;
    line-height:20px;
    color:#000;
}
#verify_math span.digital{
    background:url(img/digi_img.jpg) left top no-repeat;
}
.big-checkbox {
    width: 30px; 
    height: 30px;

}
</style>
    <script src="js/country.js"></script>
     <script language=Javascript> 
        window.onLoad=dochange('province', -1);     
    </script>
    </head>
    <body onload="remainLength();">
        
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="border-bottom:#fcc6d3 2px solid; background:#c7254e;">
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
                    <a class="navbar-brand navbar-nav" href="#">
                        <span class="glyphicon glyphicon-fire">
                        </span>
                        Student Admission System
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="navbar-nav" href="#">
                                About
                            </a>
                        </li>
                        <li>
                            <a class="navbar-nav" href="#">
                                Services
                            </a>
                        </li>
                        <li>
                            <a class="navbar-nav" href="#">
                                Contact
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="navbar-nav" href="#">
                                <span class="glyphicon glyphicon-globe">
                                </span>
                                เข้าสู่ระบบเจ้าหน้าที่รับสมัคร
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <!--p class="lead">Banglamung School</p!-->
                    <div class="list-group">
                        <a class="list-group-item active" href="index.php">
                            <span class="glyphicon glyphicon-education">
                            </span>
                            กรอกใบสมัคร
                        </a>
                        <a class="list-group-item" href="#">
                            <span class="glyphicon glyphicon-send">
                            </span>
                            ระเบียบการสมัคร
                        </a>
                        <a class="list-group-item" href="#">
                            <span class="glyphicon glyphicon-calendar">
                            </span>
                            ปฏิทินการรับสมัคร
                        </a>
                        <a class="list-group-item" href="#">
                            <span class="glyphicon glyphicon-user">
                            </span>
                            ระดับชั้นที่เปิดรับ
                        </a>
                        <a class="list-group-item" href="#">
                            <span class="glyphicon glyphicon-exclamation-sign">
                            </span>
                            เงื่อนไขของการสมัคร
                        </a>
                        <a class="list-group-item" href="#">
                            <span class="glyphicon glyphicon-time">
                            </span>
                            กำหนดการมอบตัว/รายงานตัว
                        </a>
                        <a class="list-group-item" href="#">
                            <span class="glyphicon glyphicon-list-alt">
                            </span>
                            เอกสารมอบตัว
                        </a>
                        <a class="list-group-item" href="#">
                            <span class="glyphicon glyphicon-check">
                            </span>
                            ตรวจสอบสถานะการสมัคร
                        </a>
                        <a class="list-group-item" href="#">
                            <span class="glyphicon glyphicon-print">
                            </span>
                            พิมพ์ใบสมัคร
                        </a>
                        <a class="list-group-item" href="#">
                            <span class="glyphicon glyphicon-book">
                            </span>
                            คู่มือการสมัคร
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="thumbnail">
                        <!--img class="img-responsive" src="http://placehold.it/800x300" alt=""!-->
                        <img alt="" class="img-responsive" src="img/banner1501.png">
        <?php if(isset($_SESSION["direct"]) && ($_SESSION["direct"] == 1)) { 

                    if(!isset($_POST['btnNext1'])){
                        if(!isset($_POST['btnNext2'])){
                            if(!isset($_POST['btnNext3'])){
                                if(!isset($_POST['btnNext4'])){
                                    if(!isset($_POST['btnNext5'])){
                                        if(!isset($_POST['btnNext6'])){
                                            if(!isset($_POST['btnNext7'])){
                                                include('section/breadcrumb.php');
                                                include('section/1.php');  
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }

                    if(isset($_POST['btnNext1'])){
                        $_SESSION['SAS1'][1] = $_POST['lbClass'];  //lb
                        if(!isset($_POST['btnNext2'])){
                            if(!isset($_POST['btnNext3'])){
                                if(!isset($_POST['btnNext4'])){
                                    if(!isset($_POST['btnNext5'])){
                                        if(!isset($_POST['btnNext6'])){
                                            if(!isset($_POST['btnNext7'])){
                                                include('section/breadcrumb.php');
                                                include('section/2.php');
                                            }
                                        }
                                    }
                                }
                            }
                        }                                 
                    }
                    if (isset($_POST['btnNext2'])) {
                        $_SESSION['SAS2'][1] = $_POST['raOption'];
                        if(isset($_POST['lbSpecial'])){ $_SESSION['SAS2'][2] = $_POST['lbSpecial'];}
                        else{$_SESSION['SAS2'][2] = "";}
                       
                        if(isset($_POST['txtaMore'])){
                            $_SESSION['SAS2'][3] = htmlspecialchars($_POST['txtaMore']); //txta
                        }
                        else{$_SESSION['SAS2'][3] = "";}

                        if(!isset($_POST['btnNext1'])){
                            if(!isset($_POST['btnNext3'])){
                                if(!isset($_POST['btnNext4'])){
                                    if(!isset($_POST['btnNext5'])){
                                        if(!isset($_POST['btnNext6'])){
                                            if(!isset($_POST['btnNext7'])){
                                                include('section/breadcrumb.php');
                                                include('section/3.php');

                                            }
                                        }
                                    }
                                }
                            }
                        }                                 
                    }
                    if (isset($_POST['btnNext3'])) {
                        $_SESSION['SAS3'][1] = $_POST['lbPlan1'];
                        $_SESSION['SAS3'][2] = $_POST['lbPlan2'];
                        if(isset($_POST['lbPlan3'])){ $_SESSION['SAS3'][3] = $_POST['lbPlan3']; }
                        else{$_SESSION['SAS3'][3] = "";}
                       
                        if(!isset($_POST['btnNext1'])){
                            if(!isset($_POST['btnNext2'])){
                                if(!isset($_POST['btnNext4'])){
                                    if(!isset($_POST['btnNext5'])){
                                        if(!isset($_POST['btnNext6'])){
                                            if(!isset($_POST['btnNext7'])){
                                            include('section/breadcrumb.php');
                                            include('section/4.php');
                                            }
                                        }
                                    }
                                }
                            }
                        }                                 
                    } 
                    if (isset($_REQUEST['btnNext4'])) {   
                        if(!isset($_POST['btnNext1'])){
                            if(!isset($_POST['btnNext2'])){
                                if(!isset($_POST['btnNext3'])){
                                    if(!isset($_POST['btnNext5'])){
                                        if(!isset($_POST['btnNext6'])){
                                            if(!isset($_POST['btnNext7'])){
                                                include('section/breadcrumb.php');
                                                include('section/5.php');
                        $_SESSION['SAS4'][1] = $_POST['lbSname'];
                        $_SESSION['SAS4'][2] = htmlspecialchars(trim($_POST['txtFname']));
                        $_SESSION['SAS4'][3] = htmlspecialchars(trim($_POST['txtLname']));
                        $_SESSION['SAS4'][4] = htmlspecialchars(trim($_POST['txtBirthday']));
                        $_SESSION['SAS4'][5] = $_POST['lbSex'];
                        $_SESSION['SAS4'][6] = $_POST['lbReli'];
                        $_SESSION['SAS4'][7] = htmlspecialchars(trim($_POST['txtReginal']));
                        $_SESSION['SAS4'][8] = $_POST['lbReginality'];
                        $_SESSION['SAS4'][9] = $_POST['lbGroupblood'];
                                            }
                                        }
                                    }
                                }
                            }
                        }                                 
                    }
                    if (isset($_POST['btnNext5'])) {
                        $_SESSION['SAS5'][1] = htmlspecialchars(trim($_POST['txtHaddress']));
                        $_SESSION['SAS5'][2] = htmlspecialchars(trim($_POST['txtMoo']));
                        $_SESSION['SAS5'][3] = htmlspecialchars(trim($_POST['txtSoi']));
                        $_SESSION['SAS5'][4] = $_POST['lbProvince'];
                        $_SESSION['SAS5'][5] = $_POST['lbAmphor'];
                        $_SESSION['SAS5'][6] = $_POST['lbDistrict'];
                        $_SESSION['SAS5'][7] = htmlspecialchars(trim($_POST['txtTel']));
                        $_SESSION['SAS5'][8] = htmlspecialchars(trim($_POST['txtEmail']));
                       if(!isset($_POST['btnNext1'])){
                            if(!isset($_POST['btnNext2'])){
                                if(!isset($_POST['btnNext3'])){
                                    if(!isset($_POST['btnNext4'])){
                                        if(!isset($_POST['btnNext6'])){
                                            if(!isset($_POST['btnNext7'])){
                                                include('section/breadcrumb.php');
                                                include('section/6.php');
                                            }
                                        }
                                    }
                                }
                            }
                        }                                 
                    }
                    if (isset($_POST['btnNext6'])) {
                        $_SESSION['SAS6'][1] = $_POST['lbGraduate'];
                        $_SESSION['SAS6'][2] = htmlspecialchars(trim($_POST['txtLschool']));
                        $_SESSION['SAS6'][3] = htmlspecialchars(trim($_POST['txtGPA']));
                      
                       if(!isset($_POST['btnNext1'])){
                            if(!isset($_POST['btnNext2'])){
                                if(!isset($_POST['btnNext3'])){
                                    if(!isset($_POST['btnNext4'])){
                                        if(!isset($_POST['btnNext5'])){
                                            if(!isset($_POST['btnNext7'])){
                                                include('section/breadcrumb.php');
                                                include('section/7.php');
                                           }
                                        }
                                    }
                                }
                            }
                        }                                 
                    }
                    if (isset($_POST['btnNext7'])) {   
                        $_SESSION['SAS7'][1] = htmlspecialchars(trim($_POST['txtSnamefa']));
                        $_SESSION['SAS7'][2] = htmlspecialchars(trim($_POST['txtFnamefa']));
                        $_SESSION['SAS7'][3] = htmlspecialchars(trim($_POST['txtLnamefa']));
                        $_SESSION['SAS7'][4] = htmlspecialchars(trim($_POST['txtTelfa']));
                        $_SESSION['SAS7'][5] = htmlspecialchars(trim($_POST['lbSnamema']));
                        $_SESSION['SAS7'][6] = htmlspecialchars(trim($_POST['txtFnamema']));
                        $_SESSION['SAS7'][7] = htmlspecialchars(trim($_POST['txtLnamema']));
                        $_SESSION['SAS7'][8] = htmlspecialchars(trim($_POST['txtTelma']));
                        $_SESSION['SAS7'][9] = $_POST['lbStatus'];

                        $data7[1] = htmlspecialchars(trim($_POST['txtSnamefa']));
                        $data7[2] = htmlspecialchars(trim($_POST['txtFnamefa']));
                        $data7[3] = htmlspecialchars(trim($_POST['txtLnamefa']));
                        $data7[4] = htmlspecialchars(trim($_POST['txtTelfa']));
                        $data7[5] = htmlspecialchars(trim($_POST['lbSnamema']));
                        $data7[6] = htmlspecialchars(trim($_POST['txtFnamema']));
                        $data7[7] = htmlspecialchars(trim($_POST['txtLnamema']));
                        $data7[8] = htmlspecialchars(trim($_POST['txtTelma']));
                        $data7[9] = $_POST['lbStatus'];

                        //insert DB SAS_Studentdata
                         
                        include "fn.php";
                        insertstudentdata($data1, $data2, $data3, $data4, $data5, $data6, $data7, $nid);
                    }
                        //include('section/5.php');
                        //include('section/4.php');
                        //include('section/5.php');
                        //include('section/6.php');
                        //include('section/7.php');

            ?>
                
        <?php } else{?>
                            <div class="caption-full">
                                <!--h4 class="pull-right">$24.99</h4-->
        <?php if ((isset($_GET['re']) && $_GET['re'] == "register") || isset($_POST['register'])) {?>
                                <h3 class="text-center">
                                    <p style="color: #23527c;">
                                    <span class="glyphicon glyphicon-plus"></span>
                                        ลงทะเบียนผู้สมัครสอบ
                                    </p>
                                </h3>
        <?php } else {?>
                                  <h3 class="text-center">
                                    <p>
                                    <span class="glyphicon glyphicon-log-in"></span>
                                        เข้าสู่ระบบผู้สมัครสอบ
                                    </p>
                                </h3>
                        <?php }?>
                                <br/>
                <?php if (!isset($_GET['re']) && !isset($_POST['register'])) {?>
                 <?php if (!isset($_GET['regisdone'])) {?>
                                <div class="alert alert-info text-center" role="alert"><p>คุณเข้าสู่ระบบครั้งแรกใช่หรือไม่ </p>
                                    <p><a href="index.php?re=register"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>กรุณาคลิกลงทะเบียน</a></p>
                                </div>
                        <?php }?>
                        <?php }?>
<?php if (isset($_POST["login"], $_POST['txtRegisno'], $_POST['txtPwd'])) {
       include "conn.php";
        //include "config.php";
        //conndb();
        $ldata[0] = htmlspecialchars(trim($_POST['txtRegisno']));
        $ldata[1] = htmlspecialchars(trim($_POST['txtPwd']));
        include "section/login.php";
        logindata($ldata);
    }
if (isset($_POST["register"], $_POST['txtRegisno'], $_POST['txtPwd'], $_POST['txtIDCard'], 
    $_POST['i_verify'])) {
    include "conn.php";
    include "fn.php";
    $data[0] = htmlspecialchars(trim($_POST['txtRegisno']));
    $data[1] = htmlspecialchars(trim($_POST['txtPwd']));
    $data[2] = htmlspecialchars(trim($_POST['txtIDCard']));

    if ($_POST['i_verify'] == @array_sum($_SESSION['num_to_check'])){
        $_SESSION['num_to_check'][0]=rand(1,9);
        $_SESSION['num_to_check'][1]=rand(1,9);
        insertregister($data);
        mysql_close();
    } else {
        $_SESSION['num_to_check'][0]=rand(1,9);
        $_SESSION['num_to_check'][1]=rand(1,9);
        ?>

        <div class="alert alert-danger text-center" role="alert">
        <i><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> คุณบวกเลขผิด
        </i>
         </div>

<?php }

}

if ((isset($_GET['re']) && $_GET['re'] == "register") || isset($_POST['register'])) {
    # ส่วนของสมัครสมาชิก

    ?>
<?php
    $_SESSION['num_to_check'][0] = rand(1, 9);
    $_SESSION['num_to_check'][1] = rand(1, 9);
    ?>
                                <form class="form-horizontal" method="post" action="index.php"
                                name="formregister" id="formregister">
                                    <div class="form-group form-group-lg">
                                        <label class="col-sm-4 control-label" for="formGroupInputLarge"
                                        style="color: #23527c;">
                                            เลขที่ใบสมัคร
                                        </label>
                                        <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
                                        <div class="col-sm-8">

                                            <input name="txtRegisno" class="form-control input-lg" id="user" placeholder="Register Number" type="text" required="" autofocus="">
                                            </input>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-lg">
                                        <label class="col-sm-4 control-label" for="formGroupInputLarge"
                                        style="color: #23527c;">
                                            รหัสผ่าน
                                        </label>
                                        <!--label for="inputPassword3" class="col-sm-2 control-label">รหัสผ่าน</label-->
                                        <div class="col-sm-8">

                                            <input name="txtPwd" class="form-control input-lg" id="inputPassword3" placeholder="Password" type="password" required="">
                                            </input>
                                        </div>
                                    </div>

                                    <div class="form-group form-group-lg">
                                        <label class="col-sm-4 control-label" for="formGroupInputLarge"
                                        style="color: #23527c;">
                                            รหัสบัตรประจำตัวประชาชน
                                        </label>
                                        <!--label for="inputPassword3" class="col-sm-2 control-label">รหัสผ่าน</label-->
                                        <div class="col-sm-8">

                                            <input name="txtIDCard" class="form-control input-lg"
                                            id="txtIDCard"  placeholder="ID card 13 หลัก" type="text" required="" maxlength="13"
                                            onkeyup="javascript:remainLength();"
                                            OnKeyPress="return chkNumber(this)">
                                            </input>
                                        </div>
                                    </div>

                                     <div class="form-group">
                                     <div class="col-sm-4" id="verify_math" style="padding-left: 10%">
    <span class="digital" style="background-position:<?php echo ($_SESSION['num_to_check'][0] * -30); ?>px 0px;"></span>
  <span>+</span>
    <span class="digital" style="background-position:<?php echo ($_SESSION['num_to_check'][1] * -30); ?>px 0px;"></span>
  <span>=</span>

  <!--button type="button"
  onclick="window.location='index.php?re=register'">
  <span class="glyphicon glyphicon-refresh" aria-hidden="true"> </span>
</button-->

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
                                </form>
    <?php } else { // if (!isset($_GET["re"])) { ?>




                                <form class="form-horizontal" method="post" action="index.php"
                                name="formlogin">
                                    <div class="form-group form-group-lg">
                                        <label class="col-sm-3 control-label" for="formGroupInputLarge">
                                            เลขที่ใบสมัคร
                                        </label>
                                        <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
                                        <div class="col-sm-9">

                                            <input name="txtRegisno" class="form-control input-lg" id="user" placeholder="Register Number" type="text" required="" autofocus="">
                                            </input>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-lg">
                                        <label class="col-sm-3 control-label" for="formGroupInputLarge">
                                            รหัสผ่าน
                                        </label>
                                        <!--label for="inputPassword3" class="col-sm-2 control-label">รหัสผ่าน</label-->
                                        <div class="col-sm-9">

                                            <input name="txtPwd" class="form-control input-lg" id="inputPassword3" placeholder="Password" type="password" required="">
                                            </input>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                        Remember me
                                                    </input>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-1 col-sm-11 text-center">
                                            <button name="login" class="btn btn-success btn-lg"
                                            type="submit" value="Login" >
                                                เข้าสู่ระบบ
                                            </button>
                                        </div>
                                    </div>
                                </form>

     <?php } //else ?>


                            </div><!-- /.caption-full -->
                            <?php } ?>
                        </img>
                    </div><!-- /.thumbnail -->

                </div><!-- /.col-md-9 -->
            </div> <!-- /.row -->
        </div>  <!-- /.container -->
        <!-- end -->
        <div class="container">
            <hr>
                <!-- Footer -->
                <footer>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <p>
                                Copyright © งานพัฒนาระบบเทคโนโลยีสารสนเทศ โรงเรียนบางละมุง
                            </p>
                        </div>
                    </div>
                </footer>
            </hr>
        </div>
        <!-- /.container -->
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js">
        </script>
        <script src="js/number_only.js">
        </script>
        <script src="js/remainlength.js">
        </script>
    <!-- datepicker js -->
    <script src="js/jquery.js"></script>
    <!--script src="//getbootstrap.com/2.3.2/assets/js/google-code-prettify/prettify.js"></script-->
    <script src="datepicker/js/bootstrap-datepicker.js"></script>
    <script src="datepicker/js/bootstrap-datepicker-thai.js"></script>
    <script src="datepicker/js/locales/bootstrap-datepicker.th.js"></script>
    </body>
</html>
