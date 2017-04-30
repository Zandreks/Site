<?php
require "php/db.php";
session_start();
if(isset($_SESSION["session_username"])){
    header("Location: index.php");
exit();
}


unset($_SESSION['session_key']);
session_destroy();

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
    <link rel="stylesheet" href="css/modal.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/revical_login.js"> </script>
    <script src="js/modal.js"></script>
</head>
<body>


<div id="wrapper">
    <form name="login-form" class="login-form" action="" method="post">

        <div class="header">
            <h1>Авторизация</h1>
            <span class="po">Введите ваши регистрационные данные для входа на сайт. </span>
        </div>

        <div class="content">
            <input name="username" type="text" id="email" class="input username" placeholder="Email"/>
            <input name="password" type="password" id="password" class="input password" placeholder="Пароль"/>
            <p id="eroor"></p>

        </div>

        <div class="footer">
            <p class="po">
                Нет аккаунта ? <br>
                <a href="##modal-window" class="open-window">Зарегистрироваться </a><br>
                <a href="reset_password.php">Забыли пароль ??</a>
            </p>
            <input type="button" name="but" id="but" value="ВОЙТИ" class="button"/>
    </form>

    <div id="modal-window" class="modal-window">
        <div class="window-container animation">
            <a href="#close" title="Закрыть" class="close">X</a>
            <form name="radioo" method="post">
                <p class="lp">Зарегистрироваться как:</p><br>
                <div id="klientreg">
                    <p class="lp">Клиент</p><br>
                    <input type="radio" id="r1" name="rr" value="r1" checked/>
                    <label class="po" for="r1"><span></span><br>Выберите это пункт если вы клиент и в дальнейшим будите
                        искать товар или услугу
                    </label></div>
                <div id="postreg">
                    <p class="lp">Поставщик</p><br>
                    <input type="radio" id="r2" name="rr" value="r2"/>
                    <label class="po" for="r2"><span></span><br>Выберите этот пункт если вы поставщик/организация и в
                        дальнйшем будете поставлять/продовать товары и услуги для клиентов.</label></div>

                <input type="button" name="subreg" id="sub" value="Далее" class="button"/>

            </form>


        </div>
    </div>


</div>


<div class="gradient"></div>
</body>
</html>
