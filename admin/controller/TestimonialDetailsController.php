<?php
session_start();
include_once '../../model/TestimonialDetailsModel.php';

$response=array();
$admin_id=$_SESSION['adm_id'];
$createdBy=$_SESSION['adm_uid'];
$ipaddress = $_SERVER['REMOTE_ADDR'];

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'deleteTestimonialDetails':
			if (isset($_POST['id']) && $_POST['id']!="") {
				$id=$_POST['id'];
				$status=$testimonialObj->deleteTestimonialDetails($id);
				if ($status==true) {
					$response['statusCode']=200;
					$response['message']="Selected Testimonial Details deleted successfully.";
				}else{
					$response['statusCode']=201;
					$response['message']="Something went wrong to delete Testimonial details.";
				}			
			}
			echo json_encode($response);
		break;
        case 'changeStatus':
			if (isset($_POST['id']) && $_POST['id']!="") {
				$id=$_POST['id'];
				$status=$_POST['status'];
				$updatestatus=$testimonialObj->changeTestimonialDetailsAsPerParameter($id,"testimonial_status='$status',modified_by='$createdBy',modified_ip='$ipaddress'","id");
				if ($updatestatus==true) {
					$response['statusCode']=200;
					$response['message']="testimonial status updated successfully.";
				}else{
					$response['statusCode']=201;
					$response['message']="Something went wrog to update the testimonial status.";
				}
			}
			echo json_encode($response);
		break;
    }
}
?>