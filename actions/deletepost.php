<?php
    
    require "../actions/config.php";

if( isset($_POST['delete'])) {
    $post_id = $_POST['delete'];
            
            $articles = mysqli_query($connection, "DELETE FROM `articles` WHERE `articles`.`id` = $post_id");
            header('Location: ../dashboard.php');

            } else {
                echo 'Error';
            }?>
