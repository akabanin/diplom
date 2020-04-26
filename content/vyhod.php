<?php 
if (isset($_SESSION["email"]))
	unset($_SESSION["email"]);
if (isset($_SESSION["IsAdmin"]))
	unset($_SESSION["IsAdmin"]);
if (isset($_SESSION["IsVolunteer"]))
	unset($_SESSION["IsVolunteer"]);
if (isset($_SESSION["IsDisabled"]))
	unset($_SESSION["IsDisabled"]);
header("Location: http://localhost/index.php");
?>