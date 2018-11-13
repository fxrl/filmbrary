<?php
session_start();
if($_SESSION['userType'] != 'moderator' && $_SESSION['userType'] != 'admin')  {
    die('You need to have at least moderator rights to access this site. Go back and <a href="index.php">log in.</a>');
}
?>