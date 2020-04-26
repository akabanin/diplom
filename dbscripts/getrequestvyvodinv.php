<?php
require_once 'connection.php'; // подключаем скрипт
 
$link = mysqli_connect ($host, $user, $password, $database)
 
    or die("Ошибка " . mysqli_error($link)); 
     
$query ="SELECT request.id, request.sod, request.time, request.iduser, user.name, user.lastname
FROM request
INNER JOIN user ON user.id = request.iduser";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
     
    //echo "<table><tr><th>Id</th><th>Запрос</th><th></th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);

    echo "  <div class='row'>
    <div class='col s12'>
      <div class='card blue-grey lighten-1'>
        <div class='card-content white-text'>
          <span class='card-title'>". $row[2] ."</span>
          <p class='flow-text'>". $row[1] ."</p>
        </div>
        <div class='card-action'>
          <p4>Разместил: ". $row[4] . " " . $row[5]."</p4>
        </div>
        ";
        if(isset($_SESSION['IsVolunteer']))
            echo "
                <div class='card-action'>
                  <a href='#'>Откликнуться</a>
                </div>";
      echo "</div>
    </div>
  </div>";
    }
    //echo "</table>";
     

    // очищаем результат
    mysqli_free_result($result);
}
 
mysqli_close($link);
?>	