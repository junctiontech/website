<?php
    $to = "info@junctiontech.in";
    $subject = "Contact Enquiry";
     $name= $_POST['name'] ;
   $subject="Contact Enquiry";
    $email = $_POST['email'] ;
    $message = $_POST['message'] ;
    
    $headers = "From: $name";
    $sent = mail($to, $subject, $message, $headers) ;

    if ($sent) { 
      header("Location: http://junctiontech.in/thankyou.html");
      exit();
    } else {
      print "We encountered an error sending your mail"; 
    }

?>