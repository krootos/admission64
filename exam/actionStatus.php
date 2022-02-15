<?php

  $naid = $_POST['itemname'];

  include "conn.php";
  $sql = "SELECT  NID, TYPE, OPTIONS, SNAME, FNAME, LNAME,TEL, PLAN1, PLAN2, PLAN3
  
  FROM sas_studentdata
  
  where NID = '{$_POST['itemname']}'";


  $query = mysql_query($sql);

 

  


  $sql_ex = "SELECT ExamStuNo, ExamNID, ExamID, b.id, b.ExamBuilding, b.ExamRoomNO
                FROM sas_examno as a
                INNER JOIN sas_exam as b
                ON a.ExamID = b.id
                WHERE a.ExamNID = '" . $_POST['itemname'] . "'";
  
  $resultaz = mysql_query($sql_ex);

  if(mysql_num_rows($resultaz) < 1){
     
    echo' <div class="col-md-8">
          
            <div class="row"> <br/>
              <div class="col-sm-2"></div>
              <div class="col-sm-8">
                <h4>
                  <p class="text-lg-center text-danger">ไม่พบข้อมูล โปรดตรวจสอบเลขประจำตัวประชาชนอีกครั้ง !!!</p>
                </h4>
              </div>
            </div>
        
            
            
          </div>';

  }

  if (mysql_num_rows($resultaz) > 0) {
    $ex = mysql_fetch_assoc($resultaz);
    $_SESSION["EX"][1] = $ex["ExamStuNo"];
    $_SESSION["EX"][2] = $ex["ExamID"];
    $_SESSION["EX"][3] = $ex["ExamBuilding"];
    $_SESSION["EX"][4] = $ex["ExamRoomNO"];


?>
<div class="col-md-8">
    <div class="table-responsive">
        
                <?php $i=1; while ($result = mysql_fetch_assoc($query)) { ?>
                
                <?php $i++; ?>
                <h5>&nbsp;&nbsp;&nbsp;&nbsp;</h5>

                



                
          <table>
              <?php
                    if($ex["ExamStuNo"]!=""){?>
 

                  <!-- รายละเอียดการสอบ -->
                  <tr >                   
                    <td></td>
                    <td > <br/>
                          
                      <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                      
                    
                    </td>

                    <td>
                      <h4 class="text-success">การสมัครเสร็จสมบูรณ์ ผู้สมัครสามารถตรวจสอบข้อมูลสำหรับการเข้าสอบ ได้ที่นี่ >>> </h4>
                    </td>
                    
                  </tr>        
                  <tr>                  
                    <td></td>
                    <td>
                      <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                      <td >
                          
                         
                          
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th scope="col" colspan="4" class="text-center font-weight-bold"><h4>ระดับชั้นมัธยมศึกษาปีที่ <?php echo "  ".$result['TYPE'];?> </h4></th>
                            
                            </tr>
                          </thead>
                          <tbody>

                            <tr>
                              <th  class="text-left font-weight-bold">เลขประจำตัวประชาชน </th>
                              <td colspan ="3"><?php echo " ".$result['NID'];?></td>
                            </tr>

                            <tr>
                              <th scope="row" class="text-left font-weight-bold">ชื่อ - นามสกุล </th>
                              <td colspan ="3"><?php echo " ".$result['SNAME'].$result['FNAME']." ".$result['LNAME'];?></td>
                            
                              
                            </tr>
                            <?php
                              if($result['TYPE']==1){?>
                                   <tr>
                                      <th scope="row" class="text-left font-weight-bold">ประเภท </th>
                                      <td colspan ="3"><?php echo " ".$result['OPTIONS'];?></td>
                                    </tr> 

                              <?php

                              }if(($result['TYPE']=="4")&&($result['OPTIONS']=="โควต้าโรงเรียนเดิม")){?>
                                    <tr>
                                      <th scope="row" class="text-left font-weight-bold">ประเภท </th>
                                      <td colspan ="3"><?php echo " ".$result['OPTIONS'];?></td>
                                    </tr> 

                              
                              <?php
                              }else{?>

                                     <tr>
                                      <th scope="row" class="text-left font-weight-bold">ประเภท </th>
                                      <td colspan ="3">นักเรียนทั่วไป</td>
                                    </tr> 


                              <?php
                              }
                            
                            
                            ?>

                            <?php
                              if(($result['TYPE']=="4")&&($result['OPTIONS']!="โควต้าโรงเรียนเดิม")){?>
                                   <tr>
                                      <th scope="row" class="text-left font-weight-bold">แผนการเรียน </th>
                                      <td colspan ="3">
                                            <?php echo "อันดับ 1 ".$result['PLAN1'];?> <br/>
                                            <?php echo "อันดับ 2 ".$result['PLAN2'];?> <br/>
                                            <?php echo "อันดับ 3 ".$result['PLAN3'];?> <br/>

                                      </td>
                                    </tr> 

                              <?php

                              }if(($result['TYPE']=="4")&&($result['OPTIONS']=="โควต้าโรงเรียนเดิม")){?>

                                    <tr>
                                      <th scope="row" class="text-left font-weight-bold">แผนการเรียน </th>
                                      <td colspan ="3">
                                            <?php echo "".$result['PLAN1'];?> <br/>
                                            

                                      </td>
                                    </tr> 
                              <?php
                              }
                            
                            
                            ?>
                            
                            <tr>
                              <th scope="row" class="text-left font-weight-bold">เลขประจำตัวผู้สมัครสอบ </th>
                                <td colspan ="3"><?php echo " ".$ex["ExamStuNo"];?></td>
                              </tr>

                            <tr>
                              <th scope="row" class="text-left font-weight-bold">สถานที่ </th>
                              <td colspan ="3">
                                  <?php echo " ".$ex["ExamBuilding"];?> <br/>
                                  <?php echo "ห้องสอบที่ ".$ex["ExamID"];?> <br/>
                                  <?php echo "ห้อง ".$ex["ExamRoomNO"];?> <br/>

                                  <?php 
                                      $numExam = substr($ex["ExamStuNo"],2,3);
                                      echo "ลำดับที่ ".$numExam;
                                      
                                      
                                  ?> <br/>

                                  <?php 
                                      $dayExam = $result["TYPE"];
                                      if($dayExam == 1){
                                        echo "สอบวันเสาร์ ที่ 6 มิถุนายน 2563 <br/> เวลา 09.00 น. - 12.00 น.";
                                      }else{
                                        echo "สอบวันอาทิตย์ ที่ 7 มิถุนายน 2563 <br/> เวลา 09.00 น. - 12.00 น.";
                                      }
                                      
                                      
                                  ?> <br/>
                              
                              
                              </td>

                            </tr>

                            <tr>
                              
                              <td colspan ="8" class="text-left font-weight-bold"><b><u class="text-danger">***หมายเหตุ&nbsp;</u></b>
                          ในวันสอบให้นำบัตรประจำตัวประชาชน หรือบัตรอื่นที่มีภาพถ่ายหน้าตรง 
                          และมีเลขประจำตัวประชาชน <br/>ที่ทางราชการออกให้ ใช้แทนบัตรเข้าห้องสอบ

                            </tr>
                          </tbody>
                        </table>
                          
                          
                          <!-- <a href="fpdf/MyPDF/<?php echo "Thatnaraiwittaya-".$_POST['itemname'].".pdf"; ?>" target="_blank">
                            <span class="glyphicon glyphicon-print" aria-hidden="true"></span> พิมพ์ใบสมัคร
                            <?php echo "เลขประจำตัว ".$ex["ExamStuNo"];?></a> -->


                          
                    </td>
                    </td>
                    <td>
                                
                    
                    
                    </td>
                    
                  </tr>  
      
                      <?php
                        }

                ?>     
          </table>


    </div>
  

</div>

    <?php
  }} ?>