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




                    
					
                    <div class="thumbnail">
                        <!--img class="img-responsive" src="http://placehold.it/800x300" alt=""!-->
                        <img alt="" class="img-responsive" src="img/bannerFanpage.jpg">
					</div>
       
    </body>
</html>
