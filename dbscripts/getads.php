<?php 
	require_once 'connection.php'; // подключаем скрипт
 
	$link = mysqli_connect ($host, $user, $password, $database)
 
    or die("Ошибка " . mysqli_error($link));
	
	$db = mysqli_connect($host, $user, $password, $database) or die("Ошибка соединения");
	mysqli_select_db($db,"penzainvanews");
		
	$res = mysqli_query( $db, "SELECT ads.id, ads.name, ads.content, ads.date, ads.iduser, user.name, user.lastname FROM `ads` INNER JOIN user ON user.id= ads.iduser") or die();
	$rows = mysqli_num_rows($res);
	for ($i = 0 ; $i < $rows ; ++$i)
	{
		
		$row = mysqli_fetch_row($res);
		$header = $row[1];
		$desc = $row[2];
		$date = $row[3] ;
		$picture = 0;
		$picres = mysqli_query( $db, "SELECT link from `image` where id in (SELECT idimage FROM `adsimage` WHERE idads=$row[0])") or die("Ошибка при выборе изображения");
		$picsnum = mysqli_num_rows($picres);
		for ($j = 0 ; $j < $picsnum ; ++$j)
		{
			$pic = mysqli_fetch_row($picres);
			//echo "<br><img src='picture/".$pic[0]."' width='200' height='200'>";
			$picture = $pic[0];
		}
		$catres = mysqli_query( $db, "SELECT name from `acategory` where id in (SELECT idacategory FROM `adsacategory` WHERE idads=$row[0])") or die("Ошибка при выборе категории");
		$catnum = mysqli_num_rows($catres);
		$categories = "";
		for ($j = 0 ; $j < $catnum ; ++$j)
		{
			$cat = mysqli_fetch_row($catres);
			//echo "<br>$cat[0] <br>";
			$categories = $categories . " ". $cat[0];
		}	

		echo " <div class='col s12'>
			<h4 class='header'>".$header."</h4>
			<p>".$date."</p>
    <div class='card horizontal'>
      <div class='card-image'>
        <img src='picture/".$picture."'>
      </div>
      <div class='card-stacked'>
        <div class='card-content'>
          <p>".$desc."</p>
        </div>
        <div class='card-action'>
          <p>".$categories."</p>
        </div>
        <div class='card-action'>
          <a href='#'>Подробнее</a>
        </div>
      </div>
    </div>
  </div>";
	}
?>
