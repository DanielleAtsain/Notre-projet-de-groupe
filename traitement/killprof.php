<?php 
session_start();
unset($_SESSION['name']);
unset($_SESSION['rename']);
session_destroy();

header('location:../prof.php');

