<?php
session_start();
echo '<!DOCTYPE html><html><head><title>Super Secret Site</title></head><body>';
echo '<div class="container"><h2>Super Secret Site</h2>';
echo '<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">';

if(isset($_SESSION['loggedin']) && $_SESSION['fingerprint'] == $_SERVER['HTTP_USER_AGENT'])
{
  echo 'Glad you found us! <!--MCA-12C7A3E4-->';
  die();    
} 
else
{
    echo '<div class="alert alert-error">
            <h4>Sorry...</h4>
            Please <a href ="index.php">login</a> first.
          </div>';
}