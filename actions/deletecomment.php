<?php
    
    require "../actions/config.php";

if( isset($_POST['delete'])) {
    $comment_id = $_POST['delete'];
            
            $articles = mysqli_query($connection, "DELETE FROM `comments` WHERE `comments`.`id` = $comment_id");
            header('Location: ../includes/comments.php');

            } else {
                echo 'Error';
            }?>