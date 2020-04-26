<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8" />
		<!--<link rel="stylesheet" href="layouts/style.css" type="text/css"/>-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <!--<meta name="viewport" content="width=device-width" />-->
		<link rel="shortcut icon" href="picture/emblem/icon.jpeg">
        <title>дипломный проект</title>
        
    </head>
    <body>
        <header>
            <p><h1>Вlife</h1></p>
        </header>
		<menu>
		
		<nav class="dws-menu">
        <input type="checkbox" name="toggle" id="menu" class="toggleMenu">
        <label for="menu" class="toggleMenu"><i class="fa fa-bars"></i>Меню</label>
        <ul>
            <li><a href="index.php?r=main"><i class="fa fa-home"></i>Главная</a></li>
            <li>
                <input type="checkbox" name="toggle" class="toggleSubmenu" id="sub_m1">
                <a href="index.php?r=photo"><i class="fa fa-shopping-cart"></i>Фотогалерея</a>
                <label for="sub_m1" class="toggleSubmenu"><i class="fa"></i></label>
               </li>
            <li>
                <input type="checkbox" name="toggle" class="toggleSubmenu" id="sub_m2">
                <a href="index.php?r=ads"><i class="fa fa-cogs"></i>Доска объявлений</a>
                            </li>
            <li><a href="index.php?r=news"><i class="fa fa-th-list"></i>Новости</a></li>
            <li><a href="index.php?r=requestvyvod"><i class="fa fa-envelope-open"></i>Просьбы</a></li>
			<li><a href="index.php?r=questionanswer.php"><i class="fa fa-th-list"></i>Вопрос ответ</a></li>
            <?php 
                if(!isset($_SESSION["email"]))
                {
                    echo "<li><a href='index.php?r=reguserform'><i class='fa fa-envelope-open'></i>Регистрация</a></li>";
                    echo "<li><a href='index.php?r=vhod'><i class='fa fa-envelope-open'></i>Вход</a></li>";
                }
                else
                {
                    echo "<li><a href='index.php?r=vyhod'><i class='fa fa-envelope-open'></i>Выход</a></li>";
                }
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