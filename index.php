<?php
session_start();

if (isset($_SESSION["session_username"])){
    $_SESSION["session_key"]=" ";
}else {
    $_SESSION["session_key"]="user";
    $_SESSION["session_k"]="";
    echo "<script>";
    echo "var key =  '$_SESSION[session_key]';";
echo "</script>";

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
    <script>
    var kyi = "0";
</script>
    <script src="js/revical_user.js"></script>
</head>
<body>
<script>
    $(document).ready(function () {
        $(".idprd").click(function () {
            var text_elemnt= $(this).text();
            $("#opis").text(text_elemnt)
        });

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
<?php
if($_SESSION["session_k"]=="p" or $_SESSION["session_key"] == "user"){
    echo " <div id=\"perek\">
            <div class=\"button4\"><a href=\"index.php\">Клиент</a></div>
            <div class=\"button4\"><a href=\"index-contetntp.php\">Поставщик</a></div>
        </div>";

}
echo "<script> ";
echo "kyi = '1';";
echo "var useer='0';";
echo "</script>";
if($_SESSION["session_key"]=="user"){
    echo "<script>";
    echo "useer = '1';";
    echo "</script>";
}
?>

        <div id="kab">
            <div id="butex" class="button4"><a href="php/logout.php">Выход</a></div>
            <div id="butk" class="button4"><a href="#">Личный кабинет</a></div>

        </div>
        <script>
             if (kyi =='1'){
                $("#kab").css({
                    float: "right",
                    marginRight:"20px"
                });
            }
            if (useer =='1'){
                 $("#kab").html("<div id='butex' class='button4'><a href='userlogin.php'>Вход</a></div><div id='butr' class='button4'><a href='##modal-window' class='open-window'>Зарегистрироваться </a></div>"
                 );
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
    </div>
</header>
<div id="wrap">
    <div id="leftbar">
        <div id="leftcont">
            <div id="headleftbar">
                <h3>Поиск услуг</h3>
            </div>
            <form>
                <p>Выберите услугу</p>
                <select id="search">
                    <option disabled selected value="1"> Выбирите товар или услугу</option>
                    <optgroup label="Детский мир">
                        <option>Детская одежда</option>
                        <option>Детская обувь</option>
                        <option>Детские коляски</option>
                        <option>Детские автокресла</option>
                        <option>Детская мебель</option>
                        <option>Детский транспорт</option>
                        <option>Товары для кормления</option>
                        <option>Товары для школьников</option>
                        <option>Прочие детские товары</option>
                    </optgroup>
                    <optgroup label="Недвижимость">
                        <option>Квартиры</option>
                        <option>Дома</option>
                        <option>Комнаты</option>
                        <option>Коммерческие помещения</option>
                        <option>Зарубежная недвижимость</option>
                        <option>Гостиницы</option>

                    </optgroup>
                    <optgroup label="Транспорт">
                        <option>Легковые автомобили</option>
                        <option>Автозапчасти и аксессуары/автомагазины</option>
                        <option>Шины, диски и колеса</option>
                        <option>Мототехника</option>
                        <option>Мотозапчасти и аксессуары</option>
                        <option>Автосервисы/СТО/Установка оборудования для авто</option>
                        <option>Аренда автотранспорта/ Такси и перевозки</option>
                        <option>Шиномонтаж</option>
                    </optgroup>
                    <optgroup label="Работа">
                        <option>Розничная торговля/торговля</option>
                        <option>Транспорт/логистика</option>
                        <option>Строительство</option>
                        <option>Бары/рестораны</option>

                        <option>Юриспруденция</option>
                        <option>Бухгалтерия</option>
                        <option>Охрана/безопасность</option>
                        <option>Домашний персонал</option>
                        <option>Красота/фитнес/спорт</option>
                        <option>Туризм/отдых/развлечения</option>
                        <option>Образование</option>
                        <option>Культура/искусство</option>
                        <option>Медицина/фармация</option>
                        <option>ИТ/телеком/компьютеры</option>
                        <option>Недвижимость</option>
                        <option>Маркетинг/реклама/дизайн</option>
                        <option>Производство/энергетика</option>
                        <option>Секретариат</option>
                        <option>Частичная занятость</option>
                        <option>Начало карьеры/Студенты</option>
                        <option>Сервис и быт</option>
                        <option>Другие сферы занятий</option>

                    </optgroup>
                    <optgroup label="Животные">
                        <option>Собаки</option>
                        <option>Кошки</option>
                        <option>Аквариумные рыбки</option>
                        <option>Птицы</option>
                        <option>Грызуны</option>
                        <option>Рептилии</option>
                        <option>Сельхоз животные</option>
                        <option>Товары для животных</option>
                        <option>Услуги для животных</option>
                        <option>Бюро находок животных</option>
                        <option>Другие животные</option>

                    </optgroup>
                    <optgroup label="Дом и сад">
                        <option>Канцтовары/расходные материалы</option>
                        <option>Мебель</option>
                        <option>Предметы интерьера</option>
                        <option>Строительство/ремонт/строиматериалы</option>
                        <option>Инструменты</option>
                        <option>Комнатные растения</option>
                        <option>Посуда/кухонная утварь</option>
                        <option>Садовый инвентарь</option>
                        <option>Сад/огород</option>
                        <option>Хозяйственный инвентарь/бытовая химия</option>
                        <option>Прочие товары для дома</option>
                    </optgroup>
                    <optgroup label="Электроника">
                        <option>Телефоны и аксессуары</option>
                        <option>Компьютеры и комплектующие</option>
                        <option>Фототехника</option>
                        <option>Тв/видеотехника</option>

                        <option>Аудиотехника</option>
                        <option>Игры и игровые приставки</option>
                        <option>Jacksonville Jaguars</option>
                        <option>Планшеты/эл. книги и аксессуары</option>
                        <option>Ноутбуки и аксессуары</option>
                        <option>Техника для дома/бытовая техника</option>
                        <option>Техника для кухни</option>
                        <option>Климатическое оборудование</option>
                        <option>Индивидуальный уход</option>
                        <option>Аксессуары и комплектующие</option>
                        <option>Прочая электроника</option>
                        <option>Ремонт и обслуживание техники</option>
                    </optgroup>
                    <optgroup label="Бизнес и услуги">
                        <option>Строительство/ремонт</option>
                        <option>Финансовые услуги/партнерство</option>
                        <option>Перевозки/аренда транспорта</option>
                        <option>Реклама/полиграфия/маркетинг/интернет</option>
                        <option>Няни/сиделки</option>
                        <option>Сырье/материалы</option>
                        <option>Красота/здоровье</option>
                        <option>Оборудование</option>
                        <option>Образование/тренинги/обучение/курсы</option>
                        <option>Услуги для животных</option>
                        <option>Продажа бизнеса</option>
                        <option>Развлечения/Искусство/фото/видео</option>
                        <option>Туризм/иммиграция</option>
                        <option>Услуги переводчиков/набор текста</option>
                        <option>Авто/мото услуги</option>
                        <option>Ремонт и обслуживание техники</option>
                        <option>Сетевой маркетинг</option>
                        <option>Юридические услуги/ Нотариусы</option>
                        <option>Прокат товаров</option>
                        <option>Прочие услуги</option>
                        <option>Консалтинг</option>
                        <option>Дизайн</option>
                        <option>Клининг/уборка в домах</option>
                        <option>Праздники/той/тамада/музыканты/фото/видео услуги</option>
                    </optgroup>
                    <optgroup label="Мода и стиль">
                        <option>Одежда/обувь</option>
                        <option>Kansas City Chiefs</option>
                        <option>Для свадьбы</option>
                        <option>Мода разное</option>
                        <option>Наручные часы</option>
                        <option>Аксессуары</option>
                        <option>Подарки</option>
                        <option>Красота/здоровье</option>
                        <option>Ювелирные изделия</option>
                        <option>Салоны красоты</option>
                        <option>Парикмахерская</option>
                    </optgroup>
                    <optgroup label="Магазины, развлекательные центры, отдых, спорт, Медицина">

                        <option>Антиквариат/коллекции</option>
                        <option>Музыкальные инструменты</option>
                        <option>Спорт/отдых/ фитнес клубы</option>
                        <option>Книги/журналы</option>

                        <option>Другое</option>
                        <option>CD/DVD/пластинки/кассеты</option>
                        <option>Билеты</option>
                        <option>Поиск попутчиков</option>
                        <option>Поиск групп/музыкантов</option>
                        <option>Рестораны</option>
                        <option>Активный отдых/База отдыха/лагеря</option>
                        <option>Бары</option>
                        <option>Караоке</option>
                        <option>Кафе</option>
                        <option>Культура/искусство/музеи</option>
                        <option>Сауны</option>
                        <option>Фастфуд</option>
                        <option>Аптеки</option>
                        <option>Клубы</option>
                        <option>Продукты питания/напитки/ Доставка еды</option>
                        <option>Одежда и обувь</option>
                        <option>Интернет магазин/заказ</option>
                        <option>Отдам даром/обмен</option>
                        <option>Медицина/стоматология/врачи</option>
                    </optgroup>
                </select><br>
                <p>Опишите пожалуйста что вы ищите</p>
                <textarea id="opis" rows="5" cols="45"></textarea>
                <div class="clean"></div>
                <div id="senaform">
                    <label for="senabut"> Ваша цена</label>
                    <input type="text" id="senabut">
                </div>

                <div id="chek">
                    <label for="imgform">Фото для примера</label><br>
                    <label for="dostav">С доставкой</label><br>
                    <input type="checkbox" id="dostav"><br>
                    <label for="price">С выездом</label><br>
                    <input type="checkbox" id="price">
                </div>

                <input type="button" class="buttonz" value="Оставить заявку">
                <input type="button" class="buttonz" id="shab" value="Сохранить в шаблон">

            </form>
        </div>
        <div id="shablon">
            <div id="headshab">
                <h3>Ваши шаблоны</h3>
            </div>

            <div id="spisshab">
                <?php for ($i = 0; $i < 50; $i++) {
                    echo "<a href=\"javascript:void(0)\" class= \"idprd\"> <input type='checkbox' class='chekvobor'> Текст $i цена $i </a>";
                }
                ?>
            </div>
            <div style="clear: right"></div>
            <input type="button" class="buttonz" id="delshab" value="Удалить">

        </div>
        <div style="clear: right"></div>

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
            <input type="button" class="buttonz" value="Удалить">

        </div>


    </div>

    <div id="content">
        <div id="headcontent">
            <h3>Ваш список предложений </h3>
        </div>
        <div id="spisok">
            <?php for ($i = 0; $i < 150; $i++) {
                echo "<a href=\"javascript:void(0)\" class=\"idprd\">Вариант $i</a>";
            }
            ?>
        </div>


        <input type="button" class="buttonz" value="Очистить">


    </div>

    <div id="ritchbar">
        <div id="headpostav">
            <h3>Поставщик</h3>
        </div>
        <div id="postav">

            <img src="/images/2.png" id="logo2" alt="">

            <h4 id="title">Название компании</h4>
            <p id="texttovar">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi consequuntur fugit molestias
                repellat sint sunt totam voluptates? Beatae cumque doloribus facilis illo nulla optio perspiciatis
                quibusdam quos reiciendis repudiandae!

            </p>
            <div id></div>
        </div>
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
            </div>
            <div style="clear: left"></div>

            <p id="im">
                <img src="/images/1.jpg" alt="" id="imgtovar">
                <img src="/images/1.jpg" alt="" id="imgtovar">
                <img src="/images/1.jpg" alt="" id="imgtovar">
                <img src="/images/1.jpg" alt="" id="imgtovar">

            </p>
        </div>
        <div style="clear: left"></div>

        <div id="buts">
            <input type="button" class="button" id="okbut" value="Принять">
            <input type="button" class="button" id="sendbut" value="Написать собщение">
            <input type="button" class="button" id="failbut" value="Отказаться">
        </div>
        <div id="inst">
            <p>Интрукция по использованию сервиса</p>
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/mz3xJK0I9Dc" frameborder="0"
                    allowfullscreen></iframe>
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

