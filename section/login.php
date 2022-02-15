  <?php
  
  function logindata($ldata){
    


    include './conn.php';
    mysqli_set_charset($mysqli, "utf8");

    $no = $ldata[0];
    $pwd = $ldata[1];
    $strSQL   = "SELECT * FROM sas_register WHERE RegisNO = '" . $no . "'and RegisPWD = '" . $pwd . "'";
    $objQuery = $mysqli->query($strSQL);

    $objResult = mysqli_fetch_array($objQuery);
    if (!$objResult) {
        ?>
                            <div class="alert alert-danger text-center" role="alert"><i><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> เลขที่ใบสมัครหรือรหัสผ่านไม่ถูกต้อง</i>
                            </div>
   <?php
        $_SESSION["direct"]   = 0;
        session_write_close();

} else {
        $_SESSION["RegisNO"]  = $objResult["RegisNO"];
             $chtype = substr($_SESSION["RegisNO"], 0, 1); //ตรวจสอบเด็กโควต้า
                      if(strcmp($chtype,"C") == 0){
                        $_SESSION["Special_StudentLG"] = 1;
                      }else{
                        $_SESSION["Special_StudentLG"] = 0;
                      }

        $_SESSION["RegisPWD"] = $objResult["RegisPWD"];
        $_SESSION["NaID"]     = $objResult["RegisNaID"]; //เมื่อผ่านการ Login
        $_SESSION["Role"]     = $objResult["Role"];
        $_SESSION["direct"]   = 1;
        session_write_close(); ?>
      
        <script type="text/javascript">
                window.location="index.php";
        </script>
  <?php  }
    $mysqli->close();

}
    ?>
