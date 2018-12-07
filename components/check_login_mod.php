<?php
session_start();

if ($_SESSION['userip'] !== $_SERVER['REMOTE_ADDR']){
    session_unset();
    session_destroy();
}
    
if($_SESSION['userType'] != 'moderator' && $_SESSION['userType'] != 'admin')  {
    die(
        "<div class='alert alert-danger'>
            You need to have moderator or admin rights to access this site.
        </div>"      );
}
?>