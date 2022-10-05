<?php 
require "../includes/config.php";

if( isset($_POST['upload'])){


   $file = $_FILES['file'];
   

   $fileName = $_FILES['file']['name'];
   $fileTmpName = $_FILES['file']['tmp_name'];
   $fileSize = $_FILES['file']['size'];
   $fileError = $_FILES['file']['error'];
   $fileType = $_FILES['file']['type'];

   $fileExt = explode('.', $fileName);
   $fileActualExt = strtolower(end($fileExt));
   $allowed = array('jpg', 'jpeg', 'png');
   
   $errors = array();

    if( $_POST['title'] == '' )
    {
        $errors[] = 'Enter Post Title';
    }
    if( $_POST['categorie'] == '' )
    {
        $errors[] = 'Enter Categorie';
    }
    
    if( $_POST['post'] == '' )
    {
        $errors[] = 'Enter your text';
    }

    
    if( empty($errors) )
    {
        if(in_array($fileActualExt, $allowed)) {
            if ($fileError ===0) {
                if($fileSize < 1000000) {
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = '../static/images/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    
                } else {
                    echo "File is to big!";
                }
            } else {
                echo "File Error!";
            }
        }


        //ADD POST
        mysqli_query($connection, "INSERT INTO `articles` (`title`, `categorie`, `post`, `pubdate`, `views`, `file`) VALUES ('".$_POST['title']."','".$_POST['categorie']."','".$_POST['post']."', NOW(), 0, '$fileNameNew')");
        echo '<span style="color: green; font-weight: bold; margin-bottom: 10px; display: block;">Post Added!</span>';
        print_r($file); echo "upload success ";
        header('Location: ../includes/posts.php');
    }

    else
    {
        echo '<span style="color: green; font-weight: bold; margin-bottom: 10px; display: block;">Error!</span>';
    }

}
?>