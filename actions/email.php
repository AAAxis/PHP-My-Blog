<?php

$email = $_POST['email'];
$message = $_POST['text'];

$error = '';
if(trim($email) == '')
    $error = 'Email null';
else if(trim($message) == '')
    $error = 'Message null';
else if(strlen($message) < 10)
    $error = 'Message a short';

if($error != '') {
    echo $error;
    exit;
}


$subject = "=?utf-8?B?".("Test Message")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

mail('polskoydm@gmail.com', $subject, $message, $headers);
header('Location: /');
?>