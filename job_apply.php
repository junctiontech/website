<?php
$to = "info@junctiontech.in";
$name= $_POST['name'] ;
$subject = "Job Application- $name";
$phone= $_POST['phone'] ;
$employer= $_POST['employer'] ; 
$email = $_POST['email'] ; 
$designation= $_POST['designation'] ; 
$filename = $_FILES["filename"]["name"];
$content = chunk_split(base64_encode(file_get_contents($_FILES["filename"]["tmp_name"])));
 
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
<td>  $attachment </td>
</tr>
</table>
</body>
</html>
";

    
    $content = chunk_split($content);

    // a random hash will be necessary to send mixed content
    $separator = md5(time());

    // carriage return type (we use a PHP end of line constant)
    $eol = PHP_EOL;

    // main header (multipart mandatory)
    $headers = "From: name <$email >" . $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol . $eol;
    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
    $headers .= "This is a MIME encoded message." . $eol . $eol;

    // message
    $headers .= "--" . $separator . $eol;
   $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
   // $headers .= "Content-Transfer-Encoding: 8bit" . $eol . $eol;
    $headers .= $message . $eol . $eol;

    // attachment
    $headers .= "--" . $separator . $eol;
    $headers .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"" . $eol;
    $headers .= "Content-Transfer-Encoding: base64" . $eol;
    $headers .= "Content-Disposition: attachment" . $eol . $eol;
    $headers .= $content . $eol . $eol;
    $headers .= "--" . $separator . "--";

$sent =mail($to,$subject,$message,$headers);
   if ($sent) { 
      header("Location: http://junctiontech.in/thankyou.php");
      exit();
    } else {
      print "We encountered an error sending your mail"; 
    }

?>