<?php
ob_start();
require_once 'DbConnection.php';

class AppointmentDetails extends DbConnection{
	
	

	/* Save Appointment details*/
	function saveAppointmentDetails($fields,$values){
		$sql="INSERT INTO appointment_details($fields) VALUES(".$values.")";
		$result=$this->conn->query($sql) or die($this->conn->error);
		if ($result) {
			return true;
		}else{
			return false;
		}
	}

	/*Get All Appointment Details*/
	function getAllAppointmentDetails(){
		$sql="SELECT * FROM appointment_details ORDER BY id DESC";
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
	/*Get All Appointment Details count*/
	function getAppointmentDetailsbycount(){
		$sql="SELECT COUNT(*) as Appointments FROM appointment_details"; 
		$result=$this->conn->query($sql) or die($this->conn->error);
		$row=$result->fetch_assoc();
		return $row['Appointments'];
	}

	/*Delete Appointment Details*/
	function deleteAppointmentDetails($id){
		$sql="DELETE FROM appointment_details WHERE id=$id";
		$result=$this->conn->query($sql) or die($this->conn->error);
		if ($result) {
			return true;
		}else{
			return false;
		}
	}

}

$appointmentObj = new AppointmentDetails();
?>