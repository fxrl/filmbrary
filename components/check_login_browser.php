<?php
session_start();
if(
    $_SESSION['userType'] != 'browser' 
    && $_SESSION['userType'] != 'admin' &&
    $_SESSION['userType'] !='moderator') {
        die('You need to be logged in to see your collection. Go back and <a href="index.php">log in.</a>');
    }
?>