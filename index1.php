<?php
session_start();

if (isset($_POST["login"], $_POST['txtRegisno'], $_POST['txtPwd'])) {
    include "conn.php";
 
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
        TNW Admission 2020
    </title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   
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
    #verify_math {
        display: block;
        height: 21px;
    }

    #verify_math span {
        display: block;
        height: 21px;
        width: 30px;
        position: relative;
        float: left;
        text-align: center;
        line-height: 20px;
        color: #000;
    }

    #verify_math span.digital {
        background: url(img/digi_img.jpg) left top no-repeat;
    }

    .big-checkbox {
        width: 30px;
        height: 30px;

    }
    </style>
    <script src="js/country.js"></script>
    <script language=Javascript>
    window.onLoad = dochange('province', -1);
    </script>



</head>

<body onload="remainLength();">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"
        style="border-bottom:#fcc6d3 2px solid; background:#c7254e;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button class="navbar-toggle" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse"
                    type="button">
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
                <a class="navbar-brand navbar-nav" href="index.php">
                    <span class="glyphicon glyphicon-fire">
                    </span>
                    Student Admission System
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="navbar-nav" href="http://www.tnw.ac.th" target="_blank">
                            <span class="glyphicon glyphicon-globe">
                            </span>
                            ????????????????????????????????????????????????????????????????????????
                        </a>
                    </li>
                    <li>
                        <a class="navbar-nav" href="chdate.html" target="_blank">
                            <span class="glyphicon glyphicon-modal-window">
                            </span>
                            ???????????????????????????????????????????????????????????????????????? ???.1
                        </a>
                    </li>

                    <?php if (isset($_SESSION["Role"])) {
                            if ($_SESSION["Role"] == 1) {?>
                        <li>
                            <a class="navbar-nav" href="admin/user">
                                <span class="glyphicon glyphicon-globe">
                                </span>
                                ??????????????????????????????????????????????????????????????????????????????????????????
                            </a>
                        </li>

                            <?php }
                    }?>

                </ul>
                <?php if (isset($_SESSION["RegisNO"])) {?>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="navbar-nav" href="index.php?ses=destroy"
                            onclick="if(confirm('??????????????????????????? Logout & Reset')) return true; else return false;">
                            ??????????????????????????????????????? : <?php echo $_SESSION["RegisNO"]; ?>
                            <span class="glyphicon glyphicon-remove-sign">
                            </span> Logout
                        </a>
                    </li>
                </ul>
                <?php }
                if (isset($_GET["ses"]) && $_GET["ses"] == "destroy") {
                    echo "<script type=\"text/javascript\">";
                    echo "window.location=\"index.php\" ";
                    echo "</script>";
                    session_destroy();
                }
                ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav> <!-- End navigation top menu -->

    <!-- Page Content --> 
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php if (isset($_SESSION["Role"])) {
                        if ($_SESSION["Role"] == 1) {?>                        
                            <div class="list-group">
                                <p class="list-group-item " style="border-bottom:#999 2px solid; background:#188407; color: #FFF; ">
                                    <span class="glyphicon glyphicon-equalizer">
                                    </span>
                                    EXPORT EXCEL<br>
                                    (????????????????????????????????????????????????????????????)
                                </p>
                                <form class="form-horizontal" name="formexcel" enctype="multipart/form-data" method="post" 
                                    action="index.php">
                                    <div class="list-group-item">
                                        <div>
                                            <span class="glyphicon glyphicon-thumbs-up"></span>
                                                <select name="lbexcel" id='excel'>
                                                    <option value="1"
                                                        <?php if (isset($_POST["lbexcel"])) {if ($_REQUEST["lbexcel"] == "1") {echo "selected";}}?>>
                                                        ????????????????????? ???.1 ?????????????????????</option>
                                                    <option value="2"
                                                        <?php if (isset($_POST["lbexcel"])) {if ($_REQUEST["lbexcel"] == "2") {echo "selected";}}?>>
                                                        ????????????????????? ???.1 ??????????????????</option>
                                                    <option value="3"
                                                        <?php if (isset($_POST["lbexcel"])) {if ($_REQUEST["lbexcel"] == "3") {echo "selected";}}?>>
                                                        ????????????????????? ???.1 ????????????????????? </option>
                                                    <option value="4"
                                                        <?php if (isset($_POST["lbexcel"])) {if ($_REQUEST["lbexcel"] == "4") {echo "selected";}}?>>
                                                        ????????????????????? ???.4 ????????????????????? </option>
                                                    <option value="5"
                                                        <?php if(isset($_POST["lbexcel"])) { if($_REQUEST["lbexcel"] == "5"){  echo"selected"; } } ?>>
                                                        ????????????????????? ???.4 ??????????????????-???????????????</option>
                                                    <option value="6"
                                                        <?php if(isset($_POST["lbexcel"])) { if($_REQUEST["lbexcel"] == "6"){  echo"selected"; } } ?>>
                                                        ????????????????????? ???.4 ??????????????????-????????????</option>
                                                    <option value="7"
                                                        <?php if(isset($_POST["lbexcel"])) { if($_REQUEST["lbexcel"] == "7"){  echo"selected"; } } ?>>
                                                        ????????????????????? ???.4 ??????????????????-?????????</option>
                                                    <option value="8"
                                                        <?php if(isset($_POST["lbexcel"])) { if($_REQUEST["lbexcel"] == "8"){  echo"selected"; } } ?>>
                                                        ????????????????????? ???.4 ??????????????????-?????????????????????</option>
                                                    <option value="9"
                                                        <?php if(isset($_POST["lbexcel"])) { if($_REQUEST["lbexcel"] == "9"){  echo"selected"; } } ?>>
                                                        ????????????????????? ???.4 ??????????????????-????????????????????????</option>
                                                    <option value="10"
                                                        <?php if(isset($_POST["lbexcel"])) { if($_REQUEST["lbexcel"] == "10"){  echo"selected"; } } ?>>
                                                        ????????????????????? ???.4 ??????????????????-??????????????????</option>
                                                    <option value="11"
                                                        <?php if(isset($_POST["lbexcel"])) { if($_REQUEST["lbexcel"] == "11"){  echo"selected"; } } ?>>
                                                        ????????????????????? ???.4 ?????????-???????????????</option>
                                                    <!--option value="6"
                                                    <?php //if(isset($_POST["lbexcel"])) { if($_REQUEST["lbexcel"] == "6"){  echo"selected"; } } ?>>????????????????????? ???.4 ??????????????????</option-->
                                                    <!--option value="7"
                                                    <?php //if(isset($_POST["lbexcel"])) { if($_REQUEST["lbexcel"] == "7"){  echo"selected"; } } ?>>????????????????????? ???.4 ?????????????????????????????????????????????</option-->
                                                </select>
                                                <div class="text-center">.....</div>
                                                <div class="text-center">
                                                    <button name="btexcel" class="btn btn-success">Download!</button>
                                                </div>
                                        </div>

                                    </div>
                                 </form> <!--/.formexcel -->
                            </div>  <!--/.list-group excel -->
                    <?php }
                    }?>
                            <div class="list-group">
                                <a class="list-group-item active" href="index.php#regis">
                                    <span class="glyphicon glyphicon glyphicon-edit">
                                    </span>
                                    ????????????????????????????????? << </a>
                                        <a href="img/admission-1.pdf" class="list-group-item"  target="_blank">
                                            <span class="glyphicon glyphicon-send">
                                            </span>
                                            ??????????????????????????????????????????????????????
                                        </a>
                                        <a class="list-group-item" href="img/manual_V3.pdf" target="_blank">
                                            <span class="glyphicon glyphicon-book">
                                            </span>
                                            ??????????????????????????????????????????
                                        </a>
                                        <a class="list-group-item" href="status.php" target="_self">
                                            <span class="glyphicon glyphicon-check">
                                            </span>
                                            ?????????????????????????????????????????????????????????
                                        </a>
                                        <a class="list-group-item" href="#" alt="?????????????????????????????????????????????">
                                            <span class="glyphicon glyphicon-print">
                                            </span>
                                            ????????????????????????????????????
                                        </a>
                            </div>  <!--/.list-group left menu -->

                            <div class="list-group">
                                <p class="list-group-item "
                                    style="background-color:#c7254e;border-bottom:#fcc6d3 2px solid; background:#c7254e; color: #fff; ">
                                    <span class="glyphicon glyphicon-education">
                                    </span>
                                    <script src="js/country.js"></script>
                                    ?????????????????????????????????????????????????????????????????? Online
                                </p>
                                
                                <div class="list-group-item" style="background-color: #fcf6a3;">
                                    <div style="float: left;">
                                        <span class="glyphicon glyphicon-send"></span>
                                        ??????????????????????????? ???.1
                                    </div>
                                    <div class="text-right">

                                        <span class="glyphicon glyphicon-user"></span>                                        
                                        <span id="showDataM1"> </span>
                                    </div>
                                </div>
                                <div class="list-group-item" style="background-color: #fcf6d9;">
                                    <div style="float: left;">
                                        <span class="glyphicon glyphicon-map-marker"></span>
                                        ???????????????????????????????????? ???
                                    </div>
                                    <div class="text-right">
                                        <span class="glyphicon glyphicon-user"></span>
                                        <span id="showDataM12"> </span>
                                    </div>
                                </div>
                                <div class="list-group-item" style="background-color: #fcf6d9;">
                                    <div style="float: left;">
                                        <span class="glyphicon glyphicon-map-marker"></span>
                                        ??????????????????????????????????????? ???
                                    </div>
                                    <div class="text-right">
                                        <span class="glyphicon glyphicon-user"></span>
                                        <span id="showDataM11"> </span>
                                    </div>
                                </div>

                                <div class="list-group-item" style="background-color: #FAB9CD;">
                                    <div style="float: left;">
                                        <span class="glyphicon glyphicon-send"></span>
                                        ??????????????????????????? ???.4
                                    </div>
                                    <div class="text-right">
                                        <span class="glyphicon glyphicon-user"></span>
                                        <span id="showDataM4"> </span>
                                    </div>
                                </div>
                                <div class="list-group-item" style="background-color: #fce8ee;">
                                    <div style="float: left;">
                                        <span class="glyphicon glyphicon-map-marker"></span>
                                        ?????????????????????????????????-??????????????????????????????
                                    </div>
                                    <div class="text-right">
                                        <span class="glyphicon glyphicon-user"></span>
                                        <span id="showDataM41"> </span>
                                    </div>
                                </div>
                                
                                <div class="list-group-item" style="background-color: #fce8ee;">
                                        <div style="float: left;">
                                            <span class="glyphicon glyphicon-map-marker"></span>
                                            ?????????????????????????????????-?????????????????????????????????
                                        </div>
                                        <div class="text-right">
                                            <span class="glyphicon glyphicon-user"></span>
                                            <span id="showDataM42">  </span>
                                        </div>
                                </div>

                                <div class="list-group-item" style="background-color: #fce8ee;">
                                    <div style="float: left;">
                                        <span class="glyphicon glyphicon-map-marker"></span>
                                        ??????????????????-?????????
                                    </div>
                                    <div class="text-right">
                                        <span class="glyphicon glyphicon-user"></span>
                                        <span id="showDataM43"> </span>
                                    </div>
                                </div>

                                <div class="list-group-item" style="background-color: #fce8ee;">
                                    <div style="float: left;">
                                        <span class="glyphicon glyphicon-map-marker"></span>
                                        ??????????????????-?????????????????????
                                    </div>
                                    <div class="text-right">
                                        <span class="glyphicon glyphicon-user"></span>
                                        <span id="showDataM44"> </span>
                                    </div>
                                </div>

                                <div class="list-group-item" style="background-color: #fce8ee;">
                                    <div style="float: left;">
                                        <span class="glyphicon glyphicon-map-marker"></span>
                                        ??????????????????-????????????????????????
                                    </div>
                                    <div class="text-right">
                                        <span class="glyphicon glyphicon-user"></span>
                                        <span id="showDataM45"> </span>
                                    </div>
                                </div> 

                                <div class="list-group-item" style="background-color: #fce8ee;">
                                    <div style="float: left;">
                                        <span class="glyphicon glyphicon-map-marker"></span>
                                        ??????????????????-??????????????????
                                    </div>
                                    <div class="text-right">
                                        <span class="glyphicon glyphicon-user"></span>
                                        <span id="showDataM46"> </span>
                                    </div>
                                </div>

                                <div class="list-group-item" style="background-color: #fce8ee;">
                                    <div style="float: left;">
                                        <span class="glyphicon glyphicon-map-marker"></span>
                                        ?????????-???????????????
                                    </div>
                                    <div class="text-right">
                                        <span class="glyphicon glyphicon-user"></span>
                                        <span id="showDataM47"> </span>
                                    </div>
                                </div>

                                <div class="list-group-item" style="background-color: #fcf762;">
                                    <div style="float: left;">
                                        <span class="glyphicon glyphicon-thumbs-up"></span>
                                        <B>??????????????????????????????</B>
                                    </div>
                                    <div class="text-right">
                                        <span class="glyphicon glyphicon-user"></span>
                                        <span id="showDataAll"> </span>
                                    </div>
                                </div>
                            </div> <!-- list-group report student -->

                            <div class="thumbnail"><a id="regis"></a>
                                <a href="#"
                                    target="_blank"><img alt="" class="img-responsive" src="img/facebook_fan_page1.gif">
                                </a>
                                <a href="" target="_blank"><img alt="" class="img-responsive" src=""></a>
                            </div> <!--/.thumbnail facebook left menu -->

            </div> <!-- end col-md-3 -->

            <!-- Right content -->
            <div class="col-md-9">
                <div class="thumbnail">                  
                    <img alt="" class="img-responsive" src="img/bannerFanpage.jpg">
                        <?php 
                            if (isset($_SESSION["direct"]) && ($_SESSION["direct"] == 1)) { //??????????????????????????????????????????????????? Login ?????????????????????
                                if (isset($_SESSION["NaID"])) {
                                    if (!isset($_POST['btnNext7'])) { // ???????????????????????????????????????????????????????????????????????????????????????
                                        if (isset($_GET['adminID'])) {
                                            $_SESSION["NaID"] = $_GET['adminID'];
                                        }
                                            include "fn.php";
                                            selectfirst($nid);

                                        if (isset($_GET["edite"])) { // ?????????????????????????????????
                                            /* if(isset($_POST["btnEdite1"])){ //????????????????????????????????? Button1
                                            $nid  = $_SESSION["NaID"];
                                            $data = $_POST["lbClass"];
                                            updatedatabt1($nid, $data);
                                            }*/
                                            if (!isset($_GET['Refresh'])) {
                                                include "section/1.php";
                                            }
                                            if (isset($_POST["btnEdite2"])) { //????????????????????????????????? Button2
                                                $nid = $_SESSION["NaID"];
                                                $data[1] = $_POST['lbSname'];
                                                $data[2] = htmlspecialchars(trim($_POST['txtFname']));
                                                $data[3] = htmlspecialchars(trim($_POST['txtLname']));
                                                $data[4] = htmlspecialchars(trim($_POST['txtBirthday']));
                                                $data[5] = $_POST['lbSex'];
                                                $data[6] = $_POST['lbReli'];
                                                $data[7] = htmlspecialchars(trim($_POST['txtReginal']));
                                                $data[8] = $_POST['lbReginality'];
                                                $data[9] = $_POST['lbGroupblood'];
                                                if (isset($_SESSION['SAS1'])) {
                                                    if ($_SESSION['SAS1'][1] == "4") {
                                                        $data[10] = $_POST['txtstuIDold'];
                                                    }
                                                }
                                                updatedatabt2($nid, $data);
                                            }
                                            include "section/sec/2.php";

                                            if (isset($_POST["btnEdite3"])) { //????????????????????????????????? Button2
                                                $nid = $_SESSION["NaID"];
                                                $data[1] = htmlspecialchars(trim($_POST['txtHaddress']));
                                                $data[2] = htmlspecialchars(trim($_POST['txtMoo']));
                                                $data[3] = htmlspecialchars(trim($_POST['txtSoi']));
                                                $data[4] = $_POST['lbProvince']; // ID ?????????????????????
                                                $data[5] = $_POST['lbAmphor']; //ID ???????????????
                                                $data[6] = $_POST['lbDistrict']; //ID ????????????
                                                $data[7] = htmlspecialchars(trim($_POST['txtTel']));
                                                $data[8] = htmlspecialchars(trim($_POST['txtEmail']));
                                                $data[9] = htmlspecialchars(trim($_POST['txtRoad']));
                                                updatedatabt3($nid, $data);
                                            }
                                            include "section/sec/3.php";

                                            if (isset($_POST["btnEdite4"])) { //????????????????????????????????? Button2
                                                $nid = $_SESSION["NaID"];
                                                $data[1] = $_POST['raOption'];
                                                if (isset($_POST['lbSpecial'])) {$data[2] = $_POST['lbSpecial'];} else { $data[2] = "";}
                                                if (isset($_POST['txtaMore'])) {
                                                    $data[3] = htmlspecialchars($_POST['txtaMore']); //txta
                                                } else { $data[3] = "";}

                                                updatedatabt4($nid, $data);
                                            }
                                            include "section/sec/4.php";

                                            if (isset($_POST["btnEdite4-1"])) { //????????????????????????????????? Button2
                                                $nid = $_SESSION["NaID"];
                                                $data[1] = $_POST['raOptionspe'];

                                                updatedatabt41($nid, $data);
                                            }
                                            // include "section/sec/4-1.php";

                                            if (isset($_POST["btnEdite4-2"])) { //????????????????????????????????? Button2
                                                $nid = $_SESSION["NaID"];
                                                $data[1] = $_POST['lbMore'];

                                                updatedatabt42($nid, $data);
                                            }
                                            // include "section/sec/4-2.php";

                                            if (isset($_POST["btnEdite5"])) { //????????????????????????????????? Button2
                                                $nid = $_SESSION["NaID"];
                                                $datadd[1] = $_POST['lbPlan1'];
                                                $datadd[2] = $_POST['lbPlan2'];
                                                $datadd[3] = $_POST['lbPlan3'];
                                                $datadd[4] = $_POST['lbCome'];
                                                //echo  $_SESSION["newdata"] = $_POST['lbPlan3'];
                                                updatedatabt5($nid, $datadd);
                                            }
                                            include "section/sec/5.php";

                                            if (isset($_POST["btnEdite6"])) { //????????????????????????????????? Button2
                                                $nid = $_SESSION["NaID"];
                                                $data[1] = htmlspecialchars(trim($_POST['txtLschool']));
                                                $data[2] = htmlspecialchars(trim($_POST['txtGPA']));
                                                $data[3] = htmlspecialchars(trim($_POST['lbPROVINCE_SC']));
                                                $data[4] = htmlspecialchars(trim($_POST['txtschoolsecond']));
                                                updatedatabt6($nid, $data);
                                            }
                                            include "section/6.php";

                                            if (isset($_POST["btnEdite7"])) { //????????????????????????????????? Button2
                                                $nid = $_SESSION["NaID"];
                                                $data[1] = htmlspecialchars(trim($_POST['txtSnamefa']));
                                                $data[2] = htmlspecialchars(trim($_POST['txtFnamefa']));
                                                $data[3] = htmlspecialchars(trim($_POST['txtLnamefa']));
                                                $data[4] = htmlspecialchars(trim($_POST['txtTelfa']));
                                                $data[5] = htmlspecialchars(trim($_POST['lbSnamema']));
                                                $data[6] = htmlspecialchars(trim($_POST['txtFnamema']));
                                                $data[7] = htmlspecialchars(trim($_POST['txtLnamema']));
                                                $data[8] = htmlspecialchars(trim($_POST['txtTelma']));
                                                $data[9] = $_POST['lbStatus'];
                                                // $data[9] = $_POST['lbStatus'];
                                                $data[10] = $_POST['lbFaOccupation'];
                                                $data[11] = $_POST['lbMaOccupation'];
                                                $data[12] = $_POST['raTypepa'];
                                                if (isset($_POST['txtFnamepa']) && ($_POST['txtFnamepa'] != "")) {
                                                    $data[13] = $_POST['txtSnamepa'];
                                                    $data[14] = $_POST['txtFnamepa'];
                                                    $data[15] = $_POST['txtLnamepa'];
                                                    $data[16] = $_POST['txtTelpa'];
                                                    $data[17] = $_POST['lbPaOccupation'];
                                                    $data[18] = $_POST['lbRelation'];
                                                }
                                                updatedatabt7($nid, $data);
                                            }
                                            include "section/7.php";

                                        }
                                    }

                                }

                                if (isset($_POST['btnNext1'])) {
                                    $_SESSION['SAS1'][1] = $_POST['lbClass']; //lb

                                    if (!isset($_POST['btnNext2'])) {
                                        if (!isset($_POST['btnNext3'])) {
                                            if (!isset($_POST['btnNext4']) && !isset($_POST['btnNext4-1']) && !isset($_POST['btnNext4-2'])) {
                                                if (!isset($_POST['btnNext5'])) {
                                                    if (!isset($_POST['btnNext6'])) {
                                                        if (!isset($_POST['btnNext7'])) {
                                                            include 'section/breadcrumb.php';
                                                            include 'section/sec/2.php';
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }

                                if (isset($_GET['Refresh'])) {
                                    include 'section/breadcrumb.php';
                                    include 'section/sec/3.php';
                                }
                                if (isset($_POST['btnNext2'])) {
                                    // ???????????? 4 ??????

                                    if (!isset($_POST['btnNext1'])) {
                                        if (!isset($_POST['btnNext3'])) {
                                            if (!isset($_POST['btnNext4']) && !isset($_POST['btnNext4-1']) && !isset($_POST['btnNext4-2'])) {
                                                if (!isset($_POST['btnNext5'])) {
                                                    if (!isset($_POST['btnNext6'])) {
                                                        if (!isset($_POST['btnNext7'])) {
                                                            include 'section/breadcrumb.php';
                                                            include 'section/sec/3.php';

                                                            $_SESSION['SAS4'][1] = $_POST['lbSname'];
                                                            $_SESSION['SAS4'][2] = htmlspecialchars(trim($_POST['txtFname']));
                                                            $_SESSION['SAS4'][3] = htmlspecialchars(trim($_POST['txtLname']));
                                                            $_SESSION['SAS4'][4] = htmlspecialchars(trim($_POST['txtBirthday']));
                                                            $_SESSION['SAS4'][5] = $_POST['lbSex'];
                                                            $_SESSION['SAS4'][6] = $_POST['lbReli'];
                                                            $_SESSION['SAS4'][7] = htmlspecialchars(trim($_POST['txtReginal']));
                                                            $_SESSION['SAS4'][8] = $_POST['lbReginality'];
                                                            $_SESSION['SAS4'][9] = $_POST['lbGroupblood'];
                                                            $_SESSION['SAS4'][10] = $_POST['txtstuIDold'];

                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }

                                if (isset($_POST['btnNext3'])) {
                                    $_SESSION['SAS5'][1] = htmlspecialchars(trim($_POST['txtHaddress']));
                                    $_SESSION['SAS5'][2] = htmlspecialchars(trim($_POST['txtMoo']));
                                    $_SESSION['SAS5'][3] = htmlspecialchars(trim($_POST['txtSoi']));
                                    $_SESSION['SAS5'][4] = $_POST['lbProvince']; // ID ?????????????????????
                                    $_SESSION['SAS5'][5] = $_POST['lbAmphor']; //ID ???????????????
                                    $_SESSION['SAS5'][6] = $_POST['lbDistrict']; //ID ????????????
                                    $_SESSION['SAS5'][7] = htmlspecialchars(trim($_POST['txtTel']));
                                    $_SESSION['SAS5'][8] = htmlspecialchars(trim($_POST['txtEmail']));
                                    $_SESSION['SAS5'][9] = htmlspecialchars(trim($_POST['txtRoad']));

                                    if (!isset($_POST['btnNext1'])) {
                                        if (!isset($_POST['btnNext2'])) {
                                            if (!isset($_POST['btnNext4']) && !isset($_POST['btnNext4-1']) && !isset($_POST['btnNext4-2'])) {
                                                if (!isset($_POST['btnNext5'])) {
                                                    if (!isset($_POST['btnNext6'])) {
                                                        if (!isset($_POST['btnNext7'])) {
                                                            include 'section/breadcrumb.php';
                                                            include 'section/sec/4.php';
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }

                                if (isset($_REQUEST['btnNext4'])) {
                                    $_SESSION['SAS2'][1] = $_POST['raOption'];
                                    
                                    if (!isset($_POST['btnNext1'])) {
                                        if (!isset($_POST['btnNext2'])) {
                                            if (!isset($_POST['btnNext3'])) {
                                                if (!isset($_POST['btnNext5'])) {
                                                    if (!isset($_POST['btnNext6'])) {
                                                        if (!isset($_POST['btnNext7'])) {
                                                            include 'section/breadcrumb.php';
                                                                
                                                                    $checkspe = "????????????????????????????????????????????????????????????????????????????????????";
                                                                    if(strcmp($_SESSION['SAS2'][1],$checkspe) == 0){
                                                                        include 'section/sec/4-1.php';   
                                                                    }else{
                                                                        include 'section/sec/5.php';
                                                                    }
                                                                
                                                                

                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }

                                if (isset($_POST['btnNext4-1'])) {
                                    $_SESSION['SAS2'][2] = $_POST['raOptionspe']; //rdo
                                    if (!isset($_POST['btnNext1'])) {
                                        if (!isset($_POST['btnNext2'])) {
                                            if (!isset($_POST['btnNext3'])) {
                                                if (!isset($_POST['btnNext4'])) {
                                                    if (!isset($_POST['btnNext6'])) {
                                                        if (!isset($_POST['btnNext7'])) {
                                                            if (!isset($_POST['btnNext5'])) {
                                                                $checkspemore1 = "???????????????????????????";
                                                                $checkspemore2 = "????????????????????????";
                                                                $checkspemore3 = "????????????????????????";
                                                                $checkspemore4 = "?????????????????????????????????";
                                                                if(strcmp($_SESSION['SAS2'][2],$checkspemore1) == 0 || 
                                                                    strcmp($_SESSION['SAS2'][2],$checkspemore2) == 0 ||
                                                                    strcmp($_SESSION['SAS2'][2],$checkspemore3) == 0 ||
                                                                    strcmp($_SESSION['SAS2'][2],$checkspemore4) == 0
                                                                ){
                                                                    include 'section/breadcrumb.php';
                                                                    include 'section/sec/5.php';

                                                                }else{                                                                
                                                                    include 'section/breadcrumb.php';
                                                                    include 'section/sec/4-2.php';                                                                      
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (isset($_POST['btnNext4-2'])) {
                                    $_SESSION['SAS2'][3] = $_POST['lbMore']; //lb
                                    if (!isset($_POST['btnNext1'])) {
                                        if (!isset($_POST['btnNext2'])) {
                                            if (!isset($_POST['btnNext3'])) {
                                                if (!isset($_POST['btnNext4'])) {
                                                    if (!isset($_POST['btnNext6'])) {
                                                        if (!isset($_POST['btnNext7'])) {
                                                            if (!isset($_POST['btnNext5'])) {
                                                                if (!isset($_POST['btnNext4-1'])) { 
                                                                include 'section/breadcrumb.php';
                                                                include 'section/sec/5.php';
                                                                }   
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }

                                if (isset($_POST['btnNext5'])) {
                                    $_SESSION['SAS3'][4] = $_POST['lbCome']; //lb
                                    $_SESSION['SAS3'][1] = $_POST['lbPlan1'];
                                    $_SESSION['SAS3'][2] = $_POST['lbPlan2'];
                                    if (isset($_POST['lbPlan3'])) {$_SESSION['SAS3'][3] = $_POST['lbPlan3'];} else { $_SESSION['SAS3'][3] = "";}
                                    $_SESSION['SAS3'][5] = $_POST['lbPlan4'];
                                    $_SESSION['SAS3'][6] = $_POST['lbPlan5'];
                                    if (!isset($_POST['btnNext1'])) {
                                        if (!isset($_POST['btnNext2'])) {
                                            if (!isset($_POST['btnNext3'])) {
                                                if (!isset($_POST['btnNext4'])) {
                                                    if (!isset($_POST['btnNext6'])) {
                                                        if (!isset($_POST['btnNext7'])) {
                                                            include 'section/breadcrumb.php';
                                                            include 'section/6.php';
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
                                    $_SESSION['SAS6'][4] = htmlspecialchars(trim($_POST['lbPROVINCE_SC']));
                                    $_SESSION['SAS6'][5] = htmlspecialchars(trim($_POST['txtschoolsecond']));

                                    if (!isset($_POST['btnNext1'])) {
                                        if (!isset($_POST['btnNext2'])) {
                                            if (!isset($_POST['btnNext3'])) {
                                                if (!isset($_POST['btnNext4'])) {
                                                    if (!isset($_POST['btnNext5'])) {
                                                        if (!isset($_POST['btnNext7'])) {
                                                            include 'section/breadcrumb.php';
                                                            include 'section/7.php';
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }

                                if (isset($_POST['btnNext7'])) { // insert data student to DB 
                                    $_SESSION['SAS7'][1] = htmlspecialchars(trim($_POST['txtSnamefa']));
                                    $_SESSION['SAS7'][2] = htmlspecialchars(trim($_POST['txtFnamefa']));
                                    $_SESSION['SAS7'][3] = htmlspecialchars(trim($_POST['txtLnamefa']));
                                    $_SESSION['SAS7'][4] = htmlspecialchars(trim($_POST['txtTelfa']));
                                    $_SESSION['SAS7'][5] = htmlspecialchars(trim($_POST['lbSnamema']));
                                    $_SESSION['SAS7'][6] = htmlspecialchars(trim($_POST['txtFnamema']));
                                    $_SESSION['SAS7'][7] = htmlspecialchars(trim($_POST['txtLnamema']));
                                    $_SESSION['SAS7'][8] = htmlspecialchars(trim($_POST['txtTelma']));
                                    $_SESSION['SAS7'][9] = $_POST['lbStatus'];
                                    $_SESSION['SAS7'][10] = $_POST['lbFaOccupation'];
                                    $_SESSION['SAS7'][11] = $_POST['lbMaOccupation'];
                                    $_SESSION['SAS7'][12] = $_POST['raTypepa'];
                                    if (isset($_POST['txtFnamepa']) && ($_POST['txtFnamepa'] != "")) {
                                        $_SESSION['SAS7'][13] = $_POST['txtSnamepa'];
                                        $_SESSION['SAS7'][14] = $_POST['txtFnamepa'];
                                        $_SESSION['SAS7'][15] = $_POST['txtLnamepa'];
                                        $_SESSION['SAS7'][16] = $_POST['txtTelpa'];
                                        $_SESSION['SAS7'][17] = $_POST['lbPaOccupation'];
                                        $_SESSION['SAS7'][18] = $_POST['lbRelation'];
                                    }
                                    $data7[1] = htmlspecialchars(trim($_POST['txtSnamefa']));
                                    $data7[2] = htmlspecialchars(trim($_POST['txtFnamefa']));
                                    $data7[3] = htmlspecialchars(trim($_POST['txtLnamefa']));
                                    $data7[4] = htmlspecialchars(trim($_POST['txtTelfa']));
                                    $data7[5] = htmlspecialchars(trim($_POST['lbSnamema']));
                                    $data7[6] = htmlspecialchars(trim($_POST['txtFnamema']));
                                    $data7[7] = htmlspecialchars(trim($_POST['txtLnamema']));
                                    $data7[8] = htmlspecialchars(trim($_POST['txtTelma']));
                                    $data7[9] = $_POST['lbStatus'];
                                    $data7[10] = $_POST['lbFaOccupation'];
                                    $data7[11] = $_POST['lbMaOccupation'];
                                    $data7[12] = $_POST['raTypepa'];
                                    if (isset($_POST['txtFnamepa']) && ($_POST['txtFnamepa'] != "")) {
                                        $data7[13] = $_POST['txtSnamepa'];
                                        $data7[14] = $_POST['txtFnamepa'];
                                        $data7[15] = $_POST['txtLnamepa'];
                                        $data7[16] = $_POST['txtTelpa'];
                                        $data7[17] = $_POST['lbPaOccupation'];
                                        $data7[18] = $_POST['lbRelation'];
                                    }

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
                        <?php  
                            }
                            else {?>
                                <div class="caption-full">                                    
                                    <?php 
                                        if ((isset($_GET['re']) && $_GET['re'] == "register") || isset($_POST['register'])) {?>
                                            <h3 class="text-center">
                                            <p style="color: #23527c;">
                                                <span class="glyphicon glyphicon-plus"></span>
                                                ????????????????????????????????????????????????????????????
                                            </p>
                                            </h3>
                                    <?php } 
                                        else {?>
                                            <div class="thumbnail">
                                                <img alt="" class="img-responsive" src="img/process.jpg">
                                            </div>                                            
                                    <?php 
                                        }
                                    ?>

                                    <br />

                                    <?php 
                                        if (!isset($_GET['re']) && !isset($_POST['register'])) {?>
                                        <?php if (!isset($_GET['regisdone'])) {?>
                                                    <div class="alert alert-warning text-center" role="alert">
                                                        <p style="font-size: 20px;">???????????????????????????????????????????????????????????????????????????????????????????????? ?</p>
                                                        <p style="font-size: 20px;">
                                                            <a href="index.php?re=register">
                                                            <span class="glyphicon glyphicon-plus" aria-hidden="true">
                                                            </span>??????????????????????????????????????????????????????</a>
                                                        </p>
                                                    </div>
                                        <?php 
                                                }?>
                                    <?php 
                                        }?>
                                    <?php 
                                        if (isset($_POST["login"], $_POST['txtRegisno'], $_POST['txtPwd'])) {
                                            include "conn.php";
                                            $ldata[0] = htmlspecialchars(trim($_POST['txtRegisno']));
                                            $ldata[1] = htmlspecialchars(trim($_POST['txtPwd']));
                                            include "section/login.php";
                                            logindata($ldata);
                                        }

                                        if (isset($_POST["register"], $_POST['txtRegisno'], $_POST['txtPwd'], $_POST['txtIDCard'],
                                            $_POST['i_verify'])) { // ????????????????????????????????????????????????????????????????????????
                                            include "conn.php";
                                            include "fn.php";
                                            $data[0] = htmlspecialchars(trim($_POST['txtRegisno']));
                                            $data[1] = htmlspecialchars(trim($_POST['txtPwd']));
                                            $data[2] = htmlspecialchars(trim($_POST['txtIDCard']));

                                            if ($_POST['i_verify'] == @array_sum($_SESSION['num_to_check'])) { //???????????????????????????????????????????????????????????? ????????????????????????????????????
                                                $_SESSION['num_to_check'][0] = rand(1, 9);
                                                $_SESSION['num_to_check'][1] = rand(1, 9);

                                                $txtregisno = $_POST['txtRegisno'];
                                                //$dt = checktxtRegisno($txtregisno);
                                                $dt = checktxtRegisno("A02C4G");
                                                if ($dt > 0) {
                                                    insertregister($data); // ?????????????????????????????????????????????????????????
                                                    mysql_close();
                                                } else {?>
                                                            <div class="alert alert-danger text-center" role="alert">
                                                                <i><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                                                    ???????????????????????????????????????????????????????????????????????? ??????????????????????????????????????? 6 ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                                                                </i>
                                                            </div>
                                                            <?php }
                                            } else {
                                                $_SESSION['num_to_check'][0] = rand(1, 9);
                                                $_SESSION['num_to_check'][1] = rand(1, 9);
                                                ?>

                                                            <div class="alert alert-danger text-center" role="alert">
                                                                <i><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                                                    ????????????????????????????????????
                                                                </i>
                                                            </div>

                                            <?php 
                                            }

                                        }

                                        if ((isset($_GET['re']) && $_GET['re'] == "register") || isset($_POST['register'])) {
                                            # ??????????????????????????????????????????????????????
                                            $_SESSION['num_to_check'][0] = rand(1, 9);
                                            $_SESSION['num_to_check'][1] = rand(1, 9);
                                            if (!isset($_SESSION["SUCCESS_REGISTER"])) { //????????????????????????????????????????????????????????????????????????????????????
                                                include "section/register.php"; //include ????????????????????????????????????????????????
                                            } else { //?????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????? Login
                                                // echo "5555555555555555555";
                                                if (!isset($_POST['register'])) {
                                                    if (isset($_SESSION["REGISNAID"])) {
                                                        include "conn.php";
                                                        include "fn.php"; //include ????????????????????????????????????????????????
                                                        SelectAfterRegister($_SESSION["REGISNAID"]);
                                                    }
                                                }
                                            }
                                        } else { // if (!isset($_GET["re"])) {  // ?????????????????????????????????????????????????????????????????? ????????????????????? LOGIN FORM
                                            include "loginform.php"; // FORM LOGIN HTML
                                        ?><?php 
                                        } //else 
                                        ?>
                                </div><!-- /.caption-full -->
                        <?php 
                            }?>
                    </img>
                </div><!-- /.thumbnail right content-->

            </div><!-- /.col-md-9 -->
            <!-- end right content -->
        </div> <!-- /.end row -->
    </div> <!-- /.end container -->
    <!-- end -->

    <!-- Footer --> 
    <div class="container">
        <hr>  
        <footer>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>
                        ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? </br>
                        Copyright ?? ICT Banglamung School
                    </p>
                </div>
            </div>
        </footer>
        </hr>
    </div>
    <!-- /.container footer -->
    <!-- End footer -->                                     

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
    <!--script src="js/jquery.js"></script-->
    <!--script src="//getbootstrap.com/2.3.2/assets/js/google-code-prettify/prettify.js"></script-->
    <script src="datepicker/js/bootstrap-datepicker.js"></script>
    <script src="datepicker/js/bootstrap-datepicker-thai.js"></script>
    <script src="datepicker/js/locales/bootstrap-datepicker.th.js"></script>
    <script src="js/validator.js"></script>
    <script src="js/sc.js"></script>

    <script type="text/javascript">
    $(function() {
        setInterval(function() { // ??????????????????????????????????????? javascript ????????????????????????????????? ??? 30 ??????????????????

        }, 1000);
    });
    </script>

    <script type="text/javascript">
    $(function() {
        setInterval(function() { // ??????????????????????????????????????? javascript ????????????????????????????????? ??? 30 ??????????????????
            $.getJSON("fn_statistic.php", function(data) {
                // if(data!=null && data.length>0){ // ?????????????????????????????????
                // ???????????????????????????????????????????????????????????????????????????????????????????????????????????????
                $("span#showDataM1").html(data[0].one);     // ???.1 ?????????????????????
                $("span#showDataM12").html(data[0].two);    // ???.1 ???????????????
                $("span#showDataM11").html(data[0].three);  // ???.1 ??????????????????
                $("span#showDataM13").html(data[0].four);   // Coming soon
                $("span#showDataM14").html(data[0].five);   // Coming soon

                // ??????????????? ???.4
                $("span#showDataM4").html(data[0].six);     //???.4 ?????????????????????
                $("span#showDataM41").html(data[0].seven);  //??????????????????-???????????????
                $("span#showDataM42").html(data[0].eigth);  //??????????????????-????????????
                $("span#showDataM43").html(data[0].nine);   //?????????
                $("span#showDataM44").html(data[0].ten);    //????????????????????? 
                $("span#showDataM45").html(data[0].eleven); //????????????????????????
                $("span#showDataM46").html(data[0].twelve); //??????????????????
                $("span#showDataM47").html(data[0].thirteen); //?????????-???????????????
                $("span#showDataAll").html(data[0].fourteen);     //?????????????????????
                // ???????????????????????????????????????????????????????????????????????? json ????????? ???????????? $.each() ????????????????????????
                //$.each(data,function(i,k){
                // $("#showData").append(data[i].province_name+"<br>");
                //});
                //}
            }).responseText;
        }, 3000);
    });
    </script>

    <script type="text/javascript">
    function KeyCode(objId) {
        if (event.keyCode >= 48 && event.keyCode <= 57 || event.keyCode >= 65 && event.keyCode <=90) 
            //48-57(??????????????????) ,65-90(Eng ???????????????????????????????????? ) ,97-122(Eng ????????????????????????????????????)
        {
            return true;
        } else {
            //alert("???????????????????????????????????? a-z ????????? 0-9");
            return false;
        }
    }
    </script>
    <?php

if (isset($_SESSION["Role"])) {
    if ($_SESSION["Role"] == 1) {
        include './excel/exportexceljack.php';
    }
}
?>
</body>

</html>