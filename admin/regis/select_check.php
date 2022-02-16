<?php 

 $querycheckr1 = " 	SELECT ExamStuNo, ExamNID, ExamID, sd.FNAME, sd.LNAME 
                	FROM sas_examno as examno
                	INNER JOIN sas_studentdata as sd
                	ON examno.ExamNID = sd.NID     
                	WHERE examno.ExamStuNo ='".$c1. "'";

                		if (!$resultcheck1 = mysql_query($querycheckr1)) {
                		exit(mysql_error());
                		}
                    		$rowcheck1 = mysql_num_rows($resultcheck1);
                    		if($rowcheck1 > 0){
                        	$room1 = mysql_fetch_assoc($resultcheck1);
                        	$disbt1 = "disabled=\"disabled\" style=\"color:#000;\"";
                            $colourbt1 =  "btn btn-default";
							//$ch1 = $room1["FNAME"]." ".$room1["LNAME"]."<br>".$c1.'<br><button onclick="UnconfirmExamtest('.$c1.')" class="btn btn-danger">ยกเลิก</button>';	
                            $ch1 = $room1["ExamNID"]."<br>".$room1["FNAME"]." ".$room1["LNAME"]."<br>".$c1;    

                    		}else{
                    			$disbt1="";
                    			$ch1 = $c1;
                            $colourbt1 =  "btn btn-success";
                    		}

 $querycheckr2 = " 	SELECT ExamStuNo, ExamNID, ExamID, sd.FNAME, sd.LNAME 
                	FROM sas_examno as examno
                	INNER JOIN sas_studentdata as sd
                	ON examno.ExamNID = sd.NID     
                	WHERE examno.ExamStuNo ='".$c2. "'";

                		if (!$resultcheck2 = mysql_query($querycheckr2)) {
                		exit(mysql_error());
                		}
                    		$rowcheck2 = mysql_num_rows($resultcheck2);
                    		if($rowcheck2 > 0){
                        	$room2 = mysql_fetch_assoc($resultcheck2);
                        	$disbt2 = "disabled=\"disabled\" style=\"color:#000;\"";
                            $colourbt2 =  "btn btn-default";
							//$ch2 = $room2["FNAME"]." ".$room2["LNAME"]."<br>".$c2.'<br><button onclick="UnconfirmExamtest('.$c2.')" class="btn btn-danger">ยกเลิก</button>';	
                            $ch2 = $room2["ExamNID"]."<br>".$room2["FNAME"]." ".$room2["LNAME"]."<br>".$c2;    
                    	}else{
                    			$disbt2="";
                    			$ch2 = $c2;
                                $colourbt2 =  "btn btn-success";
                    		}

 $querycheckr3 = " 	SELECT ExamStuNo, ExamNID, ExamID, sd.FNAME, sd.LNAME 
                	FROM sas_examno as examno
                	INNER JOIN sas_studentdata as sd
                	ON examno.ExamNID = sd.NID    
                	WHERE examno.ExamStuNo ='".$c3. "'";

                		if (!$resultcheck3 = mysql_query($querycheckr3)) {
                		exit(mysql_error());
                		}
                    		$rowcheck3 = mysql_num_rows($resultcheck3);
                    		if($rowcheck3 > 0){
                        	$room3 = mysql_fetch_assoc($resultcheck3);
                        	$disbt3 = "disabled=\"disabled\" style=\"color:#000;\"";
                            $colourbt3 =  "btn btn-default";
							//$ch3 = $room3["FNAME"]." ".$room3["LNAME"]."<br>".$c3.'<br><button onclick="UnconfirmExamtest('.$c3.')" class="btn btn-danger">ยกเลิก</button>';
                            $ch3 = $room3["ExamNID"]."<br>".$room3["FNAME"]." ".$room3["LNAME"]."<br>".$c3;	
                    	}else{
                    			$disbt3="";
                    			$ch3 = $c3;
                                $colourbt3 =  "btn btn-success";
                    		}

 $querycheckr4 = " 	SELECT ExamStuNo, ExamNID, ExamID, sd.FNAME, sd.LNAME 
                	FROM sas_examno as examno
                	INNER JOIN sas_studentdata as sd
                	ON examno.ExamNID = sd.NID
                	WHERE examno.ExamStuNo ='".$c4. "'";

                		if (!$resultcheck4 = mysql_query($querycheckr4)) {
                		exit(mysql_error());
                		}
                    		$rowcheck4 = mysql_num_rows($resultcheck4);
                    		if($rowcheck4 > 0){
                        	$room4 = mysql_fetch_assoc($resultcheck4);
                        	$disbt4 = "disabled=\"disabled\" style=\"color:#000;\"";
                            $colourbt4 =  "btn btn-default";
							//$ch4 = $room4["FNAME"]." ".$room4["LNAME"]."<br>".$c4.'<br><button onclick="UnconfirmExamtest('.$c4.')" class="btn btn-danger">ยกเลิก</button>';	
                            $ch4 = $room4["ExamNID"]."<br>".$room4["FNAME"]." ".$room4["LNAME"]."<br>".$c4;
                            }else{
                    			$disbt4="";
                    			$ch4 = $c4;
                                $colourbt4 =  "btn btn-success";
                    		}   

  $querycheckr5 = " SELECT ExamStuNo, ExamNID, ExamID, sd.FNAME, sd.LNAME 
                	FROM sas_examno as examno
                	INNER JOIN sas_studentdata as sd
                	ON examno.ExamNID = sd.NID
     
                	WHERE examno.ExamStuNo ='".$c5. "'";

                		if (!$resultcheck5 = mysql_query($querycheckr5)) {
                		exit(mysql_error());
                		}
                    		$rowcheck5 = mysql_num_rows($resultcheck5);
                    		if($rowcheck5 > 0){
                        	$room5 = mysql_fetch_assoc($resultcheck5);
                            $disbt5 = "disabled=\"disabled\" style=\"color:#000;\"";
                            $colourbt5 =  "btn btn-default";
							//$ch5 = $room5["FNAME"]." ".$room5["LNAME"]."<br>".$c5.'<br><button onclick="UnconfirmExamtest('.$c5.')" class="btn btn-danger">ยกเลิก</button>';	
                                $ch5 = $room5["ExamNID"]."<br>".$room5["FNAME"]." ".$room5["LNAME"]."<br>".$c5;    
                    	}else{
                    			$disbt5="";
                    			$ch5 = $c5;
                                $colourbt5 =  "btn btn-success";
                    		}                  	
?>