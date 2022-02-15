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

    <style>
    body {
        margin-top: 20px;
    }

    .loading {
        background-image: url("ajax-loader.gif");
        background-repeat: no-repeat;
        display: none;
        height: 100px;
        width: 100px;
    }
    </style>


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
                            โรงเรียนธาตุนารายณ์วิทยา
                        </a>
                    </li>
                    <li>
                        <a class="navbar-nav" href="chdate.html" target="_blank">
                            <span class="glyphicon glyphicon-modal-window">
                            </span>
                            เช็คข้อมูลประเภทนักเรียน ม.1
                        </a>
                    </li>

                    <?php if (isset($_SESSION["Role"])) {
                            if ($_SESSION["Role"] == 1) {?>
                    <li>
                        <a class="navbar-nav" href="admin/user">
                            <span class="glyphicon glyphicon-globe">
                            </span>
                            เข้าสู่ระบบเจ้าหน้าที่รับสมัคร
                        </a>
                    </li>

                    <?php }
                    }?>

                </ul>
                <?php if (isset($_SESSION["RegisNO"])) {?>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="navbar-nav" href="index.php?ses=destroy"
                            onclick="if(confirm('ยืนยันการ Logout & Reset')) return true; else return false;">
                            เลขที่ใบสมัคร : <?php echo $_SESSION["RegisNO"]; ?>
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

                <div class="list-group">
                    <a class="list-group-item active" href="index.php#regis">
                        <span class="glyphicon glyphicon glyphicon-edit">
                        </span>
                        กรอกใบสมัคร << </a>
                            <a href="img/admission-1.pdf" class="list-group-item" target="_blank">
                                <span class="glyphicon glyphicon-send">
                                </span>
                                ระเบียบการรับสมัคร
                            </a>
                            <a class="list-group-item" href="img/manual_V3.pdf" target="_blank">
                                <span class="glyphicon glyphicon-book">
                                </span>
                                คู่มือการสมัคร
                            </a>
                            <a class="list-group-item" href="#" target="_blank">
                                <span class="glyphicon glyphicon-check">
                                </span>
                                ติดตามสถานะการสมัคร
                            </a>
                            <a class="list-group-item" href="#" alt="เข้าสู่ระบบก่อน">
                                <span class="glyphicon glyphicon-print">
                                </span>
                                พิมพ์ใบสมัคร
                            </a>
                </div>
                <!--/.list-group left menu -->



                <div class="thumbnail"><a id="regis"></a>
                    </a>
                    <a href="" target="_blank"><img alt="" class="img-responsive" src=""></a>
                </div>
                <!--/.thumbnail facebook left menu -->

            </div> <!-- end col-md-3 -->

            <!-- Right content -->
            <div class="col-md-9">
                <div class="thumbnail">
                    <img alt="" class="img-responsive" src="img/bannerFanpage.jpg">
                    <div class="col-md-9"><p> &nbsp;&nbsp;</p></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-inline" name="searchform" id="searchform">
                                    <div class="form-group">
                                        <label for="textsearch">ระบุเลขประจำตัวประชาชน : </label>
                                        <input type="text" name="itemname" id="itemname" class="form-control input-lg"
                                        maxlength="13" onkeyup="javascript:remainLength();" placeholder="เลขประจำตัวประชาชน 13 หลัก !">
                                    </div>
                                    <button type="button" class="btn btn-primary  btn-lg" id="btnSearch">
                                        <span class="glyphicon glyphicon-search"></span>
                                        ค้นหา
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="loading"></div>
                        <div class="row" id="list-data" style="margin-top: 10px;"> </div>
                    </div>
                    <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
                    <script type="text/javascript">
                    $(function() {
                        $("#btnSearch").click(function() {
                            $.ajax({
                                url: "actionStatus.php",
                                type: "post",
                                data: {
                                    itemname: $("#itemname").val()
                                },
                                beforeSend: function() {
                                    $(".loading").show();
                                },
                                complete: function() {
                                    $(".loading").hide();
                                },
                                success: function(data) {
                                    $("#list-data").html(data);
                                }
                            });
                        });
                        $("#searchform").on("keyup keypress", function(e) {
                            var code = e.keycode || e.which;
                            if (code == 13) {
                                $("#btnSearch").click();
                                return false;
                            }
                        });
                    });
                    </script>



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
                        ระบบรับสมัครนักเรียนโรงเรียนธาตุนารายณ์วิทยา </br>
                        Copyright © ICT Banglamung School
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
        setInterval(function() { // เขียนฟังก์ชัน javascript ให้ทำงานทุก ๆ 30 วินาที

        }, 1000);
    });
    </script>

    <script type="text/javascript">
    $(function() {
        setInterval(function() { // เขียนฟังก์ชัน javascript ให้ทำงานทุก ๆ 30 วินาที
            $.getJSON("fn_statistic.php", function(data) {
                // if(data!=null && data.length>0){ // ถ้ามีข้อมูล
                // เราสามารถเลือกข้อมูลบ้างส่วนมาแสดงได้
                $("span#showDataM1").html(data[0].one); // ม.1 ทั้งหมด
                $("span#showDataM12").html(data[0].two); // ม.1 ในเขต
                $("span#showDataM11").html(data[0].three); // ม.1 นอกเขต
                $("span#showDataM13").html(data[0].four); // Coming soon
                $("span#showDataM14").html(data[0].five); // Coming soon

                // ระดับ ม.4
                $("span#showDataM4").html(data[0].six); //ม.4 ทั้งหมด
                $("span#showDataM41").html(data[0].seven); //วิทย์ฯ-คณิตฯ
                $("span#showDataM42").html(data[0].eigth); //วิทย์ฯ-คอมฯ
                $("span#showDataM43").html(data[0].nine); //จีน
                $("span#showDataM44").html(data[0].ten); //ญี่ปุ่น 
                $("span#showDataM45").html(data[0].eleven); //เวียดนาม
                $("span#showDataM46").html(data[0].twelve); //เกาหลี
                $("span#showDataM47").html(data[0].thirteen); //ไทย-สังคม
                $("span#showDataAll").html(data[0].fourteen); //ทั้งหมด
                // เราสามารถวนลูปแสดงข้อมูล json ได้ ด้วย $.each() ฟังก์ขัน
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
        if (event.keyCode >= 48 && event.keyCode <= 57 || event.keyCode >= 65 && event.keyCode <= 90)
        //48-57(ตัวเลข) ,65-90(Eng ตัวพิมพ์ใหญ่ ) ,97-122(Eng ตัวพิมพ์เล็ก)
        {
            return true;
        } else {
            //alert("กรอกได้เฉพาะ a-z และ 0-9");
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