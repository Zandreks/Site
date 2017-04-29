<?php
session_start();
if (isset($_SESSION["session_username"])){
    $_SESSION["session_key"]=" ";
}
else{
    $_SESSION["session_key"]="user";
    echo "<script>";
    echo "var key =  '$_SESSION[session_key]';";
    echo "</script>";
}

if (!isset($_SESSION["session_username"]) and !isset($_SESSION["session_key"])){

    header("location:index.php");
}


if ($_SESSION["session_k"] == "k") {
    header("location:index.php");
}

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главное</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/stilecont.css">
    <link rel="stylesheet" href="css/modal.css">
    <script src="js/modal.js"></script>
    <script src="js/revical_user.js"></script>
</head>
<body>
<script>
    $(document).ready(function () {
        $("#sub").click(function () {
            var radio = $('input[name=rr]:checked').val();
            if (radio == "r1") {
                window.location = "regeditpokup.php";
            }
            else {
                window.location = "regeditps.php";
            }
        });

    });

</script>
<?php
echo "<script> ";
echo "var user = '0';";
echo "</script>";
if($_SESSION["session_key"] == "user") {
    echo "<script>";
    echo "user = '1';";
    echo "</script>";
}
?>
<div id="headwrap">
    <div>
        <h1>Вам интересен быстрый поиск товара или услуги?<br>Тогда вам сюда!!</h1>
        <br>
        <p>Наша сервис предоставит вам<br> самый быстрый поиск. <br><br>Буквально пару кликов вы можете оставить <br>свою
            заявку и вам предложат варианты для выбора</p>
    </div>
</div>
<header>
    <div id="header-content">
        <div id="logo">
            <img src="images/logo.png" alt="Logo">

        </div>
        <div id="perek">
            <div class="button4"><a href="index.php">Клиент</a></div>
            <div class="button4"><a href="index-contetntp.php">Поставщик</a></div>
        </div>
        <div id="kab">
            <div id="butex" class="button4"><a href="php/logout.php">Выход</a></div>
            <div id="butk" class="button4"><a href="#">Личный кабинет</a></div>

        </div>
    </div>
    <script>
        if (user =='1'){
            $("#kab").html("<div id='butex' class='button4'><a href='userlogin.php'>Вход</a></div><div id='butr' class='button4'><a href='##modal-window' class='open-window'>Зарегистрироваться </a></div>"

            )
        }
    </script>
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

                <input type="button" name="subreg" id="sub" value="Далее" class="but"/>

            </form>


        </div>
    </div>
</header>
<div id="wrap">
    <div id="leftbar">
        <div id="leftcont">

        </div>
        <div id="mesrn">
            <div id="headmesen">
                <h3>Ваш список сообщений</h3>
            </div>
            <div id="mesenger">
                <?php for ($i = 0; $i < 150; $i++) {
                    echo "<a href=\"javascript:void(0)\" class=\"idprd\"> <input type='checkbox' class='chekvobor'> Текст $i цена $i </a>";
                }
                ?>
            </div>
            <input type="button" class="buttonz" id="delmes" value="Удалить">

        </div>


    </div>

    <div id="contentp">
        <div id="headoptovar">
            <h3>Описание товара </h3>
        </div>
        <div id="optova">
            <h4 id="title">Заголовок</h4>
            <p id="texttovar">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi consequuntur fugit molestias
                repellat sint sunt totam voluptates? Beatae cumque doloribus facilis illo nulla optio perspiciatis
                quibusdam quos reiciendis repudiandae!

            </p>

            <div id="sena">
                <p>Стоимость </p>
                <br>
                <p>Фото</p>
            </div>
            <div style="clear: left"></div>

            <p id="im">
                <img src="/images/1.jpg" alt="" id="imgtovar">
                <img src="/images/1.jpg" alt="" id="imgtovar">
                <img src="/images/1.jpg" alt="" id="imgtovar">
                <img src="/images/1.jpg" alt="" id="imgtovar">

            </p>
        </div>
        <div id="inst">
            <p>Интрукция по использованию сервиса</p>
            <iframe width="100%" height="215" src="https://www.youtube.com/embed/mz3xJK0I9Dc" frameborder="0"
                    allowfullscreen></iframe>
        </div>
    </div>

    <div id="ritchbar">

        <div style="clear: left"></div>
        <div id="headluslu">
            <h3>Предложить свои услуги</h3>
        </div>
        <form>
            <p>Опишите пожалуйста что вы предлагаете </p>
            <textarea id="opis" rows="5" cols="45"></textarea>
            <div class="clean"></div>
            <div id="senaform">
                <label for="senabut"> Ваша цена</label>
                <input type="text" id="senabut">

            </div>

            <div id="chek">
                <label for="imgform">Фото для примера</label><br>
                <input type="file" id="imgform"><br>
                <label for="dostav">С доставкой</label><br>
                <input type="checkbox" id="dostav"><br>
                <label for="price">С выездом</label><br>
                <input type="checkbox" id="price">
            </div>

            <input type="button" class="buttonz" value="Отправить">
            <input type="button" class="buttonz" id="shab" value="Сохранить в шаблон">
        </form>
        <div style="clear: left"></div>
        <div id="shablon">
            <div id="headshab">
                <h3>Ваши шаблоны</h3>
            </div>

            <div id="spisshab">
                <?php for ($i = 0; $i < 50; $i++) {
                    echo "<a href=\"javascript:void(0)\" class=\"idprd\"> <input type='checkbox' class='chekvobor'> Текст $i цена $i </a>";
                }
                ?>
            </div>
            <input type="button" class="buttonz" id="delshab" value="Удалить">

        </div>


    </div>
</div>
<footer>
    <div id="footercontent">
        <div id="copy">
            &copy; Все права защищены <?php echo date("Y"); ?>
        </div>
        <div id="info">
            Сайт разработан <a href="https://vk.com/id120725406">Web разработчиком Максимом</a>
        </div>
    </div>
</footer>
</body>
</html>

