<form name="formsearch" id="formsearch" method="post" action="index.php">
<table class="table table-bordered table-striped" >
<tr>
<td width="36%">
<div align="right">ค้นหา :
<select name="cat" class="input-sm">
     <option value="RegisNO"<?php if(isset($_REQUEST["cat"])){ if($_REQUEST["cat"] == "RegisNO"){  echo"selected"; }} ?>
     >รหัสผู้ใช้งาน</option>
     <option value="RegisPWD"<?php if(isset($_REQUEST["cat"])){ if($_REQUEST["cat"] == "RegisPWD"){  echo"selected"; }} ?>
     >รหัสผ่าน</option>
     <option value="RegisNaID"<?php if(isset($_REQUEST["cat"])){ if($_REQUEST["cat"] == "RegisNaID"){  echo"selected"; }} ?>
     >เลขบัตรประชาชน</option>
</select> 
</div>
</td>
<td width="64%">

     <input name="Search" type="text" class="input-sm" required="" 
     value="<?php if(isset($_REQUEST["Search"])) echo $_REQUEST["Search"]; ?>">
     <button class="btn btn-info" name="btnSearch" id="btnSearch" type="submit" value="btnSearch">Search</button>
      ตามรหัสผู้ใช้งาน, รหัสผ่าน, เลขบัตรประชาชน
</td>
</tr>
</table>
</form>
<br>
<?php
	// include Database connection file 
	include("db_connection.php");

	// Design initial table header 

	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th><h4>No.</h4></th>
							<th><h4>รหัสเข้าใช้งาน</h4></th>
							<th><h4>รหัสผ่าน</h4></th>
							<th><h4>เลขบัตรประจำตัวประชาชน (FK:ข้อมูลผู้เรียน)</h4></th>
							<th><h4>Update</h4></th>
							<th><h4>Delete</h4></th>
						</tr>';
if(isset($_REQUEST["Search"])){
    echo $query = "SELECT * FROM sas_register WHERE ".$_REQUEST["cat"]." like '%".$_REQUEST["Search"]."%' ORDER BY RegisID DESC "; // คำสั่งค้นหา

}else{
    echo $query = "SELECT * FROM sas_register ORDER BY RegisID DESC";
}					
	//$query = "SELECT * FROM sas_register";

	if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }

    // if query results contains rows then featch those rows 
    if(mysql_num_rows($result) > 0)
    {
    	$number = 1;
    	while($row = mysql_fetch_assoc($result))
    	{
    		$data .= '<tr>
				<td>'.$number.'</td>
				<td>'.$row['RegisNO'].'</td>
				<td>'.$row['RegisPWD'].'</td>
				<td>'.$row['RegisNaID'].'</td>
				<td>
					<button onclick="GetUserDetails('.$row['RegisID'].')" class="btn btn-warning">Update</button>
				</td>
				<td>
					<button onclick="DeleteUser('.$row['RegisID'].')" class="btn btn-danger">Delete</button>
				</td>
    		</tr>';
    		$number++;
    	}
    }
    else
    {
    	// records now found 
    	$data .= '<tr><td colspan="6">Records not found!</td></tr>';
    }

    $data .= '</table>';

    echo $data;
?>

