<?php
session_start();
include_once '../../model/ContactDetailsModel.php';

$response=array();
$admin_id=$_SESSION['adm_id'];
$createdBy=$_SESSION['adm_uid'];
$ipaddress = $_SERVER['REMOTE_ADDR'];

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'deleteContactDetails':
			if (isset($_POST['id']) && $_POST['id']!="") {
				$id=$_POST['id'];
				$status=$contactObj->deleteContactDetails($id);
				if ($status==true) {
					$response['statusCode']=200;
					$response['message']="Selected Contact Details deleted successfully.";
				}else{
					$response['statusCode']=201;
					$response['message']="Something went wrong to delete Contact details.";
				}			
			}
			echo json_encode($response);
		break;
    }
}
?>