<?php
session_start();
include_once '../model/AppointmentDetailsModel.php';
include_once '../phpmailer/PHPMailerAutoload.php';
include_once '../phpmailer/credential.php';
$response=array();
$ipaddress = $_SERVER['REMOTE_ADDR'];
 if (isset($_POST['action'])) {
    switch ($_POST['action']) {
       
		case 'saveappointmentDetailsAction':
			if (isset($_POST['name']) && $_POST['name']!="" && isset($_POST['email']) && $_POST['email']!=""  && isset($_POST['service']) && $_POST['service']!="" && isset($_POST['appointment_time']) && $_POST['appointment_time']!="" && isset($_POST['message']) && $_POST['message']!="") {
				$name=$_POST['name'];
				$email=trim($_POST['email']);
				$service=trim($_POST['service']);
				$appointment_time=trim($_POST['appointment_time']);
				$message=trim($_POST['message']);
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
					$response['statusCode']=201;
					$response['message']="Please enter valid email.";
				}else{
					$insertStatus=$appointmentObj->saveAppointmentDetails('name,email,service,appointment_time,message',"'$name','$email','$service','$appointment_time','$message'");
						if ($insertStatus==true) {
							$mail=new PHPMailer;
										//$mail->SMTPDebug = 3;
							$mail->isSMTP();
							$mail->Host = HOST;
							$mail->SMTPAuth = true;
							$mail->Username = EMAIL;
							$mail->Password = PASS;
							$mail->SMTPSecure = 'ssl';
							$mail->Port = PORT;
							$mail->setFrom(EMAIL, 'Appointment || Astrology');
							$mail->addAddress('yadavpriya1425@gmail.com');					
							$mail->isHTML(true);
							$mail->Subject = "Contact";
							$mail->Body    = '
								<div style="height:60vh;border:1px solid black;">
									<h5 style="color:green;margin-left:12px;">Your Message Sent successfully .</h5>
										<div style="margin-left:15px;">
											<h4>Welcome <span style="color:red">'.$name.'</span></h4>
					                        <p style="text-align:left;">E-mail Id: <strong>'.$email.'</strong></p>
                                            <p style="text-align:left;">Service: <strong>'.$service.'</strong></p>
											<p style="text-align:left;">Time & Date: <strong>'.$appointment_time.'</strong></p>
											<p style="text-align:left;">Message : <strong>'.$message.'</strong></p>
										</div>
								</div>
								';
							if ($mail->send()) {
								$response['statusCode']=200;
								$response['message']="Your Message Sent successfully.";
							}else{
								$response['statusCode']=200;
											$response['message']="Your data Added successfully. Something went wrong to sent mail.";
											//$response['message']=$mail->ErrorInfo;
										}
			
										/*$response['statusCode']=200;
										$response['message']="User Added";*/
									}else{
										$response['statusCode']=201;
										$response['message']="Something went wrong.";
									}
							}
									
						}else{
							$response['statusCode']=201;
							$response['message']="Please fill all the data.";
						}
						
						echo json_encode($response);
					break;
			
    }
}
?>