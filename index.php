<!DOCTYPE html>
<html>
    <head>
      <?php require "includes/config.php";?>
      <link rel="stylesheet" href="./media/style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?php echo $config['title']; ?></title>
    </head>
  <body>

        <?php include "includes/header.php"; ?>
        <main>
        <?php
        $articles = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `pubdate` DESC LIMIT 4");
        ?>

        <div class="section">

          <?php
          while( $art = mysqli_fetch_assoc($articles) )
          {
          ?>

          <div  class="block" >
              <h2><?php echo $art['title']; ?></h2>
              <p>Posted <?php echo mb_substr ($art['pubdate'], 0, 11, 'utf-8'); ?></p>
              <div class="fakepost" style="height:200px;">
              <a href="/details.php?id=<?php echo $art['id']; ?>">
              <img src="../static/images/<?php echo $art['file']; ?>" style="height:200px" alt="<?php echo $art['title']; ?>" ></a></div><br>
              <p><?php echo $art['post']; ?></p>

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
            <small>Categorie: <a href="/categorie.php?id=<?php echo $art_cat['id'];?>"><?php echo $art_cat['title']; ?></a></small>
            <small style="float:right;">Views: <?php echo $art['views']; ?></small><br>
        
      
        </div>
         
        <?php
          }
            ?>
              <small style="text-decoration: none; display: block; margin: 10px; color:black;"> <a href="/showall.php">Show All</a></small>
              <br>
              
              
          
        </div> 
        </main>

    <?php include "includes/sidebar.php"; ?>
    <?php include "includes/footer.php"; ?>
  </body>

</html>
