<?php

    $email_to =   'abdullah.turundayev@gmail.com';
    $name     =   $_POST['name'];
    $email    =   $_POST['email'];
    $subject  =   $_POST['subject'];
    $message  =   $name . ". " . $_POST['message'];
    
    $headers  = "From: herokuapp \r\n";
    $headers .= "Reply-To: $email\r\n";
    
    if( mail($email_to, $subject, $message, $headers) ){
        echo 'sent';
    }else{
        echo 'failed';
    }
?>