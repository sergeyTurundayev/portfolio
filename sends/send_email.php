<?php
    $email_to =   'sergey.turundayev@gmail.com';
    $name     =   $_POST['name'];
    $subject  =   $_POST['subject'];
    $email    =   $_POST['email'];
    $message  =   'Email: '. $email . "\n" . ' Сообщение: '. $_POST['message'];
    
    $headers  = "From: 53fr.ru \r\n";
    $headers .= "Reply-To: $email\r\n";
    
    if(mail($email_to, $subject, $message, $headers)){
        echo 'sent';
    }else{
        echo 'failed';
    }
?>