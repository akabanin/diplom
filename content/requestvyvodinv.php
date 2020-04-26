<h1>Список просьб</h1>
<?php
if(isset($_SESSION['IsDisabled'])) //если пользователь авторизован выводим ссылку для добавления
  echo "<a href='index.php?r=requestdob' class='waves-effect waves-light btn red'><i class='material-icons'>add</i>Добавить</a>";
if(isset($_GET["result"]))
	if($_GET["result"] == 0)
		echo "<p>Просьба добавлена</p>";
	else
		echo "<p>Просьба не добавлена. Произошла ошибка</p>";
require_once("/../dbscripts/getrequestvyvodinv.php");
?>