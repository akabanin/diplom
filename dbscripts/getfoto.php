<?php 
	require_once 'connection.php'; // подключаем скрипт
 
	$link = mysqli_connect ($host, $user, $password, $database)
 
    or die("Ошибка " . mysqli_error($link));
	
	$db = mysqli_connect($host, $user, $password, $database) or die("Ошибка соединения");
	mysqli_select_db($db,"penzainvanews");
		
	$res = mysqli_query( $db,"SELECT link FROM `photo`") or die();
	$rows = mysqli_num_rows($res);
	for ($i = 0 ; $i < $rows ; ++$i)
	{
		$row = mysqli_fetch_row($res);
		echo "<img class='materialboxed' width='650' src='picture/".$row[0]."'>";
	}
?>