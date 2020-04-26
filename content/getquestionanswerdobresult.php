<?php 
$result ="";
if(!empty($_GET['result']))
{
	echo $_GET['result'];
	if($_GET['result'] == '0')
		$result = "На Ваш запрос скоро будет дан ответ ожидайте!" ;
	else
		$result = "Что-то пошло не так!" ;
}
?>
<h1><?php $result?></h1>