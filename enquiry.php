<?php
    $to = "info@junctiontech.in";
    $subject = "Discuss Requirement";
     $name= $_POST['name'] ;
   $subject="Discuss Requirement";
    $email = $_POST['email'] ;
     
    $headers = "From: $name";
    $sent = mail($to, $subject, $email, $headers) ;

    if ($sent) { 
      header("Location: http://junctiontech.in/thankyou.html");
      exit();
    } else {
      print "We encountered an error sending your mail"; 
    }

?>