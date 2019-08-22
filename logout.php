<?php 
session_start();

session_destroy();
header('location:/luma/index.php');
?>

