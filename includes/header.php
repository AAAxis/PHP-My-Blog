<?php 
require "includes/config.php";
?>

    <?php
    $categories = mysqli_query($connection, "SELECT * FROM `articles_categories`");
    ?>

    <header>
    <div class="header">
    <nav>
        <ul>
        <li><a href="/" class="logo"><?php echo $config['title']; ?></a></li>
      
       
     

       <?php
       foreach( $categories as $cat )
       {
           ?>
           <li><a href="/categorie.php?id=<?php echo $cat['id']; ?>"><?php 
           echo $cat['title']; ?></a></li>
           <?php
       }
       ?>
   
        <?php if(isset($_COOKIE['admin']) == 'true') :?>
            <li><a href="#">Settings</a>
            <li><a href="/pages/auth.php">Log Out</a>
            
        <?php else : ?>
        
        <form style="float: right;" action="/pages/login.php" method="POST" >
        


           
            <input style= "width:200px;" type="user" name="user" placeholder="Email"  >
            <input style= "width:200px;" type="password" name="password" placeholder="Password" >
            <input style= "width:80px;" name="submit" type="submit" value="Log In">
            
            </form>
        <?php endif; ?>
      
     
        </ul>
    <nav>
    </div>
    </header>
