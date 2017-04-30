/**
 * Created by maxsi on 25.04.2017.
 */

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
        var mount = $("#mount ").val();
        var day = $("#day").val();
        var fail = "";
        var re = /^\d[\d\(\)\ -]{4,14}\d$/;
        var fhone = re.test(te);
        var adres = $("#adres").val();
        var coords = $("#coords").val();
        var nzkomp = $("#nazkomp").val();
        var index = $("#index").val();
        if (name.length < 1){
            fail = "Введите имя  ";
            $("#eroor").text(fail);
            return false;
        }
        if (surname.length < 1){
            fail = "Введите фамилию ";
            $("#eroor").text(fail);
            return false;
        }
        if (email.split('@').length - 1 == 0 || email.split('.').length - 1 == 0){
            fail = "Введен не корректный email ";
            $("#eroor").text(fail);
            return false;
        }
        if (fhone); //alert("ok");
        else {
            fail = "Введен не корекный номер телефона ";
            $("#eroor").text(fail);
            return false;
        }
        if (pol =="0"){
            fail = "Укажите пол";
            $("#eroor").text(fail);
            return false;
        }
        if (yaer == "0"){
            fail = "Укажите год";
            $("#eroor").text(fail);
            return false;
        }
        if (mount == "0"){
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
        if  (index == ""){
            fail = "Укажите индексы";
            $("#eroor").text(fail);
            return false;
        }
        $.ajax({//  включаем функцию
            url: "php/obrregpost.php", // указываем оброботчик
            type: "POST",// метод передачи дааных
            data: ({name: name, surname: surname,email:email,fhone:te,pol:pol,year:yaer,mount:mount,day:day,password:password,ncomp:nzkomp,adres:adres,coords:coords,index:index}),// передача перемных
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


    function showOrHide(cb, cat) {
        cb = document.getElementById(cb);
        cat = document.getElementById(cat);
        if (cb.checked) cat.style.display = "block";
        else cat.style.display = "none";
    }
