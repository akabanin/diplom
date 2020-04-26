<?php 
if(isset($_GET['result']))
{
	if($_GET['result'] === "0")
		$result = "Вы успешно зарегистрированы!" ;
	else
		$result = "Что-то пошло не так!" ;
}
?>
<h1><?php echo $result?></h1>