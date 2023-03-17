<?php
ob_start();
require_once 'DbConnection.php';

class AdminModel extends DbConnection{
    // Authenticate Admin
	function authenticateAdminForLogin($userId,$password){
		$sql="SELECT admin_id,admin_name,admin_email_id,admin_unique_id FROM admin WHERE admin_email_id='$userId' AND admin_password='$password' AND admin_status='Active'";
		$result=$this->conn->query($sql) or die($this->conn->error);
		if ($result->num_rows==0) {
			return false;
		}else{
			while ($row=$result->fetch_assoc()) {
				//print_r($row);				
				$data[]=$row;
			}
			return $data;
		}
	}
    //check admin already exist using login Id and email id
	function checkIfAdminExistAsPerLoginIdAndEmailId($loginId,$email){
		$sql="SELECT * FROM admin WHERE admin_unique_id='$loginId' and admin_email_id='$email'";
		$result=$this->conn->query($sql) or die($this->conn->error);
		if ($result->num_rows==0) {
			return false;
		}else{
			return true;
		}
	}
	//set otp for admin reset password
	function setLoginOtp($loginId,$emailId,$data){
		$sql="UPDATE admin SET $data WHERE admin_unique_id='$loginId' AND admin_email_id='$emailId'";
		$result=$this->conn->query($sql) or die($this->conn->error);
		if ($result) {
			return true;
		}else{
			return false;
		}
	}
	//get admin details as per email for OTP verifiaction
	function getOtpVerificationByEmailAndLoginId($email,$loginId){
		$sql="SELECT admin_id,admin_name,admin_unique_id,admin_email_id,admin_otp FROM admin WHERE admin_unique_id='$loginId' AND admin_email_id='$email'";
		$result=$this->conn->query($sql) or die($this->conn->error);
		if ($result->num_rows==0) {
			return false;
		}else{
			while ($row=$result->fetch_assoc()) {
				$data[]=$row;
			}
			return $data;
		}
	}
	//change Admin details
	function changeAdminDetails($id,$data,$parameter){
		if($parameter=="byEmail"){
			$sql="UPDATE admin SET $data WHERE admin_email_id='$id'";
		}
		if ($parameter=="byId") {
			$sql="UPDATE admin SET $data WHERE admin_id=$id";
		}
		if ($parameter=="byUniqueId") {
			$sql="UPDATE admin SET $data WHERE admin_unique_id='$id'";
		}
		
		$result=$this->conn->query($sql) or die($this->conn->error);
		if ($result) {
			return true;
		}else{
			return false;
		}
	}
	//Get Admin Details As Per Admin Id
	function getAdminDetailsAsPerId($id){
		$sql="SELECT admin_id,admin_name,admin_unique_id,admin_email_id,admin_status,created_on,creation_ip,modified_by,modified_on,modified_ip FROM admin WHERE admin_id=$id";
		$result=$this->conn->query($sql) or die($this->conn->error);
		if ($result->num_rows==0) {
			return false;
		}else{
			while ($row=$result->fetch_assoc()) {
				//print_r($row);				
				$data[]=$row;
			}
			return $data;
		}
	}
}

$AdmObj= new AdminModel();
?>