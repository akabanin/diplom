<?php
require_once 'connection.php'; // подключаем скрипт
 
	$link = mysqli_connect ($host, $user, $password, $database
	
	 or die("Ошибка " . mysqli_error($link));
	$sql = 0;
	$res = 0;
	
	  if (isset($_POST['sod'])) {
 		$time = $_POST['name'];
		
        if($num == 0) {
            //добавляем в бд
            $sql = mysqli_query ($db, "INSERT INTO request(sod, time) VALUES ('$sod', '$time')");
            
            
            if($sql)  
            {
                echo "Ваша просьба успешно добавлена";
            }
        }
        else  
		{
			   echo "Ваша просьба не может быть добавлена";
		}
?>