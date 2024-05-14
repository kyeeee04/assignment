<?php
class DBController {	
	function __construct() {
		$this->conn = $this->connectDB();
	}
	
	function connectDB() {
		$connect = mysqli_connect("database-1.cwm3qlt4hlxw.us-east-1.rds.amazonaws.com", "admin","12345678", "my_db");
		return $connect;
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
}
?>