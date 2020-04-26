<h1>Список просьб</h1>
<?php
if(isset($_SESSION['email'])) //если пользователь авторизован выводим ссылку для добавления
	echo "<a href='index.php?r=requestdob'>Добавить новую просьбу </a>";

require_once("/../dbscripts/getrequestvyvodinv.php");
?>