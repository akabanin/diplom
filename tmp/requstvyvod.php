
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
			
            
        </ul>
    </nav>
</header>

		</menu>
        <main>
            <aside>
                <p>реклама 1</p>
            </aside>
			<article>
                <h1>Страница для вывода просьб</h1>
				<?php
require_once 'connection.php'; // подключаем скрипт
 
$link = mysqli_connect ($host, $user, $password, $database)
 
    or die("Ошибка " . mysqli_error($link)); 
     
$query ="SELECT * FROM `request`";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
     
    echo "<table><tr><th>Индефикационыый номер</th><th>Содержание</th><th></th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 2 ; ++$j) echo "<td>$row[$j]</td>";
		      
	   echo "</tr>";
    }
    echo "</table>";
     
    // очищаем результат
    mysqli_free_result($result);
}
 
mysqli_close($link);
?>	
				 <button onclick="window.location.href = 'requstdob.php';">Добавить просьбу</button>
				
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