<?php
session_start();

if(!empty($_GET["r"]))
{
	switch($_GET["r"]){
		case "reguserform":
			$content = "content/reguserform.php";
		break;
		case "main":
			$content = "content/main.php";
		break;
		case "reguserresult":
			$content = "content/reguserresult.php";
		break;
		case "photo":
			$content = "content/photo.php";
		break;
		case "news":
			$content = "content/news.php";
		break;
		case "ads":
			$content = "content/ads.php";
		break;
		case "vhod":
			$content = "content/vhod.php";
		break;		
		case "vyhod":
			$content = "content/vyhod.php";
		break;
		case "requestdob":
			$content = "content/requestdob.php";
		break;
		case "requestvyvod":
			$content = "content/requestvyvodinv.php";
		break;
		case "requestdobresult.php":
		$content = "content/requestdobresult.php";
		break;
		case "questionanswer.php":
		$content = "content/questionanswerdob.php";
		break;
		case "getquestionanswerdobresult.php";
		$content = "content/getquestionanswerdobresult.php";
		break;
	}
}
else
	$content = "content/main.php";
require("layouts/mainlayout.php"); 
if(!empty($content))
	require($content); 
else
	echo "Страница не найдена!";
require("layouts/footerlayout.php"); 
?>
