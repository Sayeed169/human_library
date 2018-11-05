<?php
/*DEVELOPED BY © SAYEED HASAN (sayeedhasan169@gmail.com)*/
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['name']) && isset($_POST['message'])){
	$emailTo = "info@humanlibrarybd.org";
	$emailToName = "Human Library Dhaka";
	$emailFrom = "info@humanlibrarybd.org";
	$emailFromName = $_POST['name'];
	$msg = $_POST['message'];

	if(!empty($_POST['email'])){
		$emailFrom = $_POST['email'];
	}

	$mail = new PHPMailer;
	$mail->isSMTP(); 
	$mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
	$mail->Host = "mail.humanlibrarybd.org"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
	$mail->Port = 26; // TLS only
	$mail->SMTPSecure = 'tls'; // ssl is depracated
	$mail->SMTPAuth = true;
	$mail->Username = "info@humanlibrarybd.org";
	$mail->Password = "Unt1tled!$";
	$mail->setFrom($emailFrom, $emailFromName);
	$mail->addAddress($emailTo, $emailToName);
	$mail->Subject = 'HLD Message';
	$mail->msgHTML($msg);
	$mail->AltBody = 'HTML messaging not supported';

	if(!$mail->send()){
	    // echo "Mailer Error: " . $mail->ErrorInfo;
	    echo 0;
	}else{
	    // echo "Message sent!";
	    echo 1;
	}
}
?>