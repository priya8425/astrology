<?php
session_start();
include_once '../model/TestimonialDetailsModel.php';
$response=array();
$ipaddress = $_SERVER['REMOTE_ADDR'];
 if (isset($_POST['action'])) {
    switch ($_POST['action']) {
       
		case 'savetestimonialDetailsAction':
			if (isset($_POST['testimonial_name']) && $_POST['testimonial_name']!="" && isset($_POST['testimonial_email']) && $_POST['testimonial_email']!="" && isset($_POST['testimonial_message']) && $_POST['testimonial_message']!="") {
				$testimonial_name=$_POST['testimonial_name'];
                $testimonial_email=$_POST['testimonial_email'];
				$testimonial_message=$_POST['testimonial_message'];
				if(!filter_var($testimonial_email, FILTER_VALIDATE_EMAIL)){
					$response['statusCode']=201;
					$response['message']="Please enter valid email.";
				}else{
					$insertStatus=$testimonialObj->saveTestimonialDetails('testimonial_name,testimonial_email,testimonial_message',"'$testimonial_name','$testimonial_email','$testimonial_message'");
                    if($insertStatus == true){
                        $response['statusCode']=200;
                        $response['message']="Your details save successfully.";
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