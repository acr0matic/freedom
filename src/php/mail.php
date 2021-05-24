<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include '../../../../wp-load.php';
  $result = '';

  $target = $_POST['target'];
  $user_name = $_POST['user_name'];
  $user_age = $_POST['user_age'];
  $user_message = $_POST['user_message'];

  if ($user_age == '') $user_age = 'Не указан';

  $subject = '';
  $body_start = '<html><body>';
  $body_content = '';
  $body_end = '</body></html>';

  if ($target == 'feedback') {
    $subject = 'Идея или предложение';
    $body_content = "
     <div style='margin-bottom: 10px'>Контактные данные:</div>
     <div>
       Имя: <b>$user_name</b> <br>
       Возраст: <b>$user_age</b> <br>
       Мнение о парке: <b>$user_message</b>
     </div>";
  }

  else if ($target == 'callback') {
    $subject = 'Обратная связь';

    $body_content = "
    <div style='margin-bottom: 10px'>Контактные данные:</div>
    <div>
      Имя: <b>$user_name</b> <br>
      Возраст: <b>$user_age</b> <br>
      Мнение о парке: <b>$user_message</b>
    </div>";
  }

  $body = $body_start . $body_content . $body_end;
  wp_mail('main.acr0matic@gmail.com', $subject, $body);

  echo json_encode($result);
}
