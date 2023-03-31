$(document).ready( () => {
    $('.paymethodA').on('click', function() {
        $(this).toggleClass('select');
        $('.paymethodA').not($(this)).removeClass('select');
    });
}); 