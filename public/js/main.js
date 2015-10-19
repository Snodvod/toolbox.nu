$(document).ready(function () {

    showLogin();

});

function showLogin() {
    $('#showlogin').click(function () {
        
        if (!$('.nav_item').hasClass('active')) {
            $('#login_box').toggle();
            $('#showlogin').toggleClass("highlight").toggleClass("active");
        } else if($('.nav_item').hasClass('active')) {
            $('.nav_item').removeClass('active');

            $('#login_box').show();
            $('#showlogin').addClass("highlight").addClass("active");
        } else {
            $('.nav_item').addClass('active');

            $('#login_box').hide();
            $('#showlogin').removeClass("highlight").removeClass("active");
        }
    });
}