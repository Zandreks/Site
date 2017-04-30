$(document).ready(function () {
$("#okbut,#sendbut,#failbut,#shab,#shab").click(function () {
    if (key == "user"){
        $('.modal-window').fadeIn(function() {
            $('.window-container').addClass('visible');
        });
    }
});

});