<?php
require "db.php";
session_start();

if(isset($_SESSION["session_username"])){
    echo "ok";
    exit();
}

$email = $db-> real_escape_string($_POST["email"]);
$password =  $db-> real_escape_string(md5($_POST["password"]));
$save =  $db-> real_escape_string($_POST["save"]);
$count = $db->query("SELECT id FROM users WHERE status='0' AND email= '$email'");
if ($count->num_rows == 1) {
    echo "Ваш аккаунт не активирован пройдите на почту и перейдите по сылке в письме для активацие";
    exit();
}

$query = $db->query("SELECT id FROM users WHERE email = '$email'AND password = '$password'");
$result = $query->fetch_array();
$query2=$db->query("SELECT * FROM users WHERE email = '$email'AND password = '$password'");
$result2 = $query2->fetch_array();

if (empty($result['id'])) // Если запрос к бд не возвразяет id пользователя
{
    echo "Неверные Логин или Пароль  ";
    exit();
}
if ($result2['kiy']=="k"){
    $_SESSION['session_username']=$result2['id'];
    $_SESSION['session_k']=$result2['kiy'];
    echo "k";
}else{
    $_SESSION['session_username']=$result2['id'];
    $_SESSION['session_k']=$result2['kiy'];
    echo "p";
}
$db->close();
?>