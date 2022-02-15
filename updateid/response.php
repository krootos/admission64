
<?php
	//include connection file 
	include_once("connection.php");
	
	$db = new dbObj();
	$connString =  $db->getConnstring();

	$params = $_REQUEST;
	
	$action = isset($params['action']) != '' ? $params['action'] : '';
	$empCls = new Employee($connString);

	switch($action) {
	 case 'add':
		$empCls->insertEmployee($params);
	 break;
	 case 'edit':
		$empCls->updateEmployee($params);
	 break;
	 case 'delete':
		$empCls->deleteEmployee($params);
	 break;
	 default:
	 $empCls->getEmployees($params);
	 return;
	}
	
	class Employee {
	protected $conn;
	protected $data = array();
	function __construct($connString) {
		$this->conn = $connString;
	}
	
	public function getEmployees($params) {
		
		$this->data = $this->getRecords($params);
		
		echo json_encode($this->data);
	}


	function insertEmployee($params) {
		$data = array();;
		$sql = "INSERT INTO `employee` (employee_name, employee_salary, employee_age) VALUES('" . $params["name"] . "', '" . $params["salary"] . "','" . $params["age"] . "');  ";
		
		echo $result = mysqli_query($this->conn, $sql) or die("error to insert employee data");
		
	}
	
	




	function getRecords($params) {
		$rp = isset($params['rowCount']) ? $params['rowCount'] : 10;
		
		if (isset($params['current'])) { $page  = $params['current']; } else { $page=1; };  
        $start_from = ($page-1) * $rp;
		
		$sql = $sqlRec = $sqlTot = $where = '';
		
		if( !empty($params['searchPhrase']) ) {   
			$where .=" WHERE "; 
			$where .=" ( 
				 sd.NID LIKE '".$params['searchPhrase']."%'  ";    
			$where .=" OR sd.FNAME LIKE '".$params['searchPhrase']."%'  ";
			$where .=" OR sd.LNAME LIKE '".$params['searchPhrase']."%'  ";
			$where .=" OR sd.OPTIONS LIKE '%".$params['searchPhrase']."%' ";	
			$where .=" OR sd.PLAN1 LIKE '%".$params['searchPhrase']."%' 
			
			
		
			)";
	   }

	   if( !empty($params['sort']) ) {  
			$where .=" ORDER By ".key($params['sort']) .' '.current($params['sort'])." ";
		}
		

	   // getting total number records without any search

	   

	   $sql = " SELECT 	sr.RegisLLog, sr.RegisConfirm, sr.RegisStatus,
	   					sd.SID, sd.NID, sd.FNAME, sd.LNAME, sd.TYPE, sd.OPTIONS, sd.PLAN1 	
						   	
				FROM 	sas_register as sr
				INNER JOIN sas_studentdata as sd
				ON sr.SID = sd.SID
				"
				;
		$sqlTot .= $sql;
		$sqlRec .= $sql;
		
		//concatenate search sql if value exist
		if(isset($where) && $where != '') {

			$sqlTot .= $where;
			$sqlRec .= $where;
		}
		if ($rp!=-1)
		$sqlRec .= " LIMIT ". $start_from .",".$rp;
		
		
		$qtot = mysqli_query($this->conn, $sqlTot) or die("error to fetch tot employees data");
		$queryRecords = mysqli_query($this->conn, $sqlRec) or die("error to fetch employees data");
		
		while( $row = mysqli_fetch_assoc($queryRecords) ) { 
			$data[] = $row;
		}

		$json_data = array(
			"current"            => intval($params['current']), 
			"rowCount"            => 10, 			
			"total"    => intval($qtot->num_rows),
			"rows"            => $data   // total data array
			);
		
		return $json_data;
	}






	function updateEmployee($params) {

		
		$data = array();
		//print_R($_POST);die;
		
		$sql = "Update `sas_studentdata` set NID = '" . $params["edit_nid"]. "', FNAME='" . $params["edit_fname"]."', LNAME='" . $params["edit_lname"] . "' WHERE SID='".$_POST["edit_id"]."'";
		echo $result = mysqli_query($this->conn, $sql) or die("error to update employee data");

		$sql2 = "Update `sas_register` set RegisNO = '" . $params["edit_nid"]. "', RegisNaID='" . $params["edit_nid"]."' WHERE SID='".$_POST["edit_id"]."'";
		echo $result = mysqli_query($this->conn, $sql2) or die("error to update employee data");
		
		
	}
	
	function deleteEmployee($params) {
		$data = array();
		//print_R($_POST);die;
		$sql = "delete from `employee` WHERE id='".$params["id"]."'";
		
		echo $result = mysqli_query($this->conn, $sql) or die("error to delete employee data");
	}
}
?>
	