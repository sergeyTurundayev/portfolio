<?php
    
    mail('sergey.turundayev@gmail.com', 'subject', 'message');

    $email_to =   'sergey.turundayev@gmail.com';
    $name     =   $_POST['name'];
    $email    =   $_POST['email'];
    $subject  =   $_POST['subject'];
    $message  =   'Email: '.$_POST['email'].' Сообщение: '.$_POST['message'];
    
    $headers  = "From: web-shop.tk \r\n";
    $headers .= "Reply-To: $email\r\n";
    
    if(mail($email_to, $subject, $message, $headers)){
        echo 'sent';
    }else{
        echo 'failed';
    }

    exit();
?>