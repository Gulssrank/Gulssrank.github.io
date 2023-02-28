<?php
$conn = mysqli_connect('localhost', 'root', '', 'zakaz');
if (!$conn) {
  die('Ошибка: невозможно подключиться: ' . mysqli_error());
}

echo 'Заявка отправлена.<br>';

$result = mysqli_query($conn, 'SELECT * FROM `zakaz`');


?>
