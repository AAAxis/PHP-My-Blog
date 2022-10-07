<?php
$user = $_POST['user'];
$pass = $_POST['password'];
$error = '';


if (($user) ==  'admin@gmail.com') {
    echo 'user correct <br>';
    if (($pass) ==  'admin')
    header('Location: ../actions/cookie.php');
    else if(trim($pass) == '')
        $error = 'password null';
        else
        $error = 'password incorrect';
        
    if($error != '') {
            echo $error;
            exit;
    }
} else {
    echo 'user incorrect';
}

    




    
?><?php
$user = $_POST['user'];
$pass = $_POST['password'];
$error = '';


if (($user) ==  'admin@gmail.com') {
    echo 'user correct <br>';
    if (($pass) ==  'admin')
    header('Location: ../actions/cookie.php');
    else if(trim($pass) == '')
        $error = 'password null';
        else
        $error = 'password incorrect';
        
    if($error != '') {
            echo $error;
            exit;
    }
} else {
    echo 'user incorrect';
}

    




    
?>