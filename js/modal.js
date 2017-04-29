/**
 * Created by Admin on 26.04.2017.
 */
$(document).ready(function() {
    $('.open-window').click(function() {
        $('.modal-window').fadeIn(function() {
            $('.window-container').addClass('visible');
        });
    });
    $('.close, .modal-window').click(function() {
        $('.modal-window').fadeOut().end().find('.window-container').removeClass('visible');
    });
    $('.window-container').click(function(event) {
        event.stopPropagation()
    });
});