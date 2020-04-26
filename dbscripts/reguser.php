<?php
	require_once 'connection.php'; // подключаем скрипт
 
	$link = mysqli_connect ($host, $user, $password, $database)
 
    or die("Ошибка " . mysqli_error($link));
	$qe = 0;
	$res = 0;
	$sql = 0;
	$sqli = 0;
	$result = 0;
	$num = 0;
	$reg_result = "";
    $db = mysqli_connect($host, $user, $password, $database) or die("Ошибка соединения");
	mysqli_select_db($db,"penzainvanews");
 
    if (isset($_POST['email'])) {
 		$name = $_POST['name'];
		$lastname = $_POST['lastname'];
		$password = $_POST['password'];
		$email = $_POST['email'] ;
        $role_id = $_POST['role_id'] ;
        echo "роль - " . $role_id;
        //Добавить проверку существования пользователя по почтовому ящику - выполнить запрос Select и посмотреть сколько записей есть
        $res = mysqli_query( $db,"SELECT * FROM user WHERE email = '$email'") or die("ошибка");
        $num = mysqli_num_rows($res);

        if($num == 0) {
            //добавляем в бд
            $sql = mysqli_query ($db, "INSERT INTO user(name, lastname, email, password) VALUES ('$name', '$lastname', '$email', '$password')");// or die("Ошибка добавления пользователя в БД");
            
            
            if($sql)  
            {
                echo "добавили пользователя";
                $user_id =  mysqli_insert_id($db);
                echo "добавили пользователя - " . $user_id;
                
                $sql = mysqli_query ($db, "INSERT INTO userole (iduser, idrole) VALUES ('$user_id', '$role_id')");
                if($sql)  
                {
                    echo "добавили роль";
                    header("Location: http://".$_SERVER['HTTP_HOST']."\diplom\index.php?r=reguserresult&result=0");
                }
            }
        }
        else  header("Location: http://".$_SERVER['HTTP_HOST']."\diplom\index.php?r=reguserresult&result=1");
	}
?>
