<?php 
session_start();
	
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		
		<link rel="stylesheet" href=".//style1.css" type="text/css"/>
        <meta name="viewport" content="width=device-width" />
        <title>дипломный проект</title>
        
    </head>
    <body>
        <header>
		<img src="last.png"
		 <p1>Параласточки</p>
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
                <h1>Главная можно редактировать</h1>
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