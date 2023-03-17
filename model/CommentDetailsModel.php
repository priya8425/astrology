<?php
ob_start();
require_once 'DbConnection.php';

class CommentDetails extends DbConnection{
	
	/* Save Comment details*/
	function saveCommentDetails($fields,$values){
		$sql="INSERT INTO comment_details($fields) VALUES(".$values.")";
		$result=$this->conn->query($sql) or die($this->conn->error);
		if ($result) {
			return true;
		}else{
			return false;
		}
	}

	/*Get All Comment Details*/
	function getAllCommentDetails(){
		$sql="SELECT * FROM comment_details ORDER BY comment_id DESC";
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

	/*Delete Comment Details*/
	function deleteCommentDetails($id){
		$sql="DELETE FROM comment_details WHERE comment_id=$id";
		$result=$this->conn->query($sql) or die($this->conn->error);
		if ($result) {
			return true;
		}else{
			return false;
		}
	}

	function getAllCommentDetailsById($id){
		$sql="SELECT comment_details.*, blog_details.* FROM comment_details  INNER JOIN blog_details ON comment_details.blog_id = blog_details.blog_id WHERE  comment_details.blog_id=$id";

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
	function getAllActiveCommentDetailsById($id){
		$sql="SELECT comment_details.*, blog_details.* FROM comment_details  INNER JOIN blog_details ON comment_details.blog_id = blog_details.blog_id WHERE  comment_details.blog_id=$id AND comment_details.comment_status='Active'";

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
	function changeCommentDetailsAsPerParameter($id,$dataToUpdate,$parameter){
		if($parameter=="id"){
			$sql="UPDATE Comment_details SET $dataToUpdate WHERE comment_id=$id";
		}
		
		$result=$this->conn->query($sql) or die($this->conn->error);
		if ($result) {
			return true;
		}else{
			return false;
		}
	}


	function countAllComments($id){
		$sql="SELECT COUNT(blog_id) as total FROM comment_details WHERE blog_id=$id";
		$result=$this->conn->query($sql) or die($this->conn->error);
		if ($result->num_rows==0) {
			return false;
		}else{
			$row=$result->fetch_assoc();
			return $row;
		}
	}

}

$commentObj = new CommentDetails();
?>