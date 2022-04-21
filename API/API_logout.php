<?php 
session_start();
session_unset();

if (!isset($_SESSION["user_ID"])) {
    header("Location: ../index.php");
}
?>