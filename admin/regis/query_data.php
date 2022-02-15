<?php
if(isset($_SESSION["cat"],$_SESSION["Search"]) && $_SESSION["Search"] != "") {
        if(strcmp($_SESSION["cat"], "RegisStatus") == 0){
                $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, sd.NID, sd.TYPE, sd.OPTIONS, sd.PLAN1, sd.SNAME, sd.FNAME, sd.LNAME, sd.DAYCOME
                FROM sas_register as sr
                INNER JOIN sas_studentdata as sd
                ON sr.RegisNaID = sd.NID
                WHERE sr.".$_SESSION["cat"]." = '".$_SESSION["Search"]."' 
                ORDER BY sr.RegisID DESC "; // คำสั่งค้นหา
        }
        elseif (strcmp($_SESSION["cat"], "TYPESuccess") == 0) {
                $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, sd.NID, sd.TYPE, sd.OPTIONS, sd.PLAN1, sd.SNAME, sd.FNAME, sd.LNAME, sd.DAYCOME
                FROM sas_register as sr
                INNER JOIN sas_studentdata as sd
                ON sr.RegisNaID = sd.NID
                WHERE sr.RegisStatus = '1' and sd.TYPE = '".$_SESSION["Search"]."'
                ORDER BY sr.RegisID DESC "; // คำสั่งค้นหา
        }
        elseif (strcmp($_SESSION["cat"], "TYPE21") == 0) {
                $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, sd.NID, sd.TYPE, sd.OPTIONS, sd.PLAN1, sd.SNAME, sd.FNAME, sd.LNAME, sd.DAYCOME
                FROM sas_register as sr
                INNER JOIN sas_studentdata as sd
                ON sr.RegisNaID = sd.NID
                WHERE sr.RegisStatus = '1' and sd.DAYCOME = '21'  and sd.TYPE = '".$_SESSION["Search"]."'
                ORDER BY sr.RegisID DESC "; // คำสั่งค้นหา
        }
        elseif (strcmp($_SESSION["cat"], "TYPE22") == 0) {
                $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, Daypush, sd.NID, sd.TYPE, sd.OPTIONS, sd.PLAN1, sd.SNAME, sd.FNAME, sd.LNAME, sd.DAYCOME
                FROM sas_register as sr
                INNER JOIN sas_studentdata as sd
                ON sr.RegisNaID = sd.NID
                WHERE sr.RegisStatus = '1' and sr.Daypush = '22'  and sd.TYPE = '".$_SESSION["Search"]."'
                ORDER BY sr.RegisID DESC "; // คำสั่งค้นหา
        }
        elseif (strcmp($_SESSION["cat"], "TYPE23") == 0) {
                $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, Daypush, sd.NID, sd.TYPE, sd.OPTIONS, sd.PLAN1, sd.SNAME, sd.FNAME, sd.LNAME, sd.DAYCOME
                FROM sas_register as sr
                INNER JOIN sas_studentdata as sd
                ON sr.RegisNaID = sd.NID
                WHERE sr.RegisStatus = '1' and sr.Daypush = '23'  and sd.TYPE = '".$_SESSION["Search"]."'
                ORDER BY sr.RegisID DESC "; // คำสั่งค้นหา
        }
        elseif (strcmp($_SESSION["cat"], "TYPE24") == 0) {
            $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, Daypush, sd.NID, sd.TYPE, sd.OPTIONS, sd.PLAN1, sd.SNAME, sd.FNAME, sd.LNAME, sd.DAYCOME
            FROM sas_register as sr
            INNER JOIN sas_studentdata as sd
            ON sr.RegisNaID = sd.NID
            WHERE sr.RegisStatus = '1' and sr.Daypush = '24'  and sd.TYPE = '".$_SESSION["Search"]."'
            ORDER BY sr.RegisID DESC "; // คำสั่งค้นหา
        }
        elseif (strcmp($_SESSION["cat"], "TYPE25") == 0) {
                $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, Daypush, sd.NID, sd.TYPE, sd.OPTIONS, sd.PLAN1, sd.SNAME, sd.FNAME, sd.LNAME, sd.DAYCOME
                FROM sas_register as sr
                INNER JOIN sas_studentdata as sd
                ON sr.RegisNaID = sd.NID
                WHERE sr.RegisStatus = '1' and sr.Daypush = '25'  and sd.TYPE = '".$_SESSION["Search"]."'
                ORDER BY sr.RegisID DESC "; // คำสั่งค้นหา
        }
        elseif (strcmp($_SESSION["cat"], "DAYCOME") == 0) {
                $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, sd.NID, sd.TYPE, sd.OPTIONS, sd.PLAN1, sd.SNAME, sd.FNAME, sd.LNAME, sd.DAYCOME
                FROM sas_register as sr
                INNER JOIN sas_studentdata as sd
                ON sr.RegisNaID = sd.NID
                WHERE sd.DAYCOME = '".$_SESSION["Search"]."'
                ORDER BY sr.RegisID DESC "; // คำสั่งค้นหา
        }

        else{
            if(strcmp($_SESSION["cat"], "OPTIONS") == 0 || strcmp($_SESSION["cat"], "TYPE") == 0){
                    $category = "sd.".$_SESSION["cat"];
            }else{
                    $category = "sr.".$_SESSION["cat"];
                }
                $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, sd.NID, sd.TYPE, sd.OPTIONS, sd.PLAN1, sd.SNAME, sd.FNAME, sd.LNAME, sd.DAYCOME
                FROM sas_register as sr
                INNER JOIN sas_studentdata as sd
                ON sr.RegisNaID = sd.NID
                WHERE ".$category." like '%".$_SESSION["Search"]."%' 
                ORDER BY sr.RegisID DESC "; // คำสั่งค้นหา
             }
}
 elseif(isset($_SESSION["cat"],$_SESSION["Search"]) && $_SESSION["Search"] == "") {
            if (strcmp($_SESSION["cat"], "TYPE21") == 0) {
                $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, sd.NID, sd.TYPE, sd.OPTIONS, sd.PLAN1, sd.SNAME, sd.FNAME, sd.LNAME, sd.DAYCOME
                FROM sas_register as sr
                INNER JOIN sas_studentdata as sd
                ON sr.RegisNaID = sd.NID
                WHERE sr.RegisStatus = '1' and sd.DAYCOME = '21'
                ORDER BY sr.RegisID DESC "; // คำสั่งค้นหา
        }
        elseif (strcmp($_SESSION["cat"], "TYPE22") == 0) {
               $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, Daypush, sd.NID, sd.TYPE, sd.OPTIONS, sd.PLAN1, sd.SNAME, sd.FNAME, sd.LNAME, sd.DAYCOME
                FROM sas_register as sr
                INNER JOIN sas_studentdata as sd
                ON sr.RegisNaID = sd.NID
                WHERE sr.RegisStatus = '1' and sr.Daypush = '22'
                ORDER BY sr.RegisID DESC "; // คำสั่งค้นหา
        }
        elseif (strcmp($_SESSION["cat"], "TYPE23") == 0) {
               $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, Daypush, sd.NID, sd.TYPE, sd.OPTIONS, sd.PLAN1, sd.SNAME, sd.FNAME, sd.LNAME, sd.DAYCOME
                FROM sas_register as sr
                INNER JOIN sas_studentdata as sd
                ON sr.RegisNaID = sd.NID
                WHERE sr.RegisStatus = '1' and sr.Daypush = '23'
                ORDER BY sr.RegisID DESC "; // คำสั่งค้นหา
        }
        elseif (strcmp($_SESSION["cat"], "TYPE24") == 0) {
            $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, Daypush, sd.NID, sd.TYPE, sd.OPTIONS, sd.PLAN1, sd.SNAME, sd.FNAME, sd.LNAME, sd.DAYCOME
             FROM sas_register as sr
             INNER JOIN sas_studentdata as sd
             ON sr.RegisNaID = sd.NID
             WHERE sr.RegisStatus = '1' and sr.Daypush = '24'
             ORDER BY sr.RegisID DESC "; // คำสั่งค้นหา
     }
        elseif (strcmp($_SESSION["cat"], "TYPE25") == 0) {
               $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, Daypush, sd.NID, sd.TYPE, sd.OPTIONS, sd.PLAN1, sd.SNAME, sd.FNAME, sd.LNAME, sd.DAYCOME
                FROM sas_register as sr
                INNER JOIN sas_studentdata as sd
                ON sr.RegisNaID = sd.NID
                WHERE sr.RegisStatus = '1' and sr.Daypush = '25'
                ORDER BY sr.RegisID DESC "; // คำสั่งค้นหา
        }
}

