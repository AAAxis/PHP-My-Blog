<?php 
require "includes/config.php";
?>

    <?php
    $categories = mysqli_query($connection, "SELECT * FROM `articles_categories`");
    ?>

 
    <div class="header">
    <nav>
        <ul>
        <li><a href="/" class="logo"><?php echo $config['title']; ?></a></li>
        <li><a href="/pages/support.php">Contact</a></li>
        <li><a href="/pages/login.php">Log In</a></li>
       
     

        <?php
        foreach( $categories as $cat )
        {
            ?>
            <li><a href="/categorie.php?id=<?php echo $cat['id']; ?>"><?php 
            echo $cat['title']; ?></a></li>
            <?php
        }
        ?>
    
     
        </ul>
    <nav>
    </div>
