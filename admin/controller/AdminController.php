<?php
session_start();
include_once '../../model/AdminModel.php';
include_once '../../phpmailer/PHPMailerAutoload.php';
include_once '../../model/DbConnection.php';
include_once '../../phpmailer/credential.php';
$response=array();
if (isset($_POST['action'])) {
	switch ($_POST['action']) {
        /*Code for admin Login action*/
		case 'loginAction':
			if (isset($_POST['uname']) && $_POST['uname']!="" && isset($_POST['password']) && $_POST['password']!="") {
				$uname=trim($_POST['uname']);
				// $password=trim($_POST['password']);
				$password=md5(trim($_POST['password']));
				// echo $email;
				$auth=$AdmObj->authenticateAdminForLogin($uname,$password);
				if ($auth==false) {
					$response['statusCode']=201;
					$response['message']="Invalid username or password.";
				}else{
					//print_r($auth);
					//echo $auth[0]['admin_name'];
					$_SESSION['adm_id']=$auth[0]['admin_id'];
					$_SESSION['adm_uid']=$auth[0]['admin_unique_id'];
					$_SESSION['adm_name']=$auth[0]['admin_name'];
					$_SESSION['adm_email']=$auth[0]['admin_email_id'];

					$response['statusCode']=200;
					$response['message']="Login successfull.";
				}
			}else{
				$response['statusCode']=201;
				$response['message']="Please fill the correct information.";
			}
			echo json_encode($response);
		break;
        /*Code for OTP for admin Reset Password*/
		case 'sendOTPAction':
			if (isset($_POST['loginId']) && $_POST['loginId']!="" && isset($_POST['email']) && $_POST['email']!="") {
				$loginId=trim($_POST['loginId']);
				$email=trim($_POST['email']);
				$checkExist=$AdmObj->checkIfAdminExistAsPerLoginIdAndEmailId($loginId,$email);
				if($checkExist==false){
					$response['statusCode']=201;
					$response['message']="Please enter valid Login Id Or E-mail.";
				}elseif ($checkExist==true) {
					// echo "True"; 
					$varificationcode=rand(10,1000000);

					$mail=new PHPMailer;
					//$mail->SMTPDebug = 3;
					$mail->isSMTP();
					$mail->Host = HOST;
					$mail->SMTPAuth = true;
					$mail->Username = EMAIL;
					$mail->Password = PASS;
					$mail->SMTPSecure = 'ssl';
					$mail->Port = PORT;
					$mail->setFrom(EMAIL, 'Admin || astrology');
					$mail->addAddress($email);					
					$mail->isHTML(true);
					$mail->Subject = "OTP For Reset Password";
					$mail->Body    = '
									<div style="height:35vh;border:1px solid black;text-align:center;">
										<h3 style="color:green;">OTP FOR RESETING YOUR NEW PASSWORD</h3>
										<strong>Username / Login Id :</strong>&emsp;'.$loginId.'<br>
										<p>Your OTP for reset new password is <strong>'.$varificationcode.'</strong></p><br>
										<p style="color:red;">Please do not share this OPT with other.</p>
									</div>
									';
					if ($mail->send()) {
						$status=$AdmObj->setLoginOtp($loginId,$email,"admin_otp=$varificationcode");
						if ($status==true) {
							$response['statusCode']=200;							
							$response['email']=$email;							
							$response['message']="An OTP sent to your email.";
						}else{
							$response['statusCode']=201;
							$response['message']="Something went wrong. Please try again.";
						}
					}else{
						$response['statusCode']=201;
						$response['message']="Something went wrong to send OTP. Please try again.";
					}
				}
			}else{
				$response['statusCode']=201;
				$response['message']="Please fill the correct information.";
			}
			echo json_encode($response);
		break;
		/* Code for self reset password from admin login page*/
		case 'resetPasswordAction':
			if (isset($_POST['loginId']) && $_POST['loginId']!="" && isset($_POST['email']) && $_POST['email']!="" && isset($_POST['webotp']) && $_POST['webotp']!="" && isset($_POST['newPassword']) && $_POST['newPassword']!="") {
				$loginId=trim($_POST['loginId']);
				$email=trim($_POST['email']);
				$webOtp=trim($_POST['webotp']);
				$newPass=trim($_POST['newPassword']);
				$getOTPData=$AdmObj->getOtpVerificationByEmailAndLoginId($email,$loginId);
				if($webOtp==$getOTPData[0]['admin_otp']){
					// echo "OTP MAtch";
					$password=md5($newPass);
					$status=$AdmObj->changeAdminDetails($loginId,"admin_password='$password'",'byUniqueId');
					if ($status==true) {
						$mail=new PHPMailer;
						//$mail->SMTPDebug = 3;
						$mail->isSMTP();
						$mail->Host = HOST;
						$mail->SMTPAuth = true;
						$mail->Username = EMAIL;
						$mail->Password = PASS;
						$mail->SMTPSecure = 'ssl';
						$mail->Port = PORT;
						$mail->setFrom(EMAIL, 'Admin || astrology');
						$mail->addAddress($email);					
						$mail->isHTML(true);
						$mail->Subject = "Reset Password";
						$mail->Body    = '
										<div style="height:50vh;border:1px solid black;">
											<h3 style="color:green;margin-left:12px;">YOUR NEW PASSWORD RESET SUCCESSFULLY</h3>
											<div style="margin-left:15px;">
												<p style="text-align:left;">Username / Login Id: <strong>'.$loginId.'</strong></p>
												<p style="text-align:left;">E-mail Id: <strong>'.$email.'</strong></p>
												<p style="text-align:left;">Password : <strong>'.$newPass.'</strong></p>
											</div><br><br><br><br>
											<p style="color:red;text-align:center;">Please do not share this credential with other.</p>
										</div>
										';
						if ($mail->send()) {
							$response['statusCode']=200;
							$response['message']="Your password reset successfully.";
						}else{
							$response['statusCode']=200;
							$response['message']="Your password reset successfully. Something went wrong to sent mail.";
						}
					}else{
						$response['statusCode']=201;
						$response['message']="Something went wrong to reset your password. Please try after sometime.";
					}
				}else{
					$response['statusCode']=201;
					$response['message']="Entered OTP is incorrect. Please enter correct OTP.";
				}
			}else{
				$response['statusCode']=201;
				$response['message']="Please fill the correct information.";
			}
			echo json_encode($response);
		break;
		/* Code for update Basic information from profile page*/
		case 'updateBasicInfoAction':
			if (isset($_POST['admId']) && $_POST['admId']!="" && isset($_POST['name']) && $_POST['name']!="" && isset($_POST['email']) && $_POST['email']!="") {
				$admId=$_POST['admId'];
				$name=$_POST['name'];
				$email=$_POST['email'];

				$status=$AdmObj->changeAdminDetails($admId,"admin_name='$name',admin_email_id='$email'",'byId');
				if ($status==true) {
					$_SESSION['adm_name']=$name;
					$response['statusCode']=200;
					$response['message']="Basic Information updated successfully.";
				}else{
					$response['statusCode']=201;
					$response['message']="Something went wrong to update basic info. Please try after sometime.";
				}
			}else{
				$response['statusCode']=201;
				$response['message']="Please fill the correct information.";
			}
			echo json_encode($response);
		break;
		/* For change the admin password from profile page*/
		case 'changePasswordAction':
			
			if (isset($_POST['admId']) && $_POST['admId']!="" && isset($_POST['uniqueId']) && $_POST['uniqueId']!=""  && isset($_POST['oldPassword']) && $_POST['oldPassword']!="" && isset($_POST['newPassword']) && $_POST['newPassword']!="" && isset($_POST['email']) && $_POST['email']!="") {
				$admId=$_POST['admId'];
				$uniqueId=$_POST['uniqueId'];
				$email=$_POST['email'];
				$oldPassword=md5($_POST['oldPassword']);
				$newPassword=$_POST['newPassword'];
				$auth=$AdmObj->authenticateAdminForLogin($email,$oldPassword);
				if ($auth == false) {
					$response['statusCode']=201;
					$response['message']="Old password does not match. Please enter correct password.";
				}else{
					$password=md5($newPassword);
					$status=$AdmObj->changeAdminDetails($uniqueId,"admin_password='$password'",'byUniqueId');
					if ($status==true) {
						$mail=new PHPMailer;
						//$mail->SMTPDebug = 3;
						$mail->isSMTP();
						$mail->Host = HOST;
						$mail->SMTPAuth = true;
						$mail->Username = EMAIL;
						$mail->Password = PASS;
						$mail->SMTPSecure = 'ssl';
						$mail->Port = PORT;
						$mail->setFrom(EMAIL, 'Admin || Astrology');
						$mail->addAddress($email);					
						$mail->isHTML(true);
						$mail->Subject = "Change Password";
						$mail->Body    = '
										<div style="height:50vh;border:1px solid black;">
											<h3 style="color:green;margin-left:12px;">YOUR NEW PASSWORD UPDATED SUCCESSFULLY</h3>
											<div style="margin-left:15px;">
												<p style="text-align:left;">E-mail: <strong>'.$email.'</strong></p>
												<p style="text-align:left;">UserId: <strong>'.$uniqueId.'</strong></p>
												<p style="text-align:left;">Password : <strong>'.$newPassword.'</strong></p>
											</div><br><br><br><br>
											<p style="color:red;text-align:center;">Please do not share this credential with other.</p>
										</div>
										';
						if ($mail->send()) {
							$response['statusCode']=200;
							$response['message']="Your password updated successfully.";
						}else{
							$response['statusCode']=200;
							$response['message']="Your password updated successfully. Something went wrong to sent mail.";
						}
					}else{
						$response['statusCode']=201;
						$response['message']="Something went wrong to reset your password. Please try after sometime.";
					}
				}
			}else{
				$response['statusCode']=201;
				$response['message']="Fill all the data.";
			}
			echo json_encode($response);
		break;
    }
}
?>