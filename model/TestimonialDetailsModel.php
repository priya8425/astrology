<?php
ob_start();
require_once 'DbConnection.php';

class TestimonialDetails extends DbConnection{
	
	

	/* Save Testimonial details*/
	function saveTestimonialDetails($fields,$values){
		$sql="INSERT INTO testimonials_details($fields) VALUES(".$values.")";
		$result=$this->conn->query($sql) or die($this->conn->error);
		if ($result) {
			return true;
		}else{
			return false;
		}
	}

	/*Get All Testimonial Details*/
	function getAllTestimonialDetails(){
		$sql="SELECT id,testimonial_name,testimonial_email,testimonial_message,testimonial_status FROM testimonials_details ORDER BY id DESC";
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
	function gettestimonialDetailsbycount(){
		$sql="SELECT COUNT(*) as testimonial FROM testimonials_details"; 
		$result=$this->conn->query($sql) or die($this->conn->error);
		$row=$result->fetch_assoc();
		return $row['testimonial'];
	}

	function getAllActiveTestimonialDetailsById(){
		
		$sql="SELECT * FROM testimonials_details WHERE testimonial_status='Active'";
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

	/*Update testimonial Details As Per Passing parameter by which it's data update*/
	function changeTestimonialDetailsAsPerParameter($id,$dataToUpdate,$parameter){
		if($parameter=="id"){
			$sql="UPDATE testimonials_details SET $dataToUpdate WHERE id=$id";
		}
		
		$result=$this->conn->query($sql) or die($this->conn->error);
		if ($result) {
			return true;
		}else{
			return false;
		}
	}

	/*Delete Testimonial Details*/
	function deleteTestimonialDetails($id){
		$sql="DELETE FROM testimonials_details WHERE id=$id";
		$result=$this->conn->query($sql) or die($this->conn->error);
		if ($result) {
			return true;
		}else{
			return false;
		}
	}

}

$testimonialObj = new TestimonialDetails();
?>