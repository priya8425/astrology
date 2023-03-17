<?php
ob_start();
require_once 'DbConnection.php';

class BlogDetails extends DbConnection{
	/*Save recorder video details*/
	function saveBlogDetails($fields,$values){
		$sql="INSERT INTO blog_details($fields) VALUES(".$values.")";
		$result=$this->conn->query($sql) or die($this->conn->error);
		if ($result) {
			return true;
		}else{
			return false;
		}
	}
    /*Get All Blog Details */
	function getAllBlogDetails(){
		$sql="SELECT blog_id,blog_title,blog_description,file_type,image_file,image_file_path,video_file,video_file_path,blog_status,created_by,created_on FROM blog_details ORDER BY blog_id DESC";
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
	//Get Blog Details As Per  Id
	function getBlogDetailsAsPerId($id){
		$sql="SELECT * FROM blog_details WHERE blog_id=$id";
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

	function getBlogDetails(){
		$sql="SELECT * FROM blog_details ORDER BY RAND() LIMIT 9";  
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
	/*Check blog name already exist*/
	function checkBlogNameAlreadyExist($blog_title){
		$sql="SELECT * FROM blog_details WHERE blog_title='$blog_title'";
		$result=$this->conn->query($sql) or die($this->conn->error);
		if ($result->num_rows==0) {
			return false;
		}else{
			return true;
		}
	}
	/*Update blog Details As Per Passing parameter by which it's data update*/
	function changeBlogDetailsAsPerParameter($id,$dataToUpdate,$parameter){
		if($parameter=="id"){
			$sql="UPDATE blog_details SET $dataToUpdate WHERE blog_id=$id";
		}
		
		$result=$this->conn->query($sql) or die($this->conn->error);
		if ($result) {
			return true;
		}else{
			return false;
		}
	}
  
    /*Delete Blog Details*/
	function deleteBlogDetails($id){
		$sql="DELETE FROM blog_details WHERE blog_id=$id";
		$result=$this->conn->query($sql) or die($this->conn->error);
		if ($result) {
			return true;
		}else{
			return false;
		}
	}

}

$blogObj = new BlogDetails();
?>