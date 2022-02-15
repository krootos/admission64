<?php

    include "conn.php";


    $sql_STD = "SELECT * FROM sas_studentdata";

    $query_STD = mysql_query($sql_STD);

    if($query_STD){
       
        while($row=mysql_fetch_array($query_STD)){

                $SID = $row['SID'];
                $NID = $row['NID'];
                $fname = $row['FNAME'];
                $lname = $row['LNAME'];

                echo   $SID.$NID.$fname.$lname;

                $sql_sr = "SELECT * FROM sas_register WHERE RegisNO=$NID ";

                $query_sr = mysql_query($sql_sr);

                if($query_sr){
                    $SID_sr = mysql_fetch_array($query_sr);

                

                    $rs_no = $SID_sr['RegisNO'];

                    $sql_updateSID = "UPDATE sas_register SET SID = '$SID' WHERE RegisNO = '$NID' ";

                    $query_updateSID = mysql_query($sql_updateSID);

                    

                    $rs_sid = $SID_sr['SID'];
                    


                    echo $rs_no."  ".$rs_sid. "<br/>";



                }
                

        }

    }



?>