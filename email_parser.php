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
	
	$mail = new PHPMailer;
	
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'sandys.petshop.webucator@gmail.com';
	$mail->Password = 'pwdpwd1234';
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587;

	$mail->setFrom('sandys.petshop.webucator@gmail.com', 'Sandys Petshop');
	$mail->addReplyTo('sandys.petshop.webucator@gmail.com', 'Sandys Petshop');
	$mail->addAddress('sandys.petshop.webucator@gmail.com');

	$mail->isHTML(true);

	$mail->Subject = 'New Contact Form Message';
	$mail->Body = '<b>First Name:</b> ' . $fname . '<br><b>Last Name:</b> ' . $lname . '<br><b>Email:</b> ' . $email . '<br><b>Message: </b><p>' . $message . '</p>';
	$mail->AltBody = 'First Name: ' . $fname . 'Last Name: ' . $lname . 'Email: ' . $email . 'Message: ' . $message;

	if (!$mail->Send()) {
		echo "Message could not be sent.";
		echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
		echo "success";
	}
}


?>