<?php

$config = array(

    'title' => 'ITBLOG',
    'owner' => 'Dima Polskoy',
    'linkedin' => 'https://www.linkedin.com/in/dmitry-polskoy-a46103177/',
    'facebook' => 'https://www.facebook.com/polskoydm',
    'github' => 'https://github.com/AAAxis/',
    'db' => array(
    'server' => 'sql202.ezyro.com',
    'username' => 'ezyro_32731389',
    'password' => 'fyhfc4mmsujz',
    'name' => 'ezyro_32731389_test_blog' )
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

