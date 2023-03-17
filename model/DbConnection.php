<?php
ob_start();
/**
 * Establish connection with database
 */
class DbConnection{

	protected $conn="";

	function __construct(){
		//localhost credential
		$this ->conn = new mysqli("localhost","root","","astrology");
		if ($this->conn) {
			//echo "connection success";
		}
	}

	function __destruct(){
		$this->conn->close();
	}
}
//$obj= new DbConnection();
?>