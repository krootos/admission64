<?php
session_start();

//<td><button type="button" name="update" class="btn btn-warning bt-xs update" id="' . $row["id"] . '">เปลี่ยน</button></td>
//echo $_SESSION["NaID"];
//<th width="15%">เปลี่ยน</th>
$naid = $_SESSION["NaID"];

if (isset($_POST["action"])) {
  $connect = mysqli_connect("localhost", "root", "", "admission_web");
  if ($_POST["action"] == "fetch") {
    $query = "SELECT * FROM tbl_images WHERE NID = '" . $naid . "' ORDER BY id DESC";
    $result = mysqli_query($connect, $query);
    $output = '
    <div class="">
   <table class="table table-bordered table-striped">  
    <tr>
     <th width="20%">ชื่อเอกสาร</th>
     <th width="50%">ภาพเอกสาร</th>
     
     <th width="15%">ลบ</th>
    </tr>
  ';
    while ($row = mysqli_fetch_array($result)) {
      $output .= '

    <tr>
     <td>' . $row["doc"] . '</td>
     <td>
      <img src="doc/' . $row["filename"] . ' "
         height="150" width="175" class="img-thumbnail" />
     </td>
     
     <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="' . $row["id"] . '">ลบ</button></td>
    </tr>
   ';
    }
    $output .= '</table> </div>';
    echo $output;
  }

  if ($_POST["action"] == "insert") {



    $file_name = $_FILES["image"]["name"];
    $file_type = $_FILES["image"]["type"];
    $temp_name = $_FILES["image"]["tmp_name"];
    $file_size = $_FILES["image"]["size"];
    $error = $_FILES["image"]["error"];

    if (!$temp_name) {
      echo "ERROR: Please browse for file before uploading";
      exit();
    }





    




    if ($error > 0) {
      echo $error;
    } else if (($file_type == "image/gif") || ($file_type == "image/jpeg") || ($file_type == "image/png") || ($file_type == "image/pjpeg")) {

      $nid = $_POST["txtID"];
      $doc = $_POST["txtDoc"];
      $date = date("Y-m-d H:i:s");
      $file_name = $date . $file_name;
      $query = "INSERT INTO tbl_images(filename,NID,doc) VALUES ('$file_name',$nid,'$doc')";
      if (mysqli_query($connect, $query)) {
        $filename = compress_image($temp_name, "doc/" . $file_name, 35);
      } else {
        mysqli_error($connect);
        echo 'เพิ่มรูปภาพไม่สำเร็จ!!! กรุณาลองใหม่อีกครั้ง';
      }
    }
  }


  if ($_POST["action"] == "update") {
    $date = date("Y-m-d H:i:s");
    $file = $date . $file;
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $query = "UPDATE tbl_images SET name = '$file' WHERE id = '" . $_POST["image_id"] . "'";
    if (mysqli_query($connect, $query)) {
      echo 'เปลี่ยนรูปภาพสำเร็จ';
    }
  }
  if ($_POST["action"] == "delete") {
    $query = "DELETE FROM tbl_images WHERE id = '" . $_POST["image_id"] . "'";
    if (mysqli_query($connect, $query)) {
      echo 'ลบข้อมูลสำเร็จ';
    }
  }
}



function upload_image()
{
  $uploadTo = "uploads/";
  $allowImageExt = array('jpg', 'png', 'jpeg', 'gif');
  $imageName = $_FILES['image']['name'];
  $tempPath = $_FILES["image"]["tmp_name"];
  $imageQuality = 60;
  $basename = basename($imageName);
  $originalPath = $uploadTo . $basename;
  $imageExt = pathinfo($originalPath, PATHINFO_EXTENSION);
  if (empty($imageName)) {
    $error = "Please Select files..";
    return $error;
  } else {

    if (in_array($imageExt, $allowImageExt)) {
      $compressedImage = compress_image($tempPath, $originalPath, $imageQuality);
      if ($compressedImage) {
        return "Image was compressed and uploaded to server";
      } else {
        return "Some error !.. check your script";
      }
    } else {
      return "Image Type not allowed";
    }
  }
}
function compress_image($tempPath, $originalPath, $imageQuality)
{

  // Get image info 
  $imgInfo = getimagesize($tempPath);
  $mime = $imgInfo['mime'];

  // Create a new image from file 
  switch ($mime) {
    case 'image/jpeg':
      $image = imagecreatefromjpeg($tempPath);
      break;
    case 'image/png':
      $image = imagecreatefrompng($tempPath);
      break;
    case 'image/gif':
      $image = imagecreatefromgif($tempPath);
      break;
    default:
      $image = imagecreatefromjpeg($tempPath);
  }

  // Save image 
  imagejpeg($image, $originalPath, $imageQuality);
  // Return compressed image 
  return $originalPath;
}