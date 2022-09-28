<?php 
require "config.php";
?>
<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['title']; ?></title>
    <link rel="stylesheet" href="/media/style.css">
    </head>
    <body>


    <br>

    <div  class="section">
      <h2>NVIDIA INTRODUCED 40 SERIES FLAGSHIP VIDEO CARDS</h2>
      <p>Posted Sep 15, 2022</p>
         <div class="fakepost" style="height:200px;"><img src="/media/nvidia.jpeg" style="height:200px" alt="Nvidea" ></div><br>
      <p>NVIDIA and its graphics cards continue to push the technology world forward at an exponential rate. Amid the craze for cryptocurrency mining, graphics cards were becoming increasingly difficult to find at reasonable prices. Luckily for consumers, prices have since stabilized and NVIDIA is expanding its offerings with the introduction of the 40 series starting with the RTX 4090 and RTX 4080.</p>
      </div>
      
      <div  class="sidebar">
          <h3>Comments</h3>

            <div class="friend">
             <img id ='friend-image' src='/media/download.png'>
                <div id="friend-bio">
                    <h4>Marek Janik</h4>
                    <p>Remember that one time Nvidia priced their new 4090 like Etherium was still proof of work? Lol, man good times.</p>
                </div>
            </div>
            <br>
            <div class="friend">
            <img id ='friend-image' src='/media/download.png'>
                            <div id="friend-bio">
                                <h4>John Smith</h4>
                                <p>Wow whoever did the design for the 4090 needs a pay raise, it looks completely different to last gen!</p>
                            </div>
            </div>
            <br>
            <div class="friend">
            <img id ='friend-image' src='/media/download.png'>
                            <div id="friend-bio">
                                <h4>Weep Gaming</h4>
                                <p>Excited, I might be able to get one of these 3 years later!</p>
                            </div>
            </div>
            </div>
            <br>


		

      <h3>Leave a Comment</h3>
      
      <form action="post_comment.php" method="post" id="commentform">

        <label for="author" class="required">Your name</label>
        <br>
        <input type="text" name="comment_author" id="comment_author" value="" tabindex="1" required="required">
        <br>
        <label for="message" class="required">Your Message</label>
        <br>
        <input type="text" name="email" id="email" value="" tabindex="2" required="required">
        <br>
      
        <input name="submit" type="submit" value="Submit comment">
        
      </form>
        

<div class="footer">
  <h5>Website created in 2022 on PHP and MySql. Dmitry Polskoy Ltd. Copyright © 2022 all rights reserved. </h5>
  </div>

</body>
</html>