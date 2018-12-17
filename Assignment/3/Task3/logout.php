<?php
session_start();
if(isset($_SESSION['WebsiteUser'])){
    session_unset();
    session_destroy();
    session_start();
    session_regenerate_id();
} 

    header('Location:login.php');
?>
