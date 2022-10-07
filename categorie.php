<body>
        <?php include "actions/sidebar.php"; ?>

        <?php
        $articles = mysqli_query($connection, "SELECT * FROM `articles` WHERE `categorie` =". (int) $_GET['id']);

      
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
              <img src="../static/images/<?php echo $art['file']; ?>" style="display: flex; object-fit: cover; height: 195px; width: 300px;" alt="<?php echo $art['title']; ?>" ></a></div><br>
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
        </div> 
        
        <script src="static/script.js"></script>

     

  </body>
</html>
