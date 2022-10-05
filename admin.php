<!DOCTYPE html>
<html>
    <head>
    <?php require "includes/config.php";?>
      <link rel="stylesheet" href="../media/style.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?php echo $config['title']; ?></title>
    </head>
    <body class="w3-light-grey w3-content" style="max-width:1600px">


<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-dark-grey w3-animate-left w3-text-white w3-collapse w3-top w3-center" style="z-index:3;width:300px;font-weight:bold" id="mySidebar"><br>
<div  class="profile">
<img style ="height:120px; margin:20px;" id ='image' src='/media/profile.jpg'>
</div>
  <h3 class="w3-padding-20 w3-center"><b>Hello, <?php echo $config['owner']; ?></b></h3>
   <a href="/pages/auth.php" onclick="w3_close()" class="w3-bar-item w3-button">Log Out</a> 
   <a href="/" onclick="w3_close()" class="w3-bar-item w3-button">Home</a> 
   <a href="/includes/comments.php" onclick="w3_close()" class="w3-bar-item w3-button">Edit Comments</a> 
  <a href="/includes/posts.php" onclick="w3_close()" class="w3-bar-item w3-button">Edit Posts</a>

</nav>

      

 

      



 


      
