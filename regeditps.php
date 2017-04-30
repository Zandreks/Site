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
    <script src="js/revical_postav.js"></script>
</head>
<body>


<div id="wrapper2">
    <form name="login-form" class="login-form" action="" method="post">

        <div class="header">
            <h1>Регистрация как постовщик</h1>
            <span class="po">Введите ваши данные</span><br>
            <span class="po">Обизательные поля </span><span class="z">*</span>
        </div>

        <div class="content">
            <p class="po">Имя <span class="z">*</span></p>
            <input name="name" type="text" class="input username" id="name" required value=""/>

            <p class="po">Фамилия <span class="z">*</span></p>
            <input name="surname" type="text" class="input password" id="surname" required value=""/>

            <p class="po">Email <span class="z">*</span></p>
            <input name="email" type="text" class="input username" id="email" required value=""/>

            <p class="po">Телефон <span class="z">*</span></p>
            <input name="phone" type="tel" class="input password" id="tel" required value=""/>

            <p class="po">Ваш пол <span class="z">*</span></p>
            <select name="pol" id="pol" class="inputdata" required>
                <option value="0">Пол</option>
                <option value="Муж">Муж</option>
                <option value="Жен">Жен</option>
            </select>
            <p class="po">Название компании</p>
            <input name="namecomp" required type="text" class="input password" id="nazkomp" value=""/>

            <p class="po">Уакажите адрес компании</p>
            <input name="adres" required type="text" class="input password" id="adres" value=""/>

            <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
            <br>
            <input type='checkbox' id='cb1' onchange='showOrHide("cb1", "map");'/>
            <spam class="po">Показать карту</spam>
            <br/>

            <div id="map" style="width: 100%; display: none; height: 400px"></div>

            <p class="po">Укажите вашу дату <span class="z">*</span></p>
            <select name="datayear" class="inputdata" id="yaer" required>
                <option value="0">Год</option>
                <?php
                for ($i = 1950; $i <= date("Y"); $i++) {
                    echo "<option value='$i'>$i</option>";
                }
                ?>
            </select>
            <select name="datamount" class="inputdata" id="mount" required>
                <option value="0">Месяц</option>
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
            <input name="password" type="password" id="password" class="input password" required/>
            <p class="po">Повторите пароль <span class="z">*</span> </p>
            <input name="password2" type="password" id="password2" class="input password" required/>
            <p class="po">Выбирите категории тавара <span class="z">*</span></p>

            <select data-placeholder="Выбирите индексы" id="index" style="width:350px;" class="chosen-select" multiple tabindex="6"
                    name="select[]">


                <option value=""></option>
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
            </select>

            <script src="js/chosen.jquery.js" type="text/javascript"></script>
            <script>
                var config = {
                    '.chosen-select': {},
                    '.chosen-select-deselect': {allow_single_deselect: true},
                    '.chosen-select-no-single': {disable_search_threshold: 10},
                    '.chosen-select-no-results': {no_results_text: 'Oops, nothing found!'},
                    '.chosen-select-width': {width: "95%"}
                }
                for (var selector in config) {
                    $(selector).chosen(config[selector]);
                }
            </script>
            <textarea id="coords"  name="coords" ></textarea>
            <p class="po" id="eroor"></p>
        </div>

        <div class="footer">
            <input type="button" name="button" id="but" value="Зарегистрироваться" class="button"/>

        </div>

    </form>
</div>
<div class="gradient"></div>

<?php
$a="47.13229306846947,51.88105150244137 47.12362349045893,51.901994190429654"; // Получаем данные из бд
$arr = explode(" ", $a);

echo "<script>";

echo "var arr = []; ";
foreach ($arr as $val){
    echo "arr.push('$val'); ";
}

echo "</script>";

?>
<script src="js/yandexmaps.js"></script>
</body>
</html>