elseif(isset($_GET["le"]) && strcmp($_GET["le"], "1") == 0 && strcmp($_GET["op"], "นักเรียนในเขตพื้นที่บริการ") == 0){
            $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, Daypush, sd.NID, sd.TYPE, sd.OPTIONS, sd.PLAN1, sd.SNAME, sd.FNAME, sd.LNAME, sd.DAYCOME
                FROM sas_register as sr
                INNER JOIN sas_studentdata as sd
                ON sr.RegisNaID = sd.NID
                WHERE sd.TYPE = '1' and sd.OPTIONS = 'นักเรียนในเขตพื้นที่บริการ'
                ORDER BY sr.RegisID DESC "; // คำสั่งค้นหา

}elseif(isset($_GET["le"]) && strcmp($_GET["le"], "1") == 0 && strcmp($_GET["op"], "นักเรียนทั่วไป") == 0){

            $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, Daypush, sd.NID, sd.TYPE, sd.OPTIONS, sd.PLAN1, sd.SNAME, sd.FNAME, sd.LNAME, sd.DAYCOME
                FROM sas_register as sr
                INNER JOIN sas_studentdata as sd
                ON sr.RegisNaID = sd.NID
                WHERE sd.TYPE = '1' and sd.OPTIONS = 'นักเรียนทั่วไป'
                ORDER BY sr.RegisID DESC "; // คำสั่งค้นหา

}elseif(isset($_GET["le"]) && strcmp($_GET["le"], "4") == 0){

            $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, Daypush, sd.NID, sd.TYPE, sd.OPTIONS, sd.PLAN1, sd.SNAME, sd.FNAME, sd.LNAME, sd.DAYCOME
                FROM sas_register as sr
                INNER JOIN sas_studentdata as sd
                ON sr.RegisNaID = sd.NID
                WHERE sd.TYPE = '4' 
                ORDER BY sr.RegisID DESC "; // คำสั่งค้นหา
}  
elseif(isset($_GET["le"]) && strcmp($_GET["le"], "5") == 0){

    $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, Daypush, sd.NID, sd.TYPE, sd.OPTIONS, sd.PLAN1, sd.SNAME, sd.FNAME, sd.LNAME, sd.DAYCOME
        FROM sas_register as sr
        INNER JOIN sas_studentdata as sd
        ON sr.RegisNaID = sd.NID
        WHERE sr.RegisNO LIKE 'C%'
        ORDER BY sr.RegisID DESC "; // คำสั่งค้นหา
} 
elseif(isset($_GET["le"]) && strcmp($_GET["le"], "6") == 0){

    $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, Daypush, sd.NID, sd.TYPE, sd.OPTIONS, sd.PLAN1, sd.SNAME, sd.FNAME, sd.LNAME, sd.DAYCOME
        FROM sas_register as sr
        INNER JOIN sas_studentdata as sd
        ON sr.RegisNaID = sd.NID
        WHERE sd.TYPE = '1' 
        ORDER BY sr.RegisID DESC "; // คำสั่งค้นหา
}elseif(isset($_GET["le"]) && strcmp($_GET["le"], "4") == 0 && strcmp($_GET["op"], "นักเรียนทั่วไป") == 0){

    $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, Daypush, sd.NID, sd.TYPE, sd.OPTIONS, sd.PLAN1, sd.SNAME, sd.FNAME, sd.LNAME, sd.DAYCOME
        FROM sas_register as sr
        INNER JOIN sas_studentdata as sd
        ON sr.RegisNaID = sd.NID
        WHERE sd.TYPE = '4' and sd.OPTIONS = 'นักเรียนทั่วไป'
        ORDER BY sr.RegisID DESC "; // คำสั่งค้นหา

}elseif(isset($_GET["le"]) && strcmp($_GET["le"], "4") == 0 && strcmp($_GET["op"], "นักเรียนที่มีเงื่อนไขพิเศษ") == 0){

    $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, Daypush, sd.NID, sd.TYPE, sd.OPTIONS, sd.PLAN1, sd.SNAME, sd.FNAME, sd.LNAME, sd.DAYCOME
        FROM sas_register as sr
        INNER JOIN sas_studentdata as sd
        ON sr.RegisNaID = sd.NID
        WHERE sd.TYPE = '4' and sd.OPTIONS = 'นักเรียนที่มีเงื่อนไขพิเศษ'
        ORDER BY sr.RegisID DESC "; // คำสั่งค้นหา

}elseif(isset($_GET["le"]) && strcmp($_GET["le"], "4") == 0 && strcmp($_GET["op"], "นักเรียนที่มีความสามารถพิเศษ") == 0){

    $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, Daypush, sd.NID, sd.TYPE, sd.OPTIONS, sd.PLAN1, sd.SNAME, sd.FNAME, sd.LNAME, sd.DAYCOME
        FROM sas_register as sr
        INNER JOIN sas_studentdata as sd
        ON sr.RegisNaID = sd.NID
        WHERE sd.TYPE = '4' and sd.OPTIONS = 'นักเรียนที่มีความสามารถพิเศษ'
        ORDER BY sr.RegisID DESC "; // คำสั่งค้นหา

}   



else{
                 $query = "SELECT RegisID, RegisNO, RegisPWD, RegisLLog, RegisNaID, RegisStatus, sd.NID, sd.TYPE, sd.OPTIONS, sd.PLAN1, sd.SNAME, sd.FNAME, sd.LNAME, sd.DAYCOME
                FROM sas_register as sr
                INNER JOIN sas_studentdata as sd
                ON sr.RegisNaID = sd.NID
                ORDER BY sr.RegisID DESC";
}                   

?>