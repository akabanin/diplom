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
		<p><input name="inv" type="radio" value="nedzen"> Человек с физическими отклонениями</p>
		<p><input name="val" type="radio" value="dzen"> Волонтёр</p>
		<button type="submit">Отправить</button>
	</form>