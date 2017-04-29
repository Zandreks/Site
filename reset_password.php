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
    <script src="js/reset_password.js"></script>
</head>
<body>


<div id="wrapper">
    <form name="login-form" class="login-form" action="" method="post">

        <div class="header">
            <h1>Восстановление пароля</h1>
            <span id="te" class="po">Введите ваши регистрационные данные для востонавление пароля  </span>
        </div>

        <div class="content">
            <input name="username" type="text" id="email" class="input username" placeholder="Email"/>
            <p id="eroor"></p>

        </div>
        <div class="content2" id="conttext2">
            <div id="activetext">
                <p class="po"> Теперь вам надо зайти на почту и перейти по ссылке в письме </p>
            </div>
        </div>
        <script>
            $(".content2").hide();

        </script>
        <div class="footer">
           <input type="button" name="but" id="but" value="ВОЙТИ" class="button"/>
    </form>

</div>
</body>
</html>
