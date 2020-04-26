<?php
 session_start();
require_once 'connection.php'; // подключаем скрипт

	$link = mysqli_connect ($host, $user, $password, $database)
	
	 or die("Ошибка " . mysqli_error($link));
	$sql = 0;
	$res = 0;
	$num = 0;
	 $db = mysqli_connect($host, $user, $password, $database) or die("Ошибка соединения");
	mysqli_select_db($db,"penzainvanews");
	
	  if (isset($_POST['sod'])) 
	  {
		$sod = $_POST['sod'];
 		$time = $_POST['time'];
		$userid = $_SESSION['userID'];
        if($num == 0) {
            //добавляем в бд
            $sql = mysqli_query ($db, "INSERT INTO request(sod, time, iduser) VALUES ('$sod', '$time', '$userid')");
            
            
            if($sql)  
            {
				header("Location: http://".$_SERVER['HTTP_HOST']."\index.php?r=requestvyvod&result=0");
            }
        }
        else  header("Location: http://".$_SERVER['HTTP_HOST']."\index.php?r=requestvyvod&result=1");
		
	  }
	  ?>