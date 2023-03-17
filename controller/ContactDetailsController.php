<?php
session_start();
include_once '../model/ContactDetailsModel.php';
include_once '../phpmailer/PHPMailerAutoload.php';
include_once '../phpmailer/credential.php';
$response=array();
$ipaddress = $_SERVER['REMOTE_ADDR'];
 if (isset($_POST['action'])) {
    switch ($_POST['action']) {
       
		case 'savecontactDetailsAction':
			if (isset($_POST['name']) && $_POST['name']!="" && isset($_POST['email']) && $_POST['email']!="" && isset($_POST['subject']) && $_POST['subject']!="" && isset($_POST['message']) && $_POST['message']!="") {
				$name=$_POST['name'];
				$email=trim($_POST['email']);
				$subject=trim($_POST['subject']);
				$message=trim($_POST['message']);
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
					$response['statusCode']=201;
					$response['message']="Please enter valid email.";
				}else{
					$insertStatus=$contactObj->saveContactDetails('name,email,subject,message',"'$name','$email','$subject','$message'");
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
							$mail->setFrom(EMAIL, 'Contact || Astrology');
							$mail->addAddress('yadavpriya1425@gmail.com');					
							$mail->isHTML(true);
							$mail->Subject = "Contact";
							$mail->Body    = '
								<div style="height:60vh;border:1px solid black;">
									<h5 style="color:green;margin-left:12px;">Your Message Sent successfully .</h5>
										<div style="margin-left:15px;">
											<h4>Welcome <span style="color:red">'.$name.'</span></h4>
					                        <p style="text-align:left;">E-mail Id: <strong>'.$email.'</strong></p>
											<p style="text-align:left;">E-mail Id: <strong>'.$subject.'</strong></p>
											<p style="text-align:left;">Password : <strong>'.$message.'</strong></p>
										</div><br><br><br><br>
											<p style="color:red;text-align:center;">Please do not share this credential with other.</p>
								</div>
								';
							if ($mail->send()) {
								$response['statusCode']=200;
								$response['message']="Your Message Sent successfully.";
							}else{
								$response['statusCode']=200;
								$response['message']="User Added successfully. Something went wrong to sent mail.";
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