<?php 
session_start();
	
require_once 'connection.php'; // подключаем скрипт
 
	$link = mysqli_connect ($host, $user, $password, $database)
 
    or die("Ошибка " . mysqli_error($link));
	    $db = mysqli_connect($host, $user, $password, $database) or die("Ошибка соединения");
	mysqli_select_db($db,"penzainvanews");
	mysqli_query($db, "SET NAMES 'utf8'");
 
    if (isset($_POST['sod']))
	{
 		$sod = $_POST['sod'];
		$time = $_POST['time'];
		  
     //добавляем в бд
     $sql = mysqli_query ($db, "INSERT INTO request(sod, time) VALUES ('$sod', '$time')");
 
	if($sql) $reg_result = "Ваша просьба опубликована!";
	
	 else  $reg_result = "Невозможно опубликовать вашу просьбу)	 ";
	}	
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		
		<link rel="stylesheet" href=".//style.css" type="text/css"/>
        <meta name="viewport" content="width=device-width" />
        <title>дипломный проект</title>
        
    </head>
    <body>
        <header>
		<img src="last.png"
		 <h1><p1>Параласточки</p>
 </body>
            
        </header>
		<menu>
		
		<nav class="dws-menu">
        <input type="checkbox" name="toggle" id="menu" class="toggleMenu">
        <label for="menu" class="toggleMenu"><i class="fa fa-bars"></i>Меню</label>
        <ul>
           <li><a href="#"><i class="fa fa-th-list"></i>Главная</a></li>
			<li><a href="photos.php"><i class="fa fa-th-list"></i>Фотогалерея</a></li>
			<li><a href="#"><i class="fa fa-th-list"></i>Доска объявлений</a></li>
			<li><a href="#"><i class="fa fa-th-list"></i>Новости</a></li>
            <li><a href="#"><i class="fa fa-envelope-open"></i>Наши партнёры</a></li>
			<li><a href="#"><i class="fa fa-th-list"></i>Вопрос ответ</a></li>
			<?php if (empty($_SESSION["email"])) 
					echo '<li><a href="vhod.php"><i class="fa fa-envelope-open"></i>Вход/Регистрация</a></li>';
				else
					echo '<li><a href="logout.php"><i class="fa fa-envelope-open"></i>Выход</a></li>';
			?>
            
        </ul>
    </nav>
</header>

		</menu>
        <main>
            <aside>
                <p>реклама 1</p>
            </aside>
			<article>
                <h1>Дабавление просьбы</h1>
				<form method="post" action="requstdob.php">
       
      <label for="sod">Содержание просьбы</label>
      <input type="text" name="sod" required>
	  
	    <label for="time">Время публикация</label>
      <input type="datetime-local" name="time" required>
    
      <button type="submit">Отправить</button>  
  </form> 
				
			</article>
           
            
            <aside>
                <p>реклама 2</p>
            </aside>
        </main>
        <footer>
            <p1>©2019</p>
        </footer>
    </body>
</html>