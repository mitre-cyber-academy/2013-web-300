<?php
session_start();
echo '<!DOCTYPE html><html><head><title>Super Secret Site</title></head><body>';
echo '<div class="container"><h2>Super Secret Site</h2>';
echo '<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
      <script src="http://code.jquery.com/jquery.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>';

if(isset($_SESSION['fingerprint']) && $_SESSION['fingerprint'] != $_SERVER['HTTP_USER_AGENT'])
{
  echo '<div class="alert alert-error">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <h4>Sorry...</h4>
          That password is not correct.
        </div>';
}
/* if(isset($_GET['destroysession']))
  {
  session_unset();
  session_destroy();
} */
if(isset($_SESSION['loggedin']) && $_SESSION['fingerprint'] == $_SERVER['HTTP_USER_AGENT'])
{
  echo 'Welcome admin, glad to see you again!';
  die();    
} 
if(isset($_POST['submit']))
{
  $user = "root";
  $pass = "toor";
  /*if($_POST['username']==$user && $_POST['password']==$pass)
  {
    $_SESSION['loggedin'] = true; 
    $_SESSION['name'] = $user;
    $_SESSION['fingerprint'] = $_SERVER['HTTP_USER_AGENT'];
    echo 'Welcome admin, glad to see you again!';
    echo '<br /><br />In case you were wondering, what you are looking for is <a href="slightlyhiddenfile.php">here.</a>';
    die();  
  } */
  echo '<div class="alert alert-error">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <h4>Sorry...</h4>
          That password is not correct.
        </div>';
}
echo "<form type='login.php' method='POST'>
      Username: <br>
      <input type='text' name='username'><br>
      Password: <br>
      <input type='password' name='password'><br>
      <input type='submit' name='submit' value='Login' class='btn'>
      </form>";
echo '</div>';
echo '</body></html>';
?>
