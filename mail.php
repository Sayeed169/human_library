<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// var_dump($_POST);

if(isset($_POST['name']) && isset($_POST['message'])){
	$emailTo = "sayeedhasan169@gmail.com";//"info@humanlibrarybd.org";
	$emailToName = "Human Library Dhaka";
	$emailFrom = $_POST['email'];
	$emailFromName = $_POST['name'];
	$msg = $_POST['message'];

	if(!empty($_POST['email'])){
		$emailFrom = $_POST['email'];
	}

	$mail = new PHPMailer;
	$mail->isSMTP(); 
	$mail->SMTPDebug = 2; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
	$mail->Host = "mail.humanlibrarybd.org"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
	$mail->Port = 26; // TLS only
	$mail->SMTPSecure = 'tls'; // ssl is depracated
	$mail->SMTPAuth = true;
	$mail->Username = "info@humanlibrarybd.org";
	$mail->Password = "Unt1tled!$";
	$mail->setFrom($emailFrom, $emailFromName);
	$mail->addAddress($emailTo, $emailToName);
	$mail->Subject = 'HLD Message';
	$mail->msgHTML($msg); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
	$mail->AltBody = 'HTML messaging not supported';
	// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file

	if(!$mail->send()){
	    echo "Mailer Error: " . $mail->ErrorInfo;
	}else{
	    echo "Message sent!";
	}
}
?>

<form action="maill.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputFullName">Full Name<i class="text-danger">*</i></label>
    <input type="text" name="name" class="form-control" id="exampleInputFullName" required="true">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Message<i class="text-danger">*</i></label>
    <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" required="true"></textarea>
  </div>
  <button type="subscribe" class="btn btn-primary">Send</button>
</form>