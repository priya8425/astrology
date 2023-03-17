<?php
ob_start();
require_once 'DbConnection.php';

class ContactDetails extends DbConnection{
	
	

	/* Save Contact details*/
	function saveContactDetails($fields,$values){
		$sql="INSERT INTO contact_details($fields) VALUES(".$values.")";
		$result=$this->conn->query($sql) or die($this->conn->error);
		if ($result) {
			return true;
		}else{
			return false;
		}
	}

	/*Get All contact Details*/
	function getAllContactDetails(){
		$sql="SELECT id,name,email,subject,message FROM contact_details ORDER BY id DESC";
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

	/*Delete Contact Details*/
	function deleteContactDetails($id){
		$sql="DELETE FROM contact_details WHERE id=$id";
		$result=$this->conn->query($sql) or die($this->conn->error);
		if ($result) {
			return true;
		}else{
			return false;
		}
	}

}

$contactObj = new ContactDetails();
?>