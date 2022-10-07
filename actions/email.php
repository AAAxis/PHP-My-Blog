<?php
    
    require "config.php";

if( isset($_POST['submit'])) {
    $email = $_POST['email'];
            
            $subscriptions = mysqli_query($connection, "INSERT INTO `subscribe` (`email`) VALUE ('".$_POST['email']."')");
            echo "INSERT INTO `subscribe` (`email`) VALUE ('".$_POST['email']."')";

            

            } else {
                echo 'Error';
            }
            ?>

