 <?php
	session_start();
	if (isset($_POST['email'])&& isset($_POST['password'])) {
		require_once 'connection.php'; // подключаем скрипт
 
	$link = mysqli_connect ($host, $user, $password, $database)
 
    or die("Ошибка " . mysqli_error($link));
		$qe = 0;
		$db = mysqli_connect($host, $user, $password, $database) or die("Ошибка соединения");
		mysqli_select_db($db,"penzainvanews");

		$email = $_POST['email'];
		$password = $_POST['password'];
	
		$query_user = mysqli_query($db,"SELECT * FROM `user` WHERE user.email='$email' and user.password='$password'");
		
		if(mysqli_num_rows($query_user) == 0)
			echo "Неверный логин пароль";
		else
		{
			$q1 = mysqli_query($db,"SELECT id,name from role INNER JOIN (SELECT idrole, iduser from userole WHERE iduser in (SELECT id FROM `user` WHERE user.email='$email' and user.password='$password')) as r ON role.id=r.idrole");
			$res = mysqli_fetch_array($q1);
			$arr_user = mysqli_fetch_array($query_user);
			
			if($res['name']=='admin')
			{
				$_SESSION["email"] = $arr_user["email"];
				$_SESSION["IsAdmin"] = true;
				header("Location: http://localhost/diplom/index.php");
			}
			else
			{
			    $_SESSION["email"] = $arr_user["email"];
				$_SESSION["IsAdmin"] = false;
				header("Location: http://localhost/diplom/index.php");
			
			}
		}
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
            <p>Шапка</p>
        </header>
		<menu>
		
		<nav class="dws-menu">
        <input type="checkbox" name="toggle" id="menu" class="toggleMenu">
        <label for="menu" class="toggleMenu"><i class="fa fa-bars"></i>Меню</label>
        <ul>
            <li><a href="#"><i class="fa fa-home"></i>Главная</a></li>
            <li>
                <input type="checkbox" name="toggle" class="toggleSubmenu" id="sub_m1">
                <a href="#"><i class="fa fa-shopping-cart"></i>Фотогалерея</a>
                <label for="sub_m1" class="toggleSubmenu"><i class="fa"></i></label>
               </li>
            <li>
                <input type="checkbox" name="toggle" class="toggleSubmenu" id="sub_m2">
                <a href="#"><i class="fa fa-cogs"></i>Доска объявлений</a>
                            </li>
            <li><a href="#"><i class="fa fa-th-list"></i>Новости</a></li>
            <li><a href="#"><i class="fa fa-envelope-open"></i>Наши партнёры</a></li>
			<li><a href="#"><i class="fa fa-th-list"></i>Вопрос ответ</a></li>
            <li><a href="#"><i class="fa fa-envelope-open"></i>Вход/Регистрация</a></li>
        </ul>
    </nav>
</header>

		</menu>
        <main>
            <aside>
                <p>реклама 1</p>
            </aside>
			<article>
                			<article>
                <h1>Вход</h1>
				<form method="post" action="vhod.php">
    	
	<div>
      <label for="name">Адрес электроной почты</label>
      <input type="text" name="email" required>
    </div>
	
	<div>
      <label for="name">Пароль</label>
      <input type="text" name="password" required>
    </div>
			
			
			 <button type="submit">Отправить</button>
			</article>
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