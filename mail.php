<?php
$to = "mitrajit.samanta@gmail.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "mitrajit.samanta2011@gmail.com";
$headers = "From:" . $from;
//$check = mail($to,$subject,$message,$headers);
if(mail($to,$subject,$message,$headers))
  echo 1;
else echo 0;
echo "nmmnmn";
?> 
