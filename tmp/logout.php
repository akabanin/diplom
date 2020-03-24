<?php 
session_start();
$_SESSION["email"] = NULL;
$_SESSION["IsAdmin"] = NULL;
header("Location: http://localhost/diplom/index.php");
?>