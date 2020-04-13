 <?php
	session_start();
	if (isset($_POST['email'])&& isset($_POST['password'])) {
		require_once 'connection.php'; // подключаем скрипт
 
	$link = mysqli_connect ($host, $user, $password, $database)
 
    or die("Ошибка " . mysqli_error($link));
		$qe = 0;
		$db = mysqli_connect($host, $user, $password, $database) or die("Ошибка соединения");
		mysqli_select_db($db,"penzainvanews");

		$email = $_POST['email'];
		$password = $_POST['password'];
	
		$query_user = mysqli_query($db,"SELECT * FROM `user` WHERE user.email='$email' and user.password='$password'");
		
		if(mysqli_num_rows($query_user) == 0)
			echo "Неверный логин пароль";
		else
		{
			$q1 = mysqli_query($db,"SELECT id,name from role INNER JOIN (SELECT idrole, iduser from userole WHERE iduser in (SELECT id FROM `user` WHERE user.email='$email' and user.password='$password')) as r ON role.id=r.idrole");
			$res = mysqli_fetch_array($q1);
			$arr_user = mysqli_fetch_array($query_user);
			
			if($res['name']=='admin')
			{
				$_SESSION["email"] = $arr_user["email"];
				$_SESSION["IsAdmin"] = true;
				header("Location: http://localhost/diplom/index.php");
			}
			else
			{
			    $_SESSION["email"] = $arr_user["email"];
				$_SESSION["IsAdmin"] = false;
				header("Location: http://localhost/diplom/index.php");
			
			}
		}
    }

    ?>