<?php 
include 'SYSTEM_config.php';
session_start();

if (isset($_SESSION["user_ID"])) {
    header("Location: home.html");
}

if(isset()
?>