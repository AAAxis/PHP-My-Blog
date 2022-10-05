 
            <?php 
            require "../actions/config.php";

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
    header('Location: ../includes/comments.php');
 
  } 

  else
  {
    echo '<span style="color: green; font-weight: bold; margin-bottom: 10px; display: block;">Error!</span>';
  }

}
?>