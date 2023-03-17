<?php
session_start();
include_once '../model/CommentDetailsModel.php';
$response=array();
$ipaddress = $_SERVER['REMOTE_ADDR'];
 if (isset($_POST['action'])) {
    switch ($_POST['action']) {
       
		case 'savecommentDetailsAction':
			if (isset($_POST['comment_by']) && $_POST['comment_by']!="" && isset($_POST['email']) && $_POST['email']!="" && isset($_POST['comment']) && $_POST['comment']!="" && isset($_POST['blog_id']) && $_POST['blog_id']!="") {
				$comment_by=$_POST['comment_by'];
                $email=$_POST['email'];
				$comment=$_POST['comment'];
				$blog_id=(int)$_POST['blog_id'];
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
					$response['statusCode']=201;
					$response['message']="Please enter valid email.";
				}else{
					$insertStatus=$commentObj->saveCommentDetails('blog_id,comment_by,email,comment_message',"$blog_id,'$comment_by','$email','$comment'");
                    if($insertStatus == true){
                        $response['statusCode']=200;
                        $response['message']="Your Comment Added successfully.";
                    }else{
                        $response['statusCode']=201;
							$response['message']="Please fill all the data.";
                    }
                }
            }
					echo json_encode($response);
					break;
    }
}
?>