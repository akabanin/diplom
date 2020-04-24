<?php 
$result ="";
if(!empty($_GET['result']))
{
	echo $_GET['result'];
	if($_GET['result'] == '0')
		$result = "Ваша просьба успешно опублликована!" ;
	else
		$result = "Что-то пошло не так!" ;
}
?>
<h1><?php $result?></h1>