<?php


$host = "localhost"; // ส่วนมากมักเป็น localhost
$user = "root"; // Username
$pass = ""; // Password
$dbname = "admission_web"; // ชื่อฐานข้อมูล


function conndb()
{
    global $conn;
    global $host;
    global $user;
    global $pass;
    global $dbname;
    $conn = mysqli_connect($host, $user, $pass);

    mysqli_query($conn, "SET NAMES 'utf8'");
    mysqli_select_db($conn, $dbname);
    if (!$conn) {
        die("ไม่สามารถติดต่อกับฐานข้อมูลได้");
    }

    mysqli_select_db($conn, $dbname)
    or die("ไม่สามารถเลือกใช้งานฐานข้อมูลได้");
}

function closedb()
{
    global $conn;
    mysqli_close($conn);
}
