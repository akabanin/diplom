<?php
$mysqli = NEW MySQLi ('localhost', 'root', 'root', 'penzainvanews');

$resultSet = $mysqli->query("SELECT name FROM `role` WHERE `id` IN (1, 2)");
?>

<select name = "name">

<?php
while ($rows = $resultSet->fetch_assoc())
{
	$name = $rows ['name'];
	echo "<option value = '$name'>$name</option>";
}
?>
</select>

