<?php


     $name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_message['message'];

        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message sent using your contact form"; 
        mail("saihandloom6@gmail.com", $subject, $message, $from); 
        
        echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Thank You ! We Will Get Back To You Soon !')window.location.href='http://shrisaihandloom.com';</SCRIPT>"); 


?>
