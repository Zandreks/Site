$(document).ready(function () {
   $("#but").click(function () {
       var email = $("#email").val();
       if (email.split('@').length - 1 == 0 || email.split('.').length - 1 == 0){
           fail = "Введен не корректный email ";
           $("#eroor").text(fail);
           return false;
       }
       $.ajax({//  включаем функцию
           url: "php/revical_pass.php", // указываем оброботчик
           type: "POST",// метод передачи дааных
           data: ({email:email}),// передача перемных
           dataType: "html",// тип передачи
           beforeSend: function () {
               $("#eroor").text("Идет обработка данных");
           },// Функция выполняеться при ожжидание данныхх
           success: function (data) {
                if (data == "1"){
                    $(".content").hide();
                    $("#te").hide();
                    $("#but").hide();
                    $(".content2").show();
                }

               $("#eroor").text(data);
           }
       });
   });

});