<?php
require "db.php";
$email =  $db-> real_escape_string(htmlspecialchars($_POST["email"]));
$re = $db->query("SELECT *FROM `users` WHERE `email` ='$email'");
$error = false;
if ($re->num_rows <= 0) { //проверка на повторы в логине
    echo "Такой Email не сущесвует";
     $error = true;
}
// настройки для отправки письма
$HTTP_HOST = parse_url('http://'.$_SERVER["HTTP_HOST"]); // не трогать!!!
$HTTP_HOST = str_replace(array("http://","www."),"",$HTTP_HOST['host']); // не трогать!!! вырезает с адреса: "www" для формирования e-mail от которого придёт уведомление

$to = $email; // кому отсылать: адрес e-mail
$from = "info@elit-atana.kz"; // адрес, от которого придёт уведомление, желательно указать существующий ящик на хостинге!
$signature = 'Поисковой сервер'; // подпись в письме
$title = "Востановление аккаунта с сайта: http://".$_SERVER["HTTP_HOST"]; // тема в письме


/*------------------------ start --------------------------*/
require 'class.phpmailer.php'; // подключаем файл класса для отправки почты
$mail = new PHPMailer();
$mail->From = $from; // адрес, от которого придёт уведомление
$mail->FromName = $signature; // подпись в письме от кого
$mail->AddAddress($to); // кому: адрес e-mail
$mail->IsHTML(true); // выставляем формат письма HTML
$mail->CharSet = 'utf-8'; //кодировка письма
$mail->Subject = $title; // тема письма

$activation=md5($email.time()); // Encrypted email+timestamp // создали активационный ключ для аккаунта
if (!$error) {
    $db->query("UPDATE users SET active='$activation' WHERE email='$email'");
    $body="<h1>Востановление аккаунта </h1> <br><p>Для востановление аккаунта! перейдите по ссылке<ber></ber></p><a href='".$base_url.'respas.php?code='.$activation."'>Востановить</a>";
    $mail->Body = $body;

    if(!$mail->Send()) {
        $errors[] = 'Письмо не отправлено!<br>Ошибка: '.$mail->ErrorInfo;
    } else {
        $success[] = 'Спасибо! Сообщение отправлено!';
        header('Refresh: 5; URL='.$_SERVER['HTTP_REFERER'].'');
    }


    echo "1";
}
$db->close();
