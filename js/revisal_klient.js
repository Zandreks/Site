$(document).ready(function () {
    $("#but").bind("click", function () {
        $("#eroor").text("");
        var name = $("#name").val();
        var surname = $("#surname").val();
        var email = $("#email").val();
        var te = $("#tel").val();
        var password = $("#password").val();
        var pol = $("#pol").val();
        var yaer = $("#yaer").val();
        var mount = $("#moun ").val();
        var day = $("#day").val();
        var fail = "";
        var re = /^\d[\d\(\)\ -]{4,14}\d$/;
        var fhone = re.test(te);

        if (name.length < 1){
            fail = "Введите имя ";
            $("#eroor").text(fail);
            return false;
        }
        if (surname.length < 1){
            fail = "Введите фамилию";
            $("#eroor").text(fail);
            return false;
        }
        if (email.split('@').length - 1 == 0 || email.split('.').length - 1 == 0){
            fail = "Введен не корректный email ";
            $("#eroor").text(fail);
            return false;
        }
        if (fhone);
        else {
            fail = "Введен не корекный номер телефона ";
            $("#eroor").text(fail);
            return false;
        }
        if (pol =="1"){
            fail = "Укажите пол";
            $("#eroor").text(fail);
            return false;
        }
        if (yaer == "1"){
            fail = "Укажите год";
            $("#eroor").text(fail);
            return false;
        }
        if (mount == "1"){
            fail = "Укажите Месяц";
            $("#eroor").text(fail);
            return false;
        }
        if (day == "0"){
            fail = "Укажите день";
            $("#eroor").text(fail);
            return false;
        }
        if (password.length <6 ){
            fail = "Пароль должен быть больше 6 символов"
            $("#eroor").text(fail);
            return false;
        }
        if (password != $("#password2").val()) {
            fail = "Пароли не совпадают ";
            $("#eroor").text(fail);
            return false;
        }
        $.ajax({//  включаем функцию
            url: "php/obregkli.php", // указываем оброботчик
            type: "POST",// метод передачи дааных
            data: ({name: name, surname: surname,email:email,fhone:te,pol:pol,yaer:yaer,mount:mount,day:day,password:password}),// передача перемных
            dataType: "html",// тип передачи
            beforeSend: function () {
                $("#eroor").text("Идет обработка данных");
            },// Функция выполняеться при ожжидание данныхх
            success: function (data) {
                if (data == "ok"){
                    window.location='activtext.html';
                }
                else {
                    $("#eroor").text(data);
                }
            }
        });
    });
});