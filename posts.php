<body>
  <?php include "actions/sidebar.php"; ?>
        

<?php
        
        $categories = mysqli_query($connection, "SELECT * FROM `articles_categories`");
        
        $articles = mysqli_query($connection, "SELECT * FROM `articles`");
        ?>

  

<div  class="block" >
<table>
  <tr>
    <th>Title</th>
    <th>Pubdate</th>
    <th>Image</th>
    <th>Categorie</th>
    <th>Views</th>
    <th>Action</th>
    </tr>
      
        
    
        <?php
          while( $art = mysqli_fetch_assoc($articles) )
          {
        ?>
    <tr>
        <td><?php echo mb_substr ($art['title'], 0, 25, 'utf-8'); ?>...</td>
        <td><?php echo mb_substr ($art['pubdate'], 0, 11, 'utf-8'); ?></td>
        <td>  <div>
                <a href="../details.php?id=<?php echo $art['id']; ?>">
                <img style="height:50px;" src="../static/images/<?php echo $art['file']; ?>" style="height:200px" alt="<?php echo $art['title']; ?>" ></a></div></td>
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

        <td><form action="../actions/deletepost.php" method="POST">
        <button name="delete" type="submit" value="<?php echo $art['id'];?>">Delete</button></form></td>
        <?php 
    }
                ?>
  </tr>


    </table>
        
            </div>

            <div class="block" id="post-form">
            <h3>Create Post</h3>
      
            <form action="../actions/createpost.php" method="POST" enctype="multipart/form-data">
           
            <br><br>
            <input type="title" name="title" placeholder="Title"  >
            <br><br>
            <input type="categorie" name="categorie" placeholder="Categorie"  >
            <br><br>
            <input type="post" name="post" placeholder="Write a post" >
            <br><br>
            <input type="file" name="file" >
            <br><br>
            <input name="upload" type="submit" value="Upload">
            
            </form>
        </div>


        <script src="static/script.js"></script>

  </body>
</html>
