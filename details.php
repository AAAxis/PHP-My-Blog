<body>
        <?php include "actions/sidebar.php"; ?>

        <?php
        $articles = mysqli_query($connection, "SELECT * FROM `articles` WHERE `id` =". (int)$_GET['id']);

      
       ?>

        <div class="container">

          <?php
           $art = mysqli_fetch_assoc($articles);
           mysqli_query($connection, "UPDATE `articles` SET `views` = `views` + 1 WHERE `id` = " . (int) $art['id']);
          
            
          ?>

          <div  class="block" >
              <h2><?php echo $art['title']; ?></h2>
              <p>Posted <?php echo mb_substr ($art['pubdate'], 0, 11, 'utf-8'); ?></p>
              <div class="fakepost" style="height:200px;">
          
              <img src="../static/images/<?php echo $art['file']; ?>" style="display: flex; object-fit: cover; height: 195px; width: 300px;" alt="<?php echo $art['title']; ?>" ></div><br>
              <p><?php echo $art['text']; ?></p>

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
      
      
        </div> 

        <div class="block" >  
        <h3>Comments</h3>
          
          

          <?php
          $comments = mysqli_query($connection, "SELECT * FROM `comments` ORDER BY `id`");
          
          while( $com = mysqli_fetch_assoc($comments) )
          {
          ?>
          <div class="small">
          <hr>
          <img id ='small-image' src='/static/download.png'>
          <div id="small-bio">
          
          <h4><?php echo $com['name']; ?></h4>
          <p> <?php echo $com['text']; ?><br>
          <p> <?php echo $com['email']; ?><br>
              
              </div>
              </div>
              <br>
         <?php
            }
            ?>
           
         </div>
           

         <div class="block">
         <h3>Leave a Comment</h3>
      
            <form action="" method="POST" >
            
            <?php 

            if( isset($_POST['submit']) )
            {
              $errors = array();

              if( $_POST['name'] == '' )
              {
                $errors[] = 'Enter your Name';
              }
              if( $_POST['email'] == '' )
              {
                $errors[] = 'Enter your Email';
              }
              
              if( $_POST['text'] == '' )
              {
                $errors[] = 'Enter your Message';
              }
             
              if( empty($errors) )
              {
                //ADD COMMENT
                mysqli_query($connection, "INSERT INTO `comments` (`name`, `email`, `text`) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['text']."')");
             
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
            <input type="text" name="name" placeholder="Your Name"  >
            <br><br>
            <input type="email" name="email" placeholder="Your Email"  >
            <br><br>
            <input type="text" name="text" placeholder="Write a message..." >
            <br><br>
            <input name="submit" type="submit" value="Send">
            
            </form>
        </div>


        <script src="static/script.js"></script>
  </body>
</html>
