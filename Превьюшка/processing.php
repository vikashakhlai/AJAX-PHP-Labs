<?php
// создадим переменную для формирования ответа
$output ='';
// если в массиве пост есть ключ nameUser, то
if (isset($_POST['nameUser'])) {
  // в переменную name помещаем переданное с помощью запроса имя
  $name = $_POST['nameUser'];
  // добавляем в переменную output строку приветствия с именем
  $output .= 'Здравствуйте, '.$name.'! ';
  // добавляем в переменную output IP-адрес пользователя


  if ($_SERVER['SERVER_NAME']) {
    $output .= ' Ваш URL адрес: '. $_SERVER['SERVER_NAME'];
  }
  else {
   $output .= 'Ваш URL адрес неизвестен.';
  }

  $output .= '<br>';

  if ($_SERVER['REMOTE_ADDR']) {
    $output .= 'Ваш IP адрес: '. $_SERVER['REMOTE_ADDR'];
  }
  else {
   $output .= 'Ваш IP адрес неизвестен.';
  }
  // выводим ответ
  echo $output;
}