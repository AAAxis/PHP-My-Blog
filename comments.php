<body>
        <?php include "actions/sidebar.php"; ?>


<div class="block" > 

        <h3>Comments</h3>
         <table>
         <tr>
        
               <th>Action</th>
                <th>Comment</th>
                <th>Name</th>
                <th>Profile</th>
                <th>Email</th>
                
            
        </tr>

        <?php
          $comments = mysqli_query($connection, "SELECT * FROM `comments` ORDER BY `id`");
          
          while( $com = mysqli_fetch_assoc($comments) )
          {
          ?>

        <tr>
        
             <td><form action="../actions/deletecomment.php" method="POST">
        <button name="delete" type="submit" value="<?php echo $com['id'];?>">Delete</button></form></td>
        <td><?php echo mb_substr ($com['text'], 0, 70, 'utf-8'); ?>...</td>
        <td><?php echo $com['name']; ?></td>
        <td><img style="height:75px; width:75px;" src="/static/download.png"></td>
        <td><?php echo $com['email']; ?></td>
  
        <?php
            }
            ?>
    
        </tr>
          </table>
           
         </div>
         

         <div class="block" id="comment-form">
         <h3>Leave a Comment</h3>
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
    echo '<span style="color: green; font-weight: bold; margin-bottom: 10px; display: block;">Comment Added!</span>';
    
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
            <form action="" method="POST" >
           
            <input type="text" name="name" placeholder="Your Name"  >
            <br> <br>
            <input type="email" name="email" placeholder="Your Email"  >
            <br> <br>
            <input type="text" name="text" placeholder="Write a message..." >
            <br> <br>
            <input name="submit" type="submit" value="Send">
            
            </form>
        </div>

        <script src="static/script.js"></script>

  </body>
</html>

           

        