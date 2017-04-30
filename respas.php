<?php
require "php/db.php";
$msg = '';
if (!empty($_GET['code']) && isset($_GET['code'])) {


    $code = $db->real_escape_string($_GET["code"]); // получаем значение code из строки браузера

    $c = $db->query("SELECT id FROM  users WHERE active='$code'");
    $result = $c->fetch_array();
    $id = $result["id"];
    echo "<script>";
    echo "var id = $id;";
    echo "</script>";
    if ($c->num_rows > 0) {

        $count = $db->query("SELECT id FROM users WHERE active='$code'");

        if ($count->num_rows == 1) {
            $db->query("UPDATE users SET active='0' WHERE active='$code'");
            $msg = "<div id=\"wrapper\">
    <form name=\"login-form\" class=\"login-form\" action=\"\" method=\"post\">

        <div class=\"header\">
            <h1>Восстановление пароля</h1>
            <span id='te' class=\"po\">Введите ваши регистрационные данные для востновление пароля  </span>
        </div>

        <div class=\"content\">
            <label for='password'>Введите пароль </label><br>
            <input name=\"password\" type=\"password\" id=\"password\" class=\"input username\" /><br>
            <label for='password2'>Повторте пароль </label><br>
            <input name=\"password2\" type=\"password\" id=\"password2\" class=\"input username\" />
            <p id=\"eroor\"></p>

        </div>
 <div class=\"content2\" id=\"conttext2\">
            <div id=\"activetext\">
              <p class=\"po\"> Спасибо ваш пароль был успешно изменен </p>
            </div>
        </div>
        <div class=\"footer\">
           <input type=\"button\" name=\"but\" id=\"but\" value=\"Изменить\" class=\"button\"/>
    </form>
</div>
</div>";
        } else {
            $msg = "<div id=\"wrap\">
    <div class=\"content\" id=\"conttext\">
        <div id=\"activetext2\">
            Ссылка больше не доступна

        </div>
    </div>
";

        }

    } else {
        $msg = "<div id=\"wrap\">
    <div class=\"content\" id=\"conttext\">
        <div id=\"activetext2\">
            Ссылка больше не доступна

        </div>
    </div> ";
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
<?php echo $msg; ?>


<script>
    $(".content2").hide()
    $("#but").click(function () {
        var password = $("#password").val();
        var password2 = $("#password2").val();

        if (password.length < 6) {
            fail = "Пароль должен быть больше 6 символов";
            $("#eroor").text(fail);
            return false;
        }
        if (password != password2) {
            fail = "Пароль не совпадает ";
            $("#eroor").text(fail);
            return false;
        }

        $.ajax({//  включаем функцию
            url: "php/reset_pass.php", // указываем оброботчик
            type: "POST",// метод передачи дааных
            data: ({password: password, id: id}),// передача перемных
            dataType: "html",// тип передачи
            beforeSend: function () {
                $("#eroor").text("Идет обработка данных");
            },// Функция выполняеться при ожжидание данныхх
            success: function (data) {
                if (data =="1"){
                    $(".content").hide();
                    $("#but").hide();
                    $("#te").hide();
                    $(".content2").show();
                    function func() {
                        window.location='userlogin.php';

                    }
                    setTimeout(func, 5000);
                }
                $("#eroor").text(data);
            }
        });
    });
</script>
</div>
</body>
</html>
