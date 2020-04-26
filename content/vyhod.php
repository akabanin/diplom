<?php 
if (isset($_SESSION["email"]))
	unset($_SESSION["email"]);
header("Location: http://localhost/index.php");
?>