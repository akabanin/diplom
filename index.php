<?php

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
	}
}
else
	$content = "content/main.php";

echo file_get_contents("layouts/mainlayout.php"); 
if(!empty($content))
	require($content); 
else
	echo "Страница не найдена!";
echo file_get_contents("layouts/footerlayout.php"); 

?>
