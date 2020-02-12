<?php
error_reporting(0);
$msgerror = '';
$msgsuccess='';

    if ($_POST['recipient_name'] == "" || $_POST['recipient_email'] == "" || $_POST['recipient_phone'] == "") {
       $msgsuccess = 'Please Fill all field';
    } else {
        $name = $_POST['recipient_name'];
        $email = $_POST['recipient_email'];
        $phone = $_POST['recipient_phone'];
        $message = $_POST['message_text'];
       
    $ToEmail = 'info@comsort.com'; 
    $EmailSubject = 'Request a Demo Form'; 
    $mailheader = "From: ".$email."\r\n"; 
    
    $mailheader .= "MIME-Version: 1.0" . "\r\n";
    $mailheader .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
   
   // $mailheader .= "Content-type:text/html;charset=UTF-8 \r\n"; 
    $MESSAGE_BODY = "<p>Name: ".$name."</p>"; 
    $MESSAGE_BODY .= "<p>Email: ".$email."</p>"; 
    $MESSAGE_BODY .= "<p>Phone Number: ".$phone."</p>"; 
    $MESSAGE_BODY .= "<p>Message: ".nl2br($message)."</p>"; 
    if (mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader)) {
        $msgsuccess = "<p style='text-align: center;' ><b style='color:#0072bb;'>Thank You! Mail Send Successfully.</b></p>";
    }else {
        $msgsuccess = 'Main not send';
    }

    }    
    echo $msgsuccess;

?>