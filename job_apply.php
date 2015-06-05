<?php
$to = "info@junctiontech.in";
$subject = "Job Application";
$name= $_POST['name'] ;
$phone= $_POST['phone'] ;
$employer= $_POST['employer'] ; 
$email = $_POST['email'] ; 
$designation= $_POST['designation'] ; 
$fileupload= $_POST['fileupload'] ; 
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
<td>  $fileupload</td>
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