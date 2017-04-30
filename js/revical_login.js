/**
 * Created by Admin on 26.04.2017.
 */
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

var fail ="";
var seve = "";
$(document).ready(function () {
    $("#but").click(function () {
        var email = $("#email").val();
        var password = $("#password").val();
        if (email.split('@').length - 1 == 0 || email.split('.').length - 1 == 0){
            fail = "Введен не корректный email ";
            $("#eroor").text(fail);
            return false;
        }
        if (password.length< 1){
            fail = "Введите пароль";
            $("#eroor").text(fail);
            return false;
        }
        if($('#save').prop('checked')) {
            seve = 1
        }
        $.ajax({//  включаем функцию
            url: "php/login.php", // указываем оброботчик
            type: "POST",// метод передачи дааных
            data: ({email:email,password:password,save:seve}),// передача перемных
            dataType: "html",// тип передачи
            beforeSend: function () {
                $("#eroor").text("Идет обработка данных");
            },// Функция выполняеться при ожжидание данныхх
            success: function (data) {
                if (data=="k"){
                    $("#eroor").hide();
                    window.location='index.php';
                }else if (data =="p"){
                    $("#eroor").hide();
                    window.location='index-contetntp.php';
                }
                $("#eroor").text(data);
            }
        });
    });

});