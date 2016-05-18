<?php

$name= $_POST['name'] ;
$subject = "Job Application- $name";
$phone= $_POST['phone'] ;
$employer= $_POST['employer'] ; 
$email = $_POST['email'] ; 
$designation= $_POST['designation'] ; 
$filename = $_FILES["filename"]["name"];

	$uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['filename']['name']));
	move_uploaded_file($_FILES['filename']['tmp_name'], $uploadfile);
$message = "
<html>
<head>
<title>Job Application</title>
</head>
<body>

<table>
<tr>
<th>Name</th>
<th>Phone Number</th>
<th>Email</th>
<th>Employer</th>
<th>Designation</th>
<th>File</th>
</tr>
<tr>
<td>  $name </td>
<td>  $phone</td>
<td>  $email</td>
<td>  $employer</td>
<td>  $designation</td>
<td>  $filename </td>
</tr>
</table>
</body>
</html>
";

  	
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "dev4junction@gmail.com";

//Password to use for SMTP authentication
$mail->Password = 'initial1$';

//Set who the message is to be sent from
$mail->setFrom($email, $name);

//Set an alternative reply-to address
$mail->addReplyTo($email, $name);

//Set who the message is to be sent to
$mail->addAddress('dev4junction@gmail.com', $name);

//Set the subject line
$mail->Subject = $subject;

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($message);

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
$mail->addAttachment($uploadfile,$filename);

//send the message, check for errors
if (!$mail->send()) {
    print "We encountered an error sending your mail"; 
} else {
   $sever=$_SERVER['HTTP_HOST'];
    header("Location: $sever/thankyou.php");
	  exit();
}


?>