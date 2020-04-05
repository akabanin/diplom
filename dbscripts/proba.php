<?php


	require_once 'connection.php'; // подключаем скрипт
 
	$link = mysqli_connect ($host, $user, $password, $database);
 
 
    $db = mysqli_connect($host, $user, $password, $database) or die("Ошибка соединения");
	mysqli_select_db($db,"penzainvanews");









$resultSet = $mysqli->query("SELECT * FROM role WHERE id IN (1, 2)");
?>

<select name="role">
<?php
while ($rows = $resultSet->fetch_assoc())
{
	$role_name = $rows['dept_name'];
	echo "<option value='$role_name'>$role_name</option>";
}
?>
</select>