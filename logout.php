<?php
session_start();
Session_Destroy();
header('location:login.php');
?>