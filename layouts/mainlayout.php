<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8" />
		<!--<link rel="stylesheet" href="layouts/style.css" type="text/css"/>-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--<meta name="viewport" content="width=device-width" />-->
		<link rel="shortcut icon" href="picture/emblem/icon.jpeg">
        <title>дипломный проект</title>
        
    </head>
    <body>
<div class="container">

  <div class="row">
    <div class="col s12">
      <nav>
        <div class="nav-wrapper teal lighten-2">
          <a href="#" class="brand-logo"><img src ="picture/emblem/position.jpeg"></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="index.php?r=main">Главная</a></li>
            <li><a href="index.php?r=photo">Фотогалерея</a></li>
            <li><a href="index.php?r=ads">Доска объявлений</a></li>
            <li><a href="index.php?r=news">Новости</a></li>
            <li><a href="index.php?r=requestvyvod">Просьбы</a></li>
            <li><a href="index.php?r=questionanswer.php"></i>Вопрос ответ</a></li>
            <?php 
                if(!isset($_SESSION["email"]))
                {
                    echo "<li><a href='index.php?r=reguserform'>Регистрация</a></li>";
                    echo "<li><a href='index.php?r=vhod'></i>Вход</a></li>";
                }
                else
                {
                    echo "<li><a href='index.php?r=vyhod'></i>Выход</a></li>";
                }
              ?>
          </ul>
        </div>
      </nav>
    </div>
</div>
<div class="row">
    <div class="col s2"><p>реклама 1</p></div>
<div class="col s8">