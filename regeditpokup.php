<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title  >Проект</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/chosen.css">
    <link rel="stylesheet" href="css/stile.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/revisal_klient.js"> </script>

</head>
<body>

<div id="wrapper2">
    <div class="user-icon"></div>
    <div class="pass-icon"></div>

    <form name="login-form" class="login-form" action="" method="post">

        <div class="header">
            <h1>Регистрация клиента</h1>
            <span class="po">Введите ваши данные</span><br>
            <span class="po">Обизательные поля </span><span class="z">*</span>
        </div>

        <div class="content">
            <p class="po">Имя <span class="z">*</span></p>
            <input name="name" id="name" type="text" class="input username" required value=""/>
            <p class="po">Фамилия <span class="z">*</span></p>
            <input name="surname" id="surname" type="text" class="input password" required value=""/>

            <p class="po">Email <span class="z">*</span></p>
            <input name="email" type="text" id="email" class="input username" required value=""/>

            <p class="po">Телефон <span class="z">*</span></p>
            <input name="phone" type="tel" id="tel" class="input password" required value=""/>

            <p class="po">Ваш пол <span class="z">*</span></p>
            <select name="pol" class="pol" id="pol" required>
                <option value="1">Пол</option>
                <option value="Муж">Муж</option>
                <option value="Жен">Жен</option>
            </select>
            <p class="po">Укажите вашу дату <span class="z">*</span></p>
            <select name="datayear" class="inputdata" id="yaer" required>
                <option value="1">Год</option>
                <?php
                for ($i = 1950; $i <= date("Y"); $i++) {
                    echo "<option value='$i'>$i</option>";
                }
                ?>
            </select>
            <select name="datamount" class="inputdata" id="moun" required>
                <option value="1">Месяц</option>
                <option value="Декабрь">Декабрь</option>
                <option value="Январь">Январь</option>
                <option value="Февраль">Февраль</option>
                <option value="Март">Март</option>
                <option value="Апрель">Апрель</option>
                <option value="Май">Май</option>
                <option value="Июнь">Июнь</option>
                <option value="Июль">Июль</option>
                <option value="Август">Август</option>
                <option value="Сентябрь">Сентябрь</option>
                <option value="Октябрь">Октябрь</option>
                <option value="Ноябрь">Ноябрь</option>

            </select>
            <select name="dataday" class="inputdata" id="day" required>
                <option value="0">День</option>
                <?php
                for ($i = 1; $i <= 31; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
                ?>
            </select>
            <p class="po">Пароль <span class="z">*</span></p>
            <input name="password" id="password" type="password" class="input password" required/>
            <p class="po">Повторите пароль <span class="z">*</span></p>
            <input name="password2" id="password2" type="password" class="input password" required/>
            <p id="eroor"></p>
        </div>


        <div class="footer">

            <input type="button" name="but" id="but" value="Зарегистрироваться" class="button"/>

        </div>

    </form>
</div>
<div class="gradient"></div>
</body>
</html>
