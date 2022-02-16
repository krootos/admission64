<div id="image_data">

</div>

<?php




//echo "fdaffsafs".$naid;

 $connect = mysqli_connect("localhost", "root", "", "admission_web");

 $naid = $_GET["id"];

  $query = "SELECT * FROM tbl_images WHERE NID = '".$naid."' ORDER BY id DESC";


  $result = mysqli_query($connect, $query);
  $output = '
  <!DOCTYPE html>
<html>

<head>
    <title>อัพโหลดหลักฐานการสมัคร</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body>

   <table class="table table-bordered table-striped">  
    <tr>
    <th width="20%">เลขประจำตัวประชาชน</th>
     <th width="20%">ชื่อเอกสาร</th>
     <th width="60%">ภาพเอกสาร</th>
    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '

    <tr>
    <td>'.$row["NID"].'</td>
     <td>'.$row["doc"].'</td>
     <td>
      <a href="../../doc/'.$row['filename'].'" target"_self"><img src="../../doc/'.$row['filename'].' " height="210" width="225" class="img-thumbnail" /></a>
     </td>     
    </tr>
    
   ';
  }
  $output .= '</table>
  
  </body>

</html>
  
  
  ';
  echo $output;
 

 

?>

