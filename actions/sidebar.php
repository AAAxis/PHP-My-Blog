<!DOCTYPE html>
<html>
    <head>
      <?php require "actions/config.php";?>
      <link rel="stylesheet" href="./static/style.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?php echo $config['title']; ?></title>

    </head>
  <body>


<?php $categories = mysqli_query($connection, "SELECT * FROM `categories`");?>
  

  <!-- Top menu on small screens -->
<header  class="w3-container  w3-white w3-xlarge w3-padding-16">
  <a href="/" class="w3-right w3-padding"><?php echo $config['title']; ?></a>
  <a href="javascript:void(0)" class="w3-left w3-button w3-white" onclick="w3_open()">☰</a>
</header>

<nav class="w3-sidebar w3-bar-block w3-dark-grey w3-animate-left w3-text-white w3-collapse w3-top w3-center" style="z-index:3;width:300px;font-weight:bold" id="mySidebar"><br>
 
        <?php if(isset($_COOKIE['admin']) == 'true') :?>

            <h3 class="w3-padding-20 w3-center"><b>Hello, <?php echo $config['owner']; ?></b></h3>
            <a  onclick="w3_close()" href="#"><img src="/static/profile.jpg" style="height:100px" alt="Profile" ></a><br>
    
                   <a href="/" onclick="w3_close()" class="w3-bar-item w3-button">Home</a> 
            <a href="../actions/logout.php" onclick="w3_close()" class="w3-bar-item w3-button">Log Out</a>
            <a href="./comments.php" onclick="w3_close()" class="w3-bar-item w3-button">Comments</a>
        <a href="./dashboard.php" onclick="w3_close()" class="w3-bar-item w3-button">Posts</a>
       
           
        <?php else : ?>
            <h3 class="w3-padding-20 w3-center"><b>Hello, Guest</b></h3>
            <a  onclick="w3_close()"  href="#"><img src="/static/download.png" style="height:100px" alt="Profile" ></a><br>
    
        <form  action="../actions/login.php" method="POST" >
        


           
            <input  style= "width:260px; margin:10px;"  type="email" name="user" placeholder="Email" required >
            
            <input   style= "width:260px; margin:10px;" type="password" name="password" placeholder="Password" >
            
            <input  style= "width:80px; margin:10px;" name="submit" type="submit" value="Log In">
            
            </form>
        <?php endif; ?>

        <hr>
   

        <?php
       foreach( $categories as $cat )
       {
           ?>
           
           <a href="../categorie.php?id=<?php echo $cat['id']; ?>" onclick="w3_close()" class="w3-bar-item w3-button"><?php 
           echo $cat['title']; ?></a>
          
           <?php
       }
       ?>
  

  </nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
   <!-- !PAGE CONTENT! -->
   <div class="w3-main" style="margin-left:310px; margin-top:10px;">
 
 