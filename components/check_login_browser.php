<?php
session_start();
if ($_SESSION['userip'] !== $_SERVER['REMOTE_ADDR']){
    session_unset();
    session_destroy();
}
    

if(
    $_SESSION['userType'] != 'browser' 
    && $_SESSION['userType'] != 'admin' &&
    $_SESSION['userType'] !='moderator') {
        die(
            "<div class='alert alert-danger'>
                Please log in to see your collection.
            </div>"
        );
    }
?>