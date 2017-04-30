<?php
require "db.php";

$name =  $db-> real_escape_string(htmlspecialchars($_POST["name"]));
$sumname =  $db-> real_escape_string(htmlspecialchars($_POST["surname"]));
$email =  $db-> real_escape_string(htmlspecialchars($_POST["email"]));
$phone =  $db-> real_escape_string(htmlspecialchars($_POST["fhone"]));
$pol =  $db-> real_escape_string($_POST["pol"]);
$datayear =  $db-> real_escape_string($_POST["yaer"]);
$datamount =  $db-> real_escape_string($_POST["mount"]);
$dataday =  $db-> real_escape_string($_POST["day"]);
$password =  $db-> real_escape_string(htmlspecialchars($_POST["password"]));
$error = false;
$key= "k";
$coords = "";

$re = $db->query("SELECT *FROM `users` WHERE `email` ='$email'");
if ($re->num_rows <= 0) { //проверка на повторы в логине
} else {
    echo "Такой адрес электроной почты уже существует";
    $error = true;
}
// настройки для отправки письма
$HTTP_HOST = parse_url('http://'.$_SERVER["HTTP_HOST"]); // не трогать!!!
$HTTP_HOST = str_replace(array("http://","www."),"",$HTTP_HOST['host']); // не трогать!!! вырезает с адреса: "www" для формирования e-mail от которого придёт уведомление

$to = $email; // кому отсылать: адрес e-mail
$from = "info@elit-atana.kz"; // адрес, от которого придёт уведомление, желательно указать существующий ящик на хостинге!
$signature = 'Поисковой сервер'; // подпись в письме
$title = "Активация аккаунта с сайта: http://".$_SERVER["HTTP_HOST"]; // тема в письме

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
    $password = md5($password);
    $db->query("INSERT INTO users (`name`, `sumname`, `email`, `phone`, `pol`, `datayear`, `datamount`, `dataday`, `password`, `kiy`, `maps`, `active`) VALUES ('$name','$sumname','$email','$phone','$pol','$datayear','$datamount','$dataday','$password','$key','$coords','$activation')");

    $body="<h1>Активация аккаунта </h1> <br><p>Спасибо за регистрацию пожалуйста пройдите по ссылке для активации аккаунта!<ber></ber></p><a href='".$base_url.'activation.php?code='.$activation."'>Активировать</a>";
    $mail->Body = $body;

    if(!$mail->Send()) {
        $errors[] = 'Письмо не отправлено!<br>Ошибка: '.$mail->ErrorInfo;
    } else {
        $success[] = 'Спасибо! Сообщение отправлено!';
        header('Refresh: 5; URL='.$_SERVER['HTTP_REFERER'].'');
    }


    echo "ok";
}
$db->close();
?>