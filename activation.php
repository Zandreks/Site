<?php
require "php/db.php";
$msg='';
if(!empty($_GET['code']) && isset($_GET['code']))
{


    $code= $db->real_escape_string($_GET["code"]); // получаем значение code из строки браузера

    $c=$db->query("SELECT id FROM  users WHERE active='$code'");

    if($c->num_rows > 0)
    {

        $count=$db->query("SELECT id FROM users WHERE active='$code' and status='0'");

        if($count->num_rows == 1)
        {
            $db->query("UPDATE users SET status='1' WHERE active='$code'");
            $msg="Спасибо ваш аккаунт активирован ";


        }
        else
        {
            $msg ="Ваш аккаунт уже был актирвирован ";

        }

    }
    else
    {
        $msg ="Такой аккаунт не существует ";
    }

}
$db->close();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Проект</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/chosen.css">
    <link rel="stylesheet" href="css/stile.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>


<div id="wrap">
    <div class="content" id="conttext">
        <div id="activetext2">
            <?php echo $msg;?>

        </div>
    </div>


</div>
</body>
</html>
<script>
    function func() {
        window.location='userlogin.php';

    }
    setTimeout(func, 5000);

</script>