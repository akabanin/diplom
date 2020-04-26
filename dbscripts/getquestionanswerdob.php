<?php
require_once 'connection.php'; // подключаем скрипт
 
	$link = mysqli_connect ($host, $user, $password, $database)
	
	 or die("Ошибка " . mysqli_error($link));
	$sql = 0;
	$res = 0;
	$num = 0;
	 $db = mysqli_connect($host, $user, $password, $database) or die("Ошибка соединения");
	mysqli_select_db($db,"penzainvanews");
	
	  if (isset($_POST['content'])) 
	  {
		$name = $_POST ['name'];
		$content = $_POST ['content'];
		$iduser = $_POST ['iduser'];
		
		
        if($num == 0) {
            //добавляем в бд
            $sql = mysqli_query ($db, "INSERT INTO `question`(`id`, `name`, `content`, `iduser`) VALUES ('$name', '$content', '$iduser')");
            
            
            if($sql)  
            {
                echo "Ваш запрос успешно опубликован";
				header("Location: http://".$_SERVER['HTTP_HOST']."\diplom\index.php?r=getquestionanswerdobresult&result=0");
            }
        }
        else  header("Location: http://".$_SERVER['HTTP_HOST']."\diplom\index.php?r=getquestionanswerdobresult&result=1");
		
	  }
	  ?>