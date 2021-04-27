<?php
//this function is for send an email through PHP
function sendmail(){
    $to = "kevin.jessid@gmail.com, kevinfm.job@gmail.com";
    $subject = 'mail from PHP Scripting';
    $message = "testing from server Daketa - 192.168.1.112:8082";
    $headers = 'Content-Type: text/plain; charset=UTF-8';
    $parameters = '-v';
    $success = mail($to,$subject,$message,$headers,$parameters);
    if ($success){
        $response = 'Message sent successfully.';
    } else{
        $response = 'Message could not be sent.';
    }
    echo $response;
    }
?>