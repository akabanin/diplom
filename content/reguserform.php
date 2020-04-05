	<h1>Регистрация</h1>
	<form method="post" action="dbscripts/reguser.php">
		<div>
		  <label for="name">Имя</label>
		  <input type="text" name="name" required>
		</div>
		
		<div>
		  <label for="name">Фамилия</label>
		  <input type="text" name="lastname" required>
		</div>
		
		<div>
		  <label for="name">Адрес электроной почты</label>
		  <input type="text" name="email" required>
		</div>
		
		<div>
		  <label for="name">Пароль</label>
		  <input type="text" name="password" required>
		</div>
			
		<p><b>Кем вы регистрируетесь?</b></p>
		<select name = "role_id">
            <?php

            $mysqli = NEW MySQLi ('localhost', 'root', 'root', 'penzainvanews');
            $resultSet = $mysqli->query("SELECT id, name FROM role");

            while ($rows = $resultSet->fetch_assoc())
            {
                $name = $rows ['name'];
                $id = $rows ['id'];
                echo "<option value = '$id'>$name</option>";
            }
            ?>
        </select>
<p>
		
		
		<button type="submit">Отправить</button>
	</form>