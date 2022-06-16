<?php
    // Получение данных с формы:
    $name = htmlspecialchars($_POST['firstName']);
    $email = htmlspecialchars($_POST['email']);
    $tel = htmlspecialchars($_POST['phone']);
  

    // Параметры для функции mail:
    $source = getenv('HTTP_REFERER');
    $subject = 'Перезвонить';
    $message = "Данные:
        <br><br>
        Имя: $name<br>
        E-mail: $email<br>
        Телефон: $tel<br>
        Сайт (ссылка): $source
    ";
    $headers = "From: $email\r\nReply-To: $email\r\nContent-type: text/html; charset=utf-8\r\n";
   

    // Отправка данных на почту:
    $success = mail("testmailform27@gmail.com", $subject, $message, $headers, $phone);
?>