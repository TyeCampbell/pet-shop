<?php

require 'phpmailer/PHPMailerAutoload.php';

if( isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['message']) ) {
	
	function clean_data($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$fname = clean_data($_POST['fname']);
	$lname = clean_data($_POST['lname']);
	$email = clean_data($_POST['email']);
	$message = clean_data(nl2br($_POST['message']));
	
	$mail = new PHPMailer();
	
	//$mail->isSMTP();
	$mail->SMTPDebug = 2; 
	$mail->Debugoutput = 'html';
	$mail->Host = gethostbyname('smtp.gmail.com');
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = "sandys.petshop.webucator@gmail.com";
	$mail->Password = "pwdpwd1234";
	$mail->setFrom('sandys.petshop.webucator@gmail.com', 'Sandys Petshop');
	$mail->addReplyTo('sandys.petshop.webucator@gmail.com', 'Customer Service');
	$mail->addAddress('sandys.petshop.webucator@gmail.com', 'Sandy');
	$mail->Subject = 'New Contact Form Message';
	$mail->msgHTML('<b>First Name:</b> ' . $fname . '<br><b>Last Name:</b></br> ' . $lname . '<br><b>Email:</b></br> ' . $email . '<p>' . $message . '</p>');

	if (!$mail->Send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
		echo "success";
	}
}



/*
	$mail = new PHPMailer;
	$mail->IsSMTP();
	$mail->SMTPDebug = 1; 
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'ssl'; //may not need this since on a local host
	$mail->Host = "smtp.gmail.com"; 
	$mail->Port = 465; // or 587
	$mail->IsHTML(true);
	$mail->Username = "sandys.petshop.webucator@gmail.com"; 
	$mail->Password = "pwdpwd1234";
	$mail->SetFrom("sandys.petshop.webucator@gmail.com");
	$message = nl2br($_POST['message']);
	$to = "sandys.petshop.webucator@gmail.com";
	$from = $email;
	$subject = 'Contact Form Message';
	$message = '<b>First Name:</b> ' .$fname. '<br><b>Last Name:</br> ' .$lname. '<br><b>Email:</br> ' .$email. '<p>' .$message. '</p>';
	$mail->Subject = $subject;
	$mail->Body = $message;
	$mail->AddAddress = $to;
	$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859\n";
	if ($mail->Send()) {
		echo "success";
		}
	} else {
		echo "The server failed to send the message. Please try again.";
	}
*/


?>