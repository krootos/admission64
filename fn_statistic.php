<?php
header("Content-type:text/html; charset=UTF-8");        
header("Cache-Control: no-store, no-cache, must-revalidate");       
header("Cache-Control: post-check=0, pre-check=0", false); 
function selectstatistic(){
    include "conn.php";

                $sql_statis = "SELECT * FROM sas_studentdata";
                $resultsta  = mysql_query($sql_statis);
                $rows       = mysql_num_rows($resultsta);

               // if ($selectdata = mysql_fetch_array($resultstu)) {
                $M1  = 0;
                $M11 = 0;    //ตัวแปรนักเรียนนอกเขตฯ        
                $M12 = 0;    //ตัวแปรนักเรียนในเขตฯ
                $M13 = 0;   
                $M14 = 0;

                $M4  = 0;
                $M41 = 0;
                $M42 = 0;
                $M43 = 0;
                $M44 = 0;
                $M45 = 0;
                $M46 = 0;
                $M47 = 0;
            
                
                $checktype1 = "นักเรียนนอกเขตพื้นที่บริการ";
                $checktype2 = "นักเรียนในเขตพื้นที่บริการ";

                $checktype3 = "วิทยาศาสตร์-คณิตศาสตร์";
                $checktype4 = "วิทยาศาสตร์-คอมพิวเตอร์";
                $checktype5 = "อังกฤษ-จีน";
                $checktype6 = "อังกฤษ-ญี่ปุ่น";
                $checktype7 = "อังกฤษ-เวียดนาม";
                $checktype8 = "อังกฤษ-เกาหลี";
                $checktype9 = "ไทย-สังคม";

                $checksec1   = "1";
                $checksec4   = "4";
                $rowall = $rows;
                while ($row = mysql_fetch_array($resultsta)) {
                  //printf("ID: %s  Name: %d", $row["SID"], $row["DAYCOME"]); 
                  if(strcmp($row["TYPE"],$checksec1)==0){ 
                      $M1++;
                      if(strcmp($row["OPTIONS"],$checktype1)==0){
                        $M12++;
                      }
                      if(strcmp($row["OPTIONS"],$checktype2)==0){
                        $M11++;
                      }
                      if(strcmp($row["OPTIONS"],$checktype3)==0){
                        $M13++;
                      }
                      if(strcmp($row["OPTIONS"],$checktype4)==0){
                        $M14++;
                      }
                  }

                  if(strcmp($row["TYPE"],$checksec4)==0){ 
                      $M4++;
                      if(strcmp($row["PLAN1"],$checktype3)==0){
                        $M41++;
                      }
                      if(strcmp($row["PLAN1"],$checktype4)==0){
                        $M42++;
                      }
                      if(strcmp($row["PLAN1"],$checktype5)==0){
                        $M43++;
                      }
                      if(strcmp($row["PLAN1"],$checktype6)==0){
                        $M44++;
                      }
                      if(strcmp($row["PLAN1"],$checktype7)==0){
                        $M45++;
                      }
                      if(strcmp($row["PLAN1"],$checktype8)==0){
                        $M46++;
                      }
                      if(strcmp($row["PLAN1"],$checktype9)==0){
                        $M47++;
                      }
                  }  
                }
   // mysql_close($connected);    

    return array($M1,$M11,$M12,$M4,$M41,$M42,$M43,$M44,$M45,$M46,$M47,$M1+$M4);
}


list($M1,$M11,$M12,$M4,$M41,$M42,$M43,$M44,$M45,$M46,$M47,$rowall) = selectstatistic();

     $json_data[] = array(
            "one" => $M1,
            "two" => $M11,
            "three" => $M12,
            "four" => $M13,
            "five" => $M14,
            
            "six" => $M4,
            "seven" => $M41,
            "eigth" => $M42,
            "nine" => $M43,
            "ten" => $M44,
            "eleven"  => $M45,
            "twelve"  => $M46,
            "thirteen"  => $M47,
            "fourteen"  => $rowall

     /* echo $M1."<br>";
    echo $M11."<br>";
    echo $M12."<br>";
    echo $M13."<br>";
    echo $M14."<br>";
    echo $M4."<br>";
    echo $M41."<br>";
    echo $M42."<br>";
    echo $M43."<br>";
    echo $M44."<br>"; */

  /*  $a[1] = $M1;
      $a[2] = $M11;
      $a[3] = $M12;
      $a[4] = $M13;
      $a[5] = $M14;
      $a[6] = $M4;
      $a[7] = $M41;
      $a[8] = $M42;
      $a[9] = $M43;
      $a[10] = $M44; */
);
    

// แปลง array เป็นรูปแบบ json string  
if(isset($json_data)){  
    $json= json_encode($json_data);    
    if(isset($_GET['callback']) && $_GET['callback']!=""){    
   echo $_GET['callback']."(".$json.");";        
    }else{    
    echo $json;    
    }    
}

//echo json_encode($a);
?>