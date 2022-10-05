<?php

$config = array(

    'title' => 'ITBLOG',
    'owner' => 'Dima',
    'linkedin' => 'https://www.linkedin.com/in/dmitry-polskoy-a46103177/',
    'facebook' => 'https://www.facebook.com/polskoydm',
    'github' => 'https://github.com/AAAxis/',
    'db' => array(
    'server' => 'localhost',
    'username' => 'root',
    'password' => '',
    'name' => 'test_blog' )
);


$connection = mysqli_connect(
    $config['db']['server'],
    $config['db']['username'],
    $config['db']['password'],
    $config['db']['name']
);

if($connection == false )
{
    echo "Connection Error!<br>";
    echo mysqli_connect_error();
    exit();
}

