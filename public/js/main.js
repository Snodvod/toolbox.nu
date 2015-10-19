$(document).ready(function () {

    showLogin();

});

function showLogin() {
    $('#showlogin').click(function () {

        $('#login_box').show();
        $('#showlogin').addClass("highlight").addClass("active");

        if ($('.nav_item').hasClass('active')) {
            $('.nav_item').removeClass('active');

            $('#login_box').show();
            $('#showlogin').addClass("highlight").addClass("active");
        } else {
            $('#register').addClass('active');

            $('#login_box').hide();
            $('#showlogin').removeClass("highlight").removeClass("active");
        }
    });
}