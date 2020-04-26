<h1>Добавление просьбы</h1>
	<form method="post" action="dbscripts/getrequestdobinv.php">
		<div>
		  <label for="sod">Содержание</label>
		  <input type="text" name="sod" required>
		</div>
		
		<div>
			  <label for="time">Когда неодходимо выполнить</label>
		  <input type="datetime-local" name="time" required>
		</div>
				
		  <button class="btn waves-effect waves-light" type="submit" name="action">Отправить
    		<i class="material-icons right">send</i>
    	</button>
	</form>