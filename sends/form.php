<?php
    $email_to =   'sergey.turundayev@gmail.com';
    // $name     =   $_POST['name'];
    // $email    =   $_POST['email'];
    // $subject  =   $_POST['subject'];
    // $message  =   'Email: '.$_POST['email'].' Сообщение: '.$_POST['message'];
    
    // $headers  = "From: herokuapp \r\n";
    // $headers .= "Reply-To: $email\r\n";
    
    if(mail($email_to, 'subject', 'message' )){ // $subject, $message, $headers
        echo 'true';
    }else{
        echo 'error';
    }

    exit();
?>