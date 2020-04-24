<?php
require_once 'connection.php'; // подключаем скрипт
 
$link = mysqli_connect ($host, $user, $password, $database)
 
    or die("Ошибка " . mysqli_error($link)); 
     
$query ="SELECT * FROM `request`";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
     
    echo "<table><tr><th>Id</th><th>Запрос</th><th></th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 2 ; ++$j) 
				echo "<td>$row[$j]</td>";
		echo "<td><a href='http://localhost/diplom/content/requestvyvodvol.php?id=$row[0]'>Редактировать</td>";      
	   echo "</tr>";
    }
    echo "</table>";
     
    // очищаем результат
    mysqli_free_result($result);
}
 
mysqli_close($link);
?>	