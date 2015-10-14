$(document).ready(function(){
    
    showLogin();

});

function showLogin() {
    $('#showlogin').click(function(){
        
        $(this).css("text-decoration", "underline");
        $('#login_box').slideToggle();
    });
}