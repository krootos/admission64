<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>สุ่มตัวเลขครั้งละ2000เลข</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
<?php
 
//1.สร้างชุดตัวอักษรตั้งแต่ a-z
 
$arr_a_z = range( "A" , "Z" ) ;
 
//2.สร้างชุดตัวอักษรตั้งแต่ A-Z
 
//$arr_A_Z = range( "A" , "Z" ) ;
 
//3.สร้างชุดตัวอักษรตั้งแต่ 0-9
 
$arr_0_9 = range( 0 , 9 ) ;
 
//4.เอาชุดตัวอักษรทั้ง 3 มารวมกัน
 
$arr_a_9 = array_merge( $arr_a_z , $arr_0_9 ) ;
 
$str_a_9 = implode( $arr_a_9 ) ;
 
//5.ทำการสับเปลี่ยนตำแหน่งตัวอักษร
 
$str_a_9 = str_shuffle( $str_a_9 ) ; 
 
//6.ตัดเอามาแค่ 10 ตัวอักษร
 
//$verify_code = substr( $str_a_9 , 0 , 6 ) ;
echo "<h2>Random อักษรครั้งละ 2000 ชุด</h2><br>"; 
echo "<h2>กด REFESH 1 ครั้งจะได้เลขใหม่</h2>"; ?>
<TABLE border="1">
<tr>
	<td>ลำดับที่ </td>
	<td>ตัวเลขสุ่มชุด สมัคร ม.1</td>
	<td>ตัวเลขสุ่มชุด สมัคร ม.4</td>
</tr>

<?php

	$i=1;
	$num=2001;
 while($i < $num){
 	echo"<tr>";
$verify_code = substr( $str_a_9 , 0 , 5 ) ;
$arr_a_9 = array_merge( $arr_a_z , $arr_0_9 ) ;
$str_a_9 = implode( $arr_a_9 ) ;
$str_a_9 = str_shuffle( $str_a_9 ) ; 

$verify_code2 = substr( $str_a_9 , 0 , 5 ) ;
$arr_a_92 = array_merge( $arr_a_z , $arr_0_9 ) ;
$str_a_92 = implode( $arr_a_9 ) ;
$str_a_92 = str_shuffle( $str_a_9 ) ; 

echo "<td><h3>".$i."</h3></td>";
echo "<td><h3>A".$verify_code."</h3></td>" ;
echo "<td><h3>B".$verify_code2."</h3></td>" ;
echo "</tr>";
$i++;
 }


?>

</TABLE>
</body>
</html>