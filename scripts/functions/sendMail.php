<?php
//this function is for send an email through PHP

function sendMail(){
//    echo 'Subject: Test\n\nValidando Ajustes' | sendmail -v megamankevin7@gmail.com kevin.jessid@gmail.com

    $sender = 'megamankevin7@gmail.com';
    $to = 'kevin.jessid@gmail.com,kevinfm.job@gmail.com,megamankevin7@gmail.com,taniajessid@gmail.com,judith2719@hotmail.com';
    $Subject = 'PHP Scripting';
    $message = "testing from server Daketa - 192.168.1.112:8082";
    $headers = 'From:' . $sender . 'Content-Type: text/plain; charset=UTF-8';
    $parameters = '-v';
    $success = mail($to,$Subject,$message,$parameters);
    if ($success){
        $response = 'Message sent successfully.';
    } else{
        $response = 'Message could not be sent.';
    }
    echo $response;
    }

?>