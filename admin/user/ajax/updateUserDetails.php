<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST['id']))
{
    // get values
    $id = $_POST['id'];
    
    
    $regisnaid = $_POST['regisnaid'];
    $regisnewnaid = $_POST['regisnewnaid'];



    // Updaste User details
    
    
    $sql_sr = "SELECT * FROM sas_register WHERE RegisNO = '$regisnaid' ";
    $query_sr = mysql_query($sql_sr);

    if($query_sr){

        $sql_sr_search = "SELECT * FROM sas_register WHERE RegisNO = '$regisnewnaid' ";
        $query_sr_search = mysql_query($sql_sr_search);

         $numrow = mysql_num_rows($query_sr_search);

    

        if($numrow==0){

            $rs_sr = mysql_fetch_array($query_sr);

            $sid = $rs_sr['SID'];
            
            $sql_update_sr = " UPDATE sas_register 
                                SET RegisNO = '$regisnewnaid' , RegisPWD = '$regisnewnaid' , RegisNaID = '$regisnewnaid' 
                                WHERE SID = '$sid' ";

            $query_update_sr = mysql_query($sql_update_sr);


            $sql_update_sd = " UPDATE sas_studentdata 
                                SET NID = '$regisnewnaid' 
                                WHERE SID = '$sid' ";

            $query_update_sd = mysql_query($sql_update_sd);


        }else{
         

        }


        

    }
    

   
    
    
}