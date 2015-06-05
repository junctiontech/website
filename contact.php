<?php
$to = "info@junctiontech.in";
$subject="Contact Enquiry";
$name= $_POST['name'] ;
$email = $_POST['email'] ;
$text = $_POST['text'] ;
$message = "
<html>
<head>
<title>Discuss Requirement</title>
</head>
<body>
<table>
<tr>
<th>Name</th>
<th>email</th>
<th>Requirement</th>
</tr>
<tr>
<td>  $name </td>
<td>  $email </td>
<td>  $text</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$sent =mail($to,$subject,$message,$headers);
   if ($sent) { 
      header("Location: http://junctiontech.in/thankyou.html");
      exit();
    } else {
      print "We encountered an error sending your mail"; 
    }

?>