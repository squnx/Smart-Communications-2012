<?php
 $to = "info@creativityatwork.org";
 $subject = "Creativity At Work";
 $email = $_POST["email"];
 $body = "Contact Form Submission \n\n Email: $email";
 $sent = mail($to, $subject, $body) ;
 
if($sent)
 {
 print "Successfully Submitted. ";
 }
 else
 {
 print "There was a problem with sending the message";
 }
 
print "Thank You!";
 
?>