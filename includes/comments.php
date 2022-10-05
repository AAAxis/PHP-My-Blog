<?php include "../admin.php"; ?>

<div style="margin-left: 22%;" class="main">
<div class="block" > 

        <h3>Comments</h3>
         <table>
         <tr>
        
               
                <th>Comment</th>
                <th>Name</th>
                <th>Profile</th>
                <th>Email</th>
                <th>Action</th>
            
        </tr>

        <?php
          $comments = mysqli_query($connection, "SELECT * FROM `comments` ORDER BY `id`");
          
          while( $com = mysqli_fetch_assoc($comments) )
          {
          ?>

        <tr>
        
       
        <td><?php echo mb_substr ($com['text'], 0, 70, 'utf-8'); ?>...</td>
        <td><?php echo $com['name']; ?></td>
        <td><img style="height:50px;" src="/media/download.png"></td>
        <td><?php echo $com['email']; ?></td>
        <td><form action="../actions/deletecomment.php" method="POST">
        <button name="delete" type="submit" value="<?php echo $com['id'];?>">Delete</button></form></td>
        <?php
            }
            ?>
    
        </tr>
          </table>
           
         </div>
         

         <div class="block" id="comment-form">
         <h3>Leave a Comment</h3>
      
            <form action="../actions/createcomment.php" method="POST" >
           
            <input type="text" name="name" placeholder="Your Name"  >
            <br> <br>
            <input type="email" name="email" placeholder="Your Email"  >
            <br> <br>
            <input type="text" name="text" placeholder="Write a message..." >
            <br> <br>
            <input name="submit" type="submit" value="Send">
            
            </form>
        </div>

        
  </body>
</html>

           

        