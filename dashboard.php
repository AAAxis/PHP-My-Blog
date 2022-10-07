<body>
  <?php include "actions/sidebar.php"; ?>
        

<?php
        
        $categories = mysqli_query($connection, "SELECT * FROM `categories`");
        
        $articles = mysqli_query($connection, "SELECT * FROM `articles`");
        ?>

  

<div  class="block" >
<table>
  <tr>
   <th>Action</th>
    <th>Title</th>
    <th>Pubdate</th>
    <th>Image</th>
    <th>Categorie</th>
    <th>Views</th>
   
    </tr>
      
        
    
        <?php
          while( $art = mysqli_fetch_assoc($articles) )
          {
        ?>
    <tr>
     <td><form action="../actions/deletepost.php" method="POST">
        <button name="delete" type="submit" value="<?php echo $art['id'];?>">Delete</button></form></td>
        <td><?php echo mb_substr ($art['title'], 0, 25, 'utf-8'); ?>...</td>
        <td><?php echo mb_substr ($art['pubdate'], 0, 11, 'utf-8'); ?></td>
        <td>  <div>
                <a href="../details.php?id=<?php echo $art['id']; ?>">
                <img style="height:50px; width:60px;" src="../static/images/<?php echo $art['file']; ?>" alt="<?php echo $art['title']; ?>" ></a></div></td>
        <?php
                $art_cat = false;
                foreach( $categories as $cat )
                {
                    if( $cat['id'] == $art['categorie'] )
                    {
                    $art_cat = $cat;
                    break;
                    }
                }
                ?>
        <td><a href="../categorie.php?id=<?php echo $art_cat['id'];?>"><?php echo $art_cat['title']; ?></a></td>
        <td><?php echo $art['views']; ?></td>

       
        <?php 
    }
                ?>
  </tr>


    </table>
        
            </div>

            <div class="block" id="post-form">
            <h3>Create Post</h3>
            <?php 


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
                    $fileDestination = './static/images/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    
                } else {
                    echo "File is to big!";
                }
            } else {
                echo "File Error!";
            }
        }


        //ADD POST
        mysqli_query($connection, "INSERT INTO `articles` (`title`, `categorie`, `text`, `pubdate`, `views`, `file`) VALUES ('".$_POST['title']."','".$_POST['categorie']."','".$_POST['post']."', NOW(), 0, '$fileNameNew')");
        echo '<span style="color: green; font-weight: bold; margin-bottom: 10px; display: block;">Post Added!</span>';
         $secondsWait = 1;
                    echo date('Y-m-d H:i:s');
                    echo '<meta http-equiv="refresh" content="'.$secondsWait.'">';
                    exit();
    }

    else
    {
        echo '<span style="color: green; font-weight: bold; margin-bottom: 10px; display: block;">Error!</span>';
    }

}
?>
      
            <form action="/dashboard.php" method="POST" enctype="multipart/form-data">
           
            <br><br>
            <input type="title" name="title" placeholder="Title"  >
          <br> <br>
        
            <input type="post" name="post" placeholder="Write a post" >
            <br> <br>
                 <select id="categorie" name="categorie">
                <option value="1">Cars</option>
                <option value="2">Programming</option>
                <option value="3" selected>Gaming</option>
                <option value="4">Gadgets</option>
            </select>
               <br> <br>
            <input type="file" name="file" >
            <br><br>
            <input name="upload" type="submit" value="Upload">
            
            </form>
        </div>


        <script src="static/script.js"></script>

  </body>
</html>
