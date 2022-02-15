<?php
    session_start();
    header("content-type: text/html; charset=utf-8");
    header ("Expires: Wed, 21 Aug 2013 13:13:13 GMT");
    header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header ("Cache-Control: no-cache, must-revalidate");
    header ("Pragma: no-cache");

    include "config.php";
    conndb();

    $data = $_GET['data'];
    $val = $_GET['val'];

      //echo $_SESSION["EDITE"][20];
         if ($data=='province') { 
              echo "<select name='lbProvince' class=\"form-control input-lg\" onChange=\"dochange('amphur', this.value)\" required=''>";
              echo "<option value=''>- เลือกจังหวัด -</option>\n";
              $result=mysqli_query($conn, "select * from province order by PROVINCE_NAME");
              while($row = mysqli_fetch_array($result)){ 
                   //echo "<option value='$row[PROVINCE_ID]' >$row[PROVINCE_NAME]</option>" ; ?>
                  <option value="<?php echo $row["PROVINCE_ID"];?>"
        <?php  if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][20] == $row["PROVINCE_ID"])
                 {  echo"selected"; }} ?> ><?php echo $row["PROVINCE_NAME"]; ?>
                 </option>
      <?php   }
         } else if ($data=='amphur') {

              echo "<select name='lbAmphor' class=\"form-control input-lg\" onChange=\"dochange('district', this.value)\" >";

              echo "<option value=''>- เลือกอำเภอ -</option>\n"; 
          if(isset($val)){    

              $result=mysqli_query($conn, "SELECT * FROM amphur WHERE PROVINCE_ID= '$val' ORDER BY AMPHUR_NAME");
              while($row = mysqli_fetch_array($result)){

                   echo "<option value=\"$row[AMPHUR_ID]\" >$row[AMPHUR_NAME]</option> " ;

              }

          }else{ // ถ้าไม่พบตัวแปร $Val
              if(isset($_SESSION["EDITE"])){   //ถ้าพบตัวแปร แก้ไข  
                //echo 5555555555555555;
                $result=mysqli_query($conn, "SELECT * FROM amphur ORDER BY AMPHUR_NAME");
                while($row = mysqli_fetch_array($result)){ 
                  // echo "<option value=\"$row[AMPHUR_ID]\" >$row[AMPHUR_NAME]</option> " ; ?>
                 <option value="<?php echo $row["AMPHUR_ID"];?>"
        <?php  if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][22] == $row["AMPHUR_ID"])
                 {  echo"selected"; }} ?> ><?php echo $row["AMPHUR_NAME"]; ?>
                 </option>

      <?php      } // end while
              }

            }

         } else if ($data=='district') {
              echo "<select name='lbDistrict' class=\"form-control input-lg\" >\n";
              echo "<option value=''>- เลือกตำบล -</option>\n";
              $result=mysqli_query($conn, "SELECT * FROM district WHERE AMPHUR_ID= '$val' ORDER BY DISTRICT_NAME");
              while($row = mysqli_fetch_array($result)){
                   echo "<option value=\"$row[DISTRICT_ID]\" >$row[DISTRICT_NAME]</option> \n" ;
              }
         }
         echo "</select>\n";

        echo mysqli_error($conn);
        closedb();
?>