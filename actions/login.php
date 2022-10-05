<?php
$user = $_POST['user'];
$pass = $_POST['password'];
$error = '';

if (($pass) ==  'admin')
header('Location: ../actions/auth.php');
else if(trim($pass) == '')
    $error = 'Password null';
else if(trim($user) == '')
    $error = 'User null';
    else
    $error = 'password incorrect';
    
if($error != '') {
        echo $error;
        exit;
    }
    
?>