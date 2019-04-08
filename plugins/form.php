<?php
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $comment = $_POST['comment'];
  $token = "855134610:AAEDa7mXX-VSRqhdot8CEnyJXnf14CM5ipE";
  $chat_id = "537416557";
  $arr = array(
    'Имя пользователя: ' => $name,
    'Телефон: ' => $phone,
    'Email:' => $email,
    'Комментарий:' => $comment
  );

  foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
  };

  $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

  if ($sendToTelegram) {
    header('Location: index.html');
  } else {
    echo "Error";
  }
?>
